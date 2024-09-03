<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@^1.0/dist/full.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 space-y-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center  text-gray-700">Create an Account</h2>
        <form class="space-y-4">

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 bg-white">Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe" class="input input-bordered w-full"
                    required>
            </div>


            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 bg-white">Email</label>
                <input type="email" id="email" name="email" placeholder="john.doe@example.com"
                    class="input input-bordered w-full" required>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 bg-white">Password</label>
                <input type="password" id="password" name="password" placeholder="********"
                    class="input input-bordered w-full" required>
            </div>


            <div>
                <label for="confirm-password" class="block text-sm font-medium text-gray-700 bg-white">Confirm
                    Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="********"
                    class="input input-bordered w-full" required>
            </div>


            <div class="text-center">
                <button type="submit" class="btn btn-primary w-full">Register</button>
                <a class="inline-block align-baseline font-bold  mt-6 text-sm text-blue-500 hover:text-blue-800"
                    href="login">Back to Login</a>
            </div>
        </form>
    </div>
</body>

</html>