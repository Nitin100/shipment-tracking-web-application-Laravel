# Shipment Tracking Web Application (Laravel)

A modern, server-side rendered Shipment Tracking System built using **Laravel (PHP 8+)**. This application allows users to search, view, and track shipments with a detailed status timeline and clean UI.

---

## Features

- Shipment Listing with Pagination  
- Search by Tracking Number  
- Detailed Shipment View  
- Status Timeline with Location & Timestamps  
- Server-Side Rendering (Blade Templates)  
- Clean MVC Architecture  
- Eloquent Relationships & Optimized Queries  

---

## Tech Stack

- **Backend:** Laravel (Latest Version)  
- **Language:** PHP 8+  
- **Database:** MySQL / MariaDB  
- **Frontend:** Blade + Bootstrap 5  
- **ORM:** Eloquent  

---

## 📂 Project Structure

shipment-tracker/
├── app/
│ ├── Http/Controllers/
│ │ └── ShipmentController.php
│ └── Models/
│ ├── Shipment.php
│ └── StatusLog.php
├── database/
│ ├── migrations/
│ └── seeders/
├── resources/
│ └── views/
│ ├── layouts/
│ └── shipments/
├── routes/
│ └── web.php
└── README.md

## 2. Install Dependencies

```bash
composer install
npm install
```


## 3. Environment Configuration
```bash
cp .env.example .env
php artisan key:generate

Update database credentials in .env:
DB_DATABASE=shipment_tracker
DB_USERNAME=root
DB_PASSWORD=your_password

```

## 4. Create Database
CREATE DATABASE shipment_tracker;

## 5. Run Migrations
php artisan migrate

## 6. Seed Sample Data
php artisan db:seed

## 7. Start Development Server
php artisan serve


Open in browser:
http://127.0.0.1:8000/


📌 Application Routes

| Method | URL               | Description                              |
| ------ | ----------------- | ---------------------------------------- |
| GET    | `/shipments`      | View all shipments (search + pagination) |
| GET    | `/shipments/{id}` | View shipment details & status timeline  |


🗃️ Database Schema

Shipments Table

| Column           | Type      | Description                      |
| ---------------- | --------- | -------------------------------- |
| id               | BIGINT    | Primary Key                      |
| tracking_number  | STRING    | Unique shipment identifier       |
| sender_name      | STRING    | Sender name                      |
| sender_address   | STRING    | Sender address                   |
| receiver_name    | STRING    | Receiver name                    |
| receiver_address | STRING    | Receiver address                 |
| status           | ENUM      | Pending / In Transit / Delivered |
| created_at       | TIMESTAMP | Created time                     |
| updated_at       | TIMESTAMP | Updated time                     |


------------------------------------------------------------------------------------------------

Status Logs Table

| Column      | Type      | Description                |
| ----------- | --------- | -------------------------- |
| id          | BIGINT    | Primary Key                |
| shipment_id | BIGINT    | Foreign key (shipments.id) |
| status      | ENUM      | Shipment status            |
| location    | STRING    | Current location           |
| created_at  | TIMESTAMP | Status timestamp           |
| updated_at  | TIMESTAMP | Updated time               |


👨‍💻 Author

Nitin Tushar
Full Stack Developer (Laravel | Node.js | Go | MERN)

LinkedIn: https://www.linkedin.com/in/nitin-tushar-b748b3a8