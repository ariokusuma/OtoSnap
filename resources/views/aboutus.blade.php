@extends('layouting.layoutengine')

@section('title', 'OtoSnap')

@section('content')


    <section class="bg-white my-32 ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-lg text-center mb-8 lg:mb-16 ">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">OtoTeam</h2>
                <p class="font-normal text-gray-500 mt-8 sm:text-xl "><span class="font-semibold">OtoTeam</span> adalah tim dibalik adanya <span class="font-semibold">OtoSnap</span>.</p>
                <p class="font-normal text-gray-500  sm:text-xl ">Terdiri atas 3 orang mahasiswa S1 Sistem Informasi Universitas Telkom</p>
            </div>

            <div class="grid grid-cols-3 gap-4 items-center justify-center">
                {{-- Tim 1 --}}
                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
                    <div class="mb-2 mx-auto overflow-hidden object-cover h-[250px] w-[330px] rounded-lg">
                        <img src="{{ asset('assets/team/sophia.jpeg') }}" class="rounded-lg" alt="">
                    </div>

                    <h5 class="my-2 text-2xl font-bold tracking-tight text-gray-900 text-center">Sophia Noor Raudah</h5>
                    <div class="text-center mb-2">
                        <span class="bg-red-200 text-red-700 text-lg font-bold me-2 px-2.5 py-0.5 rounded  dark:text-blue-300">1202204149</span>
                    </div>
                    <div class="text-center">
                        <span class="bg-oren2 text-oren text-lg font-medium me-2 px-2.5 py-0.5 rounded  dark:text-blue-300">Hustler</span>
                    </div>
                    <p class="font-normal my-4 text-center text-gray-700 ">
                        Mendesain bisnis dan memberikan kritik serta saran kepada anggota lain terkait desain dan rancangan bisnis.
                    </p>
                </div>
                {{-- Tim 3 --}}
                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
                    <div class="mb-2 mx-auto overflow-hidden object-cover h-[250px] w-[330px] rounded-lg">
                        <img src="{{ asset('assets/team/melati3.jpg') }}" class="rounded-lg" alt="">
                    </div>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center ">Melati Puspa Vania</h5>
                    <div class="text-center mb-2">
                        <span class="bg-red-200 text-red-700 text-lg font-bold me-2 px-2.5 py-0.5 rounded  dark:text-blue-300">1202204082</span>
                    </div>
                    <div class="text-center">
                        <span class="bg-blue-100 text-blue-800 text-lg font-medium me-2 px-2.5 py-0.5 rounded  dark:text-blue-300">Hipster</span>
                    </div>
                    <p class="font-normal my-4 text-center text-gray-700 ">Mendesain aset Figma dan memberikan kritik serta saran pada anggota lain terkait desain dan rancangan bisnis.</p>
                    </div>
                    {{-- Tim 3 --}}
                    <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 ">
                        <div class="mb-2 mx-auto overflow-hidden object-cover h-[250px] w-[330px] rounded-lg">
                            <img src="{{ asset('assets/team/ario.jpg') }}" class="rounded-lg" alt="">
                        </div>
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">Ario Kusuma Purboyo</h5>
                        <div class="text-center mb-2">
                            <span class="bg-red-200 text-red-700 text-lg font-bold me-2 px-2.5 py-0.5 rounded  dark:text-blue-300">1202204123</span>
                        </div>
                        <div class="text-center">
                            <span class="bg-oren2 text-oren text-lg font-medium me-2 px-2.5 py-0.5 rounded  dark:text-blue-300">Hacker</span>
                        </div>
                        <p class="font-normal my-4 text-center text-gray-700 ">
                            Membuat website dan memberikan kritik serta saran kepada anggota lain terkait desain dan rancangan bisnis.
                        </p>
                    </div>

            </div>
        </div>
    </section>

@endsection
