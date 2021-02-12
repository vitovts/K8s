FROM amazonlinux

RUN yum -y update
RUN yum -y install httpd php vim


#sudo apt update
#sudo apt install apache2
#sudo apt install php libapache2-mod-php
#sudo vim /etc/apache2/mods-enabled/dir.conf
#sudo systemctl start apache2
#sudo systemctl status apache2
#apt search php- | less
#apt show php-cli



COPY ./index.php /var/www/html/index.php
#COPY ./index.php /app/index.php

CMD ["/usr/sbin/httpd","-D","FOREGROUND"]

EXPOSE 80