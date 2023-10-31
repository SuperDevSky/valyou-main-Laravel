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

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
</head>

<body>
    <x-nav2 />
    <div class="mt-5 mx-3 p-2 flex gap-5 darken blode_menuhead">
        <div class="flex items-center gap-5 text-normal">
            <button class="payview">PAY PER VIEW</button>
            <button class="watchearn">WATCH & EARN</button>
            <button class="valyou">VALYOU PLAYLIST</button>
            <button class="promotevideo">PROMOTED VIDEOS</button>
            <button class="promoteaudio">PROMOTED AUDIOS</button>
        </div>
    </div>

    <div class="blode_section">
        <div role="tabpanel" id="simple-tabpanel-0" aria-labelledby="simple-tab-0">
            <div class="MuiBox-root css-0">
                <p class="MuiTypography-root MuiTypography-body1 css-913uo3">
                    <div class="md:p-2">
                        <div class="lg:flex w-full block">
                            <div class="lg:w-[70%] w-full md:!relative top-0 !sticky lg:background-shadow lg:p-2 lg:border-2 bg-white">
                                <div>
                                    <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways css-1mjle09" href="/videodetail">
                                        <span class="multi_image">
                                            <span></span>
                                            <img src="https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Fdrake-starting-bottom.jpeg&w=1920&q=75" data-xblocker="passed" sizes="100vw" decoding="async" data-nimg="responsive">
                                        </span>
                                    </a>
                                </div>
                                <div class="lg:flex items-center hidden justify-between py-2 hover:cursor-pointer">
                                    <div class="flex gap-2">
                                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways !no-underline  css-1mjle09" href="/videodetail">
                                            <button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium gradient-border h-10 flex items-center gap-2 css-hrnnei" tabindex="0" type="button">
                                                <span class="comments_btn">
                                                    <span>
                                                        <img a aria-hidden="true" src="https://valyou-x.vercel.app/assets/comment_box.svg">
                                                    </span>
                                                    <img class="comments_img" srcset="/assets/comment_box.svg 1x, /assets/comment_box.svg 2x" src="https://valyou-x.vercel.app/assets/comment_box.svg" decoding="async" data-nimg="intrinsic">
                                                </span>
                                                <span class="text-[#050f2f] font-bold">Comments</span>
                                                <span class="MuiTouchRipple-root css-w0pj6f"></span>
                                            </button>
                                        </a>
                                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways !no-underline css-1mjle09" href="/videodetail">
                                            <button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary MuiButton-sizeMedium MuiButton-outlinedSizeMedium gradient-border h-10 flex items-center gap-2 css-hrnnei" tabindex="0" type="button">
                                                <div class="mt-[-1px]">
                                                    <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                                        <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                                            <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/promote_box.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: nogreen-gradient w-64 h-40 rounded-lg p-3 text-centerne; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                                        </span>
                                                        <img srcset="/assets/promote_box.svg 1x, /assets/promote_box.svg 2x" src="https://valyou-x.vercel.app/assets/promote_box.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                                    </span>
                                                </div>
                                                <span class="text-[#050f2f] font-bold">Promote</span>
                                                <span class="MuiTouchRipple-root css-w0pj6f"></span>
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
                            </div>
                            <div class="m-2 md:mx-[-8px] lg:m-0">
                                <div class="lg:h-[45.5vw] mt-1 lg:!overflow-y-auto rounded-lg background-shadow m-2 lg:w-[30vw]">
                                    <div class="p-2">
                                        <p class="text-2xl font-[800]">All Videos</p>
                                        <div class="background-shadow px-2 my-2">
                                            <div class="flex py-3 gap-4 hover:cursor-pointer">
                                                <span class="user_sticky">
                                                    <a href="/videodetail"><span class="sticky_text">
                                                        <img aria-hidden="true" src="https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Fdrake-sticky.jpeg&w=256&q=75">
                                                    </span>
                                                    <img class="sticky_image" srcset="/_next/image?url=%2Fassets%2Fdrake-sticky.jpeg&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fassets%2Fdrake-sticky.jpeg&amp;w=384&amp;q=75 2x" src="https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Fdrake-sticky.jpeg&w=256&q=75" decoding="async" data-nimg="intrinsic"></a>
                                                </span>
                                                <div class="flex-col flex gap-1">
                                                    <p class="text-[13px] md:text-base font-bold md:font-normal">Drake - Sticky (Official Video)</p>
                                                    <p class="text-[12px]">Singer</p>
                                                    <p class="text-[8px] lg:text-sm">Song Valyou:
                                                        <span class="font-bold">$ 0.332</span>
                                                    </p>
                                                    <div class="flex items-center gap-1 font-bold text-[10px] text-[#FF0093]">
                                                        <div>Stock Price</div>
                                                        <div class="MuiAvatar-root MuiAvatar-circular !h-4 !w-4 css-3i9vrz">
                                                            <img src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" class="MuiAvatar-img css-1hy9t21">
                                                        </div>
                                                        <div>$ 78.44 VXD - <span class="font-normal">10.77%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="background-shadow px-2 my-2">
                                            <div class="flex py-3 gap-4 hover:cursor-pointer">
                                                <span class="user_sticky">
                                                    <a href="/videodetail"><span class="sticky_text">
                                                        <img aria-hidden="true" src="https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Fdrake-gods-plan.jpeg&w=256&q=75">
                                                    </span>
                                                    <img class="sticky_image" srcset="/_next/image?url=%2Fassets%2Fdrake-sticky.jpeg&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fassets%2Fdrake-sticky.jpeg&amp;w=384&amp;q=75 2x" src="https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Fdrake-gods-plan.jpeg&w=256&q=75" decoding="async" data-nimg="intrinsic"></a>
                                                </span>
                                                <div class="flex-col flex gap-1">
                                                    <p class="text-[13px] md:text-base font-bold md:font-normal">Drake - God's Plan</p>
                                                    <p class="text-[12px]">Singer</p>
                                                    <p class="text-[8px] lg:text-sm">Song Valyou:
                                                        <span class="font-bold">$ 0.332</span>
                                                    </p>
                                                    <div class="flex items-center gap-1 font-bold text-[10px] text-[#FF0093]">
                                                        <div>Stock Price</div>
                                                        <div class="MuiAvatar-root MuiAvatar-circular !h-4 !w-4 css-3i9vrz">
                                                            <img src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" class="MuiAvatar-img css-1hy9t21">
                                                        </div>
                                                        <div>$ 78.44 VXD - <span class="font-normal">10.77%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="background-shadow px-2 my-2">
                                            <div class="flex py-3 gap-4 hover:cursor-pointer">
                                                <span class="user_sticky">
                                                    <a href="/videodetail"><span class="sticky_text">
                                                        <img aria-hidden="true" src="https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Fdrake-started-from-bottom.jpeg&w=256&q=75">
                                                    </span>
                                                    <img class="sticky_image" srcset="/_next/image?url=%2Fassets%2Fdrake-sticky.jpeg&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fassets%2Fdrake-sticky.jpeg&amp;w=384&amp;q=75 2x" src="https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Fdrake-started-from-bottom.jpeg&w=256&q=75" decoding="async" data-nimg="intrinsic"></a>
                                                </span>
                                                <div class="flex-col flex gap-1">
                                                    <p class="text-[13px] md:text-base font-bold md:font-normal">Drake - Started From the Bottom</p>
                                                    <p class="text-[12px]">Singer</p>
                                                    <p class="text-[8px] lg:text-sm">Song Valyou:
                                                        <span class="font-bold">$ 0.332</span>
                                                    </p>
                                                    <div class="flex items-center gap-1 font-bold text-[10px] text-[#FF0093]">
                                                        <div>Stock Price</div>
                                                        <div class="MuiAvatar-root MuiAvatar-circular !h-4 !w-4 css-3i9vrz">
                                                            <img src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" class="MuiAvatar-img css-1hy9t21">
                                                        </div>
                                                        <div>$ 78.44 VXD - <span class="font-normal">10.77%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="background-shadow px-2 my-2">
                                            <div class="flex py-3 gap-4 hover:cursor-pointer">
                                                <span class="user_sticky">
                                                    <a href="/videodetail"><span class="sticky_text">
                                                        <img aria-hidden="true" src="https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Fdrake-life-is-good.jpeg&w=256&q=75">
                                                    </span>
                                                    <img class="sticky_image" srcset="/_next/image?url=%2Fassets%2Fdrake-sticky.jpeg&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fassets%2Fdrake-sticky.jpeg&amp;w=384&amp;q=75 2x" src="https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Fdrake-life-is-good.jpeg&w=256&q=75" decoding="async" data-nimg="intrinsic"></a>
                                                </span>
                                                <div class="flex-col flex gap-1">
                                                    <p class="text-[13px] md:text-base font-bold md:font-normal">Drake -  Life is Good</p>
                                                    <p class="text-[12px]">Singer</p>
                                                    <p class="text-[8px] lg:text-sm">Song Valyou:
                                                        <span class="font-bold">$ 0.332</span>
                                                    </p>
                                                    <div class="flex items-center gap-1 font-bold text-[10px] text-[#FF0093]">
                                                        <div>Stock Price</div>
                                                        <div class="MuiAvatar-root MuiAvatar-circular !h-4 !w-4 css-3i9vrz">
                                                            <img src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" class="MuiAvatar-img css-1hy9t21">
                                                        </div>
                                                        <div>$ 78.44 VXD - <span class="font-normal">10.77%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="background-shadow px-2 my-2">
                                            <div class="flex py-3 gap-4 hover:cursor-pointer">
                                                <span class="user_sticky">
                                                    <a href="/videodetail"><span class="sticky_text">
                                                        <img aria-hidden="true" src="https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Fdrake-hotline.jpeg&w=256&q=75">
                                                    </span>
                                                    <img class="sticky_image" srcset="/_next/image?url=%2Fassets%2Fdrake-sticky.jpeg&amp;w=256&amp;q=75 1x, /_next/image?url=%2Fassets%2Fdrake-sticky.jpeg&amp;w=384&amp;q=75 2x" src="https://valyou-x.vercel.app/_next/image?url=%2Fassets%2Fdrake-hotline.jpeg&w=256&q=75" decoding="async" data-nimg="intrinsic"></a>
                                                </span>
                                                <div class="flex-col flex gap-1">
                                                    <p class="text-[13px] md:text-base font-bold md:font-normal">Drake -  Hotline Bling</p>
                                                    <p class="text-[12px]">Singer</p>
                                                    <p class="text-[8px] lg:text-sm">Song Valyou:
                                                        <span class="font-bold">$ 0.332</span>
                                                    </p>
                                                    <div class="flex items-center gap-1 font-bold text-[10px] text-[#FF0093]">
                                                        <div>Stock Price</div>
                                                        <div class="MuiAvatar-root MuiAvatar-circular !h-4 !w-4 css-3i9vrz">
                                                            <img src="https://valyou-x.vercel.app/assets/down-arrow-circle.svg" class="MuiAvatar-img css-1hy9t21">
                                                        </div>
                                                        <div>$ 78.44 VXD - <span class="font-normal">10.77%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>
            </div>
        </div>
        
        
    </div>
    <div class="mt-5 mx-3 p-4 grid grid-cols-1 darken text-normal ">
        <div class="flex flex-col overflow-y-hidden py-1 ml-[4px]">
            <div class="flex items-center relative whitespace-nowrap text-[#FF0093] font-bold text-[16px] user_description_section">
                <img src="img/drake.png" />
                <p class="text-[#050F3F] !no-underline text-[16px]">&nbsp;&nbsp;Drake -&nbsp;&nbsp;</p>
                <div class="font-normal flex items-center relative border rounded-[50px] p-1 border-[rgba(255, 255, 255, 1)]">
                    <span>&nbsp;&nbsp;Stock Price&nbsp;</span> 
                    <span class="font-bold"> $78.44 VXD &nbsp;</span>
                    <div class="MuiAvatar-root MuiAvatar-circular !h-4 !w-4 css-3i9vrz"><img src="  https://valyou-x.vercel.app/assets/down-arrow-circle.svg" class="MuiAvatar-img css-1hy9t21"></div>
                    <span class="text-[16px] text-[#FF0093] ">- 10.77% </span>
                </div>
                <div class="px-4 flex items-center relative">
                    <img src="https://valyou-x.vercel.app/assets/song-title.png" class="w-5 h-5">&nbsp;
                    <div class="flex p-2 text-[16px] ">
                        <p class="text-gray-400 text-[16px]">Song Title :<span class="font-bold"> Started From The Bottom</span></p>&nbsp;&nbsp;<span class="text-gray-300 text-[16px]">Song Valyou :<span class="font-bold text-[#050f2f] px-1">$1,000,000,24,567</span></span>&nbsp;&nbsp;<span class="text-gray-300 text-[16px]">Artist Brand Listing Category : &nbsp;<span class="font-bold text-[#050f2f]">Upcoming Artist / Rapper</span></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="mt-5 mx-3 p-4 grid grid-cols-1 darken text-normal user_brand">
        <div class="py-2 lg:px-0">
            <div class="flex items-center justify-between">
                <div class="flex px-0 items-center">
                    <p class="font-bold mr-[10px] text-xs">Drake's Brand Sponsors in &nbsp;
                        <span class="text-[#FF0093] text-xs hover:cursor-pointer">Тянскии национальныи наслег City</span>
                        <span>&nbsp;&nbsp;&nbsp;
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowDropDownIcon"><path d="m7 10 5 5 5-5z"></path></svg>
                        </span>
                    </p>
                </div>
                <p class="text-[#FF0093] hover:cursor-pointer text-xs">Bid Now (See All)</p>
            </div>
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
    
    

</section>
        </div>
    </div>
    <div class="mt-20"></div>
    <script type="text/javascript">
        // const links = document.querySelectorAll('.flex button');
        // links.forEach(link => {
        //     link.addEventListener('click', function(event) {
        //         event.preventDefault();
        //         links.forEach(link => link.classList.remove('button_clicked'));
        //         this.classList.add('button_clicked');
        //     });
        // });
    </script>
</body>
</html>
