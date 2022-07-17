# Pest Testing for Hyperf
<a href="https://github.com/myxiaoao/hyperf-pest/actions?query=workflow%3APHPUnit">
    <img src="https://github.com/myxiaoao/hyperf-pest/workflows/PHPUnit/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/cooper/hyperf-pest">
    <img src="https://poser.pugx.org/cooper/hyperf-pest/v/stable.svg" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/cooper/hyperf-pest">
    <img src="https://poser.pugx.org/cooper/hyperf-pest/d/total.svg" alt="Total Downloads">
</a>

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

执行
```php
php bin/hyperf.php vendor:publish cooper/hyperf-pest
```

### 3.测试命令

```php
./vendor/bin/co-pest --prepend test/bootstrap.php -c phpunit.xml
```

#### 提示
* 在 `composer.json` 中 `scripts` 添加命令快捷方式：`"pest": "co-pest --prepend test/bootstrap.php -c phpunit.xml --colors=always"`；
* 语法请看[官方文档](https://pestphp.com/docs/writing-tests)；
* 按照 `phpunit` 写测试也是可以的。

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.



