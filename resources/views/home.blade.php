
<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-white">
    @include('layouts.header')

    <!-- Main Content -->
    <main class="mt-40 mx-auto container">
        <div class="flex gap-10">
            <div>
                <p class="text-6xl font-semibold">Recipe and Meal Plan App with AI</p>
                <p class="mt-4 text-xl">Save time planning meals and enjoy a healthier diet customized for you.</p>
                <div class="mt-6">
                    <button type="button" class="text-white bg-[#171543] font-medium rounded-3xl text-sm px-5 py-2.5 me-2 mb-2">Try for Free</button>
                    <button type="button" class="text-white bg-[#B6EC1D] font-medium rounded-full text-sm p-2.5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>
            <div>
                <img src="https://www.metropolisindia.com/upgrade/blog/upload/2023/04/ezgif.com-gif-maker-32.jpg" alt="Meal planning image" class="rounded-xl">
            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>
