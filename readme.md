# Laravel Simple API
Very simple API for React or other Frontend eduction reasons, which can be run locally just by few commands

Naturally, no LLMs involved — they weren’t even in use back in 2019 when this repo was created.

## What is it

It is an laravel-based API prepared for front end internships. It uses the Laravel specific things like validation format in responses or OAuth from the Passport package to let newcomers view how the real Laravel application work

Based on Laradock 8.0, see https://laradock.io/documentation/ for more

## How to install

Requires Docker >= 17.12

- Clone this repo `git clone git@github.com:loburets/laravel-simple-api.git`
- Go to the Laradock directory `cd laravel-simple-api/laradock`
- Ensure that your Docker daemon is run (click to your docker icon or something like that)
- Run `docker-compose up -d nginx mysql && docker-compose logs -f --tail 20 workspace`
- Add new string to your hosts file `127.0.0.1 laravel-api.test`
- Done! See the http://laravel-api.test/

If you use windows also go to `laradock` directory, open .env and change the separator from ':' to ';'. You should have the following: `COMPOSE_PATH_SEPARATOR=;`

## If you want reset everything

`docker-compose down && docker-compose rm -v && rm -rf  ~/.laradock && docker-compose up -d nginx mysql && docker-compose exec --user=laradock workspace bash`

## If you want to execute some command manually

To run composer, artisan etc:

`cd laravel-simple-api/laradock`
`docker-compose exec --user=laradock workspace bash`

Or MySQL:

`cd laravel-simple-api/laradock`
`docker-compose exec --user=laradock mysql bash`
`mysql -proot -uroot`

## To update documentation

- `npm install -g snowboard`
- `cd docs`
- `snowboard html -o index.html API.apib --watch -c config.yaml`

![FireShot Capture 001 - Create Product - Laravel Simple API Documentation - laravel-api test](https://user-images.githubusercontent.com/5417461/66260835-c9c26c80-e7e5-11e9-8f38-464d9e489d4f.png)

