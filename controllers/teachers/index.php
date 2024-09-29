<?php

$config = require  base_path('config.php');
$db = new Database($config['database']);

$teachers = $db->query("SELECT * FROM `teachers`")->fetchAll();





 view('teacher/index',[
    'heading'=> 'Teacher',
    'teachers'=>$teachers
]);




