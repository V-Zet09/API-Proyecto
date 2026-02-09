API de Gestión – Laravel
📌 Descripción

API REST desarrollada con Laravel (PHP) para la gestión de información mediante endpoints seguros y estructurados.
El proyecto implementa autenticación, roles de usuario, validación de datos y operaciones CRUD, siguiendo buenas prácticas de desarrollo backend.

Este proyecto fue desarrollado como parte de mi formación profesional, con enfoque en backend, bases de datos y seguridad básica.

🚀 Tecnologías utilizadas

PHP 8.x

Laravel

MySQL / PostgreSQL

Eloquent ORM

APIs REST

Git / GitHub

Linux (entorno de desarrollo)

⚙️ Funcionalidades principales

Autenticación de usuarios

Gestión de roles y permisos

CRUD de recursos mediante endpoints REST

Validación de datos en peticiones

Manejo de respuestas HTTP (status codes)

Organización del proyecto bajo arquitectura MVC

Migraciones y seeders para base de datos

🔐 Seguridad

Validación de entradas para prevenir datos inconsistentes

Uso de middleware para control de acceso

Separación de lógica de negocio y controladores

Buenas prácticas básicas de seguridad en APIs

📂 Estructura del proyecto

app/Http/Controllers – Controladores de la API

app/Models – Modelos Eloquent

routes/api.php – Definición de rutas API

database/migrations – Estructura de base de datos

🛠️ Instalación y configuración
git clone https://github.com/V-Zet09/API-Proyecto.git
cd API-Proyecto
composer install
cp .env.example .env
php artisan key:generate


Configura la base de datos en el archivo .env y ejecuta:

php artisan migrate
php artisan serve

🧪 Pruebas

El proyecto incluye pruebas básicas y validación de endpoints mediante herramientas como Postman o similares.

📈 Aprendizajes clave

Desarrollo de APIs REST con Laravel

Diseño de bases de datos relacionales

Manejo de autenticación y roles

Optimización de consultas SQL

Control de versiones con Git/GitHub

👨‍💻 Autor

Maico Zaet Pérez Valencia
Desarrollador Backend Jr
GitHub: https://github.com/V-Zet09
If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
