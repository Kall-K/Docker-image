FROM php:8.2-cli

RUN mkdir -p /home/app
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

COPY ./app /home/app

WORKDIR /home/app

CMD [ "php", "index.php" ]
