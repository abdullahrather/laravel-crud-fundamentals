# Laravel CRUD Fundamentals

A Laravel 12 app that works through the framework's core features in one codebase: full CRUD with soft deletes, Eloquent relations, Blade components, sessions, seeding and every common controller style. It also has a multi-page front-end site built from reusable components.

## Features

- **Customers and groups CRUD:** create, list, edit, move to trash, restore and permanently delete, for both customers and groups
- **Soft deletes** with a separate trash view for each entity
- **Eloquent relations:** each customer belongs to a group, and a group has many customers
- **Server-side validation** with error messages shown on the form
- **Blade components:** class-based components for inputs, selects, textareas, checkboxes, buttons, images, navigation and page sections
- **Front-end site:** home, about, portfolio, services and team pages built from those components
- **Sessions:** routes that set, read and clear session data
- **Controller styles:** standard, single-action (`__invoke`) and resource controllers
- **Seeding:** 100 fictional customers across 3 groups, generated with Faker
- **Global helper** (`app/helper.php`) loaded through Composer autoload

## Tech stack

PHP 8.2+, Laravel 12, MySQL (or SQLite), Blade and Bootstrap 5.

## Getting started

You need PHP 8.2 or newer, Composer, and MySQL or SQLite.

```bash
git clone https://github.com/abdullahrather/laravel-crud-fundamentals.git
cd laravel-crud-fundamentals
composer install
cp .env.example .env
php artisan key:generate
```

Set the `DB_*` values in `.env`, then create the tables and sample data:

```bash
php artisan migrate --seed
php artisan serve
```

## Pages

| URL | What it shows |
|---|---|
| `/` | Front-end site home, with `/about-us`, `/portfolio`, `/services` and `/team` |
| `/customer`, `/customer/view`, `/customer/trash` | Add, list and trashed customers |
| `/group`, `/group/view`, `/group/trash` | Add, list and trashed groups |
| `/register` | Registration form with validation |
| `/resource` | Resource controller routes |
| `/courses` | Single-action controller |

## Tests

```bash
php artisan test
```

## License

MIT
