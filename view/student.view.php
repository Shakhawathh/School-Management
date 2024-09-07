<?php

require './view/partials/head.php';
require './view/partials/nav.php';
require './view/partials/sidebar.php';

?>

<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?= $heading ?></h1>


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

    <div class="bg-green-300 p-6 rounded-lg shadow-md text-center ">
    <?php if (!empty($students) && is_array($students)) : ?>
        <h1 class="text-xl font-semibold text-gray-800">Total Students: <?= count($students) ?></h1>
    <?php else : ?>
        <p>No students found.</p>
            <?php endif; ?>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800">Card 3</h2>
            <p class="text-gray-600 mt-2">Some content for the third card.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold text-gray-800">Card 3</h2>
            <p class="text-gray-600 mt-2">Some content for the third card.</p>
        </div>
        <div class="grid col-span-4 bg-white rounded-lg shadow-md text-gray-900 scroll-smooth">
    <div class="overflow-y-auto h-[50rem]"> 
        <table class="table ">
          
            <thead>
            <tr class="text-gray-900">
                <th>No</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
        
                <?php $i = 1; ?>
                <?php foreach ($students as $student) : ?>
                    <tr >
                        <th><?= $i++ ?></th>
                        <td ><?= $student['first_name'].' '.$student['last_name'] ?></td>
                        <td><?= $student['date_of_birth'] ?></td>
                        <td><?= $student['gender'] ?></td>
                        <td>
                            <div class="dropdown">
                                <div tabindex="0" class="btn m-1 btn-sm btn-success">Action</div>
                                <ul tabindex="0" class="menu dropdown-content bg-white rounded-box z-[1] w-36 p-2 shadow border-2 font-bold">
                                    <li class="hover:bg-red-500 rounded"><a>Delete</a></li>
                                    <li class="hover:bg-gray-200 rounded"><a>Edit</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

    </div>
</main>

<?php
require './view/partials/footer.php';
?>