<?php

require './view/partials/head.php';
require './view/partials/nav.php';
require './view/partials/sidebar.php';

?>

<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800"><?= $heading ?></h1>

    <?php if (!empty($student) && is_array($student)) : ?>
        <?php $student = $student[0];?>

        <form action="/update_student.php" method="POST" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">

            <div>
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name" value="<?= ($student['name']) ?>" class="border border-gray-300 rounded-md p-2 w-full" required>
            </div>

            <div>
                <label for="dob" class="block text-gray-700">Date of Birth</label>
                <input type="date" id="dob" name="dob" value="<?= htmlspecialchars($student['dob']) ?>" class="border border-gray-300 rounded-md p-2 w-full" required>
            </div>

            <div>
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="<?= htmlspecialchars($student['email']) ?>" class="border border-gray-300 rounded-md p-2 w-full" required>
            </div>

            <div>
                <label for="address" class="block text-gray-700">Address</label>
                <textarea id="address" name="address" class="border border-gray-300 rounded-md p-2 w-full"><?= htmlspecialchars($student['address']) ?></textarea>
            </div>

            <div>
                <label for="phone" class="block text-gray-700">Phone</label>
                <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($student['phone']) ?>" class="border border-gray-300 rounded-md p-2 w-full">
            </div>

            <div>
                <label for="parent_name" class="block text-gray-700">Parent Name</label>
                <input type="text" id="parent_name" name="parent_name" value="<?= htmlspecialchars($student['parent_name']) ?>" class="border border-gray-300 rounded-md p-2 w-full">
            </div>

            <div class="col-span-full">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save Changes</button>
            </div>
        </form>

    <?php else : ?>
        <p>No student found.</p>
    <?php endif; ?>
</main>


<?php
require './view/partials/footer.php';
?>