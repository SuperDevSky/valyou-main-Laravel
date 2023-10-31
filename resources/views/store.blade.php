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
    <div class="p-2">
        <div class="lg:flex flex-col block justify-between">
            <div class="background-shadow flex justify-center items-center w-full h-[370px]">
                <span class="flex items-center justify-center">
                    <img style="width: 43%;" alt="" aria-hidden="true" src="{{ URL::asset('img/valyouXshirt.png') }}" >
                </span>
            </div>
            <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium pinkGreen w-full css-ceydnk css-ceydnk-cus" tabindex="0" type="button">
                <div class=" flex justify-center items-center gap-4 w-full">
                    <p>PURCHASE</p>
                    <div class="flex">
                        <p class="font-bold text-white px-1">$ 96</p>
                        <p class=" text-gray-600 line-through">$ 100</p>
                    </div>
                </div>
                <span class="MuiTouchRipple-root css-w0pj6f"></span>
            </button><br>
        </div>
        <div class="flex flex-col overflow-y-hidden py-1">
        <div class="cursor-grab !overflow-y-hidden indiana-scroll-container indiana-scroll-container--hide-scrollbars">
            <div class="flex items-center relative whitespace-nowrap text-[#FF0093] font-bold text-[16px]">
                <div class="flex items-center gap-5">
                    <div class="w-[13vw]">
                        <div class="my-4 bg-white p-2 background-shadow">
                            <div class="flex justify-center p-4 relative">
                                <div class="absolute top-2 z-10 right-2">                                    
                                    <svg class="css-dvceld" fill="#f50579" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455 455" xml:space="preserve" stroke="#f50579">
                                        <g id="SVGRepo_iconCarrier"> <path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92 C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769 l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714 C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029 c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368 c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771 c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/> </g>
                                    </svg>
                                </div>
                                <span class="flex justify-center">
                                    <img style="width:60%" alt="" aria-hidden="true" src="{{ URL::asset('img/valyouXshirt_sm.png') }}" >
                                </span>
                            </div>
                            <div class="p-0">
                                <h5 class="mb-2 font-bold tracking-tight text-gray-900 ">Valyou X Tees</h5>
                                <p class="mb-3 text-gray-700 text-[14px]" >Founding Member Black T shirt.</p>
                                <div class="flex md:text-lg items-center justify-between">
                                    <div class="flex">
                                        <p class="font-bold px-1">$ 120</p>
                                        <p class=" text-gray-600 line-through">$ 220</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[13vw]">
                        <div class="my-4 bg-white p-2 background-shadow">
                            <div class="flex justify-center p-4 relative">
                                <div class="absolute top-2 z-10 right-2">                                    
                                    <svg class="css-dvceld" fill="#f50579" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455 455" xml:space="preserve" stroke="#f50579">
                                        <g id="SVGRepo_iconCarrier"> <path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92 C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769 l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714 C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029 c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368 c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771 c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/> </g>
                                    </svg>
                                </div>
                                <span class="flex justify-center">
                                    <img style="width:60%" alt="" aria-hidden="true" src="{{ URL::asset('img/valyouXshirt_sm.png') }}" >
                                </span>
                            </div>
                            <div class="p-0">
                                <h5 class="mb-2 font-bold tracking-tight text-gray-900 ">Valyou X Tees</h5>
                                <p class="mb-3 text-gray-700 text-[14px]" >Founding Member Black T shirt.</p>
                                <div class="flex md:text-lg items-center justify-between">
                                    <div class="flex">
                                        <p class="font-bold px-1">$ 120</p>
                                        <p class=" text-gray-600 line-through">$ 220</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[13vw]">
                        <div class="my-4 bg-white p-2 background-shadow">
                            <div class="flex justify-center p-4 relative">
                                <div class="absolute top-2 z-10 right-2">                                    
                                    <svg class="css-dvceld" fill="#f50579" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455 455" xml:space="preserve" stroke="#f50579">
                                        <g id="SVGRepo_iconCarrier"> <path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92 C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769 l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714 C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029 c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368 c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771 c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/> </g>
                                    </svg>
                                </div>
                                <span class="flex justify-center">
                                    <img style="width:60%" alt="" aria-hidden="true" src="{{ URL::asset('img/valyouXshirt_sm.png') }}" >
                                </span>
                            </div>
                            <div class="p-0">
                                <h5 class="mb-2 font-bold tracking-tight text-gray-900 ">Valyou X Tees</h5>
                                <p class="mb-3 text-gray-700 text-[14px]" >Founding Member Black T shirt.</p>
                                <div class="flex md:text-lg items-center justify-between">
                                    <div class="flex">
                                        <p class="font-bold px-1">$ 120</p>
                                        <p class=" text-gray-600 line-through">$ 220</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[13vw]">
                        <div class="my-4 bg-white p-2 background-shadow">
                            <div class="flex justify-center p-4 relative">
                                <div class="absolute top-2 z-10 right-2">                                    
                                    <svg class="css-dvceld" fill="#f50579" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455 455" xml:space="preserve" stroke="#f50579">
                                        <g id="SVGRepo_iconCarrier"> <path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92 C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769 l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714 C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029 c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368 c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771 c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/> </g>
                                    </svg>
                                </div>
                                <span class="flex justify-center">
                                    <img style="width:60%" alt="" aria-hidden="true" src="{{ URL::asset('img/valyouXshirt_sm.png') }}" >
                                </span>
                            </div>
                            <div class="p-0">
                                <h5 class="mb-2 font-bold tracking-tight text-gray-900 ">Valyou X Tees</h5>
                                <p class="mb-3 text-gray-700 text-[14px]" >Founding Member Black T shirt.</p>
                                <div class="flex md:text-lg items-center justify-between">
                                    <div class="flex">
                                        <p class="font-bold px-1">$ 120</p>
                                        <p class=" text-gray-600 line-through">$ 220</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[13vw]">
                        <div class="my-4 bg-white p-2 background-shadow">
                            <div class="flex justify-center p-4 relative">
                                <div class="absolute top-2 z-10 right-2">                                    
                                    <svg class="css-dvceld" fill="#f50579" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455 455" xml:space="preserve" stroke="#f50579">
                                        <g id="SVGRepo_iconCarrier"> <path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92 C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769 l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714 C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029 c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368 c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771 c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/> </g>
                                    </svg>
                                </div>
                                <span class="flex justify-center">
                                    <img style="width:60%" alt="" aria-hidden="true" src="{{ URL::asset('img/valyouXshirt_sm.png') }}" >
                                </span>
                            </div>
                            <div class="p-0">
                                <h5 class="mb-2 font-bold tracking-tight text-gray-900 ">Valyou X Tees</h5>
                                <p class="mb-3 text-gray-700 text-[14px]" >Founding Member Black T shirt.</p>
                                <div class="flex md:text-lg items-center justify-between">
                                    <div class="flex">
                                        <p class="font-bold px-1">$ 120</p>
                                        <p class=" text-gray-600 line-through">$ 220</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[13vw]">
                        <div class="my-4 bg-white p-2 background-shadow">
                            <div class="flex justify-center p-4 relative">
                                <div class="absolute top-2 z-10 right-2">                                    
                                    <svg class="css-dvceld" fill="#f50579" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455 455" xml:space="preserve" stroke="#f50579">
                                        <g id="SVGRepo_iconCarrier"> <path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92 C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769 l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714 C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029 c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368 c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771 c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/> </g>
                                    </svg>
                                </div>
                                <span class="flex justify-center">
                                    <img style="width:60%" alt="" aria-hidden="true" src="{{ URL::asset('img/valyouXshirt_sm.png') }}" >
                                </span>
                            </div>
                            <div class="p-0">
                                <h5 class="mb-2 font-bold tracking-tight text-gray-900 ">Valyou X Tees</h5>
                                <p class="mb-3 text-gray-700 text-[14px]" >Founding Member Black T shirt.</p>
                                <div class="flex md:text-lg items-center justify-between">
                                    <div class="flex">
                                        <p class="font-bold px-1">$ 120</p>
                                        <p class=" text-gray-600 line-through">$ 220</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[13vw]">
                        <div class="my-4 bg-white p-2 background-shadow">
                            <div class="flex justify-center p-4 relative">
                                <div class="absolute top-2 z-10 right-2">                                    
                                    <svg class="css-dvceld" fill="#f50579" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455 455" xml:space="preserve" stroke="#f50579">
                                        <g id="SVGRepo_iconCarrier"> <path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92 C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769 l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714 C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029 c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368 c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771 c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/> </g>
                                    </svg>
                                </div>
                                <span class="flex justify-center">
                                    <img style="width:60%" alt="" aria-hidden="true" src="{{ URL::asset('img/valyouXshirt_sm.png') }}" >
                                </span>
                            </div>
                            <div class="p-0">
                                <h5 class="mb-2 font-bold tracking-tight text-gray-900 ">Valyou X Tees</h5>
                                <p class="mb-3 text-gray-700 text-[14px]" >Founding Member Black T shirt.</p>
                                <div class="flex md:text-lg items-center justify-between">
                                    <div class="flex">
                                        <p class="font-bold px-1">$ 120</p>
                                        <p class=" text-gray-600 line-through">$ 220</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[13vw]">
                        <div class="my-4 bg-white p-2 background-shadow">
                            <div class="flex justify-center p-4 relative">
                                <div class="absolute top-2 z-10 right-2">                                    
                                    <svg class="css-dvceld" fill="#f50579" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455 455" xml:space="preserve" stroke="#f50579">
                                        <g id="SVGRepo_iconCarrier"> <path d="M326.632,10.346c-38.733,0-74.991,17.537-99.132,46.92c-24.141-29.384-60.398-46.92-99.132-46.92 C57.586,10.346,0,67.931,0,138.714c0,55.426,33.05,119.535,98.23,190.546c50.161,54.647,104.728,96.959,120.257,108.626l9.01,6.769 l9.01-6.768c15.529-11.667,70.098-53.978,120.26-108.625C421.949,258.251,455,194.141,455,138.714 C455,67.931,397.414,10.346,326.632,10.346z M334.666,308.974c-41.259,44.948-85.648,81.283-107.169,98.029 c-21.52-16.746-65.907-53.082-107.166-98.03C61.236,244.592,30,185.717,30,138.714c0-54.24,44.128-98.368,98.368-98.368 c35.694,0,68.652,19.454,86.013,50.771l13.119,23.666l13.119-23.666c17.36-31.316,50.318-50.771,86.013-50.771 c54.24,0,98.368,44.127,98.368,98.368C425,185.719,393.763,244.594,334.666,308.974z"/> </g>
                                    </svg>
                                </div>
                                <span class="flex justify-center">
                                    <img style="width:60%" alt="" aria-hidden="true" src="{{ URL::asset('img/valyouXshirt_sm.png') }}" >
                                </span>
                            </div>
                            <div class="p-0">
                                <h5 class="mb-2 font-bold tracking-tight text-gray-900 ">Valyou X Tees</h5>
                                <p class="mb-3 text-gray-700 text-[14px]" >Founding Member Black T shirt.</p>
                                <div class="flex md:text-lg items-center justify-between">
                                    <div class="flex">
                                        <p class="font-bold px-1">$ 120</p>
                                        <p class=" text-gray-600 line-through">$ 220</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<script src="{{ URL::asset('js/slider.js') }}"></script>
</html>
