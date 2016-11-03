#!/bin/bash
sudo npm install -g webpack
sudo npm install -g webpack-dev-server
cd user
npm install
cd ..

cd api/services


/usr/local/bin/composer.phar install
/usr/local/bin/composer.phar dump-autoload -o

cp .env.example .env

sudo chmod -R 777 storage/*
sudo chmod -R 777 bootstrap/*