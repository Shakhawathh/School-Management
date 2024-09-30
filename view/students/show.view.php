<?php

require base_path('./view/partials/head.php') ;
require base_path('./view/partials/nav.php') ;
require base_path('./view/partials/sidebar.php') ;

?>


<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800 mb-10"><?= $heading ?></h1>

    <?php if (!empty($student) && is_array($student)) : ?>


<article
  class="hover:animate-background rounded-xl bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 p-0.5 shadow-xl transition hover:bg-[length:400%_400%] hover:shadow-sm hover:[animation-duration:_4s]"
>
  <div class="rounded-[10px] bg-white p-4 !pt-20 sm:p-6">
   
  <table class="table">
            <thead>
                <tr class="text-gray-900">
                    <th>No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody class="text-gray-900">
                <tr>
                    <td><?= $student['student_id'] ?></td>
                    <td><?= $student['first_name'].' '.$student['last_name'] ?></td>
                    <td><?= $student['phone'] ?></td>
                    <td><?= $student['gender'] ?></td>
                    <td><?= $student['address'] ?></td>
                    
                </tr>
            </tbody>
        </table>
    <div class="mt-4 flex flex-wrap gap-1">
     

    <form action="" method="post">
        <input type="hidden" name="student_id" value="<?= $student['student_id'] ?>">
        <button class="whitespace-nowrap rounded-full bg-red-500 px-2.5 py-0.5 text-xs text-white font-bold">Delete</button>
    </form>
    
    <form action="" method="get">
        <input type="hidden" name="student_id" value="<?= $student['student_id'] ?>">
        <button class="whitespace-nowrap rounded-full bg-red-500 px-2.5 py-0.5 text-xs text-white font-bold">Edit</button>
    </form>

     
    </div>
  </div>
</article>

       

    <?php else : ?>
        <p>No student found.</p>
    <?php endif; ?>
</main>


<?php 
require base_path( './view/partials/footer.php');
?>