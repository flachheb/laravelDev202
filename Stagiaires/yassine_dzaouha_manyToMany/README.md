# 🛒 Laravel E-Commerce — Many-to-Many Exercise

## 📚 The Relationship

```
Categories  >────────<  Products
(many)      pivot table  (many)
```

A product can belong to **many categories**.
A category can have **many products**.
The link is a **pivot table** called `category_product`.

---

## 🗃️ Database Tables

```
categories           category_product        products
----------           ----------------        --------
id                   id                      id
name                 category_id  ───────>   name
description          product_id   ───────>   description
                                             price
                                             stock
```

The pivot table `category_product` only stores pairs of IDs — nothing else.

---

## 🗂️ Project Files

```
database/migrations/
├── ..._create_categories_table.php
├── ..._create_products_table.php
└── ..._create_category_product_table.php  ← THE PIVOT TABLE

app/Models/
├── Category.php   → belongsToMany(Product::class)
└── Product.php    → belongsToMany(Category::class)

app/Http/Controllers/
├── CategoryController.php
└── ProductController.php   ← uses sync() to save pivot rows
```

---

## ⚙️ Setup

```bash
# 1. Copy files into your Laravel project
# 2. Configure .env (SQLite is easiest)
# 3. Run:
php artisan migrate --seed
php artisan serve
```

Visit: http://localhost:8000

---

## 🔑 Key Concepts

### sync() — how categories are saved
When you save a product with categories [1, 3]:
```php
$product->categories()->sync([1, 3]);
```
Laravel inserts into the pivot table:
```
category_id | product_id
     1      |     5
     3      |     5
```

When you update and change to [2, 3], `sync()` automatically:
- Removes category 1
- Keeps category 3
- Adds category 2

### Accessing the relationship
```php
$product->categories        // all categories of a product
$category->products         // all products in a category
$product->categories->count()  // how many categories
```
