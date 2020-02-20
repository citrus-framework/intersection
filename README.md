# CitrusIntersection
php switch library

# USAGE

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
