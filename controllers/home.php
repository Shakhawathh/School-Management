<?php
$db = new Database();

$students = $db->query("SELECT * FROM `students`  ")->fetchAll();
$teachers = $db->query("SELECT * FROM `teachers`  ")->fetchAll();
$notices = $db->query("SELECT * FROM `notices`  ")->fetchAll();
$users = $db->query("SELECT * FROM `users` ORDER BY id ASC  ")->fetchAll();


$heading = 'Home';


require './view/home.view.php';
