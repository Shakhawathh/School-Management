<nav class="bg-gray-800 text-white p-4 sticky top-0 w-full">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-3xl font-bold -mx-14">
            <a href="/">Dashboard</a>
        </div>
        <div>
            <?php 
            if (isset($_SESSION['user_id'])) {
               
                echo '<a href="login" class="px-4 py-2 hover:bg-gray-700 rounded">Login</a>';
            } else {
                echo '<a href="logout" class="px-4 py-2 hover:bg-gray-700 rounded">Logout</a>';
            }
            ?>
        </div>
    </div>
</nav>
