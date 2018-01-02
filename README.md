# Yii 2 Advanced Package Template


Yii 2 Advanced Package Template is a skeleton [Yii 2](http://www.yiiframework.com/) package best for
developing complex composer packages with migrations and unit tests.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://poser.pugx.org/horat1us/yii2-advanced-package/v/stable.png)](https://packagist.org/packages/horat1us/yii2-advanced-package)
[![Total Downloads](https://poser.pugx.org/horat1us/yii2-advanced-package/downloads.png)](https://packagist.org/packages/horat1us/yii2-advanced-package)
[![Build Status](https://travis-ci.org/horat1us/yii2-advanced-package.svg?branch=master)](https://travis-ci.org/horat1us/yii2-advanced-package)

## Structure

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
## License
[MIT](./LICENSE)