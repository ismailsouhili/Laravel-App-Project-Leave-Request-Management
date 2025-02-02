echo 'FROM php:8.0-cli' > Dockerfile
echo 'RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev' >> Dockerfile
echo 'RUN docker-php-ext-configure gd --with-freetype --with-jpeg' >> Dockerfile
echo 'RUN docker-php-ext-install gd' >> Dockerfile
echo 'WORKDIR /app' >> Dockerfile
echo 'COPY . /app' >> Dockerfile
echo 'RUN composer install --ignore-platform-reqs' >> Dockerfile
echo 'CMD ["php", "index.php"]' >> Dockerfile
