# Verwende ein offizielles PHP-Image als Basis
FROM php:8.0-cli

# Installiere System-Abhängigkeiten
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    git unzip

# Installiere PHP-Erweiterungen
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Installiere Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Arbeitsverzeichnis setzen
WORKDIR /app

# Kopiere den Inhalt des Projekts in den Container
COPY . /app

# Installiere die PHP-Abhängigkeiten
RUN composer install --ignore-platform-reqs

# Setze den Standardbefehl für den Container
CMD ["php", "index.php"]
