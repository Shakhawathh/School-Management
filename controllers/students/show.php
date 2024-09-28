<?php

$config = require('config.php');
$db = new Database($config['database']);



$heading = 'Student';
$currentUser = 4;


$student = $db->query("SELECT * FROM `students` Where student_id = :id ",[
    
    'id' => $_GET['id'] ])->fetch();
 
    if(!$student){
        abort();
    }


    if ($student['user_id'] !== $currentUser) {
    abort(403);
}



require './view/students/show.view.php';
