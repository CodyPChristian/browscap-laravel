Browscap Parsing Class for Laravel 4
================
[![Build Status](https://travis-ci.org/codypchristian/browscap-laravel.svg?branch=master)](https://travis-ci.org/codypchristian/browscap-laravel)
[![Total Downloads](https://poser.pugx.org/codypchristian/browscap-laravel/downloads.png)](https://packagist.org/packages/codypchristian/browscap-laravel)
[![License](https://poser.pugx.org/codypchristian/browscap-laravel/license.png)](https://packagist.org/packages/codypchristian/browscap-laravel)

Browscap-PHP integration (Service Provider and Facade) for Laravel 4

Originally based off (https://github.com/trampish/browscap-laravel)

Origins
--------------
Uses:
```
"crossjoin/browscap": "1.0.*"
```
Instead of:
```
"browscap/browscap-php": "2.0.*"
```

Stable Version
--------------
v1.0.1

Installation
------------

Install by adding the following to the require block in composer.json:
```
"codypchristian/browscap-laravel": "1.0.*"
```

Then run `composer update`.

Then add the following in app/config/app.php to the service providers array:
```php
'CodyPChristian\Browscap\BrowscapServiceProvider',
```

And add to the aliases array the following:
```php
'Browscap' => 'CodyPChristian\Browscap\Facades\Browscap',
```
