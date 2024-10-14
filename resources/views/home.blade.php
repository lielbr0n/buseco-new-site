<x-home-layout>
  	{{-- <div class="banner" id="banner">
		<img src="{{url('/images/.png')}}" alt="buseco" class="img-banner"/>
	</div> --}}

	<div
		id="banner"
		class="relative"
		data-twe-carousel-init
		data-twe-ride="carousel">
			<!--Carousel indicators-->
			<div
				class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
				data-twe-carousel-indicators>
				<button
					type="button"
					data-twe-target="#banner"
					data-twe-slide-to="0"
					data-twe-carousel-active
					class="mx-[3px] box-content h-[5px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
					aria-current="true"
					aria-label="Slide 1"></button>
				<button
					type="button"
					data-twe-target="#banner"
					data-twe-slide-to="1"
					class="mx-[3px] box-content h-[5px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
					aria-label="Slide 2"></button>
				<button
					type="button"
					data-twe-target="#banner"
					data-twe-slide-to="2"
					class="mx-[3px] box-content h-[5px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
					aria-label="Slide 3"></button>
				<button
					type="button"
					data-twe-target="#banner"
					data-twe-slide-to="2"
					class="mx-[3px] box-content h-[5px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
					aria-label="Slide 3"></button>
			</div>

			<!--Carousel items-->
			<div
				class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
				<!--First item-->
				<div
				class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
				data-twe-carousel-fade
				data-twe-carousel-item
				data-twe-carousel-active>
				<img
					src="{{url('/images/obb.png')}}"
					class="block w-full"
					alt="buseco" />
				</div>
				<!--Second item-->
				<div
				class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
				data-twe-carousel-fade
				data-twe-carousel-item>
				<img
					src="{{url('/images/mco.png')}}"
					class="block w-full"
					alt="buseco" />
				</div>
				<!--Third item-->
				<div
				class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
				data-twe-carousel-fade
				data-twe-carousel-item>
				<img
					src="{{url('/images/pob.png')}}"
					class="block w-full"
					alt="buseco" />
				</div>
				<!--Fourth item-->
				<div
				class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
				data-twe-carousel-fade
				data-twe-carousel-item>
				<img
					src="{{url('/images/cb.png')}}"
					class="block w-full"
					alt="buseco" />
				</div>
			</div>

			<!--Carousel controls - prev item-->
			<button
				class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
				type="button"
				data-twe-target="#carouselExampleCrossfade"
				data-twe-slide="prev">
				<span class="inline-block h-8 w-8">
				<svg
					xmlns="http://www.w3.org/2000/svg"
					fill="none"
					viewBox="0 0 24 24"
					stroke-width="4"
					stroke="currentColor"
					class="h-9 w-9">
					<path
					stroke-linecap="round"
					stroke-linejoin="round"
					d="M15.75 19.5L8.25 12l7.5-7.5" />
				</svg>
				</span>
				<span
				class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
				>Previous</span
				>
			</button>
			<!--Carousel controls - next item-->
			<button
				class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
				type="button"
				data-twe-target="#carouselExampleCrossfade"
				data-twe-slide="next">
				<span class="inline-block h-8 w-8">
				<svg
					xmlns="http://www.w3.org/2000/svg"
					fill="none"
					viewBox="0 0 24 24"
					stroke-width="4"
					stroke="currentColor"
					class="h-9 w-9">
					<path
					stroke-linecap="round"
					stroke-linejoin="round"
					d="M8.25 4.5l7.5 7.5-7.5 7.5" />
				</svg>
				</span>
				<span
				class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
				>Next</span
				>
			</button>
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
				<div class="col-span-3 md:col-span-2 my-auto">
					<img src="{{url('/images/obb.png')}}" class="w-full h-auto" />
				</div>
				<div class="col-span-3 md:col-span-1 my-auto md:pl-4">
					<h2 class="text-2xl font-medium text-center md:text-left">BUKIDNON II ELECTRIC COOPERATIVE, INC.</h2>
					<br />
					<p class="text-justify mb-4">
					Bukidnon II Electric Cooperative, Inc. (BUSECO) is a non-stock, non-profit electric cooperative duly organized and existing under and by virtue of the provisions of P.D. 269 and the laws of the Republic of the Philippines. </p>
					<p class="text-justify mb-4">It was registered with the National Electrification Administration on July 28, 1977. Its franchise was granted permanent on June 10, 1981. </p>
					<p class="text-justify mb-4">Operations started on February 2, 1970 when BUSECO took over Manolo Fortich Municipal Electrical System, even if the first energization was on June 29, 1979. </p>
					<p class="text-justify mb-4">It serves the cities/municipalities of the province of Bukidnon, namely:  Malitbog, Baungon, Libona, Manolo Fortich, Sumilao, Impasug-ong, Malaybalay, Lantapan, Cabanglasan and some parts of Talakag and Valencia City.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="membership pl-6 pr-6 pb-6" id="membership">
		<div class="mx-auto max-w-screen-xl border-2 border-[#2C8D0A]">
			<h2 class="text-center font-medium text-[32px] mt-6 mb-2">APPLYING FOR MEMBERSHIP</h2>
			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 px-6 py-8 gap-8 lg:gap-4">
				<div class="group">
					<a href="/applying-for-membership"><img src="{{url('/images/step-1.png')}}" class="w-full h-auto" /></a>
					<h2 class="text-center text-[15px] font-medium mt-5 mb-1"><b>STEP 1: COMPLETE THE APPLICATION</b></h2>
					<div class="w-48 border-b-2 border-[#2C8D0A] mx-auto"></div> <!-- border line -->
					<p class="h-12 lg:h-36 text-center text-[15px] w-10/12 lg:w-36 font-medium mx-auto mt-6">Applicants will be required to submit application.</p>
					<a href="/applying-for-membership" class="block text-center border-2 border-[#2C8D0A] bg-[#2C8D0A] text-[#ffffff] p-1 w-6/12 mx-auto mt-5 font-small group-hover:bg-[#ffffff] group-hover:text-black" role="button">READ MORE</a>
				</div>
				<div class="group">
					<a href="/applying-for-membership"><img src="{{url('/images/step-2.png')}}" class="w-full h-auto" /></a>
					<h2 class="text-center text-[15px] font-medium mt-5 mb-1"><b>STEP 2: PAYMENT</b></h2>
					<div class="w-48 border-b-2 border-[#2C8D0A] mx-auto"></div> <!-- border line -->
					<p class="h-12 lg:h-36 text-center text-[15px] w-10/12 lg:w-36 font-medium mx-auto mt-6 my-auto">Applicants will be required to pay.</p>
					<a href="/applying-for-membership" class="block text-center border-2 border-[#2C8D0A] bg-[#2C8D0A] text-[#ffffff] p-1 w-6/12 mx-auto mt-5 font-small group-hover:bg-[#ffffff] group-hover:text-black" role="button">READ MORE</a>
				</div>
				<div class="group">
					<a href="/applying-for-membership"><img src="{{url('/images/step-3.png')}}" class="w-full h-auto" /></a>
					<h2 class="text-center text-[15px] font-medium mt-5 mb-1"><b>STEP 3: TAKE THE ONLINE EXAM</b></h2>
					<div class="w-48 border-b-2 border-[#2C8D0A] mx-auto"></div> <!-- border line -->
					<p class="h-12 lg:h-36 text-center text-[15px] w-10/12 lg:w-36 font-medium mx-auto mt-6 my-auto">Applicants will be required to attend the online PMES and take the exam. </p>
					<a href="/applying-for-membership" class="block text-center border-2 border-[#2C8D0A] bg-[#2C8D0A] text-[#ffffff] p-1 w-6/12 mx-auto mt-5 font-small group-hover:bg-[#ffffff] group-hover:text-black" role="button">READ MORE</a>
				</div>
				<div class="group">
					<a href="/applying-for-membership"><img src="{{url('/images/step-4.png')}}" class="w-full h-auto" /></a>
					<h2 class="text-center text-[15px] font-medium mt-5 mb-1"><b>STEP 4: SUBMIT REQUIREMENTS</b></h2>
					<div class="w-48 border-b-2 border-[#2C8D0A] mx-auto"></div> <!-- border line -->
					<p class="h-12 lg:h-36 text-center text-[15px] w-11/12 lg:w-36 font-medium mx-auto mt-6 my-auto">All applicants will be required to process and submit necessary requirements to the Buseco Office.</p>
					<a href="/applying-for-membership" class="block text-center border-2 border-[#2C8D0A] bg-[#2C8D0A] text-[#ffffff] p-1 w-6/12 mx-auto mt-5 font-small group-hover:bg-[#ffffff] group-hover:text-black" role="button">READ MORE</a>
				</div>
			</div>
		</div>
	</div>

	<div class="faqa pl-6 pr-6 pb-6" id="faqa">
		<div class="mx-auto max-w-screen-xl border-2 border-[#2C8D0A]">
			<div class="grid grid-cols-1 sm:grid-cols-2 p-14 gap-4">
				<div class="text-center sm:text-left">
					<h2 class="font-medium text-4xl mb-8 ">
						FREQUENTLY ASK QUESTION <br />
						(FAQS)
					</h2>
					<div class="w-[115px] border-b-2 border-[#2C8D0A] mx-auto sm:mx-0"></div> <!-- border line -->
					<p class="font-small text-3xl mt-14 mb-5">Where can I pay my bills?</p>
					<a href="/faq" class="text-center border-2 text-[#ffffff] border-[#ffffff] py-2 px-4 w-3/12 bg-[#FF5722] font-small hover:bg-[#2c8d0a] hover:border-[#256f0b]" role="button">READ MORE</a>
				</div>
				<div class="my-auto mx-auto hidden sm:block">
					<img src="{{url('/images/faqq-img.png')}}" class="w-full h-auto " />
				</div>
			</div>
		</div>
	</div>

	{{-- <div class="blog mt-20" id="blog"> --}}
	<div class="blog pl-6 pr-6 pb-6" id="blog">
		<div class="mx-auto max-w-screen-xl border-2 px-4 py-7 border-[#2C8D0A]">
		<h1 class="text-4xl font-semibold blog-title-section text-center"> COOP NEWS AND UPDATES</h1>
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-8 lg:gap-4 mx-2 mt-5">
			@forelse($getLatestPostNewsAndJobOpp as $post)
				<div class="group">
					<div class="blog-img-container h-[200px] border-2 border-[#808080] group-hover:outline group-hover:outline-1 group-hover:outline-[#2F3C45]">
						<a href="{{route('blog.single', ['postSlug' => $post->post_slug] )}}">
							<img src="{{url($post->post_feature_image ?? 'images/busecoborder.png')}}" class="object-cover w-full h-full" />
						</a>
					</div>
					<div class="blog-date mt-1 flex items-center">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007f00" class="size-6 mr-1">
							<path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
							<path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
						</svg>
						<span class="text-sm">{{ date_format($post->created_at,"F d, Y h:i:s a") }}</span>
					</div>
					{{-- <div class="blog-author mt-1 flex items-center">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007f00" class="size-6 mr-1">
							<path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
						</svg>
						{{ $post->post_author_name }}
					</div> --}}
					<div class="blog-title mt-2 "><a href="{{route('blog.single', ['postSlug' => $post->post_slug] )}}" class="group-hover:text-[#0a961d]">{{ $post->post_title }}</a></div>
					<div class="blog-description text-justify mt-1" id="blog-description">
						@if(empty($post->post_excerpt))
							{{ Str::of($post->post_content)->words('50', '...')->stripTags()->replace('&nbsp;', '') }}
						@else
							{{ Str::of($post->post_excerpt)->stripTags()->replace('&nbsp;', '') }}
						@endif
					</div>
				</div>
			@empty
				<div>No Post Found!</div>
			@endforelse
		</div>
		
		<a href="{{route('blog.list')}}" class="flex justify-center items-center more-news-btn mt-5 text-lg font-semibold">
			More Coop News here
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
				<path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
			</svg>
		</a>	
		</div>
	</div>
	{{-- payment method --}}
	<div class="profile p-6" id="profile">
		<div class="mx-auto max-w-screen-xl border-2 border-[#2C8D0A]">
			<div class="grid grid-cols-3 px-6 py-8 gap-2">
				<div class="col-span-3">
					<img src="{{url('/images/payment-method.png')}}" class="w-full h-auto" />
				</div>
			</div>
		</div>
	</div>

	<div class="advisories py-16 px-5" id="advisories">
		<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
			<div class="flex justify-center items-center">
				<h2 class="text-5xl font-bold">BUSECO Advisory!</h2>
				<img class="h-20 w-auto" src="{{url('/images/advisory.png')}}" alt="advisory" />
			</div>
			<div @class(['flex' => count($latestPublicAdvisories) === 0])>
				<ul @class([
					'mx-auto my-auto' => count($latestPublicAdvisories) === 0, //hidden if null
				])>
					@forelse($latestPublicAdvisories as $advisory)
						<li class="border-b border-gray-500 my-1 py-2">
							<a class="text-lg font-medium text-red-600 hover:text-red-400 advisory-links" href="{{route('blog.single', ['postSlug' => $advisory->post_slug] )}}">{{$advisory->post_title}}</a>
							<p class="text-sm">{{ date_format($advisory->created_at,"F d, Y h:i:s a") }}</p>
						</li> 
					@empty
						<li class="text-xl font-medium text-red-600">No advisory as of the moment.</li>
					@endforelse
				</ul>
			</div>
		</div>
	</div>
</x-home-layout>
  
  
  