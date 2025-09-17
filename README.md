# Laravel Task Manager — Demo (Upload-ready)

**Purpose:** lightweight, professional Laravel-style demo repository suitable for uploading to GitHub as a sample backend portfolio.  
This demo is intentionally *small* (no vendor files) so you can upload it from a phone. It includes a clear README, routes, controllers, models, migrations, seeders, and Blade views to demonstrate Laravel familiarity.

---

## Features
- Authentication skeleton (Login / Register) — demo controllers & views
- Task CRUD (Create / Read / Update / Delete)
- Server-side validation examples
- Migration and seeder for `tasks` table
- Clean project structure and documentation that recruiters/CTOs can read quickly

---

## How to use (for reviewers)
This is a demo Laravel project. To run locally (requires PHP, Composer, and a database):

1. Clone the repo:
```bash
git clone https://github.com/<your-username>/<repo>.git
cd <repo>
```

2. Install dependencies:
```bash
composer install
```

3. Copy `.env.example` to `.env` and set DB credentials. Then generate app key:
```bash
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

4. Default seeded user (for testing):
- Email: `demo@example.com`
- Password: `password`

> Note: This package is a *code sample* intended to showcase backend structure and familiarity with Laravel conventions. It does not include `vendor/` or runtime binaries so it is small and upload-friendly.

---

## Files of interest
- `app/Http/Controllers/TaskController.php`
- `app/Models/Task.php`
- `database/migrations/2025_01_01_000000_create_tasks_table.php`
- `database/seeders/TaskSeeder.php`
- `routes/web.php`
- `resources/views/` (Blade templates)
- `README.md` (this file)

---

## Tips for uploading from mobile
1. On GitHub mobile website, create a new repository, then choose **Add file → Upload files** and upload the ZIP contents (after unzipping on your phone).
2. Or upload the provided ZIP directly to the new repo page.

---

If you want, I can also generate a short cover text you can paste into the GitHub repo description for recruiters.  
Good luck — let me know your GitHub username so I can tailor the README's example links.
