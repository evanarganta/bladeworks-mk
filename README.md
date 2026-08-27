# Mini Project Membuat Template Dashboard Admin Sekolah: bladeworks.

Template Dashboard Admin Sekolah berbasis Laravel Blade dengan MySQL Database, Migrations, dan Seeders.

## Jalankan

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
