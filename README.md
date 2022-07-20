## SMART Web Application

Web application for tank inspection. Developing using [Laravel 9](https://laravel.com/) Framework

### Installation

-   Clone repository to local computer
-   Update package composer
    ```
    composer update
    ```
-   Copy .env.example file to .env
    ```
    cp .env.example .env
    ```
-   Generate key to .env file
    ```
    php artisan key:generate
    ```
-   Set the database on the .env file according to the database on the local computer
-   Migrate database
    ```
    php artisan migrate:fresh --seed
    ```
-   Run server
    ```
    php artisan serve
    ```
