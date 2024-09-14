<?php

require './view/partials/head.php';
require './view/partials/nav.php';
require './view/partials/sidebar.php';

?>

<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?= $heading ?></h1>
 <?php if (!empty($student) && is_array($student)) :   ?>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

        <h1><?= $student['name'] ?></h1>
    </div>
<?php else : ?>
    <p>No students found.</p>
<?php endif; ?>

   
</main>

<?php
require './view/partials/footer.php';
?>