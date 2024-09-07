<?php

require './view/partials/head.php';
require './view/partials/nav.php';
require './view/partials/sidebar.php';

?>

<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?= $heading ?></h1>


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">

        <div class="bg-green-300 p-6 rounded-lg shadow-md">
        <h1 class="text-xl font-semibold text-gray-800">Students: <?= count($students) ?></h1>
        </div>
        <div class="bg-blue-300 p-6 rounded-lg shadow-md">
        <h1 class="text-xl font-semibold text-gray-800">Teacher: <?= count($teachers) ?></h1>

        </div>
        <div class="bg-yellow-200 p-6 rounded-lg shadow-md">
        <h1 class="text-xl font-semibold text-gray-800">Attendance: <?= count($teachers) ?></h1>

        </div>
        <div class="bg-red-200 p-6 rounded-lg shadow-md">
        <h1 class="text-xl font-semibold text-gray-800">Notice: <?= count($notices) ?></h1>

        </div>
        
    </div>
    
</main>

<?php
require './view/partials/footer.php';
?>