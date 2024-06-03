<x-home-layout>
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
					>MEMBERSHIP APPLICATION</a>
				</li>
				<li>
				<a
					class="block w-full whitespace-nowrap bg-white px-4 py-2 text-sm font-medium text-neutral-700 hover:bg-[#2C8D0A] hover:text-[#ffffff] focus:bg-zinc-200/60 focus:bg-zinc-200/60 focus:outline-none active:bg-zinc-200/60 active:no-underline dark:bg-surface-dark dark:text-white dark:hover:bg-neutral-800/25 dark:focus:bg-neutral-800/25 dark:active:bg-neutral-800/25"
					href="#"
					data-twe-dropdown-item-ref
					>DOWNLOAD FORMS</a>
				</li>
			  </ul>
				
			<a href="#" class="nav-link text-sm font-semibold leading-6 text-gray-900 active:text-[#2C8D0A]">ABOUT BUSECO</a>
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

  	<div class="banner" id="banner">
		<img src="{{url('/images/buseco-cover-main-office.png')}}" alt="buseco" />
	</div>

	{{-- <div class="services py-5" id="services">
		<div class="grid grid-cols-3 gap-4">
			<div class="text-center">
				<a href="#" class="services-link">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007f00" class="size-20 services-icons-display">
						<path fill-rule="evenodd" d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 0 0-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 0 0-2.282.819l-.922 1.597a1.875 1.875 0 0 0 .432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 0 0 0 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 0 0-.432 2.385l.922 1.597a1.875 1.875 0 0 0 2.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 0 0 2.28-.819l.923-1.597a1.875 1.875 0 0 0-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 0 0 0-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 0 0-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 0 0-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 0 0-1.85-1.567h-1.843ZM12 15.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 0 0 0 7.5Z" clip-rule="evenodd" />
					</svg>
					
					<h2 class="services-title">Online Services</h2>
				</a>
			</div>
			<div class="text-center">
				<a href="#" class="services-link">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007f00" class="size-20 services-icons-display">
						<path fill-rule="evenodd" d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 0 0-.584.859 6.753 6.753 0 0 0 6.138 5.6 6.73 6.73 0 0 0 2.743 1.346A6.707 6.707 0 0 1 9.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 0 0-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 0 1-1.112-3.173 6.73 6.73 0 0 0 2.743-1.347 6.753 6.753 0 0 0 6.139-5.6.75.75 0 0 0-.585-.858 47.077 47.077 0 0 0-3.07-.543V2.62a.75.75 0 0 0-.658-.744 49.22 49.22 0 0 0-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 0 0-.657.744Zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 0 1 3.16 5.337a45.6 45.6 0 0 1 2.006-.343v.256Zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 0 1-2.863 3.207 6.72 6.72 0 0 0 .857-3.294Z" clip-rule="evenodd" />
					</svg>
						
					<h2 class="services-title">Bids and Awards</h2>
				</a>
			</div>
			<div class="text-center">
				<a href="#" class="services-link">	
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007f00" class="size-20 services-icons-display">
						<path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
						<path d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
						<path fill-rule="evenodd" d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
					</svg>
					
					<h2 class="services-title">Maintenance Schedule</h2>
				</a>
			</div>
		</div>
	</div> --}}
	<div class="profile p-6" id="profile">
		<div class="mx-auto max-w-screen-xl border-2 border-[#2C8D0A]">
			<div class="grid grid-cols-3 px-6 py-8 gap-4">
				<div class="col-span-2">
					<img src="{{url('/images/buseco-profile.png')}}" class="w-full h-auto" />
				</div>
				<div class="my-auto pl-4">
					<h2 class="text-2xl font-medium">BUKIDNON II ELECTRIC COOPERATIVE, INC.</h2>
					<br />
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="membership pl-6 pr-6 pb-6" id="membership">
		<div class="mx-auto max-w-screen-xl border-2 border-[#2C8D0A]">
			<h2 class="text-center font-medium text-[32px] mt-6 mb-2">APPLYING FOR MEMBERSHIP</h2>
			<div class="grid grid-cols-4 px-6 py-8 gap-4">
				<div>
					<img src="{{url('/images/step-1.png')}}" class="w-full h-auto" />
					<h2 class="text-center text-[15px] font-medium mt-5 mb-1"><b>STEP 1: COMPLETE THE APPLICATION</b></h2>
					<div class="w-48 border-b-2 border-[#2C8D0A] mx-auto"></div> <!-- border line -->
					<p class="h-36 text-center text-[15px] w-36 font-medium mx-auto mt-6">Applicants will be required to submit application.</p>
					<a href="#" class="block text-center border-2 border-[#2C8D0A] bg-[#2C8D0A] text-[#ffffff] p-1 w-6/12 mx-auto mt-5 font-small hover:bg-[#ffffff] hover:text-black" role="button">READ MORE</a>
				</div>
				<div>
					<img src="{{url('/images/step-2.png')}}" class="w-full h-auto" />
					<h2 class="text-center text-[15px] font-medium mt-5 mb-1"><b>STEP 2: PAYMENT</b></h2>
					<div class="w-48 border-b-2 border-[#2C8D0A] mx-auto"></div> <!-- border line -->
					<p class="h-36 text-center text-[15px] w-36 font-medium mx-auto mt-6 my-auto">Applicants will be required to pay.</p>
					<a href="#" class="block text-center border-2 border-[#2C8D0A] bg-[#2C8D0A] text-[#ffffff] p-1 w-6/12 mx-auto mt-5 font-small hover:bg-[#ffffff] hover:text-black" role="button">READ MORE</a>
				</div>
				<div>
					<img src="{{url('/images/step-3.png')}}" class="w-full h-auto" />
					<h2 class="text-center text-[15px] font-medium mt-5 mb-1"><b>STEP 3: TAKE THE ONLINE EXAM</b></h2>
					<div class="w-48 border-b-2 border-[#2C8D0A] mx-auto"></div> <!-- border line -->
					<p class="h-36 text-center text-[15px] w-36 font-medium mx-auto mt-6 my-auto">Applicants will be required to attend the online PMES and take the exam. </p>
					<a href="#" class="block text-center border-2 border-[#2C8D0A] bg-[#2C8D0A] text-[#ffffff] p-1 w-6/12 mx-auto mt-5 font-small hover:bg-[#ffffff] hover:text-black" role="button">READ MORE</a>
				</div>
				<div>
					<img src="{{url('/images/step-4.png')}}" class="w-full h-auto" />
					<h2 class="text-center text-[15px] font-medium mt-5 mb-1"><b>STEP 4: SUBMIT REQUIREMENTS</b></h2>
					<div class="w-48 border-b-2 border-[#2C8D0A] mx-auto"></div> <!-- border line -->
					<p class="h-36 text-center text-[15px] w-36 font-medium mx-auto mt-6 my-auto">All applicants will be required to process and submit necessary requirements to the Buseco Office.</p>
					<a href="#" class="block text-center border-2 border-[#2C8D0A] bg-[#2C8D0A] text-[#ffffff] p-1 w-6/12 mx-auto mt-5 font-small hover:bg-[#ffffff] hover:text-black" role="button">READ MORE</a>
				</div>
			</div>
		</div>
	</div>

	<div class="faqa pl-6 pr-6 pb-6" id="faqa">
		<div class="mx-auto max-w-screen-xl border-2 border-[#2C8D0A]">
			<div class="grid grid-cols-2 p-14 gap-4">
				<div>
					<h2 class="font-medium text-4xl mb-8">
						FREQUENTLY ASK QUESTION <br />
						(FAQS)
					</h2>
					<div class="w-[115px] border-b-2 border-[#2C8D0A]"></div> <!-- border line -->
					<p class="font-small text-3xl mt-14">Where can I pay my bills?</p>
					<a href="#" class="block text-center border-2 text-[#ffffff] border-[#ffffff] p-1 w-3/12 bg-[#FF5722] mt-5 font-small hover:bg-[#2c8d0a] hover:border-[#256f0b]" role="button">READ MORE</a>
				</div>
				<div class="my-auto mx-auto">
					<img src="{{url('/images/faqq-img.png')}}" class="w-full h-auto " />
				</div>
			</div>
		</div>
	</div>

	{{-- <div class="blog mt-20" id="blog"> --}}
	<div class="blog pl-6 pr-6 pb-6" id="blog">
		<div class="mx-auto max-w-screen-xl border-2 px-4 py-7 border-[#2C8D0A]">
		<h1 class="text-4xl font-semibold blog-title-section text-center">NEWS AND UPDATES</h1>

		<div class="grid grid-cols-3 gap-4 mx-2 mt-5">
			<div class="">
				<a href="#"><img src="{{url('/images/tower.jpg')}}"></a>
				<div class="blog-date mt-1">March 27, 2024</div>
				<div class="blog-title mt-2"><a href="#">News Update 1</a></div>
				<div class="blog-description text-justify">
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</div>
			</div>
			<div class="">
				<a href="#"><img src="{{url('/images/tower.jpg')}}"></a>
				<div class="blog-date mt-1">March 25, 2024</div>
				<div class="blog-title mt-2"><a href="#">News Update 2</a></div>
				<div class="blog-description text-justify">
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</div>
			</div>
			<div class="">
				<a href="#"><img src="{{url('/images/tower.jpg')}}"></a>
				<div class="blog-date mt-1">March 24, 2024</div>
				<div class="blog-title mt-2"><a href="#">News Update 3</a></div>
				<div class="blog-description text-justify">
					Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				</div>
			</div>
		</div>
		
		<a href="#" class="flex justify-center items-center more-news-btn mt-4 text-lg font-semibold">
			More News Here
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
				<path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
			</svg>
		</a>	
		</div>
	</div>
	{{-- </div> --}}

	{{-- <div class="about-us mt-20 text-center" id="about-us">
		<h1 class="about-us-title">About Us</h1>

		<div class="grid grid-cols-2 gap-4 px-2 mt-5 h-72 about-us-bg-color">
			<div class="my-auto">
				<p class="vision-title text-white">Vision</p>	
				<p class="text-justify text-white px-5">A reliable, viable and efficient electric distribution utility operated and managed by competent, honest and responsive human resources towards satisfied consumers.</p>
			</div>
			<div class="flex justify-center my-auto">
				<img class="h-64 w-auto" src="{{url('/images/vision-logo-2.png')}}"  />
			</div>
		</div>

		<div class="grid grid-cols-2 gap-4 px-2 h-72">
			<div class="flex justify-center my-auto">
				<img class="h-64 w-auto" src="{{url('/images/commit-6.png')}}"  />
			</div>
			<div class="my-auto">
				<p class="vision-title">Commitment</p>	
				<p class="text-justify px-5">
					I commit to BUSECO, as a distribution utility, business enterprise, social development agency, and people's movement and world class organization, its corporate culture, flagship programs and further pledge to pursue the paradigm shift necessary in EPIRA environment.
					<br />
					"So help me God"
				</p>
			</div>
		</div>

		<div class="grid grid-cols-2 gap-4 px-2 h-72 about-us-bg-color">
			<div class="my-auto">
				<p class="vision-title text-white">Battle Cry</p>	
				<p class="text-justify text-white px-5">
					Thou shall protect the rights and promote the interest of all the cooperative members with your Whole Hear, Absolute Honesty, Maximum Efficiency, and Total Solidarity.
				</p>
			</div>
			<div class="flex justify-center my-auto">
				<img class="h-44 w-auto" src="{{url('/images/battlecry-2.png')}}"  />
			</div>
		</div>
	</div> --}} 
     <!--contact us-->
	{{--<div class="about-us mt-20 mb-20 text-center" id="contact-us">
		<h1 class="text-5xl font-bold">Contact Us</h1>

		<form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-10">
			<div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
				<div>
				<label for="first-name" class="text-start block text-sm font-semibold leading-6 text-gray-900">First name</label>
				<div class="mt-2.5">
					<input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
				</div>
				</div>
				<div>
				<label for="last-name" class="text-start block text-sm font-semibold leading-6 text-gray-900">Last name</label>
				<div class="mt-2.5">
					<input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
				</div>
				</div>
				
				<div class="sm:col-span-2">
				<label for="email" class="text-start block text-sm font-semibold leading-6 text-gray-900">Email</label>
				<div class="mt-2.5">
					<input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
				</div>
				</div>
				<div class="sm:col-span-2">
					<label for="company" class="text-start block text-sm font-semibold leading-6 text-gray-900">Subject</label>
					<div class="mt-2.5">
						<input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
					</div> 
				</div> 
				<div class="sm:col-span-2">
				<label for="message" class="text-start block text-sm font-semibold leading-6 text-gray-900">Message</label>
				<div class="mt-2.5">
					<textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
				</div>
				</div>
			</div>
			<div class="mt-10">
				<button type="submit" class="block w-full rounded-md bg-blue-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Send Message</button>
			</div>
			</form>
	</div>--}} <!--end contact us-->

	<div class="advisories py-16 px-5" id="advisories">
		<div class="grid grid-cols-2 gap-4">
			<div class="flex justify-center items-center">
				<h2 class="text-5xl font-bold">BUSECO Advisory</h2>
				<a href="/"><img class="h-20 w-auto" src="{{url('/images/advisory.png')}}" alt="advisory" /></a>
			</div>
			<div>
				<ul>
					<li class="border-b border-gray-500 my-1 py-2">
						<a class="text-lg font-medium text-red-600 hover:text-red-400 advisory-links" href="#">EMERGENCY POWER INTERRUPTION</a>
						<p class="text-sm">May 29, 2024 - 5:13pm</p>
					</li>
					<li class="border-b border-gray-500 my-1 py-2">
						<a class="text-lg font-medium text-red-600 hover:text-red-400 advisory-links" href="#">CANCELLED POWER INTERRUPTION</a>
						<p class="text-sm">May 29, 2024 - 5:13pm</p>
					</li>
					<li class="border-b border-gray-500 my-1 py-2">
						<a class="text-lg font-medium text-red-600 hover:text-red-400 advisory-links" href="#">BsTC UNSCHEDULED POWER INTERRUPTION</a>
						<p class="text-sm">May 27, 2024 - 5:13pm</p>
					</li>
					<li class="border-b border-gray-500 my-1 py-2">
						<a class="text-lg font-medium text-red-600 hover:text-red-400 advisory-links" href="#">BsTC UNSCHEDULED POWER INTERRUPTION</a>
						<p class="text-sm">May 26, 2024 - 5:13pm</p>
					</li>
				  </ul>
			</div>
		</div>
	</div>
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
</x-home-layout>
  
  
  