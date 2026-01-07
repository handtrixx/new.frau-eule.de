#!/bin/bash

# WordPress Theme Auto-Deployment Script
# This script pulls the latest changes from your git repository
# and updates the WordPress theme

# Configuration
THEME_DIR="/var/www/html/wp-content/themes/fraueule"
REPO_URL="${GIT_REPO_URL:-}"
BRANCH="${GIT_BRANCH:-main}"
THEME_SUBFOLDER="${GIT_THEME_SUBFOLDER:-}"
TEMP_REPO_DIR="/var/www/deployment/temp-repo"
LOG_FILE="/var/www/deployment/deploy.log"

# Function to log messages
log_message() {
    echo "[$(date +'%Y-%m-%d %H:%M:%S')] $1" | tee -a "$LOG_FILE"
}

log_message "=== Starting deployment ==="

# Check if REPO_URL is set
if [ -z "$REPO_URL" ]; then
    log_message "ERROR: GIT_REPO_URL environment variable is not set"
    exit 1
fi

# Check if theme directory exists
if [ ! -d "$THEME_DIR" ]; then
    log_message "Theme directory does not exist, creating it..."
    mkdir -p "$THEME_DIR"
fi

# Decide deployment strategy based on whether theme is in a subfolder
if [ -n "$THEME_SUBFOLDER" ]; then
    log_message "Theme is in subfolder: $THEME_SUBFOLDER"
    log_message "Using temp repository clone method..."
    
    # Create temp directory
    mkdir -p "$TEMP_REPO_DIR"
    cd "$TEMP_REPO_DIR" || exit 1
    
    # Clone or update the repository in temp location
    if [ ! -d ".git" ]; then
        log_message "Cloning repository..."
        git clone --depth 1 --branch "$BRANCH" "$REPO_URL" . 2>&1 | tee -a "$LOG_FILE"
    else
        log_message "Fetching latest changes from $BRANCH..."
        git fetch origin "$BRANCH" 2>&1 | tee -a "$LOG_FILE"
        git reset --hard "origin/$BRANCH" 2>&1 | tee -a "$LOG_FILE"
        git clean -fd 2>&1 | tee -a "$LOG_FILE"
    fi
    
    # Check if fetch/clone was successful
    if [ $? -ne 0 ]; then
        log_message "ERROR: Failed to fetch from repository"
        exit 1
    fi
    
    # Check if the subfolder exists
    if [ ! -d "$THEME_SUBFOLDER" ]; then
        log_message "ERROR: Subfolder '$THEME_SUBFOLDER' not found in repository"
        exit 1
    fi
    
    # Sync the subfolder to theme directory (excluding .git)
    log_message "Syncing theme files from subfolder..."
    rsync -av --delete --exclude='.git' "$THEME_SUBFOLDER/" "$THEME_DIR/" 2>&1 | tee -a "$LOG_FILE"
    
    if [ $? -ne 0 ]; then
        log_message "ERROR: Failed to sync theme files"
        exit 1
    fi
    
    # Get commit info from temp repo
    cd "$TEMP_REPO_DIR" || exit 1
    
else
    log_message "Theme files are at repository root"
    log_message "Using direct git clone method..."
    
    # Change to theme directory
    cd "$THEME_DIR" || exit 1
    
    # Check if this is already a git repository
    if [ ! -d ".git" ]; then
        log_message "Initializing git repository..."
        git init
        git remote add origin "$REPO_URL"
        log_message "Repository initialized"
    fi
    
    # Fetch the latest changes
    log_message "Fetching latest changes from $BRANCH..."
    git fetch origin "$BRANCH" 2>&1 | tee -a "$LOG_FILE"
    
    # Check if fetch was successful
    if [ $? -ne 0 ]; then
        log_message "ERROR: Failed to fetch from repository"
        exit 1
    fi
    
    # Reset to the latest version (force update)
    log_message "Updating to latest version..."
    git reset --hard "origin/$BRANCH" 2>&1 | tee -a "$LOG_FILE"
    
    if [ $? -ne 0 ]; then
        log_message "ERROR: Failed to update theme"
        exit 1
    fi
    
    # Clean up any untracked files
    git clean -fd 2>&1 | tee -a "$LOG_FILE"
fi

# Get the latest commit info
COMMIT_HASH=$(git rev-parse --short HEAD)
COMMIT_MESSAGE=$(git log -1 --pretty=%B)

log_message "Successfully deployed commit: $COMMIT_HASH"
log_message "Commit message: $COMMIT_MESSAGE"

# Set proper permissions using container user/group
log_message "Setting permissions..."
USER_ID="${PUID:-1000}"
GROUP_ID="${PGID:-1000}"
chown -R "$USER_ID:$GROUP_ID" "$THEME_DIR"
chmod -R 755 "$THEME_DIR"

log_message "=== Deployment completed successfully ==="

exit 0
