# Navigate to the directory where your application code is stored
cd /opt/bitnami/apache2/htdocs/

# Pull the latest changes from your Git repository
git pull origin main

# Restart Apache web server to apply changes
sudo /opt/bitnami/ctlscript.sh restart apache
