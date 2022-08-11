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
namespace HyperfTest\Pest;

it('pest example', function () {
    expect(true)->toBeTrue();

    expect(is_array($this->get('/')))->toBeTrue();

    expect(1)->toBeOne();
});
