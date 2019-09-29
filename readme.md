Based on Laradock 8.0
Requires Docker >= 17.12

## How to install

1. Go to laradock directory
2. `docker-compose up -d nginx mysql`
3. Add new string to your hosts file `127.0.0.1 laravel-api.test`

If you use windows then go to `laradock` directory, open .env and change the separator from : to ;

You should have this: `COMPOSE_PATH_SEPARATOR=;`


## If you need to execute something manually

`docker-compose exec workspace bash`