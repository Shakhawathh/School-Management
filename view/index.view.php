<?php require "partials/head.php"?>

<?php require "partials/nav.php"?>

<?php require "partials/sidebar.php"?>



<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?=$heading?></h1>


    <!-- Example content -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <!-- Open the modal using ID.showModal() method -->
            <button class="btn" onclick="my_modal_1.showModal()">open modal</button>
            <dialog id="my_modal_1" class="modal">
                <div class="modal-box">
                    <h3 class="text-lg font-bold">Hello!</h3>
                    <p class="py-4">Press ESC key or click the button below to close</p>
                    <div class="modal-action">
                        <form method="dialog">
                            <!-- if there is a button in form, it will close the modal -->
                            <button class="btn">Close</button>
                        </form>
                    </div>
                </div>
            </dialog>
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


<?php require "partials/footer.php"?>