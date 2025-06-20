# Laravel Calculator App

A simple calculator built using Laravel Herd. This application supports the following operations:

- Addition
- Subtraction
- Multiplication
- Division

## Project Structure

- **Project Name:** `calculator-laravel`
- **Controller:** `app/Http/Controllers/CalculatorController.php`
- **Blade Template:** `resources/views/calculator.blade.php`
- **Routes:** Defined in `routes/web.php`

## Features

- User-friendly form to input two numbers and select an operation.
- Displays result after submission.
- Handles all calculations inside the controller.

## How It Works

1. User inputs two numbers and selects an arithmetic operation.
2. Form submits the data to the `CalculatorController`.
3. Controller processes the data, performs the calculation, and returns the result.
4. Result is displayed on the same page.

## Steps to Run the Project

1. **Clone the Repository**

```bash
git clone https://github.com/Fizzaishfaq110/calculator-laravel.git
```

2. **Install Dependencies**

```bash
composer install
```
3. **Run Laravel Project Using Laravel Herd**

```bash
php artisan serve
```
4.  **Visit in Browser**
   If using laravel herd:  
```bash
http://laravel-calculator.test
```
**or** 

```bash
http://localhost:8000
```

