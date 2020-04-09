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

    public function testIsValid()
    {
        $this->assertTrue($this->user->isValid());

        $this->user->setEmail("mail");
        $this->assertFalse($this->user->isValid());

        $this->user->setLastName("");
        $this->assertFalse($this->user->isValid());

        $this->user->setFirstName("");
        $this->assertFalse($this->user->isValid());

        $this->user->setAge(9);
        $this->assertFalse($this->user->isValid());
    }

}