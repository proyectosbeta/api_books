# Construyendo una API en Laravel

# Requisitos
* Composer
* PHP 7.4

# Pasos
## Instalar Laravel
  composer global require laravel/installer

## Crear proyecto
  composer create-project --prefer-dist laravel/laravel api_book "7.*"

# Comandos útiles
  php artisan serve
  php artisan route:list
  php artisan make:controller BookController --resource
  php artisan make:model Models/Book -m
  php artisan migrate
  php artisan migrate:fresh
