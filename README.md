# Yii 2 Advanced Package Template


Yii 2 Advanced Package Template is a skeleton [Yii 2](http://www.yiiframework.com/) package best for
developing complex composer packages with migrations and unit tests.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://poser.pugx.org/horat1us/yii2-advanced-package/v/stable.png)](https://packagist.org/packages/horat1us/yii2-advanced-package)
[![Total Downloads](https://poser.pugx.org/horat1us/yii2-advanced-package/downloads.png)](https://packagist.org/packages/horat1us/yii2-advanced-package)
[![Build Status](https://travis-ci.org/Horat1us/yii2-advanced-package.svg?branch=master)](https://travis-ci.org/Horat1us/yii2-advanced-package)
[![codecov](https://codecov.io/gh/Horat1us/yii2-advanced-package/branch/master/graph/badge.svg)](https://codecov.io/gh/Horat1us/yii2-advanced-package)

## Structure

```
migrations/     contains namespaced migrations (using Yii2 namespace autoloader)
src/            contains all source files (using composer autoloader)
tests/
    Fixtures/       contains Yii2 fixtures
    Unit/           contains PHPUnit tests 
vendor/                  contains dependent 3rd-party packages
```
## License
[MIT](./LICENSE)