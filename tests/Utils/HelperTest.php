<?php

namespace Qstep\Puzzle\Utils;

use PHPUnit\Framework\TestCase;

class HelperTest extends TestCase
{

    public function testNeutralIntKind()
    {
        $value = 0;
        $expected = 'neutral';
        $this->assertEquals($expected, Helper::getIntKind($value));
    }

    public function testPositiveIntKind()
    {
        $value = 1;
        $expected = 'positive';
        $this->assertEquals($expected, Helper::getIntKind($value));
    }

    public function testNegativeIntKind()
    {
        $value = -1;
        $expected = 'negative';
        $this->assertEquals($expected, Helper::getIntKind($value));
    }

}
