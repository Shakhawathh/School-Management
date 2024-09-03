<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=devide-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-sm p-8 space-y-6 bg-white shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-center text-gray-700">Login</h2>
        <form class="space-y-4">

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
                <button type="submit" class="btn btn-primary w-full">Login</button>
            </div>


            <div class="text-center">
                <p class="text-sm">Don't have an account? <a href="register"
                        class="text-blue-500 hover:underline">Registration</a>
                </p>
            </div>
        </form>
    </div>
</body>

</html>