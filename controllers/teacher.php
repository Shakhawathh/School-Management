<?php

$db = new Database();

$teachers = $db->query("SELECT * FROM `teachers` WHERE 1")->fetchAll();
// dd($teachers);

$heading = 'Teacher';

require 'view/teacher/teacher.view.php';
