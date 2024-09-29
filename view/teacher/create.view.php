<?php

require base_path('./view/partials/head.php') ;
require base_path('./view/partials/nav.php') ;
require base_path('./view/partials/sidebar.php') ;

?>

<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800 mb-6"><?= $heading ?></h1>
    
    <form action="" method="POST" class="max-w-lg">
        <div class="mb-4">
            <label for="first_name" class="block text-gray-900 font-bold mb-2">First Name</label>
            <input 
            type="text" 
            id="first_name" 
            name="first_name" 
             
            class="w-full text-black px-3 py-2 border rounded-lg bg-white">
        </div>


            <?php if(isset($errors['first_name'])) : ?>
                <p class="text-xm text-red-500"> <?= $errors['first_name'] ?></p>
            <?php  endif; ?>  

        <div class="mb-4">
            <label for="last_name" class="block text-gray-700 font-bold mb-2">Last Name</label>
            <input 
            type="text" 
            id="last_name" 
            name="last_name" 
             
            class="w-full text-black px-3 py-2 border rounded-lg bg-white">
       
        </div>

            <?php if(isset($errors['last_name '])) : ?>
                <p class="text-xm text-red-500"> <?= $errors['last_name '] ?></p>
            <?php  endif; ?>  
        
        <!-- <div class="mb-4">
            <label for="date_of_birth" class="block text-gray-700 font-bold mb-2">Date of Birth</label>
            <input type="date" id="date_of_birth" name="date_of_birth" required class="w-full text-black px-3 py-2 border rounded-lg bg-white">
        </div> -->

        
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2 bg-w">Gender</label>
            <div>
                <label class="inline-flex items-center  mr-4">
                <input 
                    type="radio" 
                    name="gender" 
                    value="male" 
                    class="radio radio-success" 
                    checked="checked" 
                    required/>
                <span class="ml-2">Male</span>
                </label>
                <label class="inline-flex items-center">
                    <input 
                    type="radio" 
                    name="gender" 
                    value="female" 
                    required 
                    class="radio radio-success" 
                    checked="checked">
                    <span class="ml-2">Female</span>
                </label>
            </div>
        </div>
        
        <div class="mb-4">
            <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
            <textarea 
            id="address" 
            name="address" 
            required 
            class="w-full text-black px-3 py-2 border rounded-lg bg-white"></textarea>
        </div>
        
        <div class="mb-4">
            <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
            <input 
            type="tel" 
            id="phone" 
            name="phone" 
            required 
            class="w-full text-black px-3 py-2 border rounded-lg bg-white">
        </div>
        
        <!-- <div class="mb-4">
            <label for="hire_date" class="block text-gray-700 font-bold mb-2">hire_date</label>
            <input type="date" id="hire_date" name="hire_date" required class="w-full text-black px-3 py-2 border rounded-lg bg-white">
        </div> -->
        
        <div class="mb-4">
            <label for="phone" class="block text-gray-700 font-bold mb-2">subject_specialty</label>
            <input 
            type="tel" 
            id="subject_specialty" 
            name="subject_specialty" 
            required 
            class="w-full text-black px-3 py-2 border rounded-lg bg-white">
        </div>
        
        <div>
            <button 
            type="submit" 
            class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Create Teacher</button>
        </div>
    </form>
</main>

<?php 
require base_path( './view/partials/footer.php');
?>