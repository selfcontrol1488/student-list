<?php


class AbiturientDataGateway 
{

    public function setConnection() {
        try {
            $conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) { 
            echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
    }

    public function getFields($startIndex, $countView) {
        $conn = $this->setConnection();
        $sth = $conn->prepare("SELECT * FROM students ORDER BY name LIMIT $startIndex, $countView");
        $sth->execute();
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }

    public function getSortFields($startIndex, $countView, $sort_sql) {
        $conn = $this->setConnection();
        $sth = $conn->prepare("SELECT * FROM students ORDER BY {$sort_sql} LIMIT $startIndex, $countView");
        $sth->execute();
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }

    public function getTotalFields() {
        $conn = $this->setConnection();
        $sth = $conn->prepare("SELECT * FROM students");
        $sth->execute();
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }

    public function getCountStudents() {
        $conn = $this->setConnection();
        $sth = $conn->prepare("SELECT COUNT(*) FROM students");
        $sth->execute();
        $count = $sth->fetch(PDO::FETCH_NUM);
        return reset($count);
    }

    public function findFields($startIndex, $countView, $inputSearch) {
        $conn = $this->setConnection();
        $sth = $conn->prepare("SELECT * FROM students  WHERE CONCAT(LOWER(`name`),' ',LOWER(`surname`),' ',LOWER(`groupNumber`),' ',LOWER(`email`),' ',LOWER(`amount`)) LIKE LOWER('%$inputSearch%') ORDER BY name LIMIT $startIndex, $countView");
        $sth->execute();
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }

    public function getSortFindFields($startIndex, $countView, $sort_sql, $inputSearch) {
        $conn = $this->setConnection();
        $sth = $conn->prepare("SELECT * FROM students WHERE CONCAT(LOWER(`name`),' ',LOWER(`surname`),' ',LOWER(`groupNumber`),' ',LOWER(`email`),' ',LOWER(`amount`)) LIKE LOWER('%$inputSearch%') ORDER BY {$sort_sql} LIMIT $startIndex, $countView");
        $sth->execute();
        $array = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }
}