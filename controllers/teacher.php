<?php

$config = require('config.php');

$db = new Database($config['database']);

$teachers = $db->query("SELECT * FROM `teachers`")->fetchAll();
// dd($teachers);

$heading = 'Teacher';

require 'view/teacher/teacher.view.php';
