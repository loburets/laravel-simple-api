#!/bin/bash

cd /var/www

composer install

# wait for mysql
while ! php artisan migrate; do
  sleep 1
done

php artisan db:seed

echo ""
echo "############################################"
echo "###                                      ###"
echo "###         Everything is done           ###"
echo "###                                      ###"
echo "###   Use the http://laravel-api.test/   ###"
echo "###                                      ###"
echo "############################################"
echo ""


# start workspace process
/sbin/my_init