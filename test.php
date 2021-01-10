<?php

require "index.php";

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testReverse()
    {
        $string = 'Тевирп! Онвад ен ьсиледив.';
        $this->assertSame($string, reverseString("Привет! Давно не виделись."));
    }
}