<h1>Roadmap.sh:</h1>
<a href="https://roadmap.sh/projects/expense-tracker-api">Expanses Tracker API</a>

# Laravel Project Setup Guide

Follow these steps to clone and run a Laravel project from GitHub.

---

## 1. Clone the Repository

```bash
git clone https://github.com/benianus/expanses-tracker-api-laravel
cd repository-name
```
Replace the URL with the actual repository URL.

---

## 2. Install Dependencies

**PHP dependencies (Composer):**
```bash
composer install
```

**JavaScript/CSS dependencies (Node.js):**
```bash
npm install
```

---

## 3. Create Environment File

```bash
cp .env.example .env
```
On Windows (PowerShell):
```powershell
copy .env.example .env
```

---

## 4. Generate Application Key

```bash
php artisan key:generate
```

---

## 5. Configure the Database

Edit `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
```
---

## 6. Run Migrations and Seeders

```bash
php artisan migrate
```
With seed data:
```bash
php artisan migrate --seed
```

---

## 7. Build Frontend Assets

```bash
npm run dev   # development
npm run build # production
```

---

## 8. Start the Development Server

```bash
php artisan serve
```
Open your browser at:
```
http://127.0.0.1:8000
```
