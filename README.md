--> Steps for installation of project on your local system 

Open command prompt and in your C://xampp/htdocs/ folder run: 

$  git clone <https://git-repository-url>
$  composer install
$  cp .env.example .env
$  php artisan key:generate
--> Set DB_DATABASE in .env file as your phpmyadmin DB name
$  php artisan migrate:fresh --seed
$  php artisan serve
--> In your browser visit http://127.0.0.1:8000