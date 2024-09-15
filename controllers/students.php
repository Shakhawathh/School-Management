<?php

$config = require('config.php');
$db = new Database($config['database']);

$students = $db->query("SELECT * FROM `students`  ")->fetchAll();

// dd($students);

$heading = 'Students';



require './view/student/students.view.php';
