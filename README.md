<p align="center">
  <img src="https://laravel.com/img/logomark.min.svg" width="120" alt="Laravel Logo">
</p>

<h1 align="center">Laravel Role-Based Authentication</h1>

<p align="center">
A user authentication and management system built with Laravel 12 and Laravel Breeze.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12-red" alt="Laravel 12">
  <img src="https://img.shields.io/badge/PHP-8.2+-blue" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-Database-orange" alt="MySQL">
</p>

---

## About This Project

This project was developed using Laravel 12 and Laravel Breeze to implement a complete authentication and user management system.

The application includes user registration, login, logout, profile management, role-based authorization, and an admin dashboard for managing users.

---

## Features

* User Login
* User Registration
* Secure Logout
* Profile Management
* Phone Number Validation (`no_hp`)
* Role-Based Access Control (`user` and `admin`)
* Admin Middleware Protection
* Admin Dashboard (User Management)

---

## Installation Guide

### Clone Repository

```bash
git clone https://github.com/iMaIrsdyh/laravel-role-based-auth.git
cd laravel-role-based-auth
```

### Install PHP Dependencies

```bash
composer install
```

### Install Frontend Dependencies

```bash
npm install
```

### Configure Environment

```bash
cp .env.example .env
```

Windows:

```bash
copy .env.example .env
```

### Generate Application Key

```bash
php artisan key:generate
```

### Configure Database

Create a database:

```text
laravel_auth
```

Edit `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_auth
DB_USERNAME=root
DB_PASSWORD=
```

### Run Migration

```bash
php artisan migrate
```

### Run Application

Terminal 1:

```bash
npm run dev
```

Terminal 2:

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

---

## Admin Setup

1. Register a user account.
2. Open phpMyAdmin.
3. Open table `users`.
4. Change the value of the `role` field to:

```text
admin
```

5. Save the changes.
6. Login again.

Admin page:

```text
http://127.0.0.1:8000/admin
```

---

## Project Tasks

### Task 1 - Phone Number Feature

* Added `no_hp` column to users table
* Registration validation for phone number
* Display phone number on dashboard

### Task 2 - Profile Management

* Added phone number field to profile page
* Profile update functionality

### Task 3 - Admin Feature

* User and Admin roles
* Custom Admin Middleware
* Protected Admin Route
* User Management Dashboard

---

## Author

Karimah Irsyadiyah

Universitas Andalas

Course: Web Programming
