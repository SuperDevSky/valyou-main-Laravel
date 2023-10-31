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
</head>

<body>
    <x-nav2 />
    <div class="p-2">
        <div class="MuiTabs-root css-orq8zk">
            <div class="MuiTabs-scroller MuiTabs-fixed css-1anid1y" style="overflow: hidden; margin-bottom: 0px;">
                <div aria-label="basic tabs example" class="MuiTabs-flexContainer css-k008qs" role="tablist">
                    <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary Mui-selected css-a47pfp" tabindex="0" type="button" role="tab" aria-selected="true" id="simple-tab-0" aria-controls="simple-tabpanel-0">Personal Account</button>
                    <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary css-a47pfp" tabindex="-1" type="button" role="tab" aria-selected="false" id="simple-tab-1" aria-controls="simple-tabpanel-1">Artist Company Funding</button>
                    <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary css-a47pfp" tabindex="-1" type="button" role="tab" aria-selected="false" id="simple-tab-2" aria-controls="simple-tabpanel-2">Investments</button>
                    <button class="MuiButtonBase-root MuiTab-root MuiTab-textColorPrimary css-a47pfp" tabindex="-1" type="button" role="tab" aria-selected="false" id="simple-tab-3" aria-controls="simple-tabpanel-3">Business</button>
                </div>
                <span class="MuiTabs-indicator css-118dy7j" style="left: 0px; width: 149.484px;"></span>
            </div>
        </div>
    </div>
    <div role="tabpanel" id="simple-tabpanel-0" aria-labelledby="simple-tab-0">
        <div class="MuiBox-root css-hpgf8j">
            <p class="MuiTypography-root MuiTypography-body1 css-9l3uo3">
                <div class="block p-6 bg-white text-center rounded-lg border border-gray-200 shadow-md"><br><br><br>
                    <h5 class="mb-2 lg:text-4xl text-3xl text-center font-bold tracking-tight ">$ 999,293.0757 VXD</h5><br><br><br>
                    <a href="/bank">Personal Wallet Address</a><br><br>
                    <div class="flex justify-between">
                        <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium pinkGradient w-60 lg:w-96 css-ceydnk" tabindex="0" type="button">Send<span class="MuiTouchRipple-root css-w0pj6f"></span></button>&nbsp;&nbsp;
                        <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium green-gradient mx-1 w-60 lg:w-96 css-ceydnk" tabindex="0" type="button"> Receive<span class="MuiTouchRipple-root css-w0pj6f"></span></button>&nbsp;&nbsp;
                        <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium bg-pink-500 w-60 lg:w-96 css-ceydnk" tabindex="0" type="button">Currency Exchange<span class="MuiTouchRipple-root css-w0pj6f"></span></button>
                    </div><br><br>
                </div><br><br>
                <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium w-full mx-1 css-1hdlfw9" tabindex="0" type="button">Deposit / Buy VXD<span class="MuiTouchRipple-root css-w0pj6f"></span></button><br><br>
                <button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium w-full mx-1 css-ceydnk css-ceydnk-cus" tabindex="0" type="button">Transactions &amp; Earning History<span class="MuiTouchRipple-root css-w0pj6f"></span>
                </button>
            </p>
        </div>
    </div>
</body>
<script src="{{ URL::asset('js/slider.js') }}"></script>
</html>
