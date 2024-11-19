# Laravel Post Project - MS Sketch interview assessment

This is a simple Laravel-based Post application with CRUD functionality for managing posts. The project demonstrates basic Laravel features, including routes, controllers, views, form validation, flash messages, mass assignment protection, and more.

## Features
- **CRUD Operations**: Create, Read, Update, Delete posts.
- **Form Validation**: Ensures valid input for post creation and updating.
- **Flash Messages**: Provides feedback messages after CRUD operations.
- **Mass Assignment Protection**: Safeguards against mass assignment vulnerabilities.
- **Import/Export**: Basic functionality for importing and exporting posts.

## Prerequisites

Before running this project, ensure you have the following installed on your machine:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/)
- [Node.js](https://nodejs.org/) (for asset compilation)

## Installation

### Step 1: Clone the Repository

```bash
git clone https://github.com/Sabari-sankar/MS-Sketch-interview-assessment.git
cd MS-Sketch-interview-assessmen
```

## Installation and Setup

### Step 2: Install Dependencies

Run the following command to install the required PHP packages and dependencies:

```bash
composer install
```
## Configure Environment

### Step 3: Configure Environment

Copy the .env.example file to create your own .env file:

```bash
cp .env.example .env
```
Update the .env file with your database credentials:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
## Generate Application Key


### Step 4: Generate Application Key

Run the following command to generate the application key:

```bash
php artisan key:generate
```
## Run Migrations

### Step 5: Run Migrations

Before you can run the Laravel application, you'll need to create a database for the project as ms_sketch_task You can do this manually using a MySQL client

Run the database migrations to create the required tables:

```bash
php artisan migrate
```
## Start the Development Server

### Step 6:  Start the Development Server

You can start the Laravel development server using the following command:

```bash
php artisan serve
```
Your application will be available at http://127.0.0.1:8000/
