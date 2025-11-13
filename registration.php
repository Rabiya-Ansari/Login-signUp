<?php
include("./logics.php");

if(isset($_POST['register'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']); 

    $db = new Logics();
    $db->register($username, $email, $password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .dark-grid-background {
            background-color: #0d1117; 
            background-image: linear-gradient(to right, #1f2a37 1px, transparent 1px),
                              linear-gradient(to bottom, #1f2a37 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .card-glow {
            border-image: linear-gradient(to right, #059669, #10b981, #059669) 1; 
            border-width: 1px;
            border-style: solid;
        }
    </style>
</head>
<body class="dark-grid-background flex items-center justify-center min-h-screen">
    
    <div class="w-full max-w-md p-6 sm:p-8 bg-gray-900 rounded-xl shadow-2xl card-glow backdrop-blur-sm bg-opacity-80">
        
        <h2 class="text-3xl font-bold text-white text-center mb-2">Create Account</h2>
        <p class="text-gray-400 text-center mb-8">
            Start your journey with us today.
        </p>
        
        <form method="POST" class="space-y-6">
            
            <div>
                <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Username</label>
                <input 
                    type="text" 
                    name="name" 
                    id="name"
                    placeholder="Your Name" 
                    required 
                    class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-700 rounded-lg placeholder-gray-500 
                           focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600 transition"
                >
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email Address</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email"
                    placeholder="you@example.com" 
                    required 
                    class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-700 rounded-lg placeholder-gray-500 
                           focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600 transition"
                >
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Password</label>
                <input 
                    type="password" 
                    name="password" 
                    id="password"
                    placeholder="••••••••" 
                    required 
                    class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-700 rounded-lg placeholder-gray-500 
                           focus:outline-none focus:ring-2 focus:ring-green-600 focus:border-green-600 transition"
                >
            </div>

            <button 
                name="register" 
                class="w-full bg-green-600 text-white py-2.5 rounded-lg font-semibold text-lg shadow-lg 
                       hover:bg-green-700 transition duration-300 focus:outline-none focus:ring-4 focus:ring-green-500 focus:ring-opacity-50"
            >
                Register
            </button>
        </form>

        <p class="mt-8 text-center text-sm text-gray-400">
            Already registered? 
            <a href="login.php" class="text-green-400 hover:text-green-300 font-medium transition duration-300">
                Login here
            </a>
        </p>
    </div>
</body>
</html>