<?php

require base_path('./view/partials/head.php') ;
require base_path('./view/partials/nav.php') ;
require base_path('./view/partials/sidebar.php') ;

?>

<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?= $heading ?></h1>

    <?php if (!empty($teacher) && is_array($teacher)) : ?>

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
                    <td><?= $teacher['teacher_id'] ?></td>
                    <td><?= $teacher['first_name'].' '.$teacher['last_name'] ?></td>
             
                    <td><?= $teacher['phone'] ?></td>
                    
                </tr>
            </tbody>
        </table>
        <div  class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

    <?php else : ?>
        <p>No teacher found.</p>
    <?php endif; ?>
</main>


<?php 
require base_path( './view/partials/footer.php');
?>