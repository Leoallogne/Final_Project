<?php
require_once __DIR__ . '/../../../app/Config/AppConfig.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "EventOps" ?></title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white text-gray-900">

    <!-- Navbar -->
    <nav class="w-full bg-white shadow-sm fixed top-0 left-0 z-20">
        <div class="max-w-7xl mx-auto flex items-center justify-between py-4 px-6">
            <h1 class="text-2xl font-bold text-indigo-600">EventOps</h1>

            <div class="flex items-center gap-6">
                <a href="#features" class="text-gray-700 hover:text-indigo-600">Features</a>
                <a href="#about" class="text-gray-700 hover:text-indigo-600">About</a>

                <!-- LOGIN BUTTON -->
                <a 
                    href="/Final_Project/public/index.php?page=login"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700"
                >
                    Login
                </a>

            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="pt-20">
        <?= $content ?>
    </div>

</body>
</html>
