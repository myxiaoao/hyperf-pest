<?php

declare(strict_types=1);
/**
 * This file is part of cooper/hyperf-pest.
 *
 * @link     https://github.com/myxiaoao/hyperf-pest
 * @document https://github.com/myxiaoao/hyperf-pest/blob/master/README.md
 * @contact  myxiaoao@gmail.com
 * @license  https://github.com/myxiaoao/hyperf-pest/blob/master/LICENSE
 */
namespace Cooper\HyperfPest;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'Pest',
                    'description' => 'Sync Pest.php',
                    'source' => __DIR__ . '/test/Pest.php',
                    'destination' => BASE_PATH . '/test/Pest.php',
                ],
                [
                    'id' => 'Demo Test',
                    'description' => 'Sync ExampleTest.php',
                    'source' => __DIR__ . '/test/ExampleTest.php',
                    'destination' => BASE_PATH . '/test/Pest/ExampleTest.php',
                ],
            ],
        ];
    }
}
