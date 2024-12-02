# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: dkremer <dkremer@student.42heilbronn.de    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2024/12/02 21:26:29 by dkremer           #+#    #+#              #
#    Updated: 2024/12/02 21:41:05 by dkremer          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

all : up 

up :
	@docker-compose -f ./srcs/docker-compose.yaml up -d

down :
	@docker-compose -f ./srcs/docker-compose.yaml down

stop :
	@docker-compose -f ./srcs/docker-compose.yaml stop

start :
	@docker-compose -f ./srcs/docker-compose.yaml start

status :
	@docker ps