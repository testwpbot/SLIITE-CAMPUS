# SLIITE CAMPUS — LMS (Laravel 11)

Modern LMS for SLIITE Campus, Sri Lanka.

## 🎨 Design
- Palette extracted from logo: Navy #0F2D4D, Teal #0E9F9C, Gold #FFB703
- Fonts: Plus Jakarta Sans + Outfit
- Tailwind CSS via CDN (for dev), Vite for prod

## 🚀 Landing Page
- Route: `GET /` -> `LandingController@index` -> `resources/views/landing.blade.php`
- Preview: `public/index.html` (static copy for sandbox preview)

## 📁 Structure
```
app/Http/Controllers/LandingController.php
routes/web.php
resources/views/landing.blade.php
public/images/logo-mark.png
public/images/hero-student.png
public/index.html
```

## 🛠️ Setup (with PHP/Composer)
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
# visit http://localhost:8000
```

## Preview without PHP
```bash
npx serve public
# or
python3 -m http.server --directory public 8000
```

Built with Laravel 11 + Blade + Tailwind. Landing only — auth/LMS modules next.
