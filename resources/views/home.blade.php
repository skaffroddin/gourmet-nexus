<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
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
                        <li>
                            <a href="#" class="block py-2 px-3 bg-blue-700 rounded md:hover:text-blue-700 md:bg-transparent md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Choose plan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar ends here -->
    </header>
    <!-- Main part starts from here -->
    <main class="mt-40 mx-auto container">
        <!-- Banner section -->
        <div class="flex gap-10">
            <div>
                <p class="text-6xl font-semibold">Recipe and Meal Plan App with Ai</p>
                <p class="mt-20 text-xl text-[]">Save time in planning meals according to available ingredients and help users to have a healthy or customized diet.</p>
                <div class="mt-6">
                    <button type="button" class="text-white bg-[#171543] font-medium rounded-3xl text-sm px-5 py-2.5 me-2 mb-2">Try for Free</button>
                    <button type="button" class="text-white bg-[#B6EC1D]  focus:outline-none font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                        <span class="sr-only">Icon description</span>
                    </button>
                </div>
            </div>
            <div>
                <img src="https://www.metropolisindia.com/upgrade/blog/upload/2023/04/ezgif.com-gif-maker-32.jpg" alt="" class="rounded-xl">
            </div>
        </div>
        <!-- Don't forget section -->
        <div class="mt-10 flex gap-20 justify-between">
            <div>
                <div class="mt-28">
                    <p class="text-base font-semibold">Don't forget to replenish the nutrients you need in a day.</p>
                </div>
                <div class="mt-5">
                    <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-400 hover:bg-gray-100 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Calories</button>
                    <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-400 hover:bg-gray-100 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Carbohydrates</button>
                    <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-400 hover:bg-gray-100 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Protiens</button>
                    <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-400 hover:bg-gray-100 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Fat</button>
                </div>
            </div>
            <!-- Cards -->
            <div class="flex gap-5">
                <div>
                    <div class="w-[400px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="https://assets-jpcust.jwpsrv.com/thumbnails/68gtqAmf-720.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Required Recipe</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Recipe by the hour</p>
                            <div>
                                <button type="button" class="text-white bg-[#212121] font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">7:00</button>
                                <button type="button" class="text-black bg-[#EFEFEF] font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">10:00</button>
                                <button type="button" class="text-black bg-[#EFEFEF] font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">13:00</button>
                                <button type="button" class="text-black bg-[#EFEFEF] font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2">18:00</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="w-[350px] p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">Nutrients required</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">nutrients needed in a day</p>
                        <div class="my-10">
                            <div class="my-2">
                                <div class="flex justify-between">
                                    <div class="mb-1 text-lg font-medium dark:text-white">Calories</div>
                                    <div class="mb-1 text-lg font-medium dark:text-white">1100/2000</div>
                                </div>
                                <div class="w-full h-6 bg-gray-200 rounded-lg dark:bg-gray-700">
                                    <div class="h-6 bg-[#C1F824] rounded-lg dark:bg-blue-500" style="width: 65%"></div>
                                </div>
                            </div>
                            <div class="my-2">
                                <div class="flex justify-between">
                                    <div class="mb-1 text-lg font-medium dark:text-white">Carbohydrates</div>
                                    <div class="mb-1 text-lg font-medium dark:text-white">300/325</div>
                                </div>
                                <div class="w-full h-6 bg-gray-200 rounded-lg dark:bg-gray-700">
                                    <div class="h-6 bg-[#C1F824] rounded-lg dark:bg-blue-500" style="width: 75%"></div>
                                </div>
                            </div>
                            <div class="my-2">
                                <div class="flex justify-between">
                                    <div class="mb-1 text-lg font-medium dark:text-white">Protiens</div>
                                    <div class="mb-1 text-lg font-medium dark:text-white">10/75</div>
                                </div>
                                <div class="w-full h-6 bg-gray-200 rounded-lg dark:bg-gray-700">
                                    <div class="h-6 bg-[#C1F824] rounded-lg dark:bg-blue-500" style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cards ends here -->
        </div>
        <!-- Features -->
        <div class="mt-14 flex gap-14">
            <div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Recipe Search by Ingredient</h5>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img class="rounded-t-lg" src="https://thecozycook.com/wp-content/uploads/2022/04/Lasagna-Recipe-f.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Automatic Meal Plan</h5>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img class="rounded-t-lg" src="https://img.freepik.com/premium-photo/open-cookbook-with-ingredients-recipe-white-wooden-surface_841778-3981.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Healthy food suggestions</h5>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <img class="rounded-t-lg" src="https://picjumbo.com/wp-content/uploads/traditional-korean-dish-bibimbap-with-chopsticks-free-photo.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Last part -->
        <div class="mt-14">
            <div>
                <p class="text-6xl font-semibold text-center">What you need we will provide</p>
                <div class="mt-6 text-center">
                    <button type="button" class="text-white bg-[#171543] font-medium rounded-3xl text-sm px-5 py-2.5 me-2 mb-2">Try for Free</button>
                    <button type="button" class="text-white bg-[#B6EC1D]  focus:outline-none font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                        <span class="sr-only">Icon description</span>
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>

</html>