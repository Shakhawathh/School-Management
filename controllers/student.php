<?php

$db = new Database();

$id = $_GET['id'];

$student = $db->query("SELECT * FROM `students` Where id = $id  ")->fetch();

$heading = 'Student';



require './view/student/student.view.php';
