<?php

$db = new Database();

$students = $db->query("SELECT * FROM `students` where student_id = 3 ")->fetchAll();

// dd($students);

$heading = 'Student';











require './view/student.view.php';
