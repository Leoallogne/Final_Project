<?php ob_start(); ?>

<div class="w-full max-w-md bg-white shadow-lg rounded-xl p-8">

    <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">EventOps Login</h2>

    <form action="/login" method="POST" class="space-y-5">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" name="email"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500"
                required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" name="password"
                class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500"
                required>
        </div>

        <button type="submit"
            class="w-full py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg font-semibold transition">
            Login
        </button>
    </form>

</div>

<?php
$content = ob_get_clean();
$title   = "Login - EventOps";
include __DIR__ . "/../layouts/auth.php";
?>
