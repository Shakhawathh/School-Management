<?php

require './view/partials/head.php';
require './view/partials/nav.php';
require './view/partials/sidebar.php';

?>

<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?= $heading ?></h1>


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

        <div class="bg-white p-6 rounded-lg shadow-md">
        <?php if (!empty($students) && is_array($students)) : ?>
        <?php foreach ($students as $student) : ?>
            <?php if (is_array($student)) : ?>
               <h1 class="text-xl font-semibold text-gray-800">Total Student : <?= count($student) ?></h1>
            <?php else : ?>
                <p>Invalid student data.</p>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php else : ?>
        <p>No students found.</p>
    <?php endif; ?>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800">Card 3</h2>
            <p class="text-gray-600 mt-2">Some content for the third card.</p>
        </div>
    </div>
</main>

<?php
require './view/partials/footer.php';
?>