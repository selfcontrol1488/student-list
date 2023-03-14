<?php
include "Student.php";

class Validator {
    private Student $student;
    private $check;
    public function __construct(Student $student) {
        $this->student = $student;
        $this->check = false;
    }

    public function checkingValidation() {
        return $this->check;
    }
    public function validation() {
        $err = [];
        $patternEmail = '/^[-a-z0-9!#$%&*+/=?^_`{|}~]+(?:\.[-a-z0-9!#$%&*+/=?^_`{|}~]+)*@(?:[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])?\.)*(?:aero|arpa|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|[a-z][a-z])$/';
        if (mb_strlen(trim($this->student->getName())) > 25) {
            $err['name'] = '<small class="text-danger">*Имя не может содержать более 25 символов</small>';
            $this->check = true;
        }
        if (empty(trim($this->student->getName()))){
            $err['name'] = '<small class="text-danger">*Поле "Имя" не должно быть пустым</small>';
            $this->check = true;
        }
        else {
            $err['name'] = '';
            $this->check = false;
        }
        if (mb_strlen(trim($this->student->getSurname())) > 25) {
            $err['surname'] = '<small class="text-danger">*Фамилия не может содержать более 25 символов</small>';
            $this->check = true;
        }
        if (empty(trim($this->student->getSurname()))){
            $err['surname'] = '<small class="text-danger">*Поле "Фамилия" не должно быть пустым</small>';
            $this->check = true;
        }
        else {
            $err['surname'] = '';
            $this->check = false;
        }
        if (mb_strlen(trim($this->student->getGroupNumber())) < 2 || mb_strlen(trim($this->student->getGroupNumber())) > 5) {
            $err['groupNumber'] = '<small class="text-danger">*Номер группы должен содержать от 2 до 5 символов</small>';
            $this->check = true;
        }
        if (empty(trim($this->student->getGroupNumber()))){
            $err['groupNumber'] = '<small class="text-danger">*Поле "Номер группы" не должно быть пустым</small>';
            $this->check = true;
        }
        else {
            $err['groupNumber'] = '';
            $this->check = false;
        }
        if (!preg_match($patternEmail, trim($this->student->getEmail()))) {
            $err['email'] = '<small class="text-danger">*Формат E-mail неверный</small>';
            $this->check = true;
        }
        if (empty(trim($this->student->getEmail()))){
            $err['email'] = '<small class="text-danger">*Поле "E-mail" не должно быть пустым</small>';
            $this->check = true;
        }
        else {
            $err['email'] = '';
            $this->check = false;
        }
        if (mb_strlen(trim($this->student->getAmount())) < 100 || mb_strlen(trim($this->student->getAmount())) > 400) {
            $err['amount'] = '<small class="text-danger">*Количество баллов не может быть меньше 100 или больше 400</small>';
            $this->check = true;
        }
        if (empty(trim($this->student->getAmount()))){
            $err['amount'] = '<small class="text-danger">*Поле "Количество баллов" не должно быть пустым</small>';
            $this->check = true;
        }
        else {
            $err['amount'] = '';
            $this->check = false;
        }
        return $err;
    }
}