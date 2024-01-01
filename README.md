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
1. Download the project (or clone using GIT)
2. Copy `.env.example` into `.env` and configure database credentials
3. Navigate to the project's root directory using terminal
4. Run `composer install`
5. Set the encryption key by executing `php artisan key:generate --ansi`
6. Run migrations `php artisan migrate --seed`
7. Add Stripe secret key to .env for payment `STRIPE_SECRET_KEY=...`
8. Start local server by executing `php artisan serve`
9. Open new terminal and navigate to the project root directory
10. Run `npm install`
11. Run `npm run dev` to start vite server for Laravel frontend

### Setup Admin Panel
1. Navigate to `backend` folder
2. Run `npm install`
3. Copy `backend/.env.example` into `backend/.env`
4. Make sure `VITE_API_BASE_URL` key in `backend/.env` is set to your Laravel API host (Default: http://localhost:8000)
5. Run `npm run dev`
6. Open Vue.js Admin Panel in browser and login with
    ```
    admin@example.com
    admin123
    ```
