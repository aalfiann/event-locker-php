# Event Locker

[![Version](https://img.shields.io/badge/stable-1.0.0-green.svg)](https://github.com/aalfiann/event-locker-php)
[![Total Downloads](https://poser.pugx.org/aalfiann/event-locker-php/downloads)](https://packagist.org/packages/aalfiann/event-locker-php)
[![License](https://poser.pugx.org/aalfiann/event-locker-php/license)](https://github.com/aalfiann/event-locker-php/blob/HEAD/LICENSE.md)

A Event Locker class to stop multiple or parallel execution in PHP.

## Installation

Install this package via [Composer](https://getcomposer.org/).
```
composer require "aalfiann/event-locker-php:^1.0"
```

## How to use

```php
use aalfiann\EventLocker;
require_once ('vendor/autoload.php');

$locker = new EventLocker();

// lock
echo "Waiting...\n";
$locker->lock();

// sleep for 10 seconds
echo "Sleeping...\n";
sleep(10);
echo "Finished!\n";

// unlock
$locker->unlock();
```

You can set your custom locker name. Default is `locker.lock`.
```php
// Example if you want to set identify locker for post.
$locker = new EventLocker('post.lock');
```