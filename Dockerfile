# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: bscamand <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/01/13 20:30:55 by bscamand          #+#    #+#              #
#    Updated: 2021/01/22 18:52:03 by bscamand         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# Import OS
FROM debian:buster

# Maintainer
LABEL maintainer="bscamand@student.21-school.ru"

# Create folders
RUN mkdir -p /var/www/html
RUN mkdir -p /etc/nginx/ssl

# Main installations
RUN apt-get update && apt-get upgrade
RUN apt-get install -y wordpress
RUN apt-get install -y nginx
RUN apt-get install -y default-mysql-server
RUN apt-get install -y php7.3 php7.3-fpm php-json php7.3-mysql php-mbstring
RUN apt-get install -y wget vim openssl

# Phpmyadmin install
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz
RUN tar xvzf phpMyAdmin-5.0.4-all-languages.tar.gz

# Move phpmyadmin and wordpress
RUN mv phpMyAdmin-5.0.4-all-languages /var/www/html/phpmyadmin
RUN mv /usr/share/wordpress /var/www/html/

# Chown and chmod for www
RUN chown -R www-data /var/www/* && chmod -R 755 /var/www/*

# Create SSL
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048\
	-subj "/C=RU/ST=Moscow/L=Moscow/O=School_21/OU=bscamand/CN=bscamand.com"\
	-keyout /etc/nginx/ssl/ssl.key\ 
	-out /etc/nginx/ssl/ssl.pem

# Ports
EXPOSE 80 443

# Copy config files
COPY srcs/nginx.conf /etc/nginx/sites-available/
COPY srcs/config.inc.php /var/www/html/phpmyadmin
COPY srcs/wp-config.php /var/www/html/wordpress

# Create link
RUN ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/nginx.conf

# Copy sh files
COPY srcs/autoindex.sh /var/
COPY srcs/start.sh /var/

# Entrypoint
CMD bash var/start.sh
