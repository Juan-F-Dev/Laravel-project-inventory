
# Laravel Project Inventory

Este es un sistema de gestión de inventario desarrollado con Laravel, diseñado para administrar productos con roles de usuario diferenciados (administrador y usuario estándar).

## Características

- Autenticación y registro de usuarios utilizando Laravel Breeze.
- Roles de usuario: administrador y usuario estándar.
- CRUD de productos con campos como código, nombre, cantidad, unidad y precio.
- Paginación de la lista de productos.
- Restricciones de acceso basadas en roles: los administradores pueden crear, editar y eliminar productos; los usuarios estándar solo pueden visualizar la lista de productos.
- Generación de datos de prueba utilizando factories y seeders.


## Requisitos del sistema

- PHP >= 8.1
- Composer
- Node.js y npm
- Base de datos compatible (MySQL, PostgreSQL, etc.)

## Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/Juan-F-Dev/Laravel-project-inventory.git
   cd Laravel-project-inventory
   ```

2. Instala las dependencias de PHP:
   ```bash
   composer install
   ```

3. Instala las dependencias de JavaScript:
   ```bash
   npm install
   ```

4. Copia el archivo de ejemplo de entorno y configura las variables necesarias:
   ```bash
   cp .env.example .env
   ```
   Edita el archivo `.env` para configurar la conexión a la base de datos y otras variables de entorno.

5. Genera la clave de la aplicación:
   ```bash
   php artisan key:generate
   ```

6. Ejecuta las migraciones y seeders para preparar la base de datos:
   ```bash
   php artisan migrate:fresh --seed
   ```

7. Compila los assets del frontend:
   ```bash
   npm run dev
   ```

8. Inicia el servidor de desarrollo:
   ```bash
   php artisan serve
   ```

   La aplicación estará disponible en `http://localhost:8000`.

## Uso

- Regístrate como nuevo usuario o inicia sesión con las credenciales proporcionadas por el seeder.
- Los administradores pueden crear, editar y eliminar productos.
- Los usuarios estándar solo pueden visualizar la lista de productos.

## Estructura del proyecto

- `app/Models`: Modelos Eloquent.
- `app/Http/Controllers`: Controladores de la aplicación.
- `database/migrations`: Migraciones de la base de datos.
- `database/seeders`: Seeders para poblar la base de datos con datos de prueba.
- `resources/views`: Vistas Blade.
- `routes/web.php`: Definición de rutas web.

## Contribuciones

¡Las contribuciones son bienvenidas! Si deseas mejorar este proyecto, por favor sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama para tu funcionalidad: `git checkout -b nueva-funcionalidad`.
3. Realiza tus cambios y haz commit: `git commit -m 'Agrega nueva funcionalidad'`.
4. Haz push a tu rama: `git push origin nueva-funcionalidad`.
5. Abre un Pull Request.

## Licencia

Este proyecto está bajo la licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más detalles.
