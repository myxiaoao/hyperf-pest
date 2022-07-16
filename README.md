# Pest Testing for Hyperf
![Packagist Version](https://img.shields.io/packagist/v/cooper/cooper/hyperf-pest)
![Packagist License](https://img.shields.io/packagist/l/cooper/cooper/hyperf-pest)
![GitHub Main Workflow Status](https://img.shields.io/github/workflow/status/myxiaoao/cooper/hyperf-pest/Tests/master)

[Pest](https://pestphp.com/) 是一个注重简单性的优雅 PHP 测试框架.

### 1.安装 Hyperf-skeleton (已有 Hyperf 项目请忽略)

https://github.com/hyperf/hyperf-skeleton

```php
composer create-project hyperf/hyperf-skeleton
```

### 2.使用 Composer 安装

```php
composer require cooper/hyperf-pest
```

### 3.测试命令

```php
./vendor/bin/co-pest --prepend test/bootstrap.php -c phpunit.xml
```

#### 提示
* 在 `composer.json` 中 `scripts` 添加上面的命令快捷方式：`"pest": "co-pest --prepend test/bootstrap.php -c phpunit.xml --colors=always"`；
* 语法请看[官方文档](https://pestphp.com/docs/writing-tests);
* 按照原来的 `phpunit` 写测试也是可以的。

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.



