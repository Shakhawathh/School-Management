<?php

$config = require  base_path('config.php');
$db = new Database($config['database']);




$currentUser = 4;


$teacher = $db->query("SELECT * FROM `teachers` Where teacher_id = :id ",[
    
    'id' => $_GET['id'] ])->fetch();
 
    if(!$teacher){
        abort();
    }


    if ($teacher['user_id'] !== $currentUser) {
    abort(403);
}


view('teacher/show',[
    'heading'=> 'Teacher',
    'teachers'=>$teacher
]);


