# Hola Mundo · Lumen (framework real)

Portal del framework **Lumen** (creado con `composer create-project laravel/lumen`),
parte de una serie de 9 portales "Hola Mundo" con un **cuadro comparativo** común.

> Tipo: **framework real**. Rutas (`routes/web.php`), ruta `/api` (JSON) y validación
> reales de Lumen. 5 funciones (mezcla) + tabla comparativa de los 9.
> Nota: Lumen está en declive; el equipo de Laravel hoy recomienda usar Laravel normal.

## Local
```bash
composer install
php -S localhost:8000 -t public public/index.php
```
## Docker
```bash
docker build -t php-lumen . && docker run -p 8080:80 php-lumen
```
Coolify: Build Pack **Dockerfile**, puerto **80**.
