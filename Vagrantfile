# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  # Available Boxes: https://atlas.hashicorp.com/search
  config.vm.box = "ubuntu/xenial64"

  # Virtual Machine will be available at 10.10.10.15
  config.vm.network "private_network", ip: "10.10.10.15"

  # Synced folder
  config.vm.synced_folder "./", "/vagrant", disabled: true
  config.vm.synced_folder "./", "/srv/inboundreview", create: true, mount_options: ['dmode=774','fmode=775']

  # VirtualBox settings
  config.vm.provider "virtualbox" do |v|
    # Don't boot with headless mode
    v.gui = false

    # Use VBoxManage to customize the VM. For example to change memory:
    v.customize ["modifyvm", :id, "--memory",               "512"]
    v.customize ["modifyvm", :id, "--cpuexecutioncap",      "50"]
    v.customize ["modifyvm", :id, "--natdnshostresolver1",  "on"]
    v.customize ["modifyvm", :id, "--natdnsproxy1",         "on"]
  end

  # Installing the required packages and internal workflow
  config.ssh.shell = "bash -c 'BASH_ENV=/etc/profile exec bash'"
  config.vm.provision "shell", inline: <<-SHELL
########################################################################################################################
################################################# SHELL START ##########################################################
########################################################################################################################

# Add the default web server user to the vagrant group
sudo usermod -a -G ubuntu www-data

# Force a blank root password for mysql
export DEBIAN_FRONTEND="noninteractive"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password password"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password password"
# Install mysql, nginx, php-fpm
sudo apt-get update
sudo apt-get install -y -f mysql-server mysql-client nginx php-fpm

# Proper user
sudo sed -i "s/user www-data;/user ubuntu;/g" /etc/nginx/nginx.conf
sudo sed -i "s/user = www-data/user = ubuntu/g" /etc/php/7.0/fpm/pool.d/www.conf
sudo sed -i "s/group = www-data/group = ubuntu/g" /etc/php/7.0/fpm/pool.d/www.conf

# Install required used php packages
sudo apt-get install -y -f php-mysql php-curl php-gd
# Creating required folders
sudo rm -rf /srv/inboundreview.local
sudo mkdir -p /srv/inboundreview.local/{www,logs}
sudo chmod -R 7777 /srv/inboundreview.local
# Nginx virtual host
cat << 'EOF' | sudo tee /etc/nginx/sites-enabled/default
server {
    listen 80;
    server_name inboundreview.local;
    root /srv/inboundreview.local/www;
    error_log /srv/inboundreview.local/logs/error.log error;
    index index.php;
    location / {
        try_files $uri $uri/ /index.php?$args;
        # Required for compatibility with Virualbox
        sendfile off;
    }
    rewrite /wp-admin$ $scheme://$host$uri/ permanent;
    location ~ [^/]\.php(/|$) {
        fastcgi_split_path_info ^(.+?\.php)(/.*)$;
        if (!-f $document_root$fastcgi_script_name) {
            return 404;
        }
        include fastcgi.conf;
        fastcgi_index index.php;
        fastcgi_pass unix:/run/php/php7.0-fpm.sock;
    }
}
EOF
sudo service nginx restart
sudo service php7.0-fpm restart
# Proper database credentials
echo 'create database `wp`;' | mysql -uroot -ppassword
# Installing WP CLI
curl -s -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar > /dev/null
chmod +x /usr/local/bin/wp
sudo chown ubuntu:ubuntu /usr/local/bin/wp
# Creating site
sudo chown -R ubuntu:ubuntu /srv
cd /srv/inboundreview.local/www
wp core download --locale=en_AU --allow-root
wp core config --dbname=wp --dbuser=root --dbpass=password --allow-root
wp core install --url="inboundreview.local" --title="InboundReview WordPress Site" --admin_user=admin --admin_password=admin --admin_email="admin@example.com" --allow-root
# Adding child theme
ln -s /srv/inboundreview /srv/inboundreview.local/www/wp-content/themes/inboundreview
echo "Done"

########################################################################################################################
################################################## SHELL END ###########################################################
########################################################################################################################
  SHELL


end
