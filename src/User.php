<?php


namespace App;


class User
{
    private $firstName;
    private $lastName;
    private $email;
    private $age;

    public function __construct($firstName, $lastName, $email, $age)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);
        $this->setAge($age);
    }


    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function isValid()
    {
        if(empty($this->firstName)) {
            return false;
        }

        if(empty($this->lastName)) {
            return false;
        }

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        if($this->age < 13) {
            return false;
        }

        return true;
    }
}