<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mealplan App')</title>
    @vite('resources/css/app.css') <!-- Ensure you're using Vite or your asset manager -->
</head>
<body class="bg-gray-50 dark:bg-gray-900">

    <!-- Header -->
    <header>
        <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">Meal<span class="text-[#99CE03]">plan</span></span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button" class="text-white font-medium rounded-3xl bg-[#171543] p-2 px-2">Contact us</button>
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li><a href="{{ url('/') }}" class="block py-2 px-3" aria-current="page">Home</a></li>
                        <li><a href="{{ url('/login') }}" class="block py-2 px-3">Login</a></li>
                        <li><a href="{{ url('/register') }}" class="block py-2 px-3">Register</a></li>
                        <li><a href="#" class="block py-2 px-3">About</a></li>
                        <li><a href="#" class="block py-2 px-3">Services</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="mt-40 mx-auto container">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <div class="max-w-screen-xl mx-auto text-center p-4">
            <span class="text-gray-500 dark:text-gray-400">© 2024 Mealplan. All rights reserved.</span>
        </div>
    </footer>

</body>
</html>
