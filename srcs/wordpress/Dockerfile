FROM debian:latest

RUN apt update && apt upgrade -y && apt install -y php-fpm php-fpm php-mysqli curl mysql-core

COPY www.conf /etc/php/8.2/fpm/pool.d/.
COPY script.sh .
RUN mkdir /run/mysqld && chmod +x script.sh

CMD ["./script.sh"]