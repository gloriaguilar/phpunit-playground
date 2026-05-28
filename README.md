# PHPUnit Playground

PHPUnit playground with beginner-friendly mini projects, testing examples, and PHPUnit practice exercises.
---

# Topics Covered

* PHPUnit basics
* Unit testing
* Assertions
* Bootstrap configuration
* Autoloading with `spl_autoload_register`
* PHPUnit CLI commands
* Test organization

---

# Project Structure

```bash
phpunit-playground/
│
├── project-01-calculator/
├── project-02-email-validator/
├── project-03-string-helper/
│
└── README.md
```

---

# PHPUnit Commands

## Run tests

```bash
phpunit tests
```

## Run tests with colors

```bash
phpunit --colors tests
```

## Stop on first failure

```bash
phpunit --stop-on-failure tests
```

## Run tests with TestDox output

```bash
phpunit --testdox tests
```

---

# Basic Autoload Example

```php
spl_autoload_register(function ($class){

    $file = dirname(__DIR__) . '/src/' . str_replace('\\','/', $class) . '.php';

    if(file_exists($file)){
        require $file;
    }

});
```

---

# Example Projects

## Project 01 - Calculator

Basic calculator class with unit tests.

Topics:

* Assertions
* Math operations
* Test structure

---

## Project 02 - Email Validator

Simple email validation project.

Topics:

* Input validation
* True/False assertions
* Edge cases

---

## Project 03 - String Helper

Utility methods for string manipulation.

Topics:

* String functions
* Multiple test cases
* Code organization

---

# Goals

This repository was created to improve PHP testing skills and practice PHPUnit fundamentals through small and simple projects.

---

# Author

Gloria Aguilar
