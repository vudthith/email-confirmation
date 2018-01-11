# Email Confirmation for Laravel

This package enables email confirmation for users in your Laravel app.

## Installation

Begin by pulling in the package through Composer.

```bash
composer require submtd/email-confirmation
```

Next, if you are using Laravel 5.4, you will need to include the service providers in your `config/app.php` file. If you are using Laravel 5.5, these will be discovered automatically.

```php
'providers' => [
    Submtd\EmailConfirmation\Providers\EmailConfirmationServiceProvider::class,
    Submtd\EmailConfirmation\Providers\EmailConfirmationListeners::class,
];
```

Next, you will need to run the migrations in order to add the `confirmed` and `confirmation_token` columns to your users table.

```bash
php artisan migrate
```

Finally, in order to see the status messages generated by this package, you will need to add the following code to your applications main blade template file.

```html
@if(session('status'))
    <div class="alert">
        {{ session('status') }}
    </div>
@endif
```

## Configuration

If you would like to edit the configuration, you must run the following artisan command to copy the config file and the views to your app directory.

```bash
php artisan vendor:publish --provider="Submtd\EmailConfirmation\Providers\EmailConfirmationServiceProvider"
```

After running this command, the status messages can be found in `config/email-confirmation.php` and the email template can be found in `resources/views/vendor/email-confirmation/ConfirmEmail.blade.php`.

## Donation

If this project helped you save some development time, feel free to buy me a beer ;)

[![paypal](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=G72FZ5PYP6EZU)
