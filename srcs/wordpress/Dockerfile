FROM debian:bullseye

RUN apt update -y && apt upgrade -y && apt install -y php7.4-fpm php7.4-mysql mariadb-client wget unzip curl tar
RUN curl -o /usr/local/bin/wait-for-it https://raw.githubusercontent.com/vishnubob/wait-for-it/master/wait-for-it.sh && \
    chmod +x /usr/local/bin/wait-for-it
RUN mkdir -p /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN mkdir -p /run/php && chown root:root /run/php
RUN curl -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
	chmod +x /usr/local/bin/wp
COPY ./www.conf /etc/php/7.4/fpm/pool.d/.

COPY ./script.sh /script.sh
RUN chmod +x /script.sh
CMD ["/script.sh"]