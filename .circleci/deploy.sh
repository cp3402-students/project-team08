#!/bin/bash

# Output debug message
echo "Changing directory to /opt/bitnami/apache2/htdocs/"

# Navigate to the directory where your application code is stored
cd /opt/bitnami/apache2/htdocs/

# Output debug message
echo "Pulling the latest changes from Git repository"

# Pull the latest changes from your Git repository
git pull origin main

# Output debug message
echo "Restarting Apache web server"

# Restart Apache web server to apply changes
/opt/bitnami/ctlscript.sh restart apache

# Output debug message
echo "Deployment script completed"
