#!/bin/bash

cd /var/www

composer install

# wait for mysql
while ! php artisan migrate; do
  sleep 1
done

php artisan db:seed

# start workspace process
/sbin/my_init