<?php
include("./logics.php");

if(isset($_POST['forgetPassword'])){
    $password=$_POST['password'];

    $db =new Logics();
    $db-forgetPassword($password,$_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .dark-grid-background {
            background-color: #0d1117;
            background-image: linear-gradient(to right, #1f2a37 1px, transparent 1px),
                linear-gradient(to bottom, #1f2a37 1px, transparent 1px);
            background-size: 40px 40px;
        }

        .card-glow {
            border-image: linear-gradient(to right, #4c1d95, #6366f1, #4c1d95) 1;
            border-width: 1px;
            border-style: solid;
        }
    </style>
</head>

<body class="dark-grid-background flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-6 sm:p-8 bg-gray-900 rounded-xl shadow-2xl card-glow backdrop-blur-sm bg-opacity-80">
        <h2 class="text-3xl font-bold text-white text-center mb-2">Forgot Password</h2>
        <p class="text-gray-400 text-center mb-8">
            Enter your registered email to reset your password.
        </p>

        <form method="POST" class="space-y-6">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email Address</label>
                <input type="email" name="email" id="email" placeholder="you@example.com" required class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-700 rounded-lg placeholder-gray-500 
                           focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 transition">
            </div>
            <button name="reset"
                class="w-full bg-indigo-600 text-white py-2.5 rounded-lg font-semibold text-lg shadow-lg 
                       hover:bg-indigo-700 transition duration-300 focus:outline-none focus:ring-4 focus:ring-indigo-500 focus:ring-opacity-50">
                Send Reset Link
            </button>
        </form>

        <p class="mt-8 text-center text-sm text-gray-400">
            Remember your password?
            <a href="./login.php" class="text-indigo-400 hover:text-indigo-300 font-medium transition duration-300">
                Back to Login
            </a>
        </p>
    </div>
</body>

</html>