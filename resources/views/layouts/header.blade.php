<!-- resources/views/header.blade.php -->
<header>
    <nav class="bg-white dark:bg-black fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-700 shadow-lg">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-6 py-3">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2 rtl:space-x-reverse">
                <span class="self-center text-2xl font-bold whitespace-nowrap text-black dark:text-white">Meal<span class="text-orange-500">plan</span></span>
            </a>

            <!-- Contact Button and Mobile Menu Toggle -->
            <div class="flex md:order-2 space-x-3 rtl:space-x-reverse">
                <!-- Contact Us Button -->
                <a href="{{ route('contact') }}" class="text-white bg-orange-500 hover:bg-orange-600 font-medium rounded-full px-4 py-2 transition duration-300">Contact Us</a>
                
                <!-- Mobile Menu Toggle Button -->
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-gray-600 dark:text-gray-400 rounded-lg md:hidden hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Navbar Links -->
            <div class="hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col md:flex-row md:space-x-8 p-4 md:p-0 mt-4 md:mt-0 bg-gray-50 md:bg-transparent dark:bg-black md:dark:bg-transparent border border-gray-200 rounded-lg md:border-0 dark:border-gray-700">
                    <li><a href="{{ route('home') }}" class="block py-2 px-3 rounded hover:text-orange-500 dark:hover:text-orange-500 text-black dark:text-white transition duration-200">Home</a></li>
                    <li><a href="{{ route('home') }}" class="block py-2 px-3 rounded hover:text-orange-500 dark:hover:text-orange-500 text-black dark:text-white transition duration-200">About Us</a></li>
                    <li><a href="{{ route('home') }}" class="block py-2 px-3 rounded hover:text-orange-500 dark:hover:text-orange-500 text-black dark:text-white transition duration-200">Recipes</a></li>
                    <li><a href="{{ route('home') }}" class="block py-2 px-3 rounded hover:text-orange-500 dark:hover:text-orange-500 text-black dark:text-white transition duration-200">Meal Plans</a></li>
                    <li><a href="{{ route('register') }}" class="block py-2 px-3 rounded hover:text-orange-500 dark:hover:text-orange-500 text-black dark:text-white transition duration-200">My Account</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
