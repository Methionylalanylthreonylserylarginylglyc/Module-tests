<?php

namespace Test;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    public function testIsValid()
    {
        $user = new User('Pierre','Andre','pandre@demo.com',13);
        $this->assertTrue($user->isValid());

        $user = new User('Pierre','André','fvdrgtg',13);
        $this->assertFalse($user->isValid());

        $user = new User('Pierre','','pandre@demo.com',14);
        $this->assertFalse($user->isValid());

        $user = new User('','André','pandre@demo.com',16);
        $this->assertFalse($user->isValid());

        $user = new User('Pierre','André','pandre@demo.com',9);
        $this->assertFalse($user->isValid());
    }

}