git clone
edit .env
composer install
php artisan key:generate
php artisan migrate:fresh --seed
