
## About the Project

### Build with
* [Laravel](https://laravel.com/)
* [php](https://php.net/)
* [MySQL]
* [HTML]
* [CSS]

## Getting Started
- Clone the repository in Visual Studio Code
- Locate the project folder on the computer
- The CMS uses the public storage driver, make sure to update your .env file to:

```php
FILESYSTEM_DRIVER=public
```

- Create the symbolic link to set the File Storage for image functions:

```
php artisan storage:link
```

- The database setup includes migrations and seeding. Run the following command to initialize the database:

```
php artisan migrate:refresh --seed
```

- All user acocunts will have the default password of "admin".
- Run the Laravel Project
```
php artisan serve
```
- The project has been set up


## Tutorial Requirements:
* [Visual Studio Code](https://code.visualstudio.com/) or [Brackets](http://brackets.io/) (or any code editor)
* [Laravel](https://laravel.com/)