<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Market</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Other CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/tailwind.css')}}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="flex gap-12 justify-evenly items-center py-4 px-2">
        <img class="w-[100px] h-[30px]" src="https://valyou-x.vercel.app/assets/logo_black.svg" />
        <div class="flex items-center gap-5 text-normal">
            <a class="hover:text-[#FF0093]" href="/bank">Bank</a>
            <a class="hover:text-[#FF0093]" href="/market">Market</a>
            <a class="hover:text-[#FF0093]" href="/social_media">Social Media</a>
            <a class="hover:text-[#FF0093]" href="/watch_earn">Watch & Earn</a>
            <a class="hover:text-[#FF0093]" href="/listen_earn">Listen & Earn</a>
            <a class="hover:text-[#FF0093]" href="/store">Store</a>
        </div>
        <div class="flex items-center gap-2 w-[30vw] rounded-full border-2 border-black px-2">
            <i class="fa fa-search text-xl"></i>
            <input style="border: none;" class="w-full text-sm" placeholder="Search for music artists, investors & business profiles on valyou x" />
        </div>
        <div class="flex gap-3 items-center">
            <a href="/wallet" class="rounded-full px-1 border border-black">
                <i class="fa fa-briefcase text-xl"></i>
            </a>
            <a href="/wallet" class="rounded-full px-1 border border-black">
                <i class="fa fa-envelope-o text-xl"></i>
            </a>
            <a href="/wallet" class="flex gap-3 rounded-full darken py-1 px-2">
                <i class="fa fa-headphones text-xl rounded-full border border-black px-1"></i>
                <span class="text-[#FF0093]">Investor</span>
            </a>
            <a href="/wallet">
                <img class="rounded-full w-[32px] h-[32px]" src="https://valyou-x.vercel.app/assets/bobby_dp.jpeg"></i>
            </a>
            <button onclick="openNav()"><i class="fa fa-bars text-xl"></i></button>
            <div id="overlay" class="hidden absolute left-0 top-0"></div>
        </div>
    </div>
    <ul class="py-6 whitespace-nowrap overflow-x-auto text-sm font-medium text-center flex ">
        <li class="w-full mr-3">
            <span class="inline-block hover:cursor-pointer p-2 w-full  rounded focus:ring-4 focus:ring-blue-300 focus:outline-none  active bg-black" aria-current="page">Top 100</span>
        </li>
        <li class="w-full mr-3">
            <span class="inline-block hover:cursor-pointer p-2 w-full text-gray-900  rounded focus:ring-4 focus:ring-blue-300 focus:outline-none  bg-gray-100" aria-current="page">Trending</span>
        </li>
        <li class="w-full mr-3">
            <span class="inline-block hover:cursor-pointer p-2 w-full text-gray-900  rounded focus:ring-4 focus:ring-blue-300 focus:outline-none  bg-gray-100" aria-current="page">Rap</span>
        </li>
        <li class="w-full mr-3">
            <span class="inline-block hover:cursor-pointer p-2 w-full text-gray-900  rounded focus:ring-4 focus:ring-blue-300 focus:outline-none  bg-gray-100" aria-current="page">Hip-Hop</span>
        </li>
        <li class="w-full mr-3">
            <span class="inline-block hover:cursor-pointer p-2 w-full text-gray-900  rounded focus:ring-4 focus:ring-blue-300 focus:outline-none  bg-gray-100" aria-current="page">Afro Beats</span>
        </li>
        <li class="w-full mr-3">
            <span class="inline-block hover:cursor-pointer p-2 w-full text-gray-900  rounded focus:ring-4 focus:ring-blue-300 focus:outline-none  bg-gray-100" aria-current="page">Amapiano</span>
        </li>
        <li class="w-full mr-3">
            <span class="inline-block hover:cursor-pointer p-2 w-full text-gray-900  rounded focus:ring-4 focus:ring-blue-300 focus:outline-none  bg-gray-100" aria-current="page">Feel Good</span>
        </li>
        <li class="w-full mr-3">
            <span class="inline-block hover:cursor-pointer p-2 w-full text-gray-900  rounded focus:ring-4 focus:ring-blue-300 focus:outline-none  bg-gray-100" aria-current="page">Party</span>
        </li>
        <li class="w-full mr-3">
            <span class="inline-block hover:cursor-pointer p-2 w-full text-gray-900  rounded focus:ring-4 focus:ring-blue-300 focus:outline-none  bg-gray-100" aria-current="page">Romance</span>
        </li>
        <li class="w-full mr-3">
            <span class="inline-block hover:cursor-pointer p-2 w-full text-gray-900  rounded focus:ring-4 focus:ring-blue-300 focus:outline-none  bg-gray-100" aria-current="page">Workout</span>
        </li>
        <li class="w-full mr-3">
            <span class="inline-block hover:cursor-pointer p-2 w-full text-gray-900  rounded focus:ring-4 focus:ring-blue-300 focus:outline-none  bg-gray-100" aria-current="page">Chill</span>
        </li>
        <li class="w-full mr-3">
            <span class="inline-block hover:cursor-pointer p-2 w-full text-gray-900  rounded focus:ring-4 focus:ring-blue-300 focus:outline-none  bg-gray-100" aria-current="page">Energy Country</span>
        </li>
    </ul>
</body>
<script src="{{ URL::asset('js/slider.js') }}"></script>
</html>
