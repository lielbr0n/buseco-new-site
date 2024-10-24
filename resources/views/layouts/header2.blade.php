<style>
    .dropdown:hover > .dropdown-content {
        display: block;
    }
    </style>
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
      {{-- <div class="hidden lg:flex lg:gap-x-12">
        <div class="relative">
          <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
            Product
            <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
  
          <!--
            'Product' flyout menu, show/hide based on flyout menu state.
  
            Entering: "transition ease-out duration-200"
              From: "opacity-0 translate-y-1"
              To: "opacity-100 translate-y-0"
            Leaving: "transition ease-in duration-150"
              From: "opacity-100 translate-y-0"
              To: "opacity-0 translate-y-1"
          -->
            <div class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
                <div class="p-4">
                <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                    </svg>
                    </div>
                    <div class="flex-auto">
                    <a href="#" class="block font-semibold text-gray-900">
                        Analytics
                        <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                    </div>
                </div>
                <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                    </svg>
                    </div>
                    <div class="flex-auto">
                    <a href="#" class="block font-semibold text-gray-900">
                        Engagement
                        <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">Speak directly to your customers</p>
                    </div>
                </div>
                <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                    </svg>
                    </div>
                    <div class="flex-auto">
                    <a href="#" class="block font-semibold text-gray-900">
                        Security
                        <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>
                    </div>
                </div>
                <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                    </div>
                    <div class="flex-auto">
                    <a href="#" class="block font-semibold text-gray-900">
                        Integrations
                        <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">Connect with third-party tools</p>
                    </div>
                </div>
                <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-50">
                    <div class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    <svg class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                    </div>
                    <div class="flex-auto">
                    <a href="#" class="block font-semibold text-gray-900">
                        Automations
                        <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
                    </div>
                </div>
                </div>
                <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z" clip-rule="evenodd" />
                    </svg>
                    Watch demo
                </a>
                <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                    </svg>
                    Contact sales
                </a>
                </div>
            </div>
        </div>
  
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
      </div> --}}
      {{-- <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
      </div> --}}
        <div class="hidden lg:flex lg:gap-x-7 lg:items-center lg:justify-end">
            <a href="/" class="nav-link text-sm font-semibold leading-6 text-gray-900">HOME</a>
            {{-- <a href="#" class="nav-link text-sm font-semibold leading-6 text-gray-900">PUBLICATION</a> --}}

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
                <li class="dropdown">
                <a
                    class="flex items-center w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/notices"
                    data-twe-dropdown-item-ref
                    >NOTICES
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-2">
                        <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                    </svg>   
                </a>

                <ul class="dropdown-content absolute hidden text-gray-700 pl-5 ml-24 -mt-10">
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="/bids-&-awards">BIDS & AWARDS</a>
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="/district-election">DISTRICT ELECTION</a>
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="/agma">AGMA</a>
                </ul>
                    
                </li>
                
                
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/erc"
                    data-twe-dropdown-item-ref
                    >ERC</a>
                </li>
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/coop-news"
                    data-twe-dropdown-item-ref
                    >COOP NEWS</a>
                  </li>
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/job-opportunities"
                    data-twe-dropdown-item-ref
                    >JOB OPPORTUNITIES</a>
                </li>
                <li>
                
                </li>
                <li class="dropdown">
                <a
                    class="flex items-center w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/notices"
                    data-twe-dropdown-item-ref
                    >SERVICES
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-2">
                        <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                    </svg>   
                </a>

                <ul class="dropdown-content relative hidden text-gray-700 pl-5 ml-24 -mt-10">
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="#">APPLYING FOR MEMBERSHIP</a>
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="|#">RCOA</a>
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="#">NET METERING</a>
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="#">SOLAR HOME SYSTEM</a>
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="#">ILP</a>
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="#">LIFELINE DISCOUNT</a>
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="#">SENIOR CITIZEN DISCOUNT</a>
                </ul>
                    
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
                RATES
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
                <li class="dropdown">
                <a
                    class="flex items-center w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/notices"
                    data-twe-dropdown-item-ref
                    >SCHEDULED UNBUNDLED RATES
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-2">
                        <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                    </svg>   
                </a>

                <ul class="dropdown-content relative hidden text-gray-700 pl-5 ml-24 -mt-10">
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="#">2024</a>
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="#">2023</a>
                    <li><a class="bg-gray-200 hover:bg-[#2C8D0A] hover:text-[#ffffff] text-sm font-medium text-neutral-700 py-2 px-4 block whitespace-no-wrap" href="#">2022</a>
                </ul>
                    
                </li>
                
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/monthly-generation-mix-under-oath"
                    data-twe-dropdown-item-ref
                    >MONTHLY GENERATION MIX UNDER OATH</a>
                </li>
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/daily-supply-and-load-outlook"
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
                    href="https://online.buseco.coop"
                    data-twe-dropdown-item-ref
                    >MEMBERSHIP APPLICATION</a>
                </li>
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/download-forms"
                    data-twe-dropdown-item-ref
                    >DOWNLOAD FORMS</a>
                </li>
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/faq"
                    data-twe-dropdown-item-ref
                    >FAQs</a>
                </li>
              </ul>
                
            <a class="flex items-center text-sm font-semibold leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-[#0a961d] focus:text-[#0a961d] focus:outline-none focus:ring-0 active:text-[#0a961d] motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                href="/faq"
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
                    href="/buseco-profile"
                    data-twe-dropdown-item-ref
                    >BUSECO PROFILE</a>
                </li>
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/board-of-directors"
                    data-twe-dropdown-item-ref
                    >BOARD OF DIRECTORS</a>
                </li>
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/the-management"
                    data-twe-dropdown-item-ref
                    >THE MANAGEMENT</a>
                </li>
              </ul>

              <div x-data="{ show: false, menu: false, servicesMenu: false }">
                <a class="flex items-center text-sm font-semibold leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-[#0a961d] focus:text-[#0a961d] focus:outline-none focus:ring-0 active:text-[#0a961d] motion-reduce:transition-none"
                    x-on:click="show = ! show"
                    role="button"
                >
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
                <div class="relative">
                    <div class="rounded border-2 border-[#2C8D0A] bg-white bg-clip-padding text-base shadow-lg min-w-[220px] top-1 w-full absolute z-10" x-show="show"
                        x-cloak
                        @click.away="show = false" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95">
                        <ul
                            class="link-wrapper [&>li]:text-neutral-700 hover:[&>li]:text-white [&>li]:text-sm [&>li]:font-medium [&>li]:cursor-pointer [&>li]:px-4 [&>li]:py-2 [&>li]:transition-all hover:[&>li]:bg-[#2C8D0A] active:[&>li]:bg-[#2C8D0A]">
                            
                            <li class="flex items-center justify-between" 
                                x-on:click="menu = ! menu" 
                                @click.away="menu = false"
                                >
                                NOTICES
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                </svg> 
                            </li>
                            <div class="bg-white rounded border-2 border-[#2C8D0A] max-w-[180px] w-full absolute  -right-[185px] -bottom-4 hover:[&>li]:text-white [&>li]:text-neutral-700 [&>li]:text-sm [&>li]:font-medium [&>li]:cursor-pointer [&>li]:px-4 [&>li]:py-2 [&>li]:transition-all hover:[&>li]:bg-[#2C8D0A] active:[&>li]:bg-[#2C8D0A] active:[&>li]:scale-[0.99]"
                                x-show="menu" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95">
                                <li><a href="/bids-&-awards" class="block w-full ">BIDS & AWARDS</a></li>
                                <li><a href="/district-election" class="block w-full ">DISTRCIT ELECTION</a></li>
                                <li><a href="/agma" class="block w-full ">AGMA</a></li>
                            </div>
                            
                            <li><a href="/erc" class="block w-full ">ERC</a></li>
                            <li><a href="/coop-news" class="block w-full ">COOP NEWS</a></li>
                            <li><a href="/job-opportunities" class="block w-full ">JOB OPPORTUNITIES</a></li>

                            <li class="flex items-center justify-between" 
                                x-on:click="servicesMenu = ! servicesMenu" 
                                @click.away="servicesMenu = false"
                                >
                                SERVICES
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                </svg> 
                            </li> 
                            <div class="bg-white rounded border-2 border-[#2C8D0A] max-w-[180px] w-full absolute -top-[39px] -right-[185px] -bottom-[75px] [&>li]:text-neutral-700 [&>li]:text-sm [&>li]:font-medium [&>li]:cursor-pointer [&>li]:px-4 [&>li]:py-2 [&>li]:transition-all hover:[&>li]:text-white hover:[&>li]:bg-[#2C8D0A] active:[&>li]:bg-[#2C8D0A] active:[&>li]:scale-[0.99]"
                                x-show="servicesMenu" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95">
                                <li><a href="#" class="block w-full ">APPLYING FOR MEMBERSHIP</a></li>
                                <li><a href="#" class="block w-full ">RCOA</a></li>
                                <li><a href="#" class="block w-full ">NET METERING</a></li>
                                <li><a href="#" class="block w-full ">SOLAR HOME SYSTEM</a></li>
                                <li><a href="#" class="block w-full ">ILP</a></li>
                                <li><a href="#" class="block w-full ">LIFELINE DISCOUNT</a></li>
                                <li><a href="#" class="block w-full ">SENIOR CITIZEN DISCOUNT</a></li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <a href="{{route('contactus')}}" class="nav-link text-sm font-semibold leading-6 text-gray-900 active:text-[#2C8D0A]">CONTACT US</a>
            <a href="https://buseco.coop/my-account-login/" class="account-button">MY ACCOUNT</a>
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
                            <a href="/notices" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">NOTICES</a>
                            <a href="/erc" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">ERC</a>
                            <a href="/coop-news" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">COOP NEWS</a>
                            <a href="job-opportunities" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">JOB OPPORTUNITIES</a>
                            <a href="/services" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">SERVICES</a>
                            
                        </div> 
                    </div>
                </div>
                
                <div class="-mx-3" x-data="{ isOpen: false }">
                        <button type="button" @click="isOpen = !isOpen" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-[#2C8D0A] active:bg-[#2C8D0A] active:text-[#ffffff]  focus:text-[#ffffff] " aria-controls="disclosure-1" aria-expanded="false">
                RATES
                <svg class="h-5 w-5 flex-none " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" :class="{ 'rotate-180': isOpen }">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                        </button>
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
                            <a href="/scheduled-unbundled-rates" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">SCHEDULED UNBUNDLED RATES</a>
                            <a href="/monthly-generation-mix-under-oath" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">MONTHLY GENERATION MIX UNDER OATH</a>
                            <a href="/daily-supply-and-load-outlook" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">DAILY SUPPLY AND LOAD OUTLOOK</a>
                        </div> 
                    </div>
                
                <div class="-mx-3" x-data="{ isOpen: false }">
                        <button type="button" @click="isOpen = !isOpen" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-[#2C8D0A] active:bg-[#2C8D0A] active:text-[#ffffff]  focus:text-[#ffffff] " aria-controls="disclosure-1" aria-expanded="false">
                ONLINE SERVICES
                <svg class="h-5 w-5 flex-none " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" :class="{ 'rotate-180': isOpen }">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                        </button>
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
                            <a href="https://online.buseco.coop/" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">MEMBERSHIP APPLICATION</a>
                            <a href="/download-forms" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">DOWNLOAD FORMS</a>
                            <a href="/faq" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">FAQs</a>
                        </div> 
                    </div>

                <div class="-mx-3" x-data="{ isOpen: false }">
                        <button type="button" @click="isOpen = !isOpen" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-[#2C8D0A] active:bg-[#2C8D0A] active:text-[#ffffff]  focus:text-[#ffffff] " aria-controls="disclosure-1" aria-expanded="false">
                ABOUT BUSECO
                <svg class="h-5 w-5 flex-none " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" :class="{ 'rotate-180': isOpen }">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                        </button>
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
                            <a href="/buseco-profile" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">BUSECO PROFILE</a>
                            <a href="/board-of-directors" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">BOARD OF DIRECTORS</a>
                            <a href="/the-management" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">THE MANAGEMENT</a>
                        </div> 
                    </div>


                <a href="/contact-us" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900  hover:text-[#ffffff]  hover:bg-[#2C8D0A]">CONTACT US</a>
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
