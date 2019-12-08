#!/bin/bash

cd /var/www

composer install

# wait for mysql
while ! php artisan migrate; do
  sleep 1
done

php artisan db:seed

echo ""
echo ""
echo ""
echo ""
echo "############################################"
echo "###                                      ###"
echo "###         API is ready to use!         ###"
echo "###                                      ###"
echo "###     Open http://laravel-api.test/    ###"
echo "###       To see the documentation       ###"
echo "###                                      ###"
echo "############################################"
echo ""
echo ""
echo ""
echo ""

# start workspace process
/sbin/my_init