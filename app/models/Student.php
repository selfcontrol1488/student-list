<?php
class Student {
    private $name;
    private $surname;
    private $groupNumber;
    private $email;
    private $amount;
    public function __construct(string $name, string $surname, string $groupNumber, string $email, string $amount) {
        $this->name = $name;
        $this->surname = $surname;
        $this->groupNumber = $groupNumber;
        $this->email = $email;
        $this->amount = $amount;
    }
    public function setName(string $name) {
        $this->name = $name;
    }
    public function setSurname(string $surname) {
        $this->surname = $surname;
    }
    public function setGroupNumber(string $groupNumber) {
        $this->groupNumber = $groupNumber;
    }
    public function setEmail(string $email) {
        $this->email = $email;
    }
    public function setAmount(string $amount) {
        $this->amount = $amount;
    }
    public function getName() {
        return $this->name;
    }
    public function getSurname() {
        return $this->surname;
    }
    public function getGroupNumber() {
        return $this->groupNumber;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getAmount() {
        return $this->amount;
    }
}
