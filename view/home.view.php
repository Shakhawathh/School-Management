<?php

require base_path('./view/partials/head.php') ;
require base_path('./view/partials/nav.php') ;
require base_path('./view/partials/sidebar.php') ;

?>

<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?= $heading ?></h1>


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-6">

        <div class="flex gap-3 bg-green-300 p-6 rounded-lg shadow-md justify-between-center">
            <!-- <img src="/images/stu.png" alt="student-icon" class="w-20 "/> -->
        <h1 class="text-2xl font-semibold text-gray-800 mt-4">Students: 
        <span  class="text-xl font-bold text-gray-800"><?= count($students) ?></span>
        </h1>
        </div>
        <div class="flex gap-3 bg-green-300 p-6 rounded-lg shadow-md justify-between-center">
        <h1 class="text-2xl font-semibold text-gray-800 mt-4">Notice: 
        <span  class="text-3xl font-bold text-gray-800"><?= count($students) ?></span>
        </h1>
         <!-- <img src="/images/tec.png" alt="student-icon" class="w-20 "/> -->
        </div>
        <div class="bg-blue-300 p-6 rounded-lg shadow-md">
        <h1 class="text-xl font-semibold text-gray-800">Teacher: <?= count($teachers) ?></h1>
        </div>
        <div class="bg-blue-300 p-6 rounded-lg shadow-md">
        <h1 class="text-xl font-semibold text-gray-800">User: <?= count($users) ?></h1>
        </div>
        <div class="grid col-span-4 bg-white rounded-lg shadow-md text-gray-900 scroll-smooth">
    <div class="overflow-y-auto h-[50rem]"> 
        <table class="table ">
          
            <thead>
            <tr class="text-gray-900">
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Admin</th>
            </tr>
            </thead>
            <tbody>
        
                <?php $i = 1; ?>
                <?php foreach ($users as $user) : ?>
                    <tr >
                        <th><?= $i++ ?></th>
                        <td ><?= $user['username'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['role'] ?></td>
                        <td>
                            <div class="dropdown">
                                <div tabindex="0" class="btn m-1 btn-sm btn-success  text-white">Action</div>
                                <ul tabindex="0" class="menu dropdown-content bg-white rounded-box z-[1] w-36 p-2 shadow border-2 font-bold">
                                    <li class="hover:bg-purple-500 rounded"><a>Admin</a></li>
                                    <li class="hover:bg-green-500 rounded"><a>Student</a></li>
                                    <li class="hover:bg-blue-500 rounded"><a>Teacher</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
        
    </div>
    
</main>

<?php
require base_path( './view/partials/footer.php');
?>