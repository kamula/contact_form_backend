# Contact Form Backend API service

This project was generated with [Laravel](https://laravel.com), a PHP framework for building modern web applications.

## Prerequisites

Before you begin, ensure you have PHP and Composer installed on your local machine. You will also need SQLite for local development, though you can configure another database system for production in the `.env` file.

## Cloning the Project

To get started, clone the repository to your local machine:

```bash
git clone https://github.com/kamula/contact_form_backend.git
cd contact_form_backend
```

## Environment Setup

After cloning the project, copy the contents from `env.sample` to a new `.env` file:

```bash
cp .env.example .env
```

Edit the `.env` file to configure your database and other environment settings. Make sure the database connection settings are appropriate for SQLite:

```
DB_CONNECTION=sqlite
```

## Preparing the Database

Create an empty file named `database.sqlite` in the `database` directory of your project:

```bash
touch database/database.sqlite
```

## Installing Dependencies

Run the following command to install the necessary PHP dependencies:

```bash
composer install
```

## Database Migration

To set up your database schema, run the migrations:

```bash
php artisan migrate
```

## Running the Server

Start the Laravel development server:

```bash
php artisan serve
```

Navigate to `http://localhost:8000/` to view the application.

## API Documentation

For detailed API usage and examples, please refer to our [API Documentation on Postman](https://documenter.getpostman.com/view/9260831/2sA3JGeiPY).

## Reasons for Using SQLite 

- **Ease of Setup**: SQLite databases are easy to set up and require no separate server process.
- **Portability**: A SQLite database is stored in a single file, which can easily be copied or shared.
- **Low Resource Usage**: SQLite is light on resources, which makes it perfect for development and testing environments.

## Switching Database in Production

While SQLite is suitable for development, you may opt for a more robust database system in production (e.g., MySQL, PostgreSQL). Laravel's database agnostic architecture allows you to switch databases simply by updating your `.env` configuration.

## Validations

Validation rules are applied in the `ContactController` to ensure that `fullName`, `email`, and `message` are correctly formatted and not empty, enhancing data integrity and security.
