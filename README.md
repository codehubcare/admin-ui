# Admin UI
Create new Laravel project:

```bash
composer create-project laravel/laravel [project-name]
```

Set up Mysql Database, by changing .env file:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=[database-name]
DB_USERNAME=root
DB_PASSWORD=root
```

Install Laravel/ui package

```bash
composer require laravel/ui
php artisan ui bootstrap --auth
```

Install Admin-UI package.

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
