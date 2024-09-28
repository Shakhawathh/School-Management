<?php

require './view/partials/head.php';
require './view/partials/nav.php';
require './view/partials/sidebar.php';



<?php
require_once '../config/database.php';  // Adjust the path as needed

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $enrollment_date = $_POST['enrollment_date'];

    // Prepare SQL statement
    $sql = "INSERT INTO students (first_name, last_name, date_of_birth, gender, address, phone, enrollment_date) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $first_name, $last_name, $date_of_birth, $gender, $address, $phone, $enrollment_date);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to a success page or back to the form with a success message
        header("Location: /view/student/student-create.view.php?success=1");
        exit();
    } else {
        // Redirect back to the form with an error message
        header("Location: /view/student/student-create.view.php?error=1");
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    // If not a POST request, redirect back to the form
    header("Location: /view/student/student-create.view.php");
    exit();
}
?>

?>

<main class="flex-1 p-10">
    <h1 class="text-3xl font-bold text-gray-800 mb-6"><?= $heading ?></h1>
    
    <form action="/controllers/create_student.php" method="POST" class="max-w-lg">
        <div class="mb-4">
            <label for="first_name" class="block text-gray-700 font-bold mb-2">First Name</label>
            <input type="text" id="first_name" name="first_name" required class="w-full px-3 py-2 border rounded-lg">
        </div>
        
        <div class="mb-4">
            <label for="last_name" class="block text-gray-700 font-bold mb-2">Last Name</label>
            <input type="text" id="last_name" name="last_name" required class="w-full px-3 py-2 border rounded-lg">
        </div>
        
        <div class="mb-4">
            <label for="date_of_birth" class="block text-gray-700 font-bold mb-2">Date of Birth</label>
            <input type="date" id="date_of_birth" name="date_of_birth" required class="w-full px-3 py-2 border rounded-lg">
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Gender</label>
            <div>
                <label class="inline-flex items-center mr-4">
                    <input type="radio" name="gender" value="male" required class="form-radio">
                    <span class="ml-2">Male</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="gender" value="female" required class="form-radio">
                    <span class="ml-2">Female</span>
                </label>
            </div>
        </div>
        
        <div class="mb-4">
            <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
            <textarea id="address" name="address" required class="w-full px-3 py-2 border rounded-lg"></textarea>
        </div>
        
        <div class="mb-4">
            <label for="phone" class="block text-gray-700 font-bold mb-2">Phone</label>
            <input type="tel" id="phone" name="phone" required class="w-full px-3 py-2 border rounded-lg">
        </div>
        
        <div class="mb-4">
            <label for="enrollment_date" class="block text-gray-700 font-bold mb-2">Enrollment Date</label>
            <input type="date" id="enrollment_date" name="enrollment_date" required class="w-full px-3 py-2 border rounded-lg">
        </div>
        
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Create Student</button>
        </div>
    </form>
</main>

<?php
require './view/partials/footer.php';
?>