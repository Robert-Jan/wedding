<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Robert-Jan ♥ Linda</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

        <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
        <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>

        <style type="text/css">
            @font-face {
                font-family: 'special';
                src: url('fonts/DKLemonYellowSun.woff2') format('woff2'),
                    url('fonts/DKLemonYellowSun.woff') format('woff');
                font-weight: normal;
                font-style: normal;
            }
            .zigzag {
                background: linear-gradient(-317deg, #63B3ED 12px, transparent 0) 0 12px, linear-gradient(140deg, #63B3ED 12px, #F7FAFC 0) 0 12px;
                background-color: #63B3ED;
                background-position: right bottom;
                background-repeat: repeat-y;
                background-size: 24px 24px;
            }
            .h-128 {
                height: 32rem;
            }
            .w-80 {
                width: : 20rem;
            }
        </style>

    </head>
    <body x-data="{ tab: '{{ ($errors->any() || session()->has('success')) ? 'message' : 'welcome' }}' }" class="text-gray-800 bg-blue-400">
        <div class="hidden md:block">
            @yield('content')
        </div>
        <div class="md:hidden flex flex-col justify-center items-center min-h-screen">
            <div class="flex flex-col justify-center h-40 w-40 mb-6 text-center rounded-full shadow-inner bg-gray-200">
                <h1 style="font-family: special" class="text-6xl ">RJ♥L</h1>
            </div>
            <p class="w-2/3 mx-auto mt-6 text-center">
                Deze website is alleen geschikt voor tablets en computers.
            </p>
        </div>
    </body>
</html>
