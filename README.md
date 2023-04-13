# Laravel Livewire Pagination Example

This is a simple Laravel application that demonstrates how to implement Livewire pagination for a table of Employees with columns 'emp_name', 'email', 'gender', 'city', and 'status'.

## Requirements
+ PHP v8.1.12
+ Composer
+ Live wire
+ Bootstrap

## Installation
1. Clone the repository

```
git clone https://github.com/sinachoghadi/Laravel-livewire-pagination.git
```

2. Install the dependencies

```
composer install

```

3. Copy the `.env.example` file to `.env` and set your enviroment variables.
   
```
cp .env.example .env
```

4. Generate an application key:

```
php artisan key:generate
```

5. Run the migrations:
   
```
php artisan migrate
```

6. Seed the database with test data (optional):

```
php artisan db:seed
```
7. Start the development server:

```
php artisan serve
```

## Usage
To use this application, simply navigate to the homepage in your web browser:

[php artisan serve](http://localhost:8000)

From here, you can view a paginated table of Employees with columns 'emp_name', 'email', 'gender', 'city', and 'status'. You can also search and filter the table data using the input fields provided.

## credits
This project was created by Sina Choghadi. It is based on the [Laravel](https://laravel.com/), [Live wire](https://laravel-livewire.com/) , and uses the [Bootstrap](https://getbootstrap.com/) library for styling.

## License
This project is open source software licensed under the [Mit license](https://opensource.org/license/mit/)
