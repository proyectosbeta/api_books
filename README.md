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

## Autenticación
```bash
composer require laravel/ui "2.*"
php artisan ui bootstrap --auth
npm install && npm run dev
php artisan serve
```

### Agregar español
```bash
composer require laraveles/spanish
php artisan vendor:publish --tag=lang
```

Entrar en config/app.php y cambiar el locale por:
```bash
es
```

Reiniciar el server:
```bash
php artisan serve
```

## Request Form
```bash
php artisan make:request StoreBookRequest
```
