FROM debian:latest

RUN apt update && apt upgrade -y && apt install -y \
    mysql-server-core
    
COPY 50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY init.sql /etc/mysql/init.sql

RUN mkdir /run/mysqld

CMD ["mysqld]
