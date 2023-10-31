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
    <div class="flex">
        <div class="lg:w-[60vw] w-full p-2">
            <div class="p-2 background-shadow border-2">
                <div class="flex">
                    <div class="flex items-start">
                        <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                            <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/drakeDp.png" style="display: block; max-width: 100%; width: 50px; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;" />
                        </span>
                    </div>&nbsp;&nbsp;&nbsp;
                    <textarea rows="3" aria-label="maximum height" placeholder="Share your Audio and Video Tracks" style="width: 100%; margin-top: 8px; padding: 3px; height: 78px;"></textarea>
                    <textarea aria-hidden="true" readonly="" tabindex="-1" style="visibility: hidden; position: absolute; overflow: hidden; height: 0px; top: 0px; left: 0px; transform: translateZ(0px); width: 1061.33px; margin-top: 8px; padding: 0px;"></textarea>
                </div><br>
                <div class="flex items-center justify-between w-[100%]">
                    <div class="flex items-center gap-5 text-gray-400 w-[50%]">
                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1mjle09" href="/upload">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/eye.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;" />
                            </span>
                        </a>
                        <p class="hidden md:block mt-[-8px]">Upload Video</p>
                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1mjle09" href="/upload">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/listen_earn.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                        </a>
                        <p class="hidden md:block mt-[-8px]">Upload Audio</p>
                    </div>
                    <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium pinkGradient postNow w-60 css-ceydnk" tabindex="0" type="button">Post Now
                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                    </button>
                </div>
            </div>
            <div class="p-2 my-6 background-shadow border-2">
            <div class="background-shadow mb-1 p-4 py-6 flex justify-between">
                <div class="flex items-center gap-3">
                    <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1mjle09" href="/artist">
                        <div class="MuiAvatar-root MuiAvatar-circular css-ap2pnv">
                            <img alt="artist icon" src="/img/drake.png" class="MuiAvatar-img css-1hy9t21">
                        </div>
                    </a>
                    <div class="flex-col">
                        <p class="md:text-2xl font-bold">Drake</p>
                        <div class="flex items-center gap-1 text-sm">
                            <span class="text-gray-300">Rapper</span>
                            <span>shared video track</span>
                            <div class="mt-[5px]">
                                <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                        <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2712%27%20height=%2712%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                    </span>
                                    <img srcset="/assets/bunnyPlayer.svg 1x, /assets/bunnyPlayer.svg 2x" src="/assets/bunnyPlayer.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-xs">Major Artist</div>
            </div>
            <div class="my-2">
                <div>
                    <div>
                        <div class="absolute" style="width: 100%; height: 100%;">
                            <div class="bg-black" style="width: 100%; height: 100%;">
                                <video src="/assets/drake-started-from-the-bottom.mp4" preload="auto" controls="" style="width: 100%; height: 100%;" playsinline="" webkit-playsinline="" x5-playsinline=""></video>
                            </div>
                        </div>
                        <div class="opacity-0">
                            <div class="hidden lg:block">
                                <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 57.1429% 0px 0px;"></span>
                                    <img sizes="100vw" srcset="/_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=3840&amp;q=75 3840w" src="/_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=3840&amp;q=75" decoding="async" data-nimg="responsive" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; visibility: visible;" data-xblocker="passed">
                                </span>
                            </div>
                            <div class="lg:hidden">
                                <span style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 60% 0px 0px;"></span>
                                    <img sizes="100vw" srcset="/_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=640&amp;q=75 640w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=750&amp;q=75 750w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=828&amp;q=75 828w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=1080&amp;q=75 1080w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=1200&amp;q=75 1200w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=1920&amp;q=75 1920w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=2048&amp;q=75 2048w, /_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=3840&amp;q=75 3840w" src="/_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&amp;w=3840&amp;q=75" decoding="async" data-nimg="responsive" data-xblocker="passed" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; visibility: visible;">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="lg:flex items-center hidden justify-between py-2 hover:cursor-pointer">
                        <div class="flex gap-2">
                            <a class="!no-underline  css-1mjle09" href="/videodetail">
                                <button class="gradient-border h-10 flex items-center gap-2 css-hrnnei" tabindex="0" type="button">
                                    <span style="background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                        <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/comment_box.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                    </span>
                                    <span class="text-[#050f2f] font-bold">Comments</span>
                                    <span class="MuiTouchRipple-root css-w0pj6f"></span>
                                </button>
                            </a>
                            <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways !no-underline css-1mjle09" href="/videodetail">
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium gradient-border h-10 flex items-center gap-2 css-hrnnei" tabindex="0" type="button">
                                    <div class="mt-[-1px]">
                                        <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                            <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/promote_box.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                        </span>
                                    </div>
                                    <span class="text-[#050f2f] font-bold">Promote</span><span class="MuiTouchRipple-root css-w0pj6f"></span>
                                </button>
                            </a>
                        </div>
                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways !no-underline css-1mjle09" href="/videodetail">
                            <div class="flex flex-end">
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium gradient-border h-10 css-hrnnei" tabindex="0" type="button">
                                    <span class="text-[#050f2f] font-bold">Valyou Song</span>
                                    <span class="MuiTouchRipple-root css-w0pj6f"></span>
                                </button>&nbsp;&nbsp;&nbsp;
                                <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient h-10 css-ceydnk" tabindex="0" type="button">
                                    <span class="text-white font-bold">Invest in Artist</span>
                                    <span class="MuiTouchRipple-root css-w0pj6f"></span>
                                </button>
                            </div>
                        </a>
                    </div>
                    <div class="lg:hidden background-shadow shadow-xl">
                        <div class="flex justify-around items-center py-2">
                            <div>
                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways !no-underline !text-[#050f2f] css-1mjle09" href="/videodetail">
                                    <div class="flex items-center justify-center">
                                        <div class="pt-2">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2730%27%20height=%2720%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img srcset="/assets/comment_box.svg 1x, /assets/comment_box.svg 2x" src="/assets/comment_box.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                        </div>
                                        <span class="text-xs ml-1">Comments</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways !no-underline !text-[#050f2f] css-1mjle09" href="/videodetail">
                                    <div class="flex justify-center items-center">
                                        <div>
                                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/promote_box.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                            </span>
                                        </div>
                                        <span class="text-xs ml-1">Promote</span>
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways !no-underline !text-[#050f2f] css-1mjle09" href="/videodetail">
                                    <button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium gradient-border css-hrnnei" tabindex="0" type="button">
                                        <span class="text-[#050f2f] text-xs font-bold">Valyou Song</span>
                                        <span class="MuiTouchRipple-root css-w0pj6f"></span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:hidden background-shadow py-3 mt-2">
                        <div class="flex items-center p-2">
                            <img src="/img/drake.png" width="50" height="50" alt="artist icon">&nbsp;
                                <div class="flex flex-col overflow-y-hidden py-1 ml-[4px]">
                                    <div class="cursor-grab !overflow-y-hidden indiana-scroll-container indiana-scroll-container--hide-scrollbars">
                                        <div class="flex items-center relative whitespace-nowrap text-[#FF0093] font-bold text-[16px]">
                                            <p class="text-[#050F3F] !no-underline text-[16px]">Drake -</p>&nbsp;
                                                <div class="font-normal flex items-center relative border rounded-[50px] p-1 border-[rgba(255, 255, 255, 1)]">
                                                    <span class="text-[16px]">&nbsp; Stock Price 
                                                        <span class="font-bold"> $78.44 VXD &nbsp;</span>
                                                    </span>&nbsp;
                                                    <div class="MuiAvatar-root MuiAvatar-circular !h-4 !w-4 css-3i9vrz">
                                                        <img src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" class="MuiAvatar-img css-1hy9t21">
                                                    </div>&nbsp; &nbsp;
                                                    <span class="text-[16px] text-[#FF0093] ">- 10.77% </span> &nbsp;
                                                </div>&nbsp;&nbsp;&nbsp;
                                                <div class="px-4 flex items-center relative">
                                                    <img src="/assets/song-title.png" class="w-5 h-5" data-xblocker="passed" style="visibility: visible;">&nbsp;
                                                        <div class="flex p-2 text-[16px] ">
                                                            <p class="text-gray-400 text-[16px]">Song Title :
                                                                <span class="font-bold"> Started From The Bottom</span>
                                                            </p>&nbsp;&nbsp;
                                                            <span class="text-gray-300 text-[16px]">Song Valyou :
                                                                <span class="font-bold text-[#050f2f] px-1">$1,000,000,24,567</span>
                                                            </span>&nbsp;&nbsp;
                                                            <span class="text-gray-300 text-[16px]">Artist Brand Listing Category : &nbsp;
                                                                <span class="font-bold text-[#050f2f]">Upcoming Artist / Rapper</span>
                                                            </span>
                                                        </div>
                                                    </div>&nbsp;&nbsp;&nbsp;
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden lg:block background-shadow py-3">
                            <div class="flex items-center p-2">
                                <img src="/img/drake.png" width="50" height="50" alt="artist icon">&nbsp;<div class="flex flex-col overflow-y-hidden py-1 ml-[4px]">
                                    <div class="cursor-grab !overflow-y-hidden indiana-scroll-container indiana-scroll-container--hide-scrollbars">
                                        <div class="flex items-center relative whitespace-nowrap text-[#FF0093] font-bold text-[16px]">
                                            <p class="text-[#050F3F] !no-underline text-[16px]">Drake -</p>&nbsp;
                                            <div class="font-normal flex items-center relative border rounded-[50px] p-1 border-[rgba(255, 255, 255, 1)]">
                                                <span class="text-[16px]">&nbsp; Stock Price 
                                                    <span class="font-bold"> $78.44 VXD &nbsp;</span>
                                                </span>&nbsp;
                                                <div class="MuiAvatar-root MuiAvatar-circular !h-4 !w-4 css-3i9vrz">
                                                    <img src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" class="MuiAvatar-img css-1hy9t21">
                                                </div>&nbsp; &nbsp;
                                                <span class="text-[16px] text-[#FF0093] ">- 10.77% </span> &nbsp;
                                            </div>&nbsp;&nbsp;&nbsp;
                                            <div class="px-4 flex items-center relative">
                                                <img src="/assets/song-title.png" class="w-5 h-5">&nbsp;<div class="flex p-2 text-[16px] ">
                                                    <p class="text-gray-400 text-[16px]">Song Title :<span class="font-bold"> Started From The Bottom</span></p>&nbsp;&nbsp;
                                                    <span class="text-gray-300 text-[16px]">Song Valyou :
                                                        <span class="font-bold text-[#050f2f] px-1">$1,000,000,24,567</span>
                                                    </span>&nbsp;&nbsp;
                                                    <span class="text-gray-300 text-[16px]">Artist Brand Listing Category : &nbsp;
                                                        <span class="font-bold text-[#050f2f]">Upcoming Artist / Rapper</span>
                                                    </span>
                                                </div>
                                            </div>&nbsp;&nbsp;&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="background-shadow p-2 mt-4">
                            <div class="py-2 lg:px-0">
                                <div class="flex items-center justify-between">
                                    <div class="flex px-0 items-center">
                                        <p class="flex items-start font-bold mr-[10px] text-xs">Drake's Brand Sponsors in &nbsp;
                                            <span class="text-[#FF0093] text-xs hover:cursor-pointer"> City</span>
                                            <span>
                                                <svg style="width: 20px;" class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon"><path d="m7 10 5 5 5-5z"></path>
                                                </svg>
                                            </span>
                                        </p>
                                    </div>
                                    <p class="text-[#FF0093] hover:cursor-pointer text-xs">Bid Now (See All)</p>
                                </div>
                            </div>
                            <div class="cursor-grab indiana-scroll-container indiana-scroll-container--hide-scrollbars">
                                <div style="overflow-y:scroll;" class="flex mx-[-15px] w-full">
                                    <div class="p-2 flex-col">
                                        <div class="green-gradient w-64 h-40 rounded-lg p-3 text-center">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/mcdoland-black.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img srcset="/assets/mcdoland-black.svg 1x, /assets/mcdoland-black.svg 2x" src="/assets/mcdoland-black.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                        </div>
                                        <div class="py-4 px-2 flex">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img alt="artist icon"  src="img/drake.png" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                            <div class="flex-col px-2">
                                                <p class="font-bold">Crypto</p>
                                                <p class="text-gray-800"> Click &amp; Earn $3.00VXD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 flex-col">
                                        <div class="bg-black w-64 h-40 rounded-lg p-3 text-center">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/mcdoland-black.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img srcset="/assets/mcdoland-black.svg 1x, /assets/mcdoland-black.svg 2x" src="/assets/mcdoland-black.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                        </div>
                                        <div class="py-4 px-2 flex">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img alt="artist icon"  src="img/drake.png" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                            <div class="flex-col px-2">
                                                <p class="font-bold">Crypto</p>
                                                <p class="text-gray-800"> Click &amp; Earn $3.00VXD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 flex-col">
                                        <div class="bg-black w-64 h-40 rounded-lg p-3 text-center">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/mcdoland-black.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img srcset="/assets/mcdoland-black.svg 1x, /assets/mcdoland-black.svg 2x" src="/assets/mcdoland-black.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                        </div>
                                        <div class="py-4 px-2 flex">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img alt="artist icon"  src="img/drake.png" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                            <div class="flex-col px-2">
                                                <p class="font-bold">Crypto</p>
                                                <p class="text-gray-800"> Click &amp; Earn $3.00VXD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 flex-col">
                                        <div class="green-gradient w-64 h-40 rounded-lg p-3 text-center">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/mcdoland-black.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img srcset="/assets/mcdoland-black.svg 1x, /assets/mcdoland-black.svg 2x" src="/assets/mcdoland-black.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                        </div>
                                        <div class="py-4 px-2 flex">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img alt="artist icon"  src="img/drake.png" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                            <div class="flex-col px-2">
                                                <p class="font-bold">Crypto</p>
                                                <p class="text-gray-800"> Click &amp; Earn $3.00VXD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 flex-col">
                                        <div class="bg-black w-64 h-40 rounded-lg p-3 text-center">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/mcdoland-black.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img srcset="/assets/mcdoland-black.svg 1x, /assets/mcdoland-black.svg 2x" src="/assets/mcdoland-black.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                        </div>
                                        <div class="py-4 px-2 flex">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img alt="artist icon"  src="img/drake.png" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                            <div class="flex-col px-2">
                                                <p class="font-bold">Crypto</p>
                                                <p class="text-gray-800"> Click &amp; Earn $3.00VXD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2 flex-col">
                                        <div class="green-gradient w-64 h-40 rounded-lg p-3 text-center">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/mcdoland-black.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img srcset="/assets/mcdoland-black.svg 1x, /assets/mcdoland-black.svg 2x" src="/assets/mcdoland-black.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                        </div>
                                        <div class="py-4 px-2 flex">
                                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2750%27%20height=%2750%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                </span>
                                                <img alt="artist icon"  src="img/drake.png" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                            </span>
                                            <div class="flex-col px-2">
                                                <p class="font-bold">Crypto</p>
                                                <p class="text-gray-800"> Click &amp; Earn $3.00VXD</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        <div class="hidden lg:block h-[100vw] lg:w-[40vw] m-2 !sticky top-0  background-shadow">
            <div>
                <div class="flex justify-between py-10 px-2">
                    <p class="font-bold">Trending Music Artists Brands in Stock Market</p>
                    <div class="text-[#4AD920] flex gap-2 cursor-pointer">
                        <p class="underline">Up</p>
                        <div class="mt-[-2px]">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/greeen-arrow.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                        </div>
                    </div>
                    <div class="text-[#4AD920] flex gap-2 cursor-pointer">
                        <p class="underline">Down</p>
                        <span class="mt-[-2px]">
                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                    <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2730%27%20height=%2725%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                </span>
                                <img srcset="https://valyou-x.vercel.app/assets/down-arrow-circle.svg 1x, https://valyou-x.vercel.app/assets/down-arrow-circle.svg 2x" src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                            </span>
                        </span>
                    </div>
                </div>
                <div class="MuiTabs-root css-orq8zk">
                    <div class="MuiTabs-scroller MuiTabs-fixed css-1anid1y" style="overflow: hidden; margin-bottom: 0px;">
                        <div aria-label="basic tabs example" class="MuiTabs-flexContainer css-k008qs" role="tablist">
                            <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected animate-none text-sm font-medium px-8 css-1djz04v" tabindex="0" type="button" role="tab" aria-selected="true" id="simple-tab-0" aria-controls="simple-tabpanel-0">All</button>
                            <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary  animate-none text-sm font-medium px-8 css-1djz04v" tabindex="-1" type="button" role="tab" aria-selected="false" id="simple-tab-1" aria-controls="simple-tabpanel-1">United States</button>
                            <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary animate-none text-sm font-medium px-8 css-1djz04v" tabindex="-1" type="button" role="tab" aria-selected="false" id="simple-tab-2" aria-controls="simple-tabpanel-2">Canada</button>
                            <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary  animate-none text-sm font-medium px-8 css-1djz04v" tabindex="-1" type="button" role="tab" aria-selected="false" id="simple-tab-3" aria-controls="simple-tabpanel-3">Barbados</button>
                        </div>
                        <span class="MuiTabs-indicator css-118dy7j" style="left: 0px; width: 90px;"></span>
                    </div>
                </div>
                <div role="tabpanel" id="simple-tabpanel-0" aria-labelledby="simple-tab-0" class="h-[78vh] overflow-y-auto">
                    <div class="w-full">
                        <div class="background-shadow m-2">
                            <div class="flex justify-between p-4">
                                <div class="flex">
                                    <p class="flex items-center">1</p>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="flex space-x-2">
                                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1mjle09" href="/artist">
                                            <div class="MuiAvatar-root MuiAvatar-circular !w-[60px] !h-[60px] css-3i9vrz">
                                                <img alt="artist icon" src="/img/drake.png" class="MuiAvatar-img css-1hy9t21">
                                            </div>
                                        </a>&nbsp;&nbsp;
                                        <div class="flex-col">
                                            <p class="!text-[#050F3F] font-bold">Beyonce</p>
                                            <p class="text-bold text-[#FF0093]">$ 1.4100</p>
                                            <p class="text-[#2B2C2D]">rapper</p>
                                        </div>
                                    </span>
                                </div>
                                <span class="flex space-x-1 items-center">
                                    <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                        <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                            <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2715%27%20height=%2715%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                        </span>
                                        <img srcset="https://valyou-x.vercel.app/assets/down-arrow-circle.svg 1x, https://valyou-x.vercel.app/assets/down-arrow-circle.svg 2x" src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                    </span>
                                    <div class="bg-[#FF0093] text-xs px-[9px] py-1 rounded">
                                        <p class="text-white"> + 249.9020%</p>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="background-shadow m-2">
                            <div class="flex justify-between p-4">
                                <div class="flex">
                                    <p class="flex items-center">1</p>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="flex space-x-2">
                                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1mjle09" href="/artist">
                                            <div class="MuiAvatar-root MuiAvatar-circular !w-[60px] !h-[60px] css-3i9vrz">
                                                <img alt="artist icon" src="/img/drake.png" class="MuiAvatar-img css-1hy9t21">
                                            </div>
                                        </a>&nbsp;&nbsp;
                                        <div class="flex-col">
                                            <p class="!text-[#050F3F] font-bold">Beyonce</p>
                                            <p class="text-bold text-[#FF0093]">$ 1.4100</p>
                                            <p class="text-[#2B2C2D]">rapper</p>
                                        </div>
                                    </span>
                                </div>
                                <span class="flex space-x-1 items-center">
                                    <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                        <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                            <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2715%27%20height=%2715%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                        </span>
                                        <img srcset="https://valyou-x.vercel.app/assets/down-arrow-circle.svg 1x, https://valyou-x.vercel.app/assets/down-arrow-circle.svg 2x" src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                    </span>
                                    <div class="bg-[#FF0093] text-xs px-[9px] py-1 rounded">
                                        <p class="text-white"> + 249.9020%</p>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="background-shadow m-2">
                            <div class="flex justify-between p-4">
                                <div class="flex">
                                    <p class="flex items-center">1</p>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="flex space-x-2">
                                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1mjle09" href="/artist">
                                            <div class="MuiAvatar-root MuiAvatar-circular !w-[60px] !h-[60px] css-3i9vrz">
                                                <img alt="artist icon" src="/img/drake.png" class="MuiAvatar-img css-1hy9t21">
                                            </div>
                                        </a>&nbsp;&nbsp;
                                        <div class="flex-col">
                                            <p class="!text-[#050F3F] font-bold">Beyonce</p>
                                            <p class="text-bold text-[#FF0093]">$ 1.4100</p>
                                            <p class="text-[#2B2C2D]">rapper</p>
                                        </div>
                                    </span>
                                </div>
                                <span class="flex space-x-1 items-center">
                                    <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                        <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                            <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2715%27%20height=%2715%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                        </span>
                                        <img srcset="https://valyou-x.vercel.app/assets/down-arrow-circle.svg 1x, https://valyou-x.vercel.app/assets/down-arrow-circle.svg 2x" src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                    </span>
                                    <div class="bg-[#FF0093] text-xs px-[9px] py-1 rounded">
                                        <p class="text-white"> + 249.9020%</p>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="background-shadow m-2">
                            <div class="flex justify-between p-4">
                                <div class="flex">
                                    <p class="flex items-center">1</p>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="flex space-x-2">
                                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1mjle09" href="/artist">
                                            <div class="MuiAvatar-root MuiAvatar-circular !w-[60px] !h-[60px] css-3i9vrz">
                                                <img alt="artist icon" src="/img/drake.png" class="MuiAvatar-img css-1hy9t21">
                                            </div>
                                        </a>&nbsp;&nbsp;
                                        <div class="flex-col">
                                            <p class="!text-[#050F3F] font-bold">Beyonce</p>
                                            <p class="text-bold text-[#FF0093]">$ 1.4100</p>
                                            <p class="text-[#2B2C2D]">rapper</p>
                                        </div>
                                    </span>
                                </div>
                                <span class="flex space-x-1 items-center">
                                    <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                        <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                            <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2715%27%20height=%2715%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                        </span>
                                        <img srcset="https://valyou-x.vercel.app/assets/down-arrow-circle.svg 1x, https://valyou-x.vercel.app/assets/down-arrow-circle.svg 2x" src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                    </span>
                                    <div class="bg-[#FF0093] text-xs px-[9px] py-1 rounded">
                                        <p class="text-white"> + 249.9020%</p>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="background-shadow m-2">
                            <div class="flex justify-between p-4">
                                <div class="flex">
                                    <p class="flex items-center">1</p>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="flex space-x-2">
                                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1mjle09" href="/artist">
                                            <div class="MuiAvatar-root MuiAvatar-circular !w-[60px] !h-[60px] css-3i9vrz">
                                                <img alt="artist icon" src="/img/drake.png" class="MuiAvatar-img css-1hy9t21">
                                            </div>
                                        </a>&nbsp;&nbsp;
                                        <div class="flex-col">
                                            <p class="!text-[#050F3F] font-bold">Beyonce</p>
                                            <p class="text-bold text-[#FF0093]">$ 1.4100</p>
                                            <p class="text-[#2B2C2D]">rapper</p>
                                        </div>
                                    </span>
                                </div>
                                <span class="flex space-x-1 items-center">
                                    <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                        <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                            <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2715%27%20height=%2715%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                        </span>
                                        <img srcset="https://valyou-x.vercel.app/assets/down-arrow-circle.svg 1x, https://valyou-x.vercel.app/assets/down-arrow-circle.svg 2x" src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                    </span>
                                    <div class="bg-[#FF0093] text-xs px-[9px] py-1 rounded">
                                        <p class="text-white"> + 249.9020%</p>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="background-shadow m-2">
                            <div class="flex justify-between p-4">
                                <div class="flex">
                                    <p class="flex items-center">1</p>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span class="flex space-x-2">
                                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1mjle09" href="/artist">
                                            <div class="MuiAvatar-root MuiAvatar-circular !w-[60px] !h-[60px] css-3i9vrz">
                                                <img alt="artist icon" src="/img/drake.png" class="MuiAvatar-img css-1hy9t21">
                                            </div>
                                        </a>&nbsp;&nbsp;
                                        <div class="flex-col">
                                            <p class="!text-[#050F3F] font-bold">Beyonce</p>
                                            <p class="text-bold text-[#FF0093]">$ 1.4100</p>
                                            <p class="text-[#2B2C2D]">rapper</p>
                                        </div>
                                    </span>
                                </div>
                                <span class="flex space-x-1 items-center">
                                    <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                        <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                            <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2715%27%20height=%2715%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                        </span>
                                        <img srcset="https://valyou-x.vercel.app/assets/down-arrow-circle.svg 1x, https://valyou-x.vercel.app/assets/down-arrow-circle.svg 2x" src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                    </span>
                                    <div class="bg-[#FF0093] text-xs px-[9px] py-1 rounded">
                                        <p class="text-white"> + 249.9020%</p>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
