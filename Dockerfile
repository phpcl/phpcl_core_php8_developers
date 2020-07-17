FROM asclinux/linuxforphp-8.2-ultimate:7.1-nts
MAINTAINER doug.bierer@etista.com
RUN \
    git clone "https://github.com/phpcl/phpcl_core_php8_developers.git" /srv/repo
RUN \
	echo "Clearing out default database users ..." && \
	/etc/init.d/mysql start && \
	sleep 5 && \
	mysql -uroot -v -e "DROP DATABASE test;" && \
	mysql -uroot -v -e "DROP USER ''@'devsrvmain';" && \
	mysql -uroot -v -e "DROP USER ''@'localhost';" && \
	mysql -uroot -v -e "DROP USER 'root'@'devsrvmain';" && \
	mysql -uroot -v -e "FLUSH PRIVILEGES;" && \
	echo "Creating database and assigning permissions ..." && \
	mysql -uroot -v -e "CREATE DATABASE phpcl;" && \
	mysql -uroot -v -e "CREATE USER 'phpcl'@'localhost' IDENTIFIED BY 'password';" && \
	mysql -uroot -v -e "GRANT ALL PRIVILEGES ON *.* TO 'phpcl'@'localhost';" && \
	mysql -uroot -v -e "FLUSH PRIVILEGES;" && \
	echo "Restoring database from backup ..." && \
	mysql -uroot -e "SOURCE /srv/repo/sample_data/phpcl.sql;" phpcl
RUN \
	echo "Compiling PHP 8 ..." && \
	echo "TO DO"
RUN \
  echo "Setting up Apache ..." && \
  cd /srv && \
  mv -f -v /srv/www /srv/www.OLD && \
  ln -s -f -v /srv/phpcl_core_php8 /srv/www && \
  echo "ServerName phpcl_core_php8" >> /etc/httpd/httpd.conf && \
  chown apache:apache /srv/www && \
  chown -R apache:apache /srv/phpcl_core_php8 && \
  chmod -R 775 /srv/phpcl_core_php8
ENTRYPOINT ["/bin/lfphp"]
CMD ["--mysql", "--phpfpm", "--apache"]
