<!DOCTYPE html>
<html lang="en">
   <head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
   



    <meta name="viewport" content="width=device-width, initial-scale=1.0
">
<main class="container flex flex-col min-h-screen gap-4 w-full max-w-screen-xl mx-auto p-4 md:py-8">
    <header>
        <div>


<nav class="bg-white border-gray-200">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="" class="flex items-center  space-x-3 rtl:space-x-reverse">
        <img src="{{asset('images/restaurant.gif')}}" class="size-20 " alt="Flowbite Logo" />
        <span class="text-2xl font-semibold italic">Chinese Curry</span>

    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
     <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">

    <li>
        <a href="{{ url('/') }}"
           class="block py-2 px-3 rounded-sm md:p-0
           {{ request()->is('/') ? 'text-white bg-blue-700 md:text-blue-700 md:bg-transparent md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:text-blue-700' }}">
           Home
        </a>
    </li>

    <li>
        <a href="{{ url('/menu') }}"
           class="block py-2 px-3 rounded-sm md:p-0
           {{ request()->is('menu') ? 'text-white bg-blue-700 md:text-blue-700 md:bg-transparent md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:text-blue-700' }}">
           Menu
        </a>
    </li>

    <li>
        <a href="{{ url('/contact') }}"
           class="block py-2 px-3 rounded-sm md:p-0
           {{ request()->is('contact') ? 'text-white bg-blue-700 md:text-blue-700 md:bg-transparent md:dark:text-blue-500' : 'text-gray-900 hover:bg-gray-100 md:hover:text-blue-700' }}">
           Contact
        </a>
    </li>

</ul>

    </div>
  </div>
</nav>

        </div>

    </header>

<div class="flex-1">
    @yield('content')
</div>




<footer class="bg-white rounded-lg shadow-sm m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap">Flowbite</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
    </div>
</footer>


</main>
 </head>
