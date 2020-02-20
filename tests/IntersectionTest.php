<?php

declare(strict_types=1);

/**
 * @copyright   Copyright 2020, CitrusIntersection. All Rights Reserved.
 * @author      take64 <take64@citrus.tk>
 * @license     http://www.citrus.tk/
 */

namespace Test;

use Citrus\Intersection;
use PHPUnit\Framework\TestCase;

/**
 * IntersectionTest
 */
class IntersectionTest extends TestCase
{
    /**
     * @test
     */
    public function test_fetch()
    {
        $value = 'admin';
        $result = Intersection::fetch($value, [
            'user' => function () {
                return 'John';
            },
            'admin' => function () {
                return 'Alice';
            },
        ], true);
        $this->assertSame('Alice', $result);
    }
}
