<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sobre Task API

Para usar esta API debe de tener instalado primero:

- PHP mayor o igual a la version 8.0.
- Debe de tener instalado Composer.
- Debe de tener instalado MySQL.
- (Opcional) Instalar un Rest API Client para hacer las consultas a las rutas.

## Installation

Usar el siguiente comando para instalar las dependencias:

```bash
$ composer install
```

## Set Enviroments
Crear archivo .env en la ruta raiz del sistema y configurar las siguiente variables para el funcionamiento del sistema.

```bash
# Configurar crendenciales de la base de datos
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Correr comando
```bash
$ php artisan key:generate
```

## Running the app

Correr migraciones primero
- Si no ha creado la base de datos, se le mostrara una advertencia en el cual le preguntaran si quiere crear la base de datos, Seleccione Si.
```bash
$ php artisan migrate
```

- Luego iniciar el servidor.

```bash
$ php artisan serve
```

## Routes

Rutas de la API

```bash
GET     http://localhost:8000/api/task
POST    http://localhost:8000/api/task
GET     http://localhost:8000/api/task/{id}
PATCH   http://localhost:8000/api/task/{id}
DELETE  http://localhost:8000/api/task/{id}
```
