# laravel9-sail

# 環境

Laravel9

php8.1

mysql8.0

vite

# 環境構築
```
$ cp .env.example .env

$ composer install

$ php artisan key:generate

$ php artisan migrate
```

# 各種コンテナに入る

docker立ち上げ
```
$ ./vendor/bin/sail up -d
```

Laravelコンテナ
```
$ docker-compose exec laravel.test bash
```

MySQLコンテナ
```
$ docker-compose exec mysql mysql -usail -ppassword
```

