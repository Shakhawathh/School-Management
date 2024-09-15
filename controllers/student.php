<?php

$config = require('config.php');
$db = new Database($config['database']);





$id = $_GET['id'];

$query = "SELECT * FROM `students` Where id = :id  ";

// dd($query);

$student = $db->query($query,[':id'=> $id])->fetch();

$heading = 'Student';



require './view/student/student.view.php';
