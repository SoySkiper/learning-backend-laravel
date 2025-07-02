## Curso de laravel

## Descripción del Proyecto

Este repositorio contiene los ejercicios y aprendizajes del curso de Laravel y PHP que estoy tomando. Cada commit está ligado a un tema específico del curso, y se documenta tanto el código como los comandos útiles utilizados en el proceso.

## Temas cubiertos hasta ahora (según commits)

- HTTP requests con métodos GET, POST, PUT, DELETE
- Códigos de respuesta HTTP con Symfony
- Envío de parámetros en rutas
- Creación y ejecución de migraciones
- Modificación de tablas con migraciones
- Uso de llaves foráneas
- Creación de seeders

## Comandos útiles

### 🖥️ Servidor local con PHP:

```bash
php -S localhost:4411 -t public
```

Ejecuta un servidor local desde la carpeta `public` en el puerto `4411`.

### 🛠️ Migraciones:

```bash
php artisan make:migration create_product_table
```

Crea una migración para la tabla `product`.

```bash
php artisan make:migration add_price_to_product_table --table=product
```

Crea una migración para agregar la columna `price` a la tabla `product`.

```bash
php artisan migrate
```

Ejecuta todas las migraciones pendientes.

```bash
php artisan migrate:rollback
```

Revierte la última migración.

```bash
php artisan migrate:reset
```

Revierte todas las migraciones ejecutadas.

```bash
php artisan migrate:fresh --seed
```

Elimina todas las tablas y vuelve a ejecutar todas las migraciones con sus seeders.

### 🔗 Relaciones y llaves foráneas:

```bash
php artisan make:migration create_category_table
```

Crea la tabla `category`.

```bash
php artisan make:migration add_category_id_to_product_table --table=product
```

Agrega la columna `category_id` a la tabla `product`.

### 🌱 Seeders:

```bash
php artisan make:seeder CategoryTableSeeder
```

Crea un seeder para la tabla `category`.

```bash
php artisan db:seed
```

Ejecuta todos los seeders registrados.

## Notas

Este proyecto es estrictamente educativo, cada sección está vinculada a los temas del curso. Los comandos listados aquí están en constante crecimiento a medida que avanza el curso.

---

**Autor:** Cristian Primero

---

Para más información sobre Laravel:

- [Documentación Oficial de Laravel](https://laravel.com/docs)
- [Laravel Bootcamp](https://bootcamp.laravel.com)
- [Laracasts](https://laracasts.com)
- [Curso de programación backend en PHP laravel](https://www.udemy.com/course/curso-de-programacion-backend-en-php-laravel/)


## Más comandos apartir de la última actualización de Readme
php artisan make:seeder ProductTableSeeder

php artisan db:seed --class=ProductTableSeeder

php artisan migrate:fresh --seed

php artisan make:model Category

php artisan make:model Product 

php artisan make:factory CategoryFactory

php artisan migrate:fresh --seed
