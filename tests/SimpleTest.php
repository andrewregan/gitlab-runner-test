<?php
namespace Runner;

use PHPUnit_Framework_TestCase;

class SimpleTest extends PHPUnit_Framework_TestCase
{
    public function testSet()
    {
        $simple = new Simple();
        $this->assertSame('test', $simple->test);
    }

    public function testReset()
    {
        $simple = new Simple();
        $simple->reset();
        $this->assertFalse($simple->test);
    }
}
