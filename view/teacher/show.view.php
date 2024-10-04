<?php

require base_path('./view/partials/head.php') ;
require base_path('./view/partials/nav.php') ;
require base_path('./view/partials/sidebar.php') ;

?>
<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?= $heading ?></h1>

    <?php if (isset($teacher) && is_array($teacher) && !empty($teacher)) : ?>
      

        <table class="table">
            <thead>
                <tr class="text-gray-900">
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody class="text-gray-900">
                <?php foreach ($teacher as $key => $teacher) : ?>
                  

                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $teacher['first_name'] . ' ' . $teacher['last_name'] ?></td>
                    <td><?= $teacher['phone'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p class="text-gray-800">No teachers found.</p>
    <?php endif; ?>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6"></div>
</main>



<?php 
require base_path( './view/partials/footer.php');
?>