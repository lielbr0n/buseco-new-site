<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/homepage.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">

        <header class="bg-white sticky top-0 z-50 shadow-md" x-data="{ open: false }">
            <nav class="mx-auto flex max-w-7xl items-center justify-between py-2 px-6 lg:px-8 " aria-label="Global">
              <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                  <span class="sr-only">BUSECO</span>
                  <a href="/"><img class="h-12 w-auto" src="{{url('/images/buseco.png')}}" alt="buseco" /></a>
                </a>
              </div>
              <div class="flex lg:hidden">
                <button type="button" @click="open = true" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
                </button>
              </div>

                <div class="hidden lg:flex lg:gap-x-7 lg:items-center lg:justify-end">
                    <a href="/" class="nav-link text-sm font-semibold leading-6 text-gray-900">HOME</a>
                    <a
                        class="flex items-center text-sm font-semibold leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-[#0a961d] focus:text-[#0a961d] focus:outline-none focus:ring-0 active:text-[#0a961d] motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                        href="#"
                        type="button"
                        id="dropdownMenuButton2"
                        data-twe-dropdown-toggle-ref
                        aria-expanded="false"
                        data-twe-ripple-init
                        data-twe-ripple-color="light">
                            PUBLICATION
                        <span class="ms-1 w-2 [&>svg]:h-5 [&>svg]:w-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                            fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                        </svg>
                        </span>
                      </a>
                    <ul
                        class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded border-2 border-[#2C8D0A] bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                        aria-labelledby="dropdownMenuButton2"
                        data-twe-dropdown-menu-ref>
                        <li>
                        <a
                            class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#"
                            data-twe-dropdown-item-ref
                            >BIDS & AWARDS</a
                        >
                        </li>
                        <li>
                        <a
                            class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#"
                            data-twe-dropdown-item-ref
                            >ERC</a
                        >
                        </li>
                    </ul>
        
                    <a class="flex items-center text-sm font-semibold leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-[#0a961d] focus:text-[#0a961d] focus:outline-none focus:ring-0 active:text-[#0a961d] motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                        href="#"
                        type="button"
                        id="dropdownMenuButton2"
                        data-twe-dropdown-toggle-ref
                        aria-expanded="false"
                        data-twe-ripple-init
                        data-twe-ripple-color="light">
                        NEWS & UPDATES
                        <span class="ms-1 w-2 [&>svg]:h-5 [&>svg]:w-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                            fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                        </svg>
                        </span>
                      </a>
                    <ul
                        class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded border-2 border-[#2C8D0A] bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                        aria-labelledby="dropdownMenuButton2"
                        data-twe-dropdown-menu-ref>
                        <li>
                        <a
                            class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#"
                            data-twe-dropdown-item-ref
                            >ARTICLES</a>
                        </li>
                        <li>
                        <a
                            class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#"
                            data-twe-dropdown-item-ref
                            >RATES</a>
                        </li>
                        <li>
                        <a
                            class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#"
                            data-twe-dropdown-item-ref
                            >MONTHLY GENERATION MIX UNDER OATH</a>
                        </li>
                        <li>
                        <a
                            class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                            href="#"
                            data-twe-dropdown-item-ref
                            >DAILY SUPPLY AND LOAD OUTLOOK</a>
                        </li>
                    </ul>
        
                    <a class="flex items-center text-sm font-semibold leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-[#0a961d] focus:text-[#0a961d] focus:outline-none focus:ring-0 active:text-[#0a961d] motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                        href="#"
                        type="button"
                        id="dropdownMenuButton2"
                        data-twe-dropdown-toggle-ref
                        aria-expanded="false"
                        data-twe-ripple-init
                        data-twe-ripple-color="light">
                        ONLINE SERVICES
                        <span class="ms-1 w-2 [&>svg]:h-5 [&>svg]:w-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                            fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                        </svg>
                        </span>
                    </a>
                    <ul
                    class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded border-2 border-[#2C8D0A] bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                    aria-labelledby="dropdownMenuButton2"
                    data-twe-dropdown-menu-ref>
                        <li>
                            <a
                                class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#"
                                data-twe-dropdown-item-ref
                                >MEMBERSHIP APPLICATION
                            </a>
                        </li>
                        <li>
                            <a
                                class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#"
                                data-twe-dropdown-item-ref
                                >DOWNLOAD FORMS
                            </a>
                        </li>
                    </ul>
                        
                    <a class="flex items-center text-sm font-semibold leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-[#0a961d] focus:text-[#0a961d] focus:outline-none focus:ring-0 active:text-[#0a961d] motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                        href="#"
                        type="button"
                        id="dropdownMenuButton2"
                        data-twe-dropdown-toggle-ref
                        aria-expanded="false"
                        data-twe-ripple-init
                        data-twe-ripple-color="light">
                            ABOUT BUSECO
                        <span class="ms-1 w-2 [&>svg]:h-5 [&>svg]:w-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                            fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                        </svg>
                        </span>
                    </a>
                    <ul
                    class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded border-2 border-[#2C8D0A] bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block dark:bg-surface-dark"
                    aria-labelledby="dropdownMenuButton2"
                    data-twe-dropdown-menu-ref>
                        <li>
                            <a
                                class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#"
                                data-twe-dropdown-item-ref
                                >BUSECO PROFILE
                            </a>
                        </li>
                        <li>
                            <a
                                class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href={{route('page.view', ['pageName' => 'board-of-directors'])}}
                                data-twe-dropdown-item-ref
                                >BOARD OF DIRECTORS
                            </a>
                        </li>
                        <li>
                            <a
                                class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                                href="#"
                                data-twe-dropdown-item-ref
                                >THE MANAGEMENT
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="nav-link text-sm font-semibold leading-6 text-gray-900 active:text-[#2C8D0A]">CONTACT US</a>
                    <a href="/my-account" class="account-button">MY ACCOUNT</a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" x-show="open" role="dialog" aria-modal="true" >
              <!-- Background backdrop, show/hide based on slide-over state. -->
              <div class="fixed inset-0 z-10"></div>
              <div @click.away="open = false" class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-12 w-auto" src="{{url('/images/buseco.png')}}" alt="buseco" />
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="open = false">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    {{-- <div class="-my-6 divide-y divide-gray-500/10"> --}}
                    <div class="-my-6">
                        
        
                        <a href="/" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900  hover:text-[#ffffff]  hover:bg-[#2C8D0A]">HOME</a>
                        
                        <div>
                            <div class="-mx-3" x-data="{ isOpen: false }">
                                <button type="button" @click="isOpen = !isOpen" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-[#2C8D0A] active:bg-[#2C8D0A] active:text-[#ffffff]  focus:text-[#ffffff] " aria-controls="disclosure-1" aria-expanded="false">
                                PUBLICATION
                                <!--
                                    Expand/collapse icon, toggle classes based on menu open state.
                
                                    Open: "rotate-180", Closed: ""
                                -->
                                <svg class="h-5 w-5 flex-none " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" :class="{ 'rotate-180': isOpen }">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                                </button>
                                <!-- 'Product' sub-menu, show/hide based on menu state. -->
                                <div  
                                    x-show="isOpen" 
                                    class="mt-2 space-y-2" id="disclosure-1"
                                    x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                >
                                    <a href="#" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">BIDS & AWARDS</a>
                                    <a href="#" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">ERC</a>
                                </div> 
                            </div>
                        </div>
                        
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900  hover:text-[#ffffff]  hover:bg-[#2C8D0A]">NEWS & UPDATES</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900  hover:text-[#ffffff]  hover:bg-[#2C8D0A]">ONLINE SERVICES</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900  hover:text-[#ffffff]  hover:bg-[#2C8D0A]">ABOUT BUSECO</a>
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900  hover:text-[#ffffff]  hover:bg-[#2C8D0A]">CONTACT US</a>
                        <br>
                        <a href="/my-account" class="account-button">MY ACCOUNT</a>
                        {{-- <div class="py-6">
                        <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
                        </div> --}}
                    {{-- </div> --}}
                </div>
              </div>
            </div>
        </header>

        <!-- main -->
        <div class="w-full">
            {{ $slot }}
        </div>
        <!-- end main -->

        <!--logos-->
        <div class="corporate-partners" id="corporate-partners">
            <div class="flex gap-4 justify-center p-5">
                <a href="https://www.nea.gov.ph/ao39/" class="hover:scale-110"><img class="h-20 w-auto" src="{{url('/images/NEA-LOGO-150.png')}}" alt="" /></a>
                <a href="https://doe.gov.ph/" class="hover:scale-110"><img class="h-20 w-auto" src="{{url('/images/doe_logo-150.jpg')}}" alt="" /></a>
                <a href="https://www.ngcp.ph/" class="hover:scale-110"><img class="h-20 w-auto" src="{{url('/images/ngc-150.png')}}" alt="" /></a>
                <a href="https://www.erc.gov.ph/" class="hover:scale-110"><img class="h-20 w-auto" src="{{url('/images/ERC-150.jpg')}}" alt="" /></a>
                <a href="https://www.transco.ph/" class="hover:scale-110"><img class="h-20 w-auto" src="{{url('/images/transco-150.jpg')}}" alt="" /></a>
                <a href="https://www.napocor.gov.ph/" class="hover:scale-110"><img class="h-20 w-auto" src="{{url('/images/npr-150.png')}}" alt="" /></a>
            </div>
        </div>
        <!--end logos-->
        <!--footer -->
        <footer class="footer-siteinfo" id="footer-siteinfo">
            <div class="grid mx-auto max-w-7xl grid-cols-3 gap-4 mx-2 py-10">
                <div class="branch-info">
                    <h2 class="footer-title mb-6 border-b w-11/12">HOTLINES</h2> 
                    <p><b>Address:</b> Tankulan, Manolo Fortich, Bukidnon</p>
                    <p><b>Smart:</b> 0998-843-8334</p>
                    <p><b>Globe:</b> 0935-144-3095</p>
                    <br />
    
                    <h2 class="branch-title">Malaybalay Branch</h2>
                    <p><b>Address:</b> Casisang, Malaybalay City, Bukidnon</p>
                    <p><b>Smart:</b> 0998-843-8335</p>
                    <p><b>Globe:</b> 0935-144-2484</p>
                {{--<a href="{{ url('/') }}"><img class="h-20 w-auto mx-auto" src="{{url('/images/buseco.png')}}" alt="buseco" /></a>
                    <div class="flex gap-3 justify-center">--}}
                    {{--<a href="https://www.facebook.com/BUSECOKasanagMCOs">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#0866ff" class="bi bi-facebook fb-svg" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                            </svg>
                        </a>--}}
                        {{--<a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#249ef0" class="bi bi-twitter twitter-svg" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                            </svg>
                        </a>
    
                    </div>--}}
                </div>
    
                <div class="branch-info">
                    <h2 class="footer-title mb-6 border-b w-11/12">CONTACT INFO</h2>
    
                    <h2 class="branch-title">Manolo Fortich Branch</h2>
    
                    <p><b>Address:</b> Tankulan, Manolo Fortich, Bukidnon</p>
                    <p><b>Smart:</b> 0998-843-8334</p>
                    <p><b>Globe:</b> 0935-144-3095</p>
                    <br />
    
                    <h2 class="branch-title">Malaybalay Branch</h2>
                    <p><b>Address:</b> Casisang, Malaybalay City, Bukidnon</p>
                    <p><b>Smart:</b> 0998-843-8335</p>
                    <p><b>Globe:</b> 0935-144-2484</p>
                </div>
    
                <div class="links-info pr-1">
                    <h2 class="footer-title mb-6 border-b w-11/12">LINKS</h2>
    
                    <a href="#" class="link-footer">Membership Application</a><br />
                    <a href="#" class="link-footer">My Account</a><br />
                    <a href="#" class="link-footer">News and Updates</a><br />
                    <a href="#" class="link-footer">Privacy</a><br />
                </div>
            </div>
            <div class="all-rights-reserved py-4"><p class="all-rights-text text-center">&copy; 2024 BUKIDNON II ELECTRIC COOPERATIVE, INC. All Rights Reserved</p></div>
            <div class="madewithlove"><p class="all-rights-text text-center">catscanc0de&trade;</p><br></div>
        </footer>
    </body>
</html>
