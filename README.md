# Laravel E-commerce Website
A fully-featured e-commerce app.

## Techs
- Laravel
- Vue
- Vuex
- Tailwindcss
- Alpine.js
- MySql
- PHP 8.1


## Installation
### Setup Laravel
- Download the project (or clone using GIT)
- Copy `.env.example` into `.env` and configure database credentials
- Navigate to the project's root directory using terminal
- Run `composer install`
- Run `php artisan storage:link` for storage link
- Set the encryption key by executing `php artisan key:generate --ansi`
- Run migrations `php artisan migrate --seed`
- Add Stripe secret key to .env for payment `STRIPE_SECRET_KEY=...`
- Start local server by executing `php artisan serve`
- Open new terminal and navigate to the project root directory
- Run `npm install`
- Run `npm run dev` to start vite server for Laravel frontend
- Setup email configs in .env for sending email

### Setup Admin Panel
- Navigate to `backend` folder
- Run `npm install`
- Copy `backend/.env.example` into `backend/.env`
- Make sure `VITE_API_BASE_URL` key in `backend/.env` is set to your Laravel API host (Default: http://localhost:8000)
- Run `npm run dev`
- Open Vue.js Admin Panel in browser and login with
    ```
    admin@example.com
    admin123
    ```
