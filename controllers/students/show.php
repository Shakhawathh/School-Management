<?php

$config = require  base_path('config.php');
$db = new Database($config['database']);

$currentUser = 1;

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $db->query('delete from students where student_id = :id',[

        'id' => $_POST['student_id']
    ]);
     
    header('location: /students');
    exit();
    
}



else {
    
    


    $student = $db->query("SELECT * FROM `students` Where student_id = :id ",[
    
    'id' => $_GET['id'] ])->fetch();
 
    if(!$student){
        abort();
    }


    if ($student['user_id'] !== $currentUser) {
    abort(403);
}
view('students/show',
[
    'heading'=>'Student',
    'student'=>$student
]) ;

}







 