# laravel-sumup

## Install via composer
```bash
composer require alexcode/laravel-sumup
```

## Add service provider ( Laravel 5.4 or below )
Add the service provider to the providers array in the config/app.php config file as follows:
```php
'providers' => [

    ...

    Alexcode\Sumup\Laravel\LaravelServiceProvider::class,
]
```
## Publish the config
Run the following command to publish the package config file:
```bash
php artisan vendor:publish --provider="Alexcode\Sumup\Laravel\LaravelServiceProvider::class"
```
You should now have a config/sumup.php file that allows you to configure the basics of this package.

## Add the .env vars
Add `SUMUP_CLIENT_ID` and `SUMUP_SECRET` in your `.env`. You will find the values in https://me.sumup.com/developers

### More doc on the [Sumup-php lib](https://github.com/alexcode/sumup-php)
