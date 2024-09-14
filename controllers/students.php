<?php

$db = new Database();

$students = $db->query("SELECT * FROM `students`  ")->fetchAll();

// dd($students);

$heading = 'Students';



require './view/student/students.view.php';
