<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('assets/otosnap_logo.jpg') }}" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>


    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{  asset('assets/otosnap_logo.svg') }}" class="h-10 w-12" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap">OtoSnap</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white bg-biru hover:bg-biru focus:ring-4 focus:outline-none focus:ring-primary-300  font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-biru dark:hover:bg-biru dark:focus:ring-blue-100">Get
                    started</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400  dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white ">
                    {{-- Home --}}
                    <li>
                        <a href="{{ url('/') }}"
                            class=" {{ Request::is('/') ? 'text-biru' : 'text-gray-900' }} block py-2 px-3  bg-biru rounded md:bg-transparent  md:p-0">Home</a>
                    </li>
                    {{-- About Us --}}
                    <li>
                        <a href="{{ url('aboutus') }}"
                            class=" {{ Request::is('aboutus') ? 'text-biru' : 'text-gray-900' }} block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-biru md:p-0 ">About Us</a>
                    </li>
                    {{-- Contact --}}
                    <li>
                        <a href="#"
                            class=" {{ Request::is('contact') ? 'text-biru' : 'text-gray-900' }} block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-biru md:p-0 ">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</body>


