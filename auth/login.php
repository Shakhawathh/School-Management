<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$error = '';



$config = require base_path('config.php');
$db = new Database($config['database']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $user = $db->query("SELECT * FROM users WHERE email = :email", [
        'email' => $email
    ])->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Login successful
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        header("Location: /");
        exit();
    } else {
        $error = "Invalid email or password";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm p-8 space-y-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center text-gray-700">Login</h2>
        <?php if (!empty($error)) { ?>
            <div class="alert alert-error"><?php echo $error; ?></div>
        <?php } ?>
        <form class="space-y-4" method="POST" action="">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" placeholder="john.doe@example.com"
                    class="input input-bordered w-full" required>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" placeholder="********"
                    class="input input-bordered w-full" required>
            </div>

            <div>
                <button type="submit" name="submit" class="btn btn-primary w-full">Login</button>
            </div>

            <div class="text-center">
                <p class="text-sm">Don't have an account? <a href="/register"
                        class="text-blue-500 hover:underline">Registration</a>
                </p>
            </div>
        </form>
    </div>
</body>

</html>
