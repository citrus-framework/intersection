# Citrus Intersection
php switch library

## Install
```
composer require citrus-framework/intersection
```

## USAGE

```php
$value = 'admin';
$result = Intersection::fetch($value, [
    'user' => function () {
        return 'John';
    },
    'admin' => function () {
        return 'Alice';
    },
], true);

// $result: 'Alice'
```
