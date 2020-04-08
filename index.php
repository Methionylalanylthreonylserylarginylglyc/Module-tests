<?php

require('vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class Calculatrice extends TestCase
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function minus($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function division($a, $b)
    {
        if(0 == $b){
            die;
        }

        return $a / $b;
    }
}

echo "module-test";