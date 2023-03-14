<?php

require_once 'connect.php';
include "../models/Validator.php";



$person = new Student($_POST['name'], $_POST['surname'], $_POST['groupNumber'], $_POST['email'], $_POST['amount']);

$name = $person->getName();

$surname = $person->getSurname();

$groupNumber = $person->getGroupNumber();

$email = $person->getEmail();

$amount = $person->getAmount();

session_start();

$validator = new Validator($person);


$_SESSION['POST'] = $validator->validation();



if($validator->checkingValidation() == true) {
    header('Location: ../../index.php');
}
else {
    if(isset($_COOKIE["key"])) {
        $key = $_COOKIE["key"];
        mysqli_set_charset($connect, "utf8mb4");
        mysqli_query($connect, "UPDATE students SET name = '$name', surname = '$surname', groupNumber = '$groupNumber', email = '$email', amount = '$amount' WHERE coockie = '$key'");
        header('Location: ../../index.php?notify=edited');  
    }
    else {       
        $key = generateSalt();
        setcookie('key', $key, time()+60*60*24*30, '/');

        mysqli_set_charset($connect, "utf8mb4");
        mysqli_query($connect, "INSERT INTO students (id, name, surname, groupNumber, email, amount, coockie) VALUES ('', '$name', '$surname', '$groupNumber', '$email', '$amount', '$key')");
 

        header('Location: ../../index.php?notify=registered');  
    }
}

function generateSalt()
{
    $salt = '';
    $saltLength = 18; //длина соли
    for($i=0; $i<$saltLength; $i++) {
        $salt .= chr(mt_rand(33,126)); //символ из ASCII-table
    }
    return $salt;
}