#!/bin/bash
cd api/services
php artisan migrate
php artisan db:seed