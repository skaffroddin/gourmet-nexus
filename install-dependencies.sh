composer install --no-dev --prefer-dist --optimize-autoloader
npm install laravel-mix tailwindcss postcss autoprefixer --save-dev
cp env-final .env
php artisan key:generate
npm install
php artisan config:cache 
php artisan route:cache 
php artisan view:cache 
php artisan serve


# cp .env.example .env
#         php artisan key:generate
# 2.npm install
# 3. npx tailwindcss -o public/css/tailwind.css --minify
# 4. npm run build


# cp .env.example .env
# php artisan key:generate 
# php artisan config:cache php artisan route:cache php artisan view:cache php artisan serve


# php artisan cache:clear && \
# php artisan route:clear && \
# php artisan config:clear && \
# php artisan view:clear && \
# php artisan optimize:clear && \
# php artisan config:cache && \
# php artisan route:cache
