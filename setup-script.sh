composer install --no-dev --prefer-dist --optimize-autoloader
# npm install tailwindcss postcss autoprefixer --save-dev
php artisan key:generate
npm install
# npx tailwindcss -o public/css/tailwind.css --minify
npm run build
php artisan config:cache 
php artisan route:cache 
php artisan view:cache 
php artisan serve