

## Installation Guide

This is a simple project for movie rating.

- First clone or download this project.
- Rename .env.example file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
- Open the console and cd your project root directory
-   Run composer install or php composer.phar install
- Run php artisan key:generate
- Run php artisan passport:install.
- Run php artisan migrate
- Run php artisan db:seed to run seeders.
- Run php artisan serve


## If for some reason your project stop working do these:

- composer install
- php artisan migrate
