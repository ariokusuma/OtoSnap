
<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800 border-t border-gray-200">
    <div class="mx-auto max-w-screen-xl text-center">
        <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 ">
            <img src="{{ asset('assets/otosnap_logo.svg') }}" class=" h-24" alt="otosnap_logo">
        </a>
        <p class="my-6 text-gray-800 text-lg">Made w/ Love in Bandung, 🇮🇩</p>
        <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 font-semibold">
            <li>
                <a href="{{ url('aboutus') }}" class="mr-4 hover:underline md:mr-6 ">About Us</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">Contact</a>
            </li>
        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2021-2022 <a href="#{{ url('/') }}"
                class="hover:underline font-semibold text-biru">OtoSnap</a>. Bisnis Digital 44 GAB-01.</span>
    </div>
</footer>
