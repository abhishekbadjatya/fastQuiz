#!/bin/bash
sudo npm install -g webpack
sudo npm install -g webpack-dev-server
cd user
npm install
cd ..

cd api/services


composer install
composer dump-autoload -o

cp .env.example .env

sudo chmod -R 777 storage
sudo chmod -R 777 bootstrap

php artisan key:generate
php artisan config:clear