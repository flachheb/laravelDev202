# 🛒 Laravel E-Commerce — One-to-Many Exercise

## 📚 What This Project Teaches

This project demonstrates the **One-to-Many** relationship in Laravel:

```
Category  ──────<  Products
(one)             (many)
```

- **One Category** can have **many Products**
- **One Product** belongs to **one Category**
- The link is the `category_id` column in the `products` table (foreign key)

---

## 🗂️ Project Structure

```
app/
├── Models/
│   ├── Category.php          ← hasMany(Product::class)
│   └── Product.php           ← belongsTo(Category::class)
├── Http/Controllers/
│   ├── CategoryController.php ← CRUD for categories
│   └── ProductController.php  ← CRUD for products

database/migrations/
├── ..._create_categories_table.php   ← id, name, description
├── ..._create_products_table.php     ← id, name, price, stock, category_id (FK)

database/seeders/
└── DatabaseSeeder.php         ← Sample categories and products

resources/views/
├── layouts/app.blade.php      ← Main layout
├── categories/
│   ├── index.blade.php
│   ├── show.blade.php         ← Shows all products in a category
│   ├── create.blade.php
│   └── edit.blade.php
└── products/
    ├── index.blade.php
    ├── show.blade.php
    ├── create.blade.php
    └── edit.blade.php

routes/web.php                 ← Route::resource for both
```

---

## ⚙️ Setup Instructions

### 1. Install Laravel (if not already installed)
```bash
composer global require laravel/installer
```

### 2. Create a new Laravel project and copy files
```bash
laravel new ecommerce
cd ecommerce
```
Copy all files from this zip into your project folder.

### 3. Configure your database
Copy `.env.example` to `.env` and update database settings:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate app key
```bash
php artisan key:generate
```

### 5. Create the database
Create a MySQL database named `ecommerce` (or use SQLite — see below).

### 6. Run migrations
```bash
php artisan migrate
```

### 7. Seed sample data
```bash
php artisan db:seed
```

### 8. Start the server
```bash
php artisan serve
```

Visit: **http://localhost:8000**

---

## 🗄️ Using SQLite (easier for beginners)

Change your `.env`:
```
DB_CONNECTION=sqlite
```

Then create the file:
```bash
touch database/database.sqlite
```

Then run migrations and seed:
```bash
php artisan migrate --seed
```

---

## 🔗 The Relationship Explained

### In the Migration
```php
// products table has a foreign key pointing to categories
$table->foreignId('category_id')->constrained()->onDelete('cascade');
```

### In the Models
```php
// Category.php — ONE category HAS MANY products
public function products(): HasMany {
    return $this->hasMany(Product::class);
}

// Product.php — ONE product BELONGS TO ONE category
public function category(): BelongsTo {
    return $this->belongsTo(Category::class);
}
```

### In the Views
```php
// Get all products of a category
$category->products   // returns a Collection of Product models

// Get the category of a product
$product->category    // returns a Category model
$product->category->name  // "Electronics"
```

---

## 🌐 Available Routes

| Method | URL | Action |
|--------|-----|--------|
| GET | /categories | List all categories |
| GET | /categories/create | Create form |
| POST | /categories | Save new category |
| GET | /categories/{id} | Show category + its products |
| GET | /categories/{id}/edit | Edit form |
| PUT | /categories/{id} | Update category |
| DELETE | /categories/{id} | Delete category |
| GET | /products | List all products |
| GET | /products/create | Create form |
| POST | /products | Save new product |
| GET | /products/{id} | Show product |
| GET | /products/{id}/edit | Edit form |
| PUT | /products/{id} | Update product |
| DELETE | /products/{id} | Delete product |
