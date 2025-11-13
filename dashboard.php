<?php

session_start();


if(!isset($_SESSION['user_id'])){

    header("location: login.php");
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">
    
    <div class="max-w-4xl mx-auto bg-white p-10 rounded-xl shadow-2xl border-t-4 border-indigo-500">
        
        <header class="mb-8">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-2">
                User Dashboard
            </h1>
        </header>

        <div class="mb-8 p-6 bg-indigo-50 rounded-lg">
            <h2 class="text-2xl font-semibold text-indigo-700">
                Welcome, <?php echo htmlspecialchars($_SESSION['name'] ?? 'User'); ?>!
            </h2>
            <p class="text-gray-600 mt-2">
                This is your personalized control panel. You are successfully logged in.
            </p>
        </div>
        
        <div class="my-8 border-gray-200">
        
        <div class="text-center">
            <a 
                href="logout.php" 
                class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
            >
                Logout
            </a>
        </div>
    </div>
</body>
</html>