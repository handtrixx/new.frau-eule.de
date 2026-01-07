# WordPress Theme Auto-Deployment Setup

This WordPress installation is configured to automatically update the theme when you push commits to your git repository.

## How It Works

1. **Webhook Listener**: `data/webhook.php` receives POST requests from GitHub/GitLab
2. **Deployment Script**: `deployment/deploy.sh` pulls the latest changes and updates the theme
3. **Docker Integration**: The container has git installed and proper permissions

## Setup Instructions

### 1. Configure Environment Variables

Edit your `.env` file and set:

```bash
# Your theme repository URL
GIT_REPO_URL=https://github.com/yourusername/your-theme-repo.git

# Branch to deploy from
GIT_BRANCH=main

# Webhook secret (generate with: openssl rand -hex 32)
WEBHOOK_SECRET=your-generated-secret-here
```

For private repositories, use a personal access token:
```bash
GIT_REPO_URL=https://YOUR_TOKEN@github.com/yourusername/your-theme-repo.git
```

### 2. Rebuild and Start Docker Container

```bash
docker-compose down
docker-compose build
docker-compose up -d
```

### 3. Make Deployment Script Executable

```bash
chmod +x deployment/deploy.sh
```

### 4. Test the Deployment Script

```bash
docker exec fraueule-app bash /var/www/deployment/deploy.sh
```

### 5. Configure Webhook in Your Repository

#### For GitHub:

1. Go to your repository → Settings → Webhooks → Add webhook
2. **Payload URL**: `https://your-domain.com/wp-content/webhook.php`
3. **Content type**: `application/json`
4. **Secret**: Use the same value as `WEBHOOK_SECRET` in your `.env`
5. **Events**: Select "Just the push event"
6. **Active**: Check this box

#### For GitLab:

1. Go to your repository → Settings → Webhooks
2. **URL**: `https://your-domain.com/wp-content/webhook.php`
3. **Secret Token**: Use the same value as `WEBHOOK_SECRET` in your `.env`
4. **Trigger**: Check "Push events"
5. **Enable SSL verification**: Check this box

### 6. Test the Webhook

Push a commit to your repository and check:

```bash
# View webhook logs
docker exec fraueule-app cat /var/www/deployment/webhook.log

# View deployment logs
docker exec fraueule-app cat /var/www/deployment/deploy.log
```

## Security Considerations

1. **Strong Secret**: Always use a strong, random webhook secret
2. **HTTPS**: Ensure your webhook endpoint uses HTTPS
3. **Token Security**: For private repos, use environment variables for tokens
4. **Permissions**: The deployment script sets proper file permissions

## Troubleshooting

### Webhook not triggering:
- Check webhook logs in your git provider
- Verify the webhook URL is accessible
- Confirm the secret token matches

### Deployment fails:
- Check deployment logs: `docker exec fraueule-app cat /var/www/deployment/deploy.log`
- Verify git credentials for private repos
- Ensure proper permissions on theme directory

### Permission issues:
```bash
docker exec fraueule-app chown -R www-data:www-data /var/www/html/wp-content/themes/fraueule
```

## Manual Deployment

You can manually trigger a deployment:

```bash
docker exec fraueule-app bash /var/www/deployment/deploy.sh
```

## File Structure

```
.
├── data/
│   └── webhook.php          # Webhook listener
├── deployment/
│   ├── deploy.sh            # Deployment script
│   ├── webhook.log          # Webhook activity log
│   └── deploy.log           # Deployment activity log
├── theme/                   # Your WordPress theme (auto-updated)
├── Dockerfile               # Docker image with git support
└── compose.yml              # Docker Compose configuration
```
