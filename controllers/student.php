<?php

$config = require('config.php');
$db = new Database($config['database']);



// dd($query);

$student = $db->query("SELECT * FROM `students` Where student_id = :id ",['id' => $_GET['id'] ])->fetch();

$heading = 'Student';



require './view/student/student.view.php';
