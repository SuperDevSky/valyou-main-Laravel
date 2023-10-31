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
        <input class="w-full text-sm" placeholder="Search for music artists, investors & business profiles on valyou x" />
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
        <div id="leftnav" class="fixed z-10 left-0 top-0 flex flex-col gap-5 p-5 text-lg bg-black text-white shadow-xl">
            <!-- <img class="w-[100px] h-[50px]" src="https://valyou-x.vercel.app/assets/logo_black.svg" />
            <a href="/pricing">Bank</a>
            <a href="/login">Market</a>
            <a href="/">Social Media</a>
            <a href="/watch">Watch & Earn</a>
            <a href="/">Listen & Earn</a>
            <a href="/">Store</a> -->
            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation16 MuiDrawer-paper MuiDrawer-paperAnchorLeft css-wf16b5 market_slidemenu_total" tabindex="-1">
                <div class="p-4 bg-black slidemenu">
                    <div class="flex items-center">
                        <div class="border-4 rounded-full">
                            <div class="MuiAvatar-root MuiAvatar-circular css-3i9vrz">
                                <img alt="Remy Sharp" src="/img/drake.png" class="MuiAvatar-img css-1hy9t21 drake_slidemenu">
                            </div>
                        </div>&nbsp;&nbsp;&nbsp;
                        <div class="flex-col">
                            <p class="text-sm font-bold text-white">Bobby Oparaocha</p>
                            <p class="text-xs text-white">bobbyoparaocha@gmail.com</p>
                            <p class="text-xs text-pink-600"> Verify Account ID</p>
                        </div>
                    </div>
                </div>
                <div class="p-0 MuiBox-root css-rdqznd">
                    <div class="MuiBox-root css-l57rop">
                        <div class="MuiTabs-root css-orq8zk">
                            <div class="MuiTabs-scrollableX MuiTabs-hideScrollbar css-oqr85h followyou_slidemenu">
                            </div>
                            <div class="MuiTabs-scroller MuiTabs-hideScrollbar MuiTabs-scrollableX css-12qnib" style="margin-bottom: 0px;">
                                <div aria-label="basic tabs example" class="MuiTabs-flexContainer css-k008qs " role="tablist">
                                    <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected text-sm font-medium whitespace-nowrap animate-none css-kc8vld follow_btn" tabindex="0" type="button" role="tab" aria-selected="true" id="simple-tab-0" aria-controls="simple-tabpanel-0">Following You</button>
                                    <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary text-sm font-medium whitespace-nowrap animate-none css-kc8vld follow_btn" tabindex="-1" type="button" role="tab" aria-selected="false" id="simple-tab-1" aria-controls="simple-tabpanel-1">You Are Following</button>
                                </div>
                                <span class="MuiTabs-indicator css-118dy7j" style="left: 0px; width: 145.5px;"></span>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" id="simple-tabpanel-0" aria-labelledby="simple-tab-0" class="overflow-x-hidden">
                        <div class="p-4 bg-black slidemenu_tab">
                            <div class="flex justify-between">
                                <div class="flex-col tab_text">
                                    <p class="text-center text-green-600 font-[800]">2</p>
                                    <p class="text-white ">Artist</p><hr>
                                </div>
                                <div class="flex-col">
                                    <p class="text-center text-green-600 font-[800]">100</p>
                                    <p class="text-white ">Investors</p><hr>
                                </div>
                                <div class="flex-col">
                                    <p class="text-center text-green-600 font-[800]">4</p>
                                    <p class="text-white ">Business</p><hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" hidden="" id="simple-tabpanel-1" aria-labelledby="simple-tab-1">
                        <div class="p-4 bg-black ">
                            <div class="flex justify-between">
                                <div class="flex-col">
                                    <p class="text-center text-green-600 font-[800]">2</p>
                                    <p class="text-white ">Artist</p><hr>
                                </div>
                                <div class="flex-col">
                                    <p class="text-center text-green-600 font-[800]">100</p>
                                    <p class="text-white ">Investors</p><hr>
                                </div>
                                <div class="flex-col">
                                    <p class="text-center text-green-600 font-[800]">4</p>
                                    <p class="text-white ">Business</p><hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-4 submenu">
                    <details class="text-left sidemenu">
                        <summary class="sidemenu-summary">
                            <div class="flex">
                                <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%; margin-top: 10px;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                        <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/investor_icon.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                    </span>
                                    <img srcset="/assets/investor_icon.svg 1x, /assets/investor_icon.svg 2x" src="https://valyou-x.vercel.app/assets/investor_icon.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                </span>
                                <p class="text-left relative top-[-2px] py-3 mt-1 px-4 text-1xl font-[500] leading-[19px]">Investor</p>
                            </div>
                        </summary>
                        <ul>
                            <li class="py-2 cursor-pointer">
                                <span>Messages</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Your Followers</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>You Are Following</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Revenue Streams</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Upload</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>My Audios</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>My Videos</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Promoted Videos</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Promoted Audios</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Connect</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Collaborate</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Artist Profile Settings</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Invite Friends / Fans</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Managed Investments</span>
                            </li>
                        </ul>
                    </details><br><hr><br>
                    <details class="text-left sidemenu">
                        <summary class="sidemenu-summary">
                            <div class="flex">
                                <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%; margin-top: 10px;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                        <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/stock_market.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; width: 70%;">
                                    </span>
                                    <img src="https://valyou-x.vercel.app/assets/stock_market.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" srcset="/assets/stock_market.svg 1x, /assets/stock_market.svg 2x">
                                    <noscript></noscript>
                                </span>
                                <p class="text-left relative top-[-2px] py-3 mt-1 px-4 text-1xl font-[500] leading-[19px]">Stock Market</p>
                            </div>
                        </summary>
                        <ul>
                            <li class="py-2 cursor-pointer">
                                <span>All - Music Artists</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>America / Canada (North)</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Africa / Middle East</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>South / Latin America</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Asia</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Australia / Australasia</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Europe</span>
                            </li>
                        </ul>
                    </details>
                    <details class="text-left sidemenu">
                        <summary class="sidemenu-summary">
                            <div class="flex">
                                <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%; margin-top: 10px;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                        <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/bank_icon.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                    </span>
                                    <img src="https://valyou-x.vercel.app/assets/bank_icon.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" srcset="/assets/bank_icon.svg 1x, /assets/bank_icon.svg 2x">
                                    <noscript></noscript>
                                </span>
                                <p class="text-left relative top-[-2px] py-3 mt-1 px-4 text-1xl font-[500] leading-[19px]">Bank</p>
                            </div>
                        </summary>
                        <ul>
                            <li class="py-2 cursor-pointer">
                                <span>Account Balance</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Deposit Withdraw</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Currency Exchange</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Buy / Sell VXD Currency</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Artist Investment Portfolio</span>
                            </li>
                        </ul>
                    </details>

                    <div class="flex py-2 hover:cursor-pointer">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%; margin-top: 10px;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/eye.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img src="https://valyou-x.vercel.app/assets/eye.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" srcset="/assets/newspaper.svg 1x, /assets/newspaper.svg 2x"><noscript></noscript>
                        </span>
                        <span class="hover:cursor-pointer px-4 relative top-[-2px] py-3 font-[500] leading-[19px] mt-1">Social Media</span>
                    </div>
                    <div class="flex py-2 hover:cursor-pointer">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%; margin-top: 10px;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/eye.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img src="https://valyou-x.vercel.app/assets/eye.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" srcset="/assets/eye.svg 1x, /assets/eye.svg 2x"><noscript></noscript>
                        </span>
                        <span class="hover:cursor-pointer px-4 relative top-[-2px] py-3 font-[500] leading-[19px] mt-1">Watch &amp; Earn</span>
                    </div>
                    <div class="flex py-2 hover:cursor-pointer">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%; margin-top: 10px;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/listen_earn.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img src="https://valyou-x.vercel.app/assets/listen_earn.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" srcset="/assets/listen_earn.svg 1x, /assets/listen_earn.svg 2x"><noscript></noscript>
                        </span>
                        <span class="hover:cursor-pointer px-4 relative top-[-2px] py-3 font-[500] leading-[19px] mt-1">Listen &amp; Earn</span>
                    </div><hr><br>
                    <details class="text-left sidemenu">
                        <summary class="sidemenu-summary">
                            <div class="flex">
                                <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%; margin-top: 10px;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                        <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/store_icon.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                    </span>
                                    <img src="https://valyou-x.vercel.app/assets/store_icon.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" srcset="/assets/store_icon.svg 1x, /assets/store_icon.svg 2x">
                                    <noscript></noscript>
                                </span>
                                <p class="text-left relative top-[-2px] py-3 mt-1 px-4 text-1xl font-[500] leading-[19px]">Store</p>
                            </div>
                        </summary>
                        <ul>
                            <li class="py-2 cursor-pointer">
                                <span>Products</span>
                            </li>
                        </ul>
                    </details><hr><br>
                    <details class="text-left sidemenu">
                        <summary class="sidemenu-summary">
                            <div class="flex">
                                <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%; margin-top: 10px;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                        <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/accounts.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                    </span>
                                    <img src="https://valyou-x.vercel.app/assets/accounts.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" srcset="/assets/accounts.svg 1x, /assets/accounts.svg 2x"><noscript></noscript>
                                </span>
                                <p class="text-left relative top-[-2px] py-3 mt-1 px-4 text-1xl font-[500] leading-[19px]">Accounts</p>
                            </div>
                        </summary>
                        <ul>
                            <li class="py-2 cursor-pointer">
                                <span>Create Artist</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>My Artist</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>Create Business</span>
                            </li>
                            <li class="py-2 cursor-pointer">
                                <span>My Business</span>
                            </li>
                        </ul>
                    </details>
                    <div class="flex py-2 hover:cursor-pointer">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%; margin-top: 10px;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/support.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                            </span>
                            <img src="https://valyou-x.vercel.app/assets/support.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" srcset="/assets/support.svg 1x, /assets/support.svg 2x"><noscript></noscript>
                        </span>
                        <span class="hover:cursor-pointer px-4 relative top-[-2px] py-3 font-[500] leading-[19px] mt-1">Support</span>
                    </div>
                    <div class="flex py-2 hover:cursor-pointer">
                        <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%; margin-top: 10px;">
                            <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                <img alt="" aria-hidden="true" src="https://valyou-x.vercel.app/assets/home.svg" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span>
                                <img src="https://valyou-x.vercel.app/assets/home.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript>
                            </span>
                            <span class="hover:cursor-pointer px-4 relative top-[-2px] py-3 font-[500] leading-[19px] mt-1">Home</span>
                        </div>
                        <div>
                            <div class="flex py-2 hover:cursor-pointer">
                                <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                    <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                                        <img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2720%27%20height=%2720%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
                                    </span>
                                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;"><noscript></noscript>
                                </span>
                                <span class="hover:cursor-pointer px-4 relative top-[-2px] py-3 font-[500] leading-[19px] mt-1">Logout</span>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <script src="{{ URL::asset('js/leftnav.js') }}"></script>
    <script type="text/javascript">
        // const links = document.querySelectorAll('.flex a');
        // links.forEach(link => {
        //     link.addEventListener('click', function(event) {
        //         event.preventDefault();
        //         links.forEach(link => link.classList.remove('clicked'));
        //         this.classList.add('clicked');
        //     });
        // });
        const buttons = document.querySelectorAll('.follow_btn');
        buttons.forEach(button => {
            console.log(button);
            button.addEventListener('click', function(event) {
                buttons.forEach(button => button.classList.remove('button_clicked'));
                this.classList.add('button_clicked');
            });
        });

    </script>
</div>
