# Sistema de Inventario - Laravel

Este proyecto es un sistema profesional de gestión de inventario desarrollado con Laravel y Livewire. Permite administrar productos, movimientos de inventario (ventas, reposiciones, devoluciones), puntos de venta y usuarios, todo a través de una interfaz moderna y responsiva.

## Características principales

- **Gestión de productos:** Alta, baja, modificación y búsqueda rápida de productos.
- **Movimientos de inventario:** Registro de ventas, reposiciones y devoluciones con resumen dinámico en tiempo real.
- **Puntos de venta:** Selección y control de diferentes puntos de venta.
- **Interfaz intuitiva:** UI moderna con Tailwind CSS y componentes Livewire para experiencia reactiva.
- **Validaciones robustas:** Validación de datos tanto en frontend como backend.
- **Resumen en tiempo real:** Visualización instantánea del resumen del movimiento antes de guardar.
- **Autenticación y roles:** (Opcional) Soporte para usuarios y roles.

## Requisitos

- PHP >= 8.1
- Composer
- Node.js y npm
- SQLite (por defecto) o cualquier base de datos soportada por Laravel

## Instalación

1. Clona el repositorio:
   ```bash
   git clone <url-del-repositorio>
   cd project_inventory
   ```
2. Instala las dependencias de PHP:
   ```bash
   composer install
   ```
3. Instala las dependencias de Node.js:
   ```bash
   npm install && npm run build
   ```
4. Copia el archivo de entorno y configura tus variables:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. Configura la base de datos en `.env` (por defecto usa SQLite):
   ```env
   DB_CONNECTION=sqlite
   DB_DATABASE=./database/database.sqlite
   ```
6. Ejecuta las migraciones y seeders:
   ```bash
   php artisan migrate --seed
   ```
7. Inicia el servidor de desarrollo:
   ```bash
   php artisan serve
   ```

## Uso

- Accede a la aplicación en [http://localhost:8000](http://localhost:8000)
- Navega por el dashboard, administra productos y registra movimientos.
- El resumen de cada movimiento se actualiza automáticamente al modificar cualquier campo del formulario.

## Estructura principal

- `app/Models/` - Modelos Eloquent (Product, Movement, User)
- `app/Http/Controllers/` - Controladores principales
- `app/Livewire/` - Componentes Livewire para formularios y vistas reactivas
- `resources/views/` - Vistas Blade y Livewire
- `database/` - Migraciones, seeders y base de datos SQLite

## Tecnologías utilizadas

- Laravel 10+
- Livewire
- Tailwind CSS
- Vite
- Alpine.js (opcional)

## Contribución

Las contribuciones son bienvenidas. Por favor, abre un issue o pull request para sugerencias o mejoras.

## Licencia

Este proyecto está bajo la licencia MIT.
