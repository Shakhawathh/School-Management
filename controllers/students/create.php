<?php

require base_path( 'validator.php');

$config = require  base_path('config.php');
$db = new Database($config['database']);




$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  


    if (! Validator::string($_POST['first_name'])) {
        $errors['first_name'] = 'Fill in first name';
    }
    
    if (! Validator::string($_POST['last_name'])) {
        $errors['last_name'] = 'Fill in last name';
    }
    
   
    if(empty($errors)) { 

        $db->query('INSERT INTO students (user_id, first_name, last_name, date_of_birth, gender, address, phone, enrollment_date)
        values (:user_id, :first_name, :last_name, :date_of_birth, :gender, :address, :phone, :enrollment_date) ', [
            // 'user_id' => $_SESSION['user']['id'],
            'user_id' => 1,
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'date_of_birth' => 22/10/2022,
            'gender' => $_POST['gender'],
            'address' => $_POST['address'], 
            'phone' => $_POST['phone'],
            'enrollment_date' => 22/10/2022,
        ]);
    
        header('location: /students');  
    }


   
    
   
}

view('students/create',
[
    'heading'=>'Add Student',
    'errors' => $errors
]);

