FROM php:8.1-cli

# Installiere System-Abhängigkeiten und Composer
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev git unzip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Setze Arbeitsverzeichnis
WORKDIR /app

# Kopiere die Composer-Dateien
COPY composer.json composer.lock /app/

# Installiere Composer-Abhängigkeiten
RUN composer install --ignore-platform-reqs

# Kopiere den Rest der Anwendung
COPY . /app

# Installiere npm-Abhängigkeiten
RUN npm ci

# Starte Nginx oder Apache
CMD ["php-fpm"]
