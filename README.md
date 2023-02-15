# Rental OrderPicker WAPI module

## Installation
- [Setup Composer](https://repo.weap.nl/packages/readme)
- Run `composer require wapi/order-picker`
- Run `php artisan vendor:publish --tag=wapi-public`
- Run `php artisan vendor:publish --tag=order-picker`

### Note
The first day of the week is determined by the env variable `APP_LOCALE`.

## Updates
- Change version requirement if necessary
- Run `composer update`
- Run `php artisan vendor:publish --tag=wapi-public --force`
- Check config file to see if any new config values are added

## Custom-fields to use

- These fields are customFields for (orders)-> the `bs_orders` table. (they are used so save data from the order.)

- Create 'paid_with_cash' field (boolean).
- Create 'order_confirmed' field (boolean).
- Create 'deliver_comment' field (text).
- Create 'pick_up_comment' field (text).
