
# Laravel Blog Project (Assignment-1)

## 📌 Project Overview
This is a **Laravel-based Blog Application** created from provided HTML/CSS source files.  
The project includes **Home Page, Profile Page, Category Page, and Single Blog Page**.  
Backend integration was done with Laravel, and several design modifications were applied.

## 🛠 Technologies Used
- Laravel 12
- PHP 8+
- MySQL
- HTML5, CSS3
- Tailwind CSS
- Blade Templates


## 🚀 Development Process
1. Converted provided HTML/CSS files into a Laravel project.
2. Integrated dynamic content using Blade templating.
3. Configured routes.
4. Applied design changes and UI enhancements.


## ✨ Features
- Dynamic Home Page
- Database-driven Categories and Blog Posts
- Profile page displaying user information
- Single Blog Page with detailed content
- Fully responsive design

## 📂 Folder Structure (Simplified)
## 📂 Folder Structure (Simplified)

```plaintext
Laravel Blog Project

│
├── public
│   ├── assets/
│   │   ├──css/
│   │   ├── js/
│   └── images/
│
├── resources
│   ├── views
│   │   ├──Auth/
│   │   │   ├──login.blade.php
│   │   │   ├──register.blade.php
│   │   ├──Includes/
│   │   │   ├──logo.blade.php
│   │   │   ├──nav.blade.php
│   │   │   ├──footer.blade.php
│   │   ├──Layouts/
│   │   │   ├──app.blade.php
│   │   ├──Pages/
│   │   │   ├──category
│   │   │   │   ├──category.blade.php
│   │   │   │   ├──single.blade.php
│   │   │   ├──Profile/
│   │   │   │   ├──profile.blade.php
│
├── routes
│   └── web.php
│
├── database
│   └── migrations/
│
├── package.json
├── vite.config.js
├── composer.json
└── README.md
```

## 🖥 Local Setup Guide
```bash
# Clone the project
git clone https://github.com/smsarowar/Interactivecares-Assignment-1.git

# Navigate to the project directory
cd repo-name

# Install dependencies
composer install

# Copy the .env file
cp .env.example .env

# Update database configuration in .env

# Generate application key
php artisan key:generate

# Run migrations and seed data
php artisan migrate

# Start the local server
php artisan serve

```
   ## 👨‍💻 Developer
S.M. Sarowar
GitHub: https://github.com/smsarowar
