<?php
$config = require('config.php');
$db = new Database($config['database']);

$students = $db->query("SELECT * FROM `students`  ")->fetchAll();
$teachers = $db->query("SELECT * FROM `teachers`  ")->fetchAll();
$users = $db->query("SELECT * FROM `users`  ")->fetchAll();


$heading = 'Home';


require './view/home.view.php';
