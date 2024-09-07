<?php

require './view/partials/head.php';
require './view/partials/nav.php';
require './view/partials/sidebar.php';

?>

<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?= $heading ?></h1>


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mt-6">


    <?php if (!empty($notices) && is_array($notices)) : ?>
    <?php else : ?>
        <p>No notices found.</p>
            <?php endif; ?>

            <?php foreach ($notices as $notice) : ?>

           <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800"><?= $notice['title'] ?></h2>
            <p class="text-gray-600 mt-2"><?= $notice['content'] ?></p> 

        </div>
        <?php endforeach; ?>

    </div>

  

   
</main>

<?php
require './view/partials/footer.php';
?>