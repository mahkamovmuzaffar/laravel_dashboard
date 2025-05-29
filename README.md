Here is a **clean, professional, and shorter `README.md`** for your **Laravel Skote Dashboard** project with Docker support, PostgreSQL, and auto-setup via `run.sh`:

---

````markdown
# Laravel Skote Dashboard

A modern admin dashboard built with Laravel 10+, Skote Bootstrap 5 UI, Docker, and PostgreSQL — perfect for backend portals or fintech apps.

---

## 🚀 Quick Start

```bash
docker compose up -d --build
````

* App runs at: [http://localhost:8081](http://localhost:8081)
* Auto runs `run.sh` to:

    * Install PHP dependencies
    * Create `.env` from example
    * Generate app key
    * Run migrations
    * Start Laravel server on port 8000

---

## 🛠 Stack

* Laravel 10+
* Bootstrap 5 (Skote)
* PHP 8.2 (FPM)
* PostgreSQL 15
* Docker + Compose

---

## 📂 Directory Highlights

```
├── Dockerfile            # PHP container
├── docker-compose.yml    # Services: app, postgres
├── run.sh                # Auto-setup script
├── nginx/                # (Optional if using Nginx)
├── php.ini               # PHP custom config
```

---

## 🔐 .env Defaults

```env
DB_CONNECTION=pgsql
DB_HOST=postgres
DB_PORT=5432
DB_DATABASE=skote
DB_USERNAME=root
DB_PASSWORD=secret
```

---

## ✅ After First Run

If needed:

```bash
docker compose exec app bash

# Inside container:
php artisan migrate
php artisan storage:link
```

---

## 📄 License

MIT

> Maintained by Muzaffar Makhkamov — [Telegram](https://t.me/mahkamovmuzaffar)

```

---

Let me know if you want to:
- Add badges (PHP, Laravel, Docker)
- Include screenshots
- Deploy to staging/production

Would you like me to commit this into your GitHub repo as `README.md`?
```
