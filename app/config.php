<?php
$countofview = 10;

$sort_list = array(
    'name_asc'   => '`name`',
    'name_desc'  => '`name` DESC',
    'surname_asc'  => '`surname`',
    'surname_desc' => '`surname` DESC',
    'groupNumber_asc'   => '`groupNumber`',
    'groupNumber_desc'  => '`groupNumber` DESC',
    'amount_asc'   => '`amount`',
    'amount_desc'  => '`amount` DESC', 
);

$abiturientDataGateway = new AbiturientDataGateway();
$abiturientDataGateway->setConnection();
$count = $abiturientDataGateway->getCountStudents();