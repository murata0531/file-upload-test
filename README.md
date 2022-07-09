# file-upload-test

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

# Dockerコンテナ日本語入力対応

Laravelコンテナ
```
$ apt-get update && apt-get install -y locales && locale-gen ja_JP.UTF-8 && echo "export LANG=ja_JP.UTF-8" >> ~/.bashrc
```

# ストレージ対応
```
$ artisan storage:link
```