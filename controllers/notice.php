<?php

$db = new Database();

$notices = $db->query("SELECT * FROM `notices`ORDER BY `date_posted` DESC LIMIT 10  ")->fetchAll();

// dd($students);

$heading = 'Notice';











require './view/notice.view.php';
