# learnphp

A PHP blog project with World, U.S., Technology, Forms, and Articles pages.

## Requirements

- Git
- PHP **8.4.1 or newer**
- Composer
- Internet access for Composer package downloads and the Tailwind CSS CDN used by the Technology page

The project uses SQLite. The repository includes a `db.sqlite` database file.

## 1. Clone the repository

Open a terminal and run:

```bash
git clone https://github.com/laurabachverk-droid/learnphp.git
cd learnphp
```

## 2. Install PHP dependencies

From the project root (the directory containing `composer.json`), run:

```bash
composer install
```

Composer creates the `vendor/` directory and `vendor/autoload.php`, which the application needs to start.

If Composer reports that your PHP version is too old, install PHP 8.4.1 or newer and make sure Composer uses that PHP version. On Windows, check the active versions with:

```bash
php -v
composer --version
```

If the `openssl` extension is missing, enable it in the active PHP configuration (`php.ini`) and confirm it is loaded:

```bash
php -m
```

Look for `openssl` in the module list before running Composer again.

## 3. Start the development server

Run this command from the project root:

```bash
php -S localhost:8000 -t public
```

Keep the terminal open while using the site.

If `php` is not on your Windows PATH, run the server with the full path to your PHP executable, for example:

```bash
C:/path/to/php.exe -S localhost:8000 -t public
```

Replace `C:/path/to/php.exe` with the actual path to your PHP executable.

## 4. Open the site

Visit these URLs in your browser:

- Home / World: http://localhost:8000/
- U.S.: http://localhost:8000/us
- Technology: http://localhost:8000/tech
- Forms: http://localhost:8000/forms
- Articles: http://localhost:8000/admin/articles

The Technology page includes a Tailwind CSS primary-button example with hover, active, and focus states. Tailwind is loaded from its CDN, so that example requires an internet connection.

## Troubleshooting

### `vendor/autoload.php` not found

Run `composer install` from the project root and wait for it to finish successfully. Do not run the command from the `public/` directory.

### Composer says the PHP version is too old

The project dependency `symfony/var-dumper` requires PHP 8.4.1 or newer. Check which PHP version Composer is using with `php -v`, then configure Composer to use PHP 8.4.1+.

### Port 8000 is already in use

Stop the other server or choose another port, for example:

```bash
php -S localhost:8001 -t public
```

Then open http://localhost:8001/tech.