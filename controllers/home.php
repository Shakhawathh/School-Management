<?php
$db = new Database();

$students = $db->query("SELECT * FROM `students`  ")->fetchAll();
$teachers = $db->query("SELECT * FROM `teachers`  ")->fetchAll();


$heading = 'Home';


require './view/home.view.php';
