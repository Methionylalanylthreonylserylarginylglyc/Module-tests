<?php

namespace Test;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $user;

    public function setUp(): void
    {
        $this->user = new User('Pierre', 'André', 'pandre@demo.com', 19);
    }

    public function tearDown() : void {
        unset($this->user);
    }

    public function testIsValidOK() {
        $this->assertTrue($this->user->isValid());
    }

    public function testIsValidKO() {
        $this->user->setEmail("mail");
        $this->assertFalse($this->user->isValid());
    }

    public function testIsValid()
    {
        $this->testIsValidOK();
        $this->testIsValidKO();
    }

}