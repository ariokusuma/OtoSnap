<!DOCTYPE html>

<html lang="en">
    <head>
        <link rel="icon" href="{{ asset('logo.jpg') }}" type="image/x-icon"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>OtoSnap</title>
    </head>

    <body class=" mt-48 mb-8 bg-bekgron">

        {{-- Title --}}
        <div class="items-center justify-center mt-48 mb-8 bg-bekgron">
            <h3 class="mb-4 text-xl text-center font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-4xl">Tim Kami</h3>
            <p class="text-gray-500 text-center sm:text-xl dark:text-gray-400">Sederet fitur yang di buat khusus hanya untuk Anda</p>
        </div>

        
        <div class="rounded-xl px-4 ">

            {{-- <img class="object-contain w-64 h-64 rounded-lg  aspect-square" src="{{ asset('assets/potrait.jpg') }}" alt="image description"> --}}

        </div>

        <div class=" px-4 aspect-square">

            <img class="object-contain h-16 w-16  " src="{{ asset('assets/potrait.jpg') }}" alt="image description">

        </div>



    </body>
</html>
