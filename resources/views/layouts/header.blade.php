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

        <div class="hidden lg:flex lg:gap-x-7 lg:items-center lg:justify-end">
            <a href="/" class="nav-link text-sm font-semibold leading-6 text-gray-900">HOME</a>
            {{-- <a href="#" class="nav-link text-sm font-semibold leading-6 text-gray-900">PUBLICATION</a> --}}

            <div x-data="{ show: false, menu: false, servicesMenu: false }">
                <a 
                    
                    class="flex items-center text-sm font-semibold leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-[#0a961d] focus:text-[#0a961d] focus:outline-none focus:ring-0 active:text-[#0a961d] motion-reduce:transition-none" 
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
                <div class="relative hidden" :class="{'hidden': !show }">
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
                            <div class="bg-white rounded border-2 border-[#2C8D0A] max-w-[180px] w-full absolute -right-[185px] -top-[1px] bottom-[33px] hover:[&>li]:text-white [&>li]:text-neutral-700 [&>li]:text-sm [&>li]:font-medium [&>li]:cursor-pointer [&>li]:px-4 [&>li]:py-2 [&>li]:transition-all hover:[&>li]:bg-[#2C8D0A] active:[&>li]:bg-[#2C8D0A] active:[&>li]:scale-[0.99]"
                                x-show="menu" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95">
                                <li><a href="/bids-awards-committee" class="block w-full ">BIDS & AWARDS</a></li>
                                <li><a href="/csp" class="block w-full ">CSP</a></li>
                                <li><a href="/district-election" class="block w-full ">DISTRICT ELECTION</a></li>
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
                            <div class="bg-white rounded border-2 border-[#2C8D0A] max-w-[180px] w-full absolute -top-[2px] -right-[185px] -bottom-[43px] [&>li]:text-neutral-700 [&>li]:text-sm [&>li]:font-medium [&>li]:cursor-pointer [&>li]:px-4 [&>li]:py-2 [&>li]:transition-all hover:[&>li]:text-white hover:[&>li]:bg-[#2C8D0A] active:[&>li]:bg-[#2C8D0A] active:[&>li]:scale-[0.99]"
                                x-show="servicesMenu" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95">
                                <li><a href="/applying-for-membership" class="block w-full ">APPLYING FOR MEMBERSHIP</a></li>
                                <!--<li><a href="/rcoa" class="block w-full ">RCOA</a></li>-->
                                <li><a href="/net-metering" class="block w-full ">NET METERING</a></li>
                                <li><a href="/solar-home-system" class="block w-full ">SOLAR HOME SYSTEM</a></li>
                                <!--<li><a href="/ilp" class="block w-full ">ILP</a></li>-->
                                <li><a href="/lifeline-discount" class="block w-full ">LIFELINE DISCOUNT</a></li>
                                <li><a href="/senior-citizen-discount" class="block w-full ">SENIOR CITIZEN DISCOUNT</a></li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <div x-data="{ show: false, menu: false, servicesMenu: false }">
                <a class="flex items-center text-sm font-semibold leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-[#0a961d] focus:text-[#0a961d] focus:outline-none focus:ring-0 active:text-[#0a961d] motion-reduce:transition-none"
                    x-on:click="show = ! show"
                    role="button"
                >
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
                <div class="relative hidden" :class="{'hidden': !show }">
                    <div class="rounded border-2 border-[#2C8D0A] bg-white bg-clip-padding text-base shadow-lg min-w-[250px] top-1 w-full absolute z-10" x-show="show"
                        x-cloak
                        @click.away="show = false" x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opacity-0 scale-95">
                        <ul
                            class="link-wrapper [&>li]:text-neutral-700 hover:[&>li]:text-white [&>li]:text-sm [&>li]:font-medium [&>li]:cursor-pointer [&>li]:px-4 [&>li]:py-2 [&>li]:transition-all hover:[&>li]:bg-[#2C8D0A] active:[&>li]:bg-[#2C8D0A]">
                            
                            <li class="flex items-center justify-between" 
                                x-on:click="menu = ! menu" 
                                @click.away="menu = false"
                                >
                                SCHEDULED UNBUNDLED RATES
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                                </svg> 
                            </li>
                            <div class="bg-white rounded border-2 border-[#2C8D0A] max-w-[180px] w-full absolute  -right-[185px] -top-[1px] bottom-[-159px] hover:[&>li]:text-white [&>li]:text-neutral-700 [&>li]:text-sm [&>li]:font-medium [&>li]:cursor-pointer [&>li]:px-4 [&>li]:py-2 [&>li]:transition-all hover:[&>li]:bg-[#2C8D0A] active:[&>li]:bg-[#2C8D0A] active:[&>li]:scale-[0.99]"
                                x-show="menu" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95">
                                <li><a href="/rates-2024" class="block w-full ">2024</a></li>
                                <li><a href="/rates-2023" class="block w-full ">2023</a></li>
                                <li><a href="/rates-2022" class="block w-full ">2022</a></li>
                                <li><a href="/rates-2021" class="block w-full ">2021</a></li>
                                <li><a href="/rates-2020" class="block w-full ">2020</a></li>
                                <li><a href="/rates-2019" class="block w-full ">2019</a></li>
                                <li><a href="/rates-2018" class="block w-full ">2018</a></li>
                                <li><a href="/rates-2017" class="block w-full ">2017</a></li>
                                <li><a href="/rates-2016" class="block w-full ">2016</a></li>
                            </div>
                            
                            <li><a href="/monthly-generation-mix-under-oath" class="block w-full ">MONTHLY GENERATION MIX UNDER OATH</a></li>
                            <li><a href="/daily-supply-and-load-outlook" class="block w-full ">DAILY SUPPLY AND LOAD OUTLOOK</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <a class="flex items-center text-sm font-semibold leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-[#0a961d] focus:text-[#0a961d] focus:outline-none focus:ring-0 active:text-[#0a961d] motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                href="/faq"
                type="button"
                id="dropdownMenuButton2"
                data-twe-dropdown-toggle-ref
                aria-expanded="false"
                data-twe-ripple-init
                data-twe-ripple-color="light">
            ABOUT US
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

                <li>
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/privacy"
                    data-twe-dropdown-item-ref
                    >PRIVACY</a>
                </li>
              </ul>
            <a href="{{route('contactus')}}" class="nav-link text-sm font-semibold leading-6 text-gray-900 active:text-[#2C8D0A]">CONTACT US</a>
            <a class="account-button flex items-center text-sm font-semibold leading-6 text-gray-900 transition duration-150 ease-in-out hover:text-[#0a961d] focus:text-[#ffffff] focus:outline-none focus:ring-0 active:text-[#0a961d] motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
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
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="https://reconnect.buseco.coop"
                    data-twe-dropdown-item-ref
                    >RECONNECTION APPLICATION</a>
                </li>
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="https://buseco.coop/my-account-login"
                    data-twe-dropdown-item-ref
                    >MY ACCOUNT</a>
                </li>
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/download-forms"
                    data-twe-dropdown-item-ref
                    >DOWNLOADABLE FORMS</a>
                </li>
                <li>
                <a
                    class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
                    href="/faq"
                    data-twe-dropdown-item-ref
                    >FAQs</a>
                </li>
              </ul>
            <!--<a href="https://buseco.coop/my-account-login/" class="account-button">MY ACCOUNT</a>-->
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
                            <div class="pl-[10px] pr-3 text-sm font-semibold leading-7 text-gray-900"
                                x-data="{ isOpen1: false }"
                            >
                                <button type="button" @click="isOpen1 = !isOpen1" class="flex w-full items-center justify-between rounded-lg py-1 pl-3 pr-3.5 text-sm font-semibold leading-7 text-gray-900 hover:bg-[#2C8D0A] active:bg-[#2C8D0A] active:text-[#ffffff]  focus:text-[#ffffff] " aria-controls="disclosure-1" aria-expanded="false">
                                NOTICES
                                <svg class="h-5 w-5 flex-none " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" :class="{ 'rotate-180': isOpen1 }">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                                </button>
                                <div  
                                    x-show="isOpen1" 
                                    class="mt-2 space-y-2" id="disclosure-1"
                                    x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                >
                                    <a href="/bids-awards-committee" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">BIDS & AWARDS</a>
                                    <a href="/csp" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">CSP</a>
                                    
                                    <a href="/district-election" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">DISTRICT ELECTION</a>
                                    <a href="/agma" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">AGMA</a>
                                </div> 
                            </div>
                            <a href="/erc" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">ERC</a>
                            <a href="/coop-news" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">COOP NEWS</a>
                            <a href="job-opportunities" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">JOB OPPORTUNITIES</a>

                            <div class="pl-[10px] pr-3 text-sm font-semibold leading-7 text-gray-900"
                                x-data="{ isOpenServices: false }"
                            >
                                <button type="button" @click="isOpenServices = !isOpenServices" class="flex w-full items-center justify-between rounded-lg py-1 pl-3 pr-3.5 text-sm font-semibold leading-7 text-gray-900 hover:bg-[#2C8D0A] active:bg-[#2C8D0A] active:text-[#ffffff]  focus:text-[#ffffff] " aria-controls="disclosure-1" aria-expanded="false">
                                SERVICES
                                <svg class="h-5 w-5 flex-none " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" :class="{ 'rotate-180': isOpenServices }">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                                </button>
                                <div  
                                    x-show="isOpenServices" 
                                    class="mt-2 space-y-2" id="disclosure-1"
                                    x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                >
                                    <a href="/applying-for-membership" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">APPLYING FOR MEMBERSHIP</a>
                                    <!--<a href="/roa" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">RCOA</a>-->
                                    <a href="/net-metering" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">NET METERING</a>
                                    <a href="/solar-home-system" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">SOLAR HOME SYSTEM</a>
                                    <!--<a href="/ilp" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">ILP</a>-->
                                    <a href="/lifeline-discount" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">LIFELINE DISCOUNT</a>
                                    <a href="/senior-citizen-discount" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">SENIOR CITIZEN DISCOUNT</a>
                                </div> 
                            </div>
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
                            {{-- <a href="/scheduled-unbundled-rates" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">SCHEDULED UNBUNDLED RATES</a> --}}
                            <div class="pl-[10px] pr-3 text-sm font-semibold leading-7 text-gray-900"
                                x-data="{ isOpenScheduledRates: false }"
                            >
                                <button type="button" @click="isOpenScheduledRates = !isOpenScheduledRates" class="flex w-full items-center justify-between rounded-lg py-1 pl-3 pr-3.5 text-sm font-semibold leading-7 text-gray-900 hover:bg-[#2C8D0A] active:bg-[#2C8D0A] active:text-[#ffffff]  focus:text-[#ffffff] " aria-controls="disclosure-1" aria-expanded="false">
                                    SCHEDULED UNBUNDLED RATES
                                    <svg class="h-5 w-5 flex-none " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" :class="{ 'rotate-180': isOpenScheduledRates }">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div  
                                    x-show="isOpenScheduledRates" 
                                    class="mt-2 space-y-2" id="disclosure-1"
                                    x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"
                                >
                                    <a href="/rates-2024" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">2024</a>
                                    <a href="/rates-2023" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">2023</a>
                                    <a href="/rates-2022" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">2022</a>
                                    <a href="/rates-2021" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">2021</a>
                                    <a href="/rates-2020" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">2020</a>
                                    <a href="/rates-2019" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">2019</a>
                                    <a href="/rates-2018" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">2018</a>
                                    <a href="/rates-2017" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">2017</a>
                                    <a href="/rates-2016" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">2016</a>
                                </div> 
                            </div>
                            <a href="/monthly-generation-mix-under-oath" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">MONTHLY GENERATION MIX UNDER OATH</a>
                            <a href="/daily-supply-and-load-outlook" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">DAILY SUPPLY AND LOAD OUTLOOK</a>
                        </div> 
                    </div>

                <div class="-mx-3" x-data="{ isOpen: false }">
                        <button type="button" @click="isOpen = !isOpen" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-[#2C8D0A] active:bg-[#2C8D0A] active:text-[#ffffff]  focus:text-[#ffffff] " aria-controls="disclosure-1" aria-expanded="false">
                ABOUT US
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
                            <a href="/privacy" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">PRIVACY</a>
                        </div> 
                    </div>

                <a href="{{route('contactus')}}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900  hover:text-[#ffffff]  hover:bg-[#2C8D0A]">CONTACT US</a>
                {{--<a href="/my-account" class="account-button">MY ACCOUNT</a>--}}
                <div class="-mx-3" x-data="{ isOpen: false }">
                        <button type="account-button" @click="isOpen = !isOpen" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-[#2C8D0A] active:bg-[#2C8D0A] active:text-[#ffffff]  focus:text-[#ffffff] " aria-controls="disclosure-1" aria-expanded="false">
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
                            <a href="https://reconnect.buseco.coop/" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">RECONNECTION APPLICATION</a>
                            <a href="https://buseco.coop/my-account-login/" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">MY ACCOUNT</a>
                            <a href="/download-forms" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">DOWNLOADABLE FORMS</a>
                            <a href="/faq" class="block rounded-lg py-1 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:text-[#ffffff] hover:bg-[#2C8D0A]">FAQs</a>
                        </div> 
                    </div>
                {{-- <div class="py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
                </div> --}}
            {{-- </div> --}}
        </div>
      </div>
    </div>
</header>
