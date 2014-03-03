<?php

class User {
    private $email;
    private $password;
    private $firstName;
    private $surname;
    private $otherName;
    private $dateOfBirth;
    private $gender;
    private $school;

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        return $this;
    }
}
