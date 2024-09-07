<?php
$db = new Database();

$students = $db->query("SELECT * FROM `students`  ")->fetchAll();
$teachers = $db->query("SELECT * FROM `teachers`  ")->fetchAll();
$notices = $db->query("SELECT * FROM `notices`  ")->fetchAll();


$heading = 'Home';


require './view/home.view.php';
