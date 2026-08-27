# Mini Project Template Dashboard Admin Sekolah

<img width="100%" alt="gambar" src="https://github.com/user-attachments/assets/90f50bde-c032-4c61-a383-009374cfb4c2" />


<p align="center">
    <br><strong>bladeworks.</strong>
    <br><br>
    <img src="https://img.shields.io/badge/Laravel-13-FF2D20?style=flat&logo=laravel&logoColor=white" alt="Laravel 13">
    <img src="https://img.shields.io/badge/PHP-8.3%2B-777BB4?style=flat&logo=php&logoColor=white" alt="PHP 8.3+">
    <img src="https://img.shields.io/badge/MySQL-8.0%2B-4479A1?style=flat&logo=mysql&logoColor=white" alt="MySQL">
    <img src="https://img.shields.io/badge/Tailwind_CSS-4-06B6D4?style=flat&logo=tailwindcss&logoColor=white" alt="Tailwind CSS">
    <img src="https://img.shields.io/badge/Blade-FF2D20?style=flat&logo=laravel&logoColor=white" alt="Blade">
    <br>
</p>

1. **Clone repository & install dependencies.**
   ```bash
   composer install
   npm install
   npm run build
   ```

2. **Setup environment (.env).**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Migrasi & seed database MySQL.**
   ```bash
   php artisan migrate:fresh --seed
   ```

4. **Jalankan server lokal.**
   ```bash
   php artisan serve
   ```

Akses aplikasi di browser: `http://127.0.0.1:8000`.
