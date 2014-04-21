# laravel-pretty-dump

## Installation

Add the `laravel-pretty-dump` with the following composer command:

```bash
composer require "kotchuprik/laravel-pretty-dump"
```

Or add it to the `composer.json` file:

```
"require": {
    "laravel/framework": "4.1.*",
    "kotchuprik/laravel-pretty-dump": "dev-master"
}
```

After adding the require, you must update the composer by executing `composer update`.

Next, add the `kotchuprik\PrettyDump\ServiceProvider` to the `app/config/app.php` providers.

## Usage

To use in code:

```php
<?php
$array = array('first' => 42, 'second' => 'another');
PrettyDump::dump($variable)
```

To use as the blade extension in views:

```html
<div class="container">
    @prettyDump($variable)
</div>
```
