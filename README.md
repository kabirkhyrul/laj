

<p align="center"><img width="250" src="laj.png"/></p>

# Laravel Api Scaffold with JWT

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kabirkhyrul/laj.svg?style=flat-square)](https://packagist.org/packages/kabirkhyrul/laj)
[![Build Status](https://img.shields.io/travis/kabirkhyrul/laj/master.svg?style=flat-square)](https://travis-ci.org/kabirkhyrul/laj)
[![Quality Score](https://img.shields.io/scrutinizer/g/kabirkhyrul/laj.svg?style=flat-square)](https://scrutinizer-ci.com/g/kabirkhyrul/laj)
[![Total Downloads](https://img.shields.io/packagist/dt/kabirkhyrul/laj.svg?style=flat-square)](https://packagist.org/packages/kabirkhyrul/laj)

A very simple api authentication scaffolding built on the JWT.  It does provide a basic starting point with jwt auth system. Tested with laravel 8 but you can use it with laravel 7

## Installation


You can install the package via composer:

```bash
composer require kabirkhyrul/laj
php artisan laj:auth
```

## Using this package

Route list for postman

| Method   | URI         |Action |
|--------|----|---|
| POST     | api/login   | App\Http\Controllers\Api\AuthController@login   |
| POST     | api/logout  | App\Http\Controllers\Api\AuthController@logout  |
| GET | api/me      | App\Http\Controllers\Api\AuthController@me      |
| POST     | api/refresh | App\Http\Controllers\Api\AuthController@refresh |
| POST     | api/signup  | App\Http\Controllers\Api\AuthController@signup  |


## Credits

- [Kabir Khyrul](https://github.com/kabirkhyrul)
- [All Contributors](../../contributors)
