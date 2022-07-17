<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
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
