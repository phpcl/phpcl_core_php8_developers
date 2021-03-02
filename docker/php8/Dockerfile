FROM asclinux/linuxforphp-8.2-ultimate:8.0-nts
MAINTAINER doug.bierer@etista.com
RUN \
	echo "Configuring for PHP 8 ..." && \
	ln -sfv /usr/bin/php /usr/bin/php8
RUN \
    git clone "https://github.com/phpcl/phpcl_core_php8_developers.git" /srv/tempo/repo && \
    cd /srv/tempo/repo && \
    git checkout master && \
    rm -rf .git
RUN \
	echo "Configuring SQLite and sample database ..." && \
    echo "TODO: install SQLite PHP ext ..." && \
    cp -v /srv/tempo/repo/sample_data/phpcl.db /tmp/phpcl.db && \
    chown apache:apache /tmp/*
RUN \
	echo "Enable display errors and configure php.ini for modifications later ..." && \
	sed -i 's/display_errors = Off/display_errors = On/g' /etc/php.ini && \
	sed -i 's/display_startup_errors = Off/display_startup_errors = On/g' /etc/php.ini && \
	sed -i 's/error_reporting =/;error_reporting =/g' /etc/php.ini && \
	echo "error_reporting = E_ALL" >>/etc/php.ini && \
	cp /etc/php.ini /tmp/php.ini && \
	chown apache:apache /etc/php.ini &&  \
	chmod 664 /etc/php.ini
RUN \
	echo "Creating sample database and assigning permissions ..." && \
	/etc/init.d/mysql start && \
	sleep 5 && \
	mysql -uroot -v -e "CREATE DATABASE phpcl;" && \
	mysql -uroot -v -e "CREATE USER 'phpcl'@'localhost' IDENTIFIED BY 'password';" && \
	mysql -uroot -v -e "GRANT ALL PRIVILEGES ON *.* TO 'phpcl'@'localhost';" && \
	mysql -uroot -v -e "FLUSH PRIVILEGES;" && \
	echo "Restoring sample database ..." && \
	mysql -uroot -e "SOURCE /srv/tempo/repo/sample_data/phpcl.sql;" phpcl
RUN \
	echo "Installing phpMyAdmin ..." && \
	chmod +x /srv/tempo/repo/docker/*.sh && \
	/srv/tempo/repo/docker/phpmyadmin_install.sh
RUN \
	echo "Setting up Apache ..." && \
	mv -fv /srv/www /srv/www.OLD && \
	ln -sfv /srv/tempo/repo /srv/www && \
	echo "ServerName phpcl_core_php8" >> /etc/httpd/httpd.conf && \
	chown apache:apache /srv/www && \
	chown -R apache:apache /srv/tempo/repo && \
	chmod -R 775 /srv/tempo/repo
CMD lfphp --mysql --phpfpm --apache
