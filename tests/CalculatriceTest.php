<?php

namespace Test;

use App\Calculatrice;
use PHPUnit\Framework\TestCase;

class CalculatriceTest extends TestCase
{
    public function testAdd() {
        $a = 10;
        $b = 15;
        $correctResult = 25;
        $cal = new Calculatrice();
        $cal->add($a, $b);
        $this->assertEquals($correctResult, $cal->add($a, $b));
    }
}