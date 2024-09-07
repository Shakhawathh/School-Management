<?php

$db = new Database();

$students = $db->query("SELECT * FROM `students`  ")->fetchAll();

// dd($students);

$heading = 'Student';



require './view/student/student.view.php';
