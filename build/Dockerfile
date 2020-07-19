FROM asclinux/linuxforphp-8.2-ultimate:7.1-nts
MAINTAINER doug.bierer@etista.com
RUN \
	echo "Compiling PHP 8 ..." && \
	cp /bin/lfphp-compile /bin/lfphp-compile-php8 && \
	sed -i 's/--prefix=\/usr/--prefix=\/usr\/local --with-ffi/g' /bin/lfphp-compile-php8 && \
	/bin/lfphp-compile-php8 && \
	ln -s /usr/bin/php /usr/bin/php7 && \
	ln -s /usr/local/bin/php /usr/bin/php8
