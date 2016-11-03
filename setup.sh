sudo npm install -g webpack
sudo npm install webpack-dev-server
cd user
npm install
cd ..
cd app/services
sudo composer install
sudo composer dump-autoload
cp .env.example .env

sudo chmod -R 777 storage/*
sudo chmod -R 777 bootstrap/*