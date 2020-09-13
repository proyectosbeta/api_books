# Construyendo una API en Laravel

# Requisitos
* Composer
* PHP 7.4

# Pasos
## Instalar Laravel
```bash
composer global require laravel/installer
```

## Crear proyecto
```bash
composer create-project --prefer-dist laravel/laravel api_book "7.*"
```

# Base de datos
* Utilizamos MySQL

En el archivo .env agregar las credenciales de la base de datos.

# Comandos útiles
```bash 
php artisan serve
php artisan route:list
php artisan make:controller BookController --resource
php artisan make:model Models/Book -m
php artisan migrate
php artisan migrate:fresh
```
