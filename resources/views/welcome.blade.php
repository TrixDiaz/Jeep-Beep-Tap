<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Automated Fare Collection for Modern Jeepneys(ACTONA)</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="shortcut icon" type="image/x-icon" href="./image/acebedo_logo_orig.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
    <style>
        /* tailwindcss v3.2.4 | MIT License | https://tailwindcss.com*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}} */
    </style>
</head>

<body class="antialiased scroll-smooth dark:bg-slate-900">
    <header>
        <nav data-aos="fade-down" data-aos-duration="1000"
            class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800 fixed top-0 z-30 w-full border-b ">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#home" class="flex items-center">
                    <img src="./image/acebedo_logo_orig.png" class="mr-3 h-6 sm:h-9" alt="" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Modern
                        Jeepneys(ACTONA)</span>
                </a>
                <div class="flex items-center lg:order-2">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/credits') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Register</a>
                            @endif
                            <a href="{{ route('login') }}"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-primary-800">Login</a>
                        @endauth
                    @endif
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        {{-- <li>
                            <a href="#home"
                                class="block py-2 pr-4 pl-3 text-white rounded bg-blue-700 lg:bg-transparent lg:text-gray-700 lg:p-0 dark:text-white"
                                aria-current="page">Dashboard</a>
                        </li> --}}
                        <li>
                            <a href="#services"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                        </li>
                        <li>
                            <a href="#about"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                        {{-- <li>
                            <a href="#complain"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Complain</a>
                        </li> --}}
                        {{-- <li>
                            <a href="#faq"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                        </li> --}}
                        <li>
                            <a href="#contact"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="home" class="bg-white dark:bg-gray-900">
        <div class="grid py-20 px-4 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-[8.4rem] lg:grid-cols-12">
            <div data-aos="fade-right" data-aos-duration="1000" class="mt-10 place-self-center mr-auto lg:col-span-7">
                <h1 class="mb-4 max-w-2xl text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Modern Jeepneys (ACTONA)
                </h1>
                <p class="mb-6 max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">

                </p>
                <a href="{{ route('login') }}"
                    class="inline-flex justify-center items-center py-3 px-5 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Get started
                    <i class="fa fa-arrow-right ml-2 -mr-1 text-[1.1rem]"></i>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex h-[32rem]">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 rounded py-1 px-5">
                    <div data-aos="fade-left" data-aos-duration="1000" class="container auto">
                        <img src="https://media.discordapp.net/attachments/1101129291619647582/1181981450149580852/IMG_7832.jpg?ex=65830901&is=65709401&hm=c8be03724d5b72d151244706f754d01f03cbf1e445851adafcff67e8839bfc6d&=&format=webp&width=561&height=421"
                            alt="" class="rounded h-40 w-full object-cover sm:h-56 md:h-full skew-y-6" />
                    </div>
                    <div data-aos="fade-left" data-aos-duration="2000"
                        class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">
                        <img alt=""
                            src="https://media.discordapp.net/attachments/1101129291619647582/1181982069912518677/IMG_7831.jpg?ex=65830995&is=65709495&hm=a05aff5040e40ae72be8e6f8e2b222a86fdbccc31a8f08adccb4d4bdc4b61a62&=&format=webp&width=561&height=421"
                            class="rounded h-40 w-full object-cover object- sm:h-56 md:h-full skew-y-6" />

                        <img alt=""
                            src="https://res.cloudinary.com/drcyxqm6p/image/upload/v1692721210/modern-jeepney_2019-10-04_02-53-09_cbcvtx.jpg"
                            class="rounded h-40 w-full object-cover object-left sm:h-56 md:h-full skew-y-6" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services -->
    <section id="services" class="bg-gray-50 dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div data-aos="fade-down" data-aos-duration="1000" class="mb-8 w-full lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 text-center">
                    Services
                </h2>
                <p class="text-gray-500 text-center sm:text-xl dark:text-gray-400">
                    Our Cooperative offers a wide range of services to help you reach your destination safe and hassle
                    free.
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div data-aos="fade-up" data-aos-duration="1000">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <i class="fa fa-desktop text-[1.8rem] text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">
                        Trip Monitoring
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        our automated fare collection system, will easily let you see the list of available trips
                        including their schedules and fare
                    </p>
                </div>
                <div data-aos="fade-up" data-aos-duration="2000">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <i
                            class="fa fa-credit-card text-[1.5rem] text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">
                        E-Load
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Top-up anywhere using the app, we provide instant load to your account by using our app loading
                        system.
                    </p>
                </div>
                <div data-aos="fade-up" data-aos-duration="3000">
                    <div
                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
                        <i
                            class="fa fa-credit-card-alt text-[1.5rem] text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"></i>
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">
                        Tap to pay or Contactless Payment
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        We provide contactless payment to ensure the safetyness of our passengers, you can board the
                        jeepney by simply tapping the card to the device without hassle.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- services end -->

    <!-- about start -->
    <section id="about" class="bg-white dark:bg-gray-900">
        <h2 data-aos="fade-dowm" data-aos-duration="1000"
            class="mt-16 mb-8 text-4xl font-extrabold text-gray-900 text-center">
            About
        </h2>
        <div class="gap-16 items-center py-0 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:pb-16 lg:px-6">
            <div data-aos="fade-right" data-aos-duration="1000"
                class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">
                    Modern Jeepneys
                </h2>
                <p class="mb-4">
                    ACTONA has the largest franchise in the NCR. A transportation company offered an alternative
                    upgraded jeepney that it claimed was less expensive than the government's proposed imported minibus.
                    The version displayed by the Association of Committed Transport Organizations Nationwide Corporation
                    (ACTONA) still has the recognizable appearance of the conventional jeepney but has more modern
                    amenities. The organization's prototype incorporates handrails, an elevated ceiling that allows
                    standing passengers, security cameras that are integrated into the design, and an eco-friendly Euro
                    5 engine.
                </p>
                <p>

                </p>
            </div>
            <div data-aos="fade-down" data-aos-duration="1000" class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg"
                    src="https://res.cloudinary.com/drcyxqm6p/image/upload/v1692721210/modern-jeepney_2019-10-04_02-53-09_cbcvtx.jpg"
                    alt="office content 1" />
                <img class="mt-4 w-full rounded-lg lg:mt-10"
                    src="https://res.cloudinary.com/drcyxqm6p/image/upload/v1692721211/Prototype_Isuzu_Modern_Jeepney_2_i7j8a0.jpg"
                    alt="office content 2" />
            </div>
        </div>
    </section>
    <!-- about end -->
    <section class="bg-gray-50 dark:bg-gray-800 ">
        <div data-aos="fade-dowm" data-aos-duration="2000"
            class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">
                    Modern Jeepneys is a technology-driven solution that aims to empower
                    people by providing them with easy travel services.
                    <span class="font-extrabold">Modern Jeepneys</span>.
                </h2>
                <p class="mb-4 font-light">
                    Overall, the Modern Jeepneys is an innovative solution that can empower
                    people by providing them with easy access to comprehensive travel services.

                </p>
                <p class="mb-4 font-medium">
                    Use the Automated Fare Collection and ride Modern Jeepneys for your travel plans here are secured.
                </p>
                <a href="{{ route('login') }}"
                    class="inline-flex items-center font-medium text-primary-600 hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-700">
                    Get Started

                    <i class="fa fa-chevron-right ml-1 mt-1 text-[1.2rem]" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- Container for demo purpose -->
    <div data-aos="fade" data-aos-duration="1000" class="container my-8 px-6 mx-auto">
        <!-- Section: Design Block -->
        <section id="complain" class="mb-32 background-radial-gradient">
            <style>
                .background-radial-gradient {
                    background-color: hsl(218, 41%, 15%);
                    background-image: radial-gradient(650px circle at 0% 0%,
                            hsl(218, 41%, 35%) 15%,
                            hsl(218, 41%, 30%) 35%,
                            hsl(218, 41%, 20%) 75%,
                            hsl(218, 41%, 19%) 80%,
                            transparent 100%),
                        radial-gradient(1250px circle at 100% 100%,
                            hsl(218, 41%, 45%) 15%,
                            hsl(218, 41%, 30%) 35%,
                            hsl(218, 41%, 20%) 75%,
                            hsl(218, 41%, 19%) 80%,
                            transparent 100%);
                }
            </style>

            <div class="px-6 py-12 md:px-12 text-center lg:text-left">
                <div class="container mx-auto xl:px-32">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div class="mt-12 lg:mt-0">
                            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12"
                                style="color: hsl(218, 81%, 95%)">
                                Modern Jeepney<br /><span style="color: hsl(218, 81%, 75%)">Since 1930</span>
                            </h1>
                            <a class="inline-block px-7 py-3 mr-2 bg-gray-200 text-gray-700 font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out"
                                data-mdb-ripple="true" data-mdb-ripple-color="light" href=""
                                role="button">Schedule your Day</a>
                        </div>
                        <div class="mb-12 lg:mb-0">
                            <img src="https://res.cloudinary.com/drcyxqm6p/image/upload/v1692721211/Prototype_Isuzu_Modern_Jeepney_2_i7j8a0.jpg"
                                class="w-full rounded-lg shadow-lg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->
    </div>
    <!-- Container for demo purpose -->

    <!-- ====== FAQ Section Start -->
    {{-- <section id="faq" x-data="{
        openFaq1: false,
        openFaq2: false,
        openFaq3: false,
        openFaq4: false,
        openFaq5: false,
        openFaq6: false
    }"
        class="relative z-20 overflow-hidden bg-white pt-20 pb-12 lg:pt-[30px] lg:pb-[90px]">
        <div class="container mx-auto px-12">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div data-aos="fade-up" data-aos-duration="1000"
                        class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            FAQ
                        </span>
                        <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl md:text-[40px]">
                            Any Questions? Look Here
                        </h2>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <div data-aos="fade-right" data-aos-duration="1000"
                        class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                        <button class="faq-btn flex w-full text-left" @click="openFaq1 = !openFaq1">
                            <div
                                class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                                <i class="fa fa-chevron-down text-[1.2rem] text-blue-700" aria-hidden="true"></i>
                            </div>
                            <div class="w-full">
                                <h4 class="text-lg font-semibold text-black mb-7">
                                    What is the Automated Fare Collection System?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq1" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                            The integration of multiple technologies and systems to provide seamless and automated payment processes for public transportation services is referred to as automated fare collection (AFC).
                            The major purpose of AFC is to improve the efficiency, convenience, and usability of fare payment and collection for passengers while also streamlining operations for transportation providers.
                            </p>
                        </div>
                    </div>

                    <div data-aos="fade-right" data-aos-duration="2000"
                        class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                        <button class="faq-btn flex w-full text-left" @click="openFaq3 = !openFaq3">
                            <div
                                class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                                <i class="fa fa-chevron-down text-[1.2rem] text-blue-700" aria-hidden="true"></i>
                            </div>
                            <div class="w-full">
                                <h4 class="text-lg font-semibold text-black">
                                How do we see our load balance on our Top up card?

                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq3" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                You can see your load balance in Credits under your Profile Settings.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div data-aos="fade-left" data-aos-duration="1000"
                        class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                        <button class="faq-btn flex w-full text-left" @click="openFaq4 = !openFaq4">
                            <div
                                class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                                <i class="fa fa-chevron-down text-[1.2rem] text-blue-700" aria-hidden="true"></i>
                            </div>
                            <div class="w-full">
                                <h4 class="text-lg font-semibold text-black">
                                    What is Modern Jeepney?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq4" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                            A modern jeepney is an enhanced version of the classic jeepney, which is a common method of public transportation in the Philippines.
                            The traditional jeepney is a colorful and distinctively designed vehicle that evolved from surplus military jeeps left by the United States after World War II, which were modified and transformed into low-cost public transportation options, primarily used for short-distance travel within cities and towns.
                            </p>
                        </div>
                    </div>
                    <div data-aos="fade-left" data-aos-duration="2000"
                        class="single-faq mb-8 w-full rounded-lg border border-[#F3F4FE] bg-white p-4 sm:p-8 lg:px-6 xl:px-8">
                        <button class="faq-btn flex w-full text-left" @click="openFaq5 = !openFaq5">
                            <div
                                class="mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg bg-primary bg-opacity-5 text-primary">
                                <i class="fa fa-chevron-down text-[1.2rem] text-blue-700" aria-hidden="true"></i>
                            </div>
                            <div class="w-full">
                                <h4 class="text-lg font-semibold text-black">
                                    Where is ACTO NA located?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq5" class="faq-content pl-[62px]">
                            <p class="py-3 text-base leading-relaxed text-body-color">
                                The ACTO NA Terminal is located at 34 DBP Ave, Taguig, 1633 Metro Manila
behind the sunshine mall
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 z-[-1]">
            <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.5"
                    d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                    fill="url(#paint0_linear)" />
                <defs>
                    <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3056D3" stop-opacity="0.36" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section> --}}
    <!-- ====== FAQ Section End -->
    {{-- Complaint --}}
    {{-- <section id="contact" class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div data-aos="fade-up" data-aos-duration="2000" class="mx-auto max-w-screen-sm text-center">
                <h2 class="mb-4 text-4xl font-extrabold leading-tight text-gray-900 dark:text-white">
                    Message Us
                </h2>
                <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">
                    Got a technical issue? Want to send feedback about the app? Need
                    details about our plan? Let us know.
                </p>
                <a href=""
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-primary-800">Send
                    Message</a>
            </div>
        </div>
    </section> --}}
    {{-- End of Complaint --}}
    <footer id="contact" class="p-4 bg-gray-50 sm:p-6 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com" class="flex items-center">
                        <img src="./image/acebedo_logo_orig.png" class="mr-3 h-8" alt="" />
                        <span class="self-center text-2xl font-semibold whitespace-wrap dark:text-white">Modern
                            E-Jeep</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                            Resources
                        </h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="mailto:help@actonacloud.online" class="hover:underline">File Complain</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/messages/t/100005497698072" class="hover:underline">Message Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                            Follow us
                        </h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="https://www.facebook.com/ACTONACorp" class="hover:underline">Facebook</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/actonagroup/" class="hover:underline">Instagram</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                            Legal
                        </h2>
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-4">
                                <a href="{{ route('policy.show') }}" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href={{ route('terms.show') }} class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#home"
                        class="hover:underline">Modern E-Jeep™</a>.
                    All Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="https://www.facebook.com/ACTONACorp" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa fa-facebook-official text-[1.2rem]" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/actonagroup/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa fa-instagram text-[1.2rem]" aria-hidden="true"></i>
                    </a>
                    {{-- <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa fa-twitter text-[1.2rem]" aria-hidden="true"></i>
                    </a> --}}
                    <a href="mailto:help@actonacloud.online" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa fa-envelope text-[1.2rem]" aria-hidden="true"></i>
                    </a>
                    {{-- <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <i class="fa fa-dribbble text-[1.2rem]" aria-hidden="true"></i>
                    </a> --}}
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $('a').on('click', function(event) {
                if (this.hash !== '') {
                    event.preventDefault()

                    var hash = this.hash

                    $('html, body').animate({
                            scrollTop: $(hash).offset().top,
                        },
                        800,
                        function() {
                            window.location.hash = hash
                        }
                    )
                }
            })
        })
    </script>
</body>

</html>
