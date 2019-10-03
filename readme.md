# Laravel Simple API
Very simple API for React or other Frontend eduction reasons, which can be run locally just by few commands

NOTE: isn't fully ready so far, just a frame

## What is it

It is an API prepared for front end internships. It uses the Laravel specific things like validation format in responses or OAuth from the Passport package to let newcomers view how the real application will work with the same technology stack

Based on Laradock 8.0, see https://laradock.io/documentation/ for more

## How to install

Requires Docker >= 17.12

1. Clone this repo and go to `laradock` directory
2. `docker-compose up -d nginx mysql`
3. Add new string to your hosts file `127.0.0.1 laravel-api.test`
4. Done! Use the http://laravel-api.test/ address

If you use windows also go to `laradock` directory, open .env and change the separator from ':' to ';'. You should have the following: `COMPOSE_PATH_SEPARATOR=;`

## If you want to execute some command manually

To run composer, artisan etc:

`docker-compose exec --user=laradock workspace bash`

Or MySQL:

`docker-compose exec --user=laradock mysql bash`
`mysql -proot -uroot`

To rebuild everything:

`docker-compose down && docker-compose rm -v && rm -rf  ~/.laradock && docker-compose up -d nginx mysql && docker-compose exec --user=laradock workspace bash`