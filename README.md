


# CakePHP Login System

## Description
This simple cakePHP application demonstrates the design of a robust login system where multiple entity tables having varying fields has to be incorporated with the Users table 
from Cake's Authentication plugin.

## Screenshots
Home page
![Start page](/webroot/img/screens/homepage.png)
Login page
![Friends view](/webroot/img/screens/login.png)
Registration Selection
![Friends view](/webroot/img/screens/registration.png)
Creating an account
![Friends view](/webroot/img/screens/registration-2.png)

## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.
