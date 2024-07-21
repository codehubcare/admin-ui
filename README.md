# Admin UI

Install admin ui package in new laravel app:

```bash
composer require codehubcare/admin-ui
```

Publish package files.

```bash
php artisan vendor:publish
```

Select `Provider: Codehubcare\AdminUi\AdminUiServiceProvider ` provider

Redirect to admin route

```bash
http://127.0.0.1:8000/admin
```
