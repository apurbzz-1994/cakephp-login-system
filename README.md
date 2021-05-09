


# CakePHP Login System

## Description
This simple cakePHP application demonstrates the design of a robust login system where multiple entity tables having varying fields has to be incorporated with the Users table 
from Cake's Authentication plugin.

## Screenshots
Home page
![Home page](/webroot/img/screens/homepage.png)
Login page
![Login page](/webroot/img/screens/login.png)
Registration Selection
![Registration Selection](/webroot/img/screens/registration.png)
Creating an account
![New account](/webroot/img/screens/registration-2.png)

## Database Schema
![Database Schema](/webroot/img/screens/db_schema.png)


## References
Bob the builder jumbotron picture downloaded from [PinClipart](https://www.pinclipart.com/picdir/big/220-2208568_construction-zone-clip-art.png)

Bob the builder bottom section picture downloaded from [WallpaperCave](https://wallpapercave.com/bob-the-builder-wallpapers)



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
