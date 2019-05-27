# Blog in Laravel 5.8

Requirement :
PHP >= 7.1.3
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
Ctype PHP Extension
JSON PHP Extension
BCMath PHP Extension
Composer

Installing :
composer global require laravel/installer

Create new project :
laravel new blog //or// composer create-project --prefer-dist laravel/laravel blog

Local server :
php artisan serve

Migrate database :
php artisan migrate

Create controller :
php artisan:make controller {NameOfController}

Create model + migrate:
php artisan:make model {NameOfModel) -m


