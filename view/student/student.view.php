<?php

require(__DIR__ . '/partials/head.php');
require(__DIR__ . '/partials/nav.php');
require(__DIR__ . '/partials/sidebar.php');

?>

<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?= $heading ?></h1>


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <div class="bg-green-300 p-6 rounded-lg shadow-md mx-auto">
            <button class="btn" onclick="my_modal_3.showModal()">Add Student</button>
            <dialog id="my_modal_3" class="modal">
                <div class="modal-box">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <h3 class="text-lg font-bold">Hello!</h3>
                    <p class="py-4">Press ESC key or click on ✕ button to close</p>
                </div>
            </dialog>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md ">
            <h2 class="text-xl font-semibold text-gray-800">Card 2</h2>
            <p class="text-gray-600 mt-2">Some content for the second card.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800">Card 3</h2>
            <p class="text-gray-600 mt-2">Some content for the third card.</p>
        </div>
    </div>
</main>

<?php
require('/../xampp/htdocs/School-Management/view/partials/footer.php');
?>