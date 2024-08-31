<?php require "partials/head.php" ?>

<?php require "partials/nav.php" ?>

<?php require "partials/sidebar.php" ?>



<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?= $heading ?></h1>
    <p class="mt-4 text-gray-600">This is the main content area. You can put your charts, tables, or any other data here.</p>

    <!-- Example content -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800">Card 1</h2>
            <p class="text-gray-600 mt-2">Some content for the first card.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800">Card 2</h2>
            <p class="text-gray-600 mt-2">Some content for the second card.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800">Card 3</h2>
            <p class="text-gray-600 mt-2">Some content for the third card.</p>
        </div>
    </div>
</main>


<?php require "partials/footer.php"  ?>