FROM php:latest

WORKDIR /app

RUN apt-get update
RUN apt-get clean && rm -rf /var/lib/apt/lists/*


# Get latest Compsoer
COPY --from-composer:latest /ust/bin/composer /usr/bin/composer
COPY . .


RUN chmod +x /usr/bin/composer
RUN composer install --ignore-platform-reqs --no-cache --dev