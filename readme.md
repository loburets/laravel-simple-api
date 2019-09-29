# Basic Laravel API in Docker via Laradock

## What is it

This is an simple API for React or other Frontend eduction, which can be run locally just by few commands

It uses the Laravel specific things like validation format in responses or OAuth from the Passport package to let newcomers know how the real ones can look

Based on Laradock 8.0, see [https://laradock.io/documentation/] for more

## How to install

Requires Docker >= 17.12

1. Clone this repo and go to `laradock` directory
2. `docker-compose up -d nginx mysql`
3. Add new string to your hosts file `127.0.0.1 laravel-api.test`
4. Done! Use the [http://laravel-api.test/] address

If you use windows also go to `laradock` directory, open .env and change the separator from : to ;

You should have the: `COMPOSE_PATH_SEPARATOR=;`

## If you want to execute something manually

`docker-compose exec --user=laradock workspace bash`