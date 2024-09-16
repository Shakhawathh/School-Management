<?php

require './view/partials/head.php';
require './view/partials/nav.php';
require './view/partials/sidebar.php';

?>

<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?= $heading ?></h1>

    <?php if (!empty($student) && is_array($student)) : ?>

        <table class="table">
            <thead>
                <tr class="text-gray-900">
                    <th>No</th>
                    <th>Name</th>
                
                    <th>phone</th>
                </tr>
            </thead>
            <tbody class="text-gray-900">
                <tr>
                    <td><?= $student['student_id'] ?></td>
                    <td><?= $student['first_name'].' '.$student['last_name'] ?></td>
             
                    <td><?= $student['phone'] ?></td>
                    
                </tr>
            </tbody>
        </table>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

    <?php else : ?>
        <p>No student found.</p>
    <?php endif; ?>
</main>


<?php
require './view/partials/footer.php';
?>