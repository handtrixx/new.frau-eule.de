FROM wordpress:latest

# Install git and required tools for webhook deployment
RUN apt-get update && apt-get install -y \
    git \
    rsync \
    unzip \
    && rm -rf /var/lib/apt/lists/*

RUN mkdir -p /var/www/html/wp-content/themes/fraueule
RUN chown -R 1000:1000 /var/www/html

# Create deployment directory
RUN mkdir -p /var/www/deployment && chown -R 1000:1000 /var/www/deployment


