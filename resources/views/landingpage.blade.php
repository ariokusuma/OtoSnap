@extends('layouting.layoutengine')

@section('title', 'OtoSnap')

@section('content')


    <section class="bg-white my-48 ">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-6 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl ">Rev
                    Up Your Ride, Whenever You Go!</h1>
                <p class="max-w-xl mb-6 ml-2 font-normal text-gray-500 lg:mb-8 md:text-lg lg:text-xl ">
                    Revolutionize Your Ride experience with <span class="font-semibold">OtoSnap</span> Your All-in-One
                    Solution for Hassle-Free Automotive Care.s
                </p>

                <div class="mt-14">

                    <a href="https://bit.ly/otosnapreview" target="_blank"
                        class="inline-flex items-center justify-center px-5 py-3 mr-3 text-xl font-medium text-center text-white rounded-lg bg-biru hover:bg-biru2 focus:ring-4 focus:ring-primary-300 ">
                        <svg class="w-[14px] h-[14px] mr-2 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 14 16">
                            <path
                                d="M0 .984v14.032a1 1 0 0 0 1.506.845l12.006-7.016a.974.974 0 0 0 0-1.69L1.506.139A1 1 0 0 0 0 .984Z" />
                        </svg>
                        Demo
                        {{-- <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> --}}
                    </a>
                    {{-- Sign Up --}}
                    {{-- <a href="#"
                        class="inline-flex items-center justify-center px-5 py-3 text-xl font-medium text-center text-gray-900  border-2 border-gray-500 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 ">
                        Waiting Lists
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a> --}}
                    {{-- <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-xl font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 ">
                    Speak to Sales
                </a> --}}
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('assets/arts/intro.svg') }}" alt="mockup">
            </div>
        </div>
    </section>

    <section>
        <div class="px-4 mx-auto max-w-screen-xl my-16">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Solve any vehicle
                    problem in your palm</h2>
                <p class="font-normal text-gray-500 lg:mb-16 sm:text-xl">
                    Selesaikan setiap masalah kendaraan dengan mudah di genggaman tangan Anda bersama <span
                        class="font-semibold">OtoSnap</span>.
                </p>
            </div>

            <div>
                <div class="grid grid-cols-4 gap-8 items-center justify-center">
                    {{-- Image 1 --}}
                    <div class="flex flex-col items-center justify-center">
                        <img class="h-[550px]" src="{{ asset('assets/mockup/homescreen.png') }}" alt="">
                        <div class="mt-4 font-normal  lg:mb-16 sm:text-xl text-center">
                            <h1 class="font-bold tracking-wide">Home Screen sederhana</h1>
                            <p class="text-gray-500 text-lg">Didesain agar familiar dan mudah digunakan.</p>
                        </div>
                    </div>
                    {{-- Image 1 --}}
                    <div class="flex flex-col items-center justify-center">
                        <img class="h-[550px]" src="{{ asset('assets/mockup/otofinder.png') }}" alt="">
                        <div class="mt-4 font-normal lg:mb-16 sm:text-xl text-center">
                            <h1 class="font-bold tracking-wide">OtoFinder</h1>
                            <p class="text-gray-500 text-lg">Temukan bengkel terdekat dari lokasi Anda</p>
                        </div>
                    </div>
                    {{-- Image 1 --}}
                    <div class="flex flex-col items-center justify-center">
                        <img class="h-[550px]" src="{{ asset('assets/mockup/otorescue.png') }}" alt="">
                        <div class="mt-4 font-normal lg:mb-16 sm:text-xl text-center">
                            <h1 class="font-bold tracking-wide">OtoRescue</h1>
                            <p class="text-gray-500 text-lg">Panggil teknisi ahli ke lokasi anda saat darurat</p>
                        </div>
                    </div>
                    {{-- Image 1 --}}
                    <div class="flex flex-col items-center justify-center">
                        <img class="h-[550px]" src="{{ asset('assets/mockup/riwayat.png') }}" alt="">
                        <div class="mt-4 font-normal lg:mb-16 sm:text-xl text-center">
                            <h1 class="font-bold tracking-wide">Daftar Riwayat</h1>
                            <p class="text-gray-500 text-lg">Seluruh riwayat transaksi ada pada satu tempat.</p>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- Features --}}
    <section>
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">Oto Ecosystem</h2>
                <p class="font-normal text-gray-500 lg:mb-16 sm:text-xl">
                    Selesaikan segala masalah kendaraan dalam genggaman tangan Anda.
                </p>
            </div>
            <div class="grid grid-cols-4 gap-8">
                {{-- Fitur 1 --}}
                <div class="group block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow  hover:bg-biru ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-white"> OtoRescue</h5>
                    <p class="font-normal text-gray-700 group-hover:text-gray-200">
                        Mengalami kendala saat ditengah perjalanan? Panggil teknisi dari bengkel disekitar Anda untuk membantu.
                    </p>
                </div>
                {{-- Fitur 1 --}}
                <div class="group block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-biru ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-white ">OtoFinder</h5>
                    <p class="font-normal text-gray-700 group-hover:text-gray-200">
                        Cari bengkel terdekat disekitar Anda berdasarkan rating yang ada

                    </p>
                </div>
                {{-- Fitur 1 --}}
                <div class="group block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-biru  ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-white ">OtoHistory</h5>
                    <p class="font-normal text-gray-700 group-hover:text-gray-200">Catatan digital dari semua servis dan perbaikan Anda</p>
                </div>
                {{-- Fitur 1 --}}
                <div class="group block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-biru  ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-white ">OtoBook</h5>
                    <p class="font-normal text-gray-700 group-hover:text-gray-200">
                        Ingin Booking Servis dan ingin part tambahan? PIlih part yang Anda inginkan saat Booking Servis!
                    </p>
                </div>
                {{-- Fitur 1 --}}
                <div class="group block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-biru  ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-white ">OtoInsurance</h5>
                        Integrasi dengan perusahaan asuransi untuk memudahkan proses klaim.
                    </p>
                </div>
                {{-- Fitur 1 --}}
                <div class="group block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-biru  ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-white ">OtoSupport</h5>
                    <p class="font-normal text-gray-700 group-hover:text-gray-200">
                        Layanan dukungan pelanggan dan konsultasi dengan tim Customer Service.
                    </p>
                </div>
                {{-- Fitur 1 --}}
                <div class="group block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-biru  ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-white ">OtoShop</h5>
                    <p class="font-normal text-gray-700 group-hover:text-gray-200">
                        Penjualan suku cadang dan aksesoris kendaraan melalui aplikasi.
                    </p>
                </div>
                {{-- Fitur 1 --}}
                <div class="group block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-biru ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 group-hover:text-white">OtoCare</h5>
                    <p class="font-normal text-gray-700 group-hover:text-gray-200">
                        Paket langganan untuk inspeksi kendaraan berkala dan layanan khusus
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Testimoni --}}
    <section>
        <div class="my-16">
            <div class="mx-auto max-w-screen-sm text-center mb-8 ">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Testimoni</h2>
                <p class="font-normal text-xl text-gray-500">
                    Selesaikan setiap masalah kendaraan dengan mudah di genggaman tangan Anda bersama <span
                        class="font-semibold">OtoSnap</span>.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-8 max-w-screen-xl mx-auto items-center justify-center">

                <div class="max-w-screen-lg px-2 py-4 mx-auto text-center ">
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                        </svg>
                        <blockquote>
                            <p class="text-2xl font-medium text-gray-900 dark:text-white">"Sebagai penggemar sejati sepeda motor, OtoSnap benar-benar memudahkan hidup saya! Dengan fitur Panggilan Darurat Saya merasa aman saat berada dijalan."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3">
                            <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                <div class="pr-3 font-medium text-gray-900 dark:text-white">Adi Purnama</div>
                                <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Pecinta Turing</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="max-w-screen-xl px-2 py-4 mx-auto text-center ">
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                        </svg>
                        <blockquote>
                            <p class="text-2xl font-medium text-gray-900 dark:text-white">"Sebagai penggemar sejati sepeda motor, OtoSnap benar-benar memudahkan hidup saya! Dengan fitur Panggilan Darurat Saya merasa aman saat berada dijalan."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3">
                            <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                <div class="pr-3 font-medium text-gray-900 dark:text-white">Adi Purnama</div>
                                <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Pecinta Turing</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="max-w-screen-lg px-2 py-4 mx-auto text-center ">
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                        </svg>
                        <blockquote>
                            <p class="text-2xl font-medium text-gray-900 dark:text-white">"Sebagai penggemar sejati sepeda motor, OtoSnap benar-benar memudahkan hidup saya! Dengan fitur Panggilan Darurat Saya merasa aman saat berada dijalan."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3">
                            <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                <div class="pr-3 font-medium text-gray-900 dark:text-white">Adi Purnama</div>
                                <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Pecinta Turing</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>

                <div class="max-w-screen-xl px-2 py-4 mx-auto text-center ">
                    <figure class="max-w-screen-md mx-auto">
                        <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                        </svg>
                        <blockquote>
                            <p class="text-2xl font-medium text-gray-900 dark:text-white">"Sebagai penggemar sejati sepeda motor, OtoSnap benar-benar memudahkan hidup saya! Dengan fitur Panggilan Darurat Saya merasa aman saat berada dijalan."</p>
                        </blockquote>
                        <figcaption class="flex items-center justify-center mt-6 space-x-3">
                            <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture">
                            <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                <div class="pr-3 font-medium text-gray-900 dark:text-white">Adi Purnama</div>
                                <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">Pecinta Turing</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>
    </section>



    <section>


    </section>
@endsection
