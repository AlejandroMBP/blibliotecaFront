<p align="center">
  <a href="https://github.com/AlejandroMBP" target="_blank">
    <img src="https://avatars.githubusercontent.com/u/155660138?s=400&u=9b6d536e9f012ef961054861ecae72c6ff13bace&v=4" width="150" alt="AlejandroMBP" style="border-radius: 50%; box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);">
  </a>
</p>

<h1 align="center">🚀 Proyecto Laravel 10</h1>

<p align="center">
  <strong>Un proyecto desarrollado con Laravel 10 y base de datos MySQL</strong>
</p>

---

## 🌟 Requisitos

- PHP >= 8.2  
- Composer  
- MySQL o MariaDB  
- Node.js y npm (opcional para compilar assets)

---

## 🛠️ Instalación

Sigue estos pasos para ejecutar el proyecto en tu entorno local:

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/AlejandroMBP/tesoreria.git
   # o
   git clone git@github.com:AlejandroMBP/tesoreria.git
   cd tesoreria

2. **Instala las dependencias de PHP:**
   ```bash
   composer install
   
3. **Copie el archivo de entorno:**
   ```bash
   cp .env.example .env
   
4. **Luego edita el archivo .env y reemplaza la configuración de SQLite por la de MySQL:**
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_de_tu_base
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_contraseña
5. **Genera la clave de aplicación:**
   ```bash
   php artisan key:generate

6. **Crea la base de datos si no existe:**

7. **Ejecuta las migraciones:**
   ```bash
   php artisan migrate
8. **Inicia el servidor local:**
   ```bash
   php artisan serve
🎉 ¡Listo!
Tu aplicación estará corriendo en:
http://localhost:8000
