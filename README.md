## Prototype Booking System ##

## Database Structure
- Room Types
- Rooms
- Customers
- Booking

## Installation ##

```php
composer install
```

Copy file .env.example to .env and adjust database credentials

```php
php artisan migrate
php artisan db:seed
php artisan serve
```

Import file laravel-rest-api.postman_collection.json to postman app for testing endpoint


## TODO ##
- Unit Testing
- Dockerize Application
