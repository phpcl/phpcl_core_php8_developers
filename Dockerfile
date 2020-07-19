FROM unlikelysource/phpcl_php7_php8
MAINTAINER doug.bierer@etista.com
RUN git clone "https://github.com/phpcl/phpcl_core_php8_developers.git" /srv/repo
RUN \
	echo "Clearing out default database users ..." && \
	/etc/init.d/mysql start && \
	sleep 5 && \
	mysql -uroot -v -e "DROP DATABASE test;" && \
	mysql -uroot -v -e "DROP USER ''@'devsrvmain';" && \
	mysql -uroot -v -e "DROP USER ''@'localhost';" && \
	mysql -uroot -v -e "DROP USER 'root'@'devsrvmain';" && \
	mysql -uroot -v -e "FLUSH PRIVILEGES;" && \
	echo "Creating sample database and assigning permissions ..." && \
	mysql -uroot -v -e "CREATE DATABASE phpcl;" && \
	mysql -uroot -v -e "CREATE USER 'phpcl'@'localhost' IDENTIFIED BY 'password';" && \
	mysql -uroot -v -e "GRANT ALL PRIVILEGES ON *.* TO 'phpcl'@'localhost';" && \
	mysql -uroot -v -e "FLUSH PRIVILEGES;" && \
	echo "Restoring sample database ..." && \
	mysql -uroot -e "SOURCE /srv/repo/sample_data/phpcl.sql;" phpcl
RUN \
	echo "Setting up Apache ..." && \
	mv -fv /srv/www /srv/www.OLD && \
	ln -sfv /srv/repo /srv/www && \
	echo "ServerName phpcl_core_php8" >> /etc/httpd/httpd.conf && \
	chown apache:apache /srv/www && \
	chown -R apache:apache /srv/repo && \
	chmod -R 775 /srv/repo
CMD lfphp

