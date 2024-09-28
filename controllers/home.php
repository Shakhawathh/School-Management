<?php
$config = require base_path ('config.php');
$db = new Database($config['database']);

$students = $db->query("SELECT * FROM `students`  ")->fetchAll();
$teachers = $db->query("SELECT * FROM `teachers`  ")->fetchAll();
$users = $db->query("SELECT * FROM `users`  ")->fetchAll();




require view('home', [
    'heading' => 'Home',
    'students' => $students,
    'teachers' => $teachers,
    'users' => $users   
]);
