# Yii 2 Advanced Package Template


Yii 2 Advanced Package Template is a skeleton [Yii 2](http://www.yiiframework.com/) package best for
developing complex composer packages with migrations and unit tests.


[![Latest Stable Version](https://poser.pugx.org/horat1us/yii2-advanced-package/v/stable.png)](https://packagist.org/packages/horat1us/yii2-advanced-package)
[![Total Downloads](https://poser.pugx.org/horat1us/yii2-advanced-package/downloads.png)](https://packagist.org/packages/horat1us/yii2-advanced-package)
[![Build Status](https://travis-ci.org/Horat1us/yii2-advanced-package.svg?branch=master)](https://travis-ci.org/Horat1us/yii2-advanced-package)
[![codecov](https://codecov.io/gh/Horat1us/yii2-advanced-package/branch/master/graph/badge.svg)](https://codecov.io/gh/Horat1us/yii2-advanced-package)

## Installation

### As dependency
- install using composer
```bash
composer require horat1us/yii2-advanced-package
```
- add to your `bootstrap.php`:
```php
<?php
// bootstrap.php

Yii::setAlias(
    '@Horat1us/Package/Migrations', // your namespace here
    "path-to-vendor/horat1us/yii2-advanced-package/migrations" // path to package migrations folder
);
```
- add to your console `config.php`:
```php
<?php
// console/config.php

use yii\console\controllers\MigrateController;

return [
    // some code
    
    'controllerMap' => [
        'migrate' => [
            'class' => MigrateController::class,
            'migrationNamespaces' => [
                'Horat1us\\Package\\Migrations',          
            ],
        ],
    ],    
];
```

### As new project
```bash
composer create-project horat1us/yii2-advanced-package path-to-new-project
```
then you need to change project name in composer.json and modify namespaces

## Tests
Run tests:
```bash
./vendor/bin/phpunit
```

## Configuration
Default project configuration available in [tests/config.php](./tests/config.php).
If you want to use local config just create `tests/config-local.php` with configuration array.

## Structure

```
migrations/     contains namespaced migrations (using Yii2 namespace autoloader)
src/            contains all source files (using composer autoloader)
tests/
    Mocks/          contains mocks for tests
    Fixtures/       contains Yii2 fixtures
    Unit/           contains PHPUnit tests 
vendor/                  contains dependent 3rd-party packages
```
## License
[MIT](./LICENSE)