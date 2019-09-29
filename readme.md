## What is it
It is an api for React course, which can be installed locally via few commands

Based on Laradock 8.0
See [https://laradock.io/documentation/] for more

Requires Docker >= 17.12

## How to install

1. Git clone and go to laradock directory
2. `docker-compose up -d nginx mysql`
3. Add new string to your hosts file `127.0.0.1 laravel-api.test`
4. Done! Use the [http://laravel-api.test/]

If you use windows also go to `laradock` directory, open .env and change the separator from : to ;

You should have the: `COMPOSE_PATH_SEPARATOR=;`

## If you need to execute something manually

`docker-compose exec --user=laradock workspace bash`