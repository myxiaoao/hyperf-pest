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
namespace HyperfTest\Pest;

it('pest example', function () {
    expect(true)->toBeTrue();

    expect(is_array($this->get('/')))->toBeTrue();

    expect(1)->toBeOne();
});
