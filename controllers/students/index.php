<?php

$config = require  base_path('config.php');
$db = new Database($config['database']);

$students = $db->query("SELECT * FROM `students`  ")->fetchAll();


// $heading = 'Students';



 view('students/index',

[
    'heading'=>'Students',
    'students'=> $students
]);
