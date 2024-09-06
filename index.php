<?php

require 'function.php';
require 'route.php';
require 'Database.php';

$db = new Database();

$students = $db->query("SELECT * FROM `students` ")->fetch(PDO::FETCH_ASSOC);

dd($students);