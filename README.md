# Hotel Management System

A web-based Hotel Management System developed using **Laravel, PHP, and MySQL** to manage hotel-related operations through a web application.

## Overview

The Hotel Management System aims to simplify hotel operations by providing a centralized application for managing hotel information and related activities.

## Technologies Used

- **Backend:** PHP, Laravel
- **Frontend:** HTML, CSS, JavaScript, Blade
- **Database:** MySQL
- **Development Environment:** XAMPP
- **Version Control:** Git and GitHub

## Features

- Web-based application developed using Laravel
- Database integration with MySQL
- Responsive user interface
- Organized application structure using the Laravel framework
- Maintainable code following Laravel conventions

## Installation and Setup

### Prerequisites

Make sure the following tools are installed:

- PHP
- Composer
- MySQL
- Node.js and npm
- XAMPP

### 1. Clone the Repository

```bash
git clone https://github.com/mohanakannandev/Hotel-Management-System.git
cd Hotel-Management-System
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Configure Environment Variables

Create your local environment file:

```bash
copy .env.example .env
```

Generate the Laravel application key:

```bash
php artisan key:generate
```

### 4. Configure the Database

1. Start Apache and MySQL in XAMPP.
2. Open phpMyAdmin and create a database named `hotel_project`.
3. Open the `.env` file in the project root.
4. Update the database configuration.

Example configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hotel_project
DB_USERNAME=root
DB_PASSWORD=
```

Use the database username and password configured on your computer.

### 5. Run Database Migrations

If your project includes Laravel migrations, run:

```bash
php artisan migrate
```

### 6. Install Frontend Dependencies

```bash
npm install
```

Start the frontend development server:

```bash
npm run dev
```

### 7. Start the Laravel Application

Open another terminal in the project directory and run:

```bash
php artisan serve
```

Open the local URL displayed in the terminal, usually:

http://127.0.0.1:8000

## Project Structure

```text
Hotel-Management/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
├── composer.lock
├── package.json
├── package-lock.json
└── README.md
```

## Security Notes

- Never upload your `.env` file or database credentials.
- Keep passwords and API keys private.
- Avoid committing database backups or sensitive information.

## Future Improvements

- Enhance hotel and room management functionality.
- Improve input validation and error handling.
- Add automated testing.
- Improve the user interface and mobile responsiveness.

## License

This project is intended for educational and development purposes unless a specific license is added.
