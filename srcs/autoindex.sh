# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    autoindex.sh                                       :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: bscamand <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/01/22 18:52:25 by bscamand          #+#    #+#              #
#    Updated: 2021/01/22 18:52:35 by bscamand         ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

#!/bin/bash
# Запуск откл и вкл автоиндекса 
if grep -q "autoindex on;" /etc/nginx/sites-available/nginx.conf
then
    sed -i 's/autoindex on;/autoindex off;/' /etc/nginx/sites-available/nginx.conf
    nginx -s reload
elif grep -q "autoindex off;" /etc/nginx/sites-available/nginx.conf
then
    sed -i 's/autoindex off;/autoindex on;/' /etc/nginx/sites-available/nginx.conf
    nginx -s reload
fi

bash
