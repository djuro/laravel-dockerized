--Config, build and starting containers
$ docker-compose -f docker-compose.yml config

$ docker-compose -f docker-compose.yml build

$ docker-compose -f docker-compose.yml up -d

--Dependencies, file permissions and encryption key
$ docker exec [container_id] composer install

$ docker exec [container_id] chown -R www-data:www-data ./storage

$ docker exec [container_id] php artisan key:generate