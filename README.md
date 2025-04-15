![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

# 🧺 LaundryZa - Laundry Management System (Beta Version)

![Project Screenshot](/resources/assets/landing-page.png)

Laundry management system with 3 user roles (Admin, Owner, Member) 

## ✨ Features

### Role-Based Access
- 👑 Owner: Full system control
- 👔 Admin: Daily operations
- 👕 Staff: Order processing

### Key Functionalities
- 📊 Dashboard analytics
- 🧾 Order menggunakan whatsapp
- 📦 Inventory management
- 📈 Reporting system

## 🖥️ Screenshots

| Role | Screenshots |
|------|-------------|
| Landing Page | ![Landing](/resources/assets/landing-page.png) |
| Admin | ![Admin](/resources/assets/admin/dashboard.png) |
| Admin | ![Admin](/resources/assets/admin/input.png) |
| Admin | ![Admin](/resources/assets/admin/history.png) |
| Admin | ![Admin](/resources/assets/admin/edit.png) |
| Owner | ![Owner](/resources/assets/owner/dashboard.png) |
| Owner | ![Owner](/resources/assets/owner/data-order.png) |
| Owner | ![Owner](/resources/assets/owner/list-admin.png) |
| Owner | ![Owner](/resources/assets/owner/list-admin-edit.png) |

## 🚀 Installation

```bash
# Clone repository
git clone https://github.com/DiandraFrza/LaundryZa.git

# Install dependencies
composer install
npm install

# Setup environment
cp .env.example .env
php artisan key:generate

# Database setup
php artisan migrate --seed
