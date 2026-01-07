# Quick Setup Script for WordPress Theme Auto-Deployment

echo "=== WordPress Theme Auto-Deployment Setup ==="
echo ""

# Check if .env exists
if [ ! -f .env ]; then
    echo "Creating .env file from .env.example..."
    cp .env.example .env
    echo "⚠️  Please edit .env and configure:"
    echo "   - GIT_REPO_URL (your theme repository)"
    echo "   - WEBHOOK_SECRET (generate with: openssl rand -hex 32)"
    echo "   - Database passwords"
    echo ""
fi

# Generate webhook secret if not already set
if ! grep -q "WEBHOOK_SECRET=your-secret-token" .env 2>/dev/null; then
    echo "✓ Webhook secret already configured"
else
    SECRET=$(openssl rand -hex 32)
    echo "Generated webhook secret: $SECRET"
    echo "Add this to your .env file as WEBHOOK_SECRET"
    echo ""
fi

# Make deployment script executable
echo "Making deployment script executable..."
chmod +x deployment/deploy.sh
echo "✓ Deployment script is executable"
echo ""

# Rebuild Docker container
echo "Would you like to rebuild the Docker containers now? (y/n)"
read -r response
if [ "$response" = "y" ]; then
    echo "Rebuilding containers..."
    docker-compose down
    docker-compose build
    docker-compose up -d
    echo "✓ Containers rebuilt and started"
    echo ""
fi

echo "=== Setup Complete ==="
echo ""
echo "Next steps:"
echo "1. Edit .env with your repository URL and secrets"
echo "2. Configure webhook in your git repository:"
echo "   URL: https://your-domain.com/wp-content/webhook.php"
echo "   Secret: (use the WEBHOOK_SECRET from .env)"
echo "3. Push a commit to test automatic deployment"
echo ""
echo "For detailed instructions, see DEPLOYMENT.md"
