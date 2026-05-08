<x-home-layout>
  	{{-- <div class="banner" id="banner">
		<img src="{{url('/images/.png')}}" alt="buseco" class="img-banner"/>
	</div> --}}
	<!-- <script>
		document.addEventListener('contextmenu', event => event.preventDefault());
	</script>
	<script>
		document.addEventListener('keydown', function(event) {
			if (event.key === "F12" || 
				(event.ctrlKey && event.shiftKey && (event.key === 'I' || event.key === 'J')) || 
				(event.ctrlKey && event.key === 'U')) {
				event.preventDefault();
			}
		});
	</script> -->

	<div
    id="banner"
    class="relative w-full overflow-hidden shadow-xl bg-gray-900"
    data-twe-carousel-init
    data-twe-ride="carousel">
    
    <div
        class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-6 flex list-none justify-center p-0"
        data-twe-carousel-indicators>
        @foreach(['Slide 1', 'Slide 2', 'Slide 3', 'Slide 4'] as $index => $label)
        <button
            type="button"
            data-twe-target="#banner"
            data-twe-slide-to="{{ $index }}"
            @if($index === 0) data-twe-carousel-active aria-current="true" @endif
            class="mx-[4px] box-content h-[4px] w-[25px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-40 transition-all duration-500 ease-in-out hover:opacity-100 data-[twe-carousel-active]:w-[40px] data-[twe-carousel-active]:opacity-100 shadow-sm"
            aria-label="{{ $label }}"></button>
        @endforeach
    </div>

		<div class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] bg-gray-900">
			@php
				$slides = [
					['img' => 'obbnew.png', 'alt' => 'Operational Highlights'],
					['img' => 'MCOSnew.png', 'alt' => 'Member Services'],
					['img' => 'pobnew.png', 'alt' => 'Public Relations'],
					['img' => 'contact-bannernew.png', 'alt' => 'Contact Us']
				];
			@endphp

			@foreach($slides as $index => $slide)
			<div
				class="relative float-left -mr-[100%] w-full {{ $index === 0 ? '' : 'hidden' }} !transform-none transition-opacity duration-[600ms] ease-in-out"
				data-twe-carousel-fade
				data-twe-carousel-item
				@if($index === 0) data-twe-carousel-active @endif>
				
				<img
					src="{{ url('/images/' . $slide['img']) }}"
					class="block w-full h-auto object-contain object-center aspect-[4/3] sm:aspect-[16/9] lg:aspect-[21/7] max-h-[70vh]"
					alt="{{ $slide['alt'] }}"
					loading="{{ $index === 0 ? 'eager' : 'lazy' }}" />
			</div>
			@endforeach
		</div>

    <button
        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[10%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-40 transition-all duration-300 ease-in-out hover:opacity-100 hover:bg-black/5 focus:outline-none"
        type="button"
        data-twe-target="#banner"
        data-twe-slide="prev">
        <span class="inline-block h-10 w-10 p-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </span>
        <span class="sr-only">Previous</span>
    </button>

    <button
        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[10%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-40 transition-all duration-300 ease-in-out hover:opacity-100 hover:bg-black/5 focus:outline-none"
        type="button"
        data-twe-target="#banner"
        data-twe-slide="next">
        <span class="inline-block h-10 w-10 p-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </span>
        <span class="sr-only">Next</span>
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
			<div class="profile py-16 px-4 sm:px-6 lg:px-8 bg-white" id="profile">
				<div class="mx-auto max-w-screen-xl relative">
					
					<div class="absolute top-0 right-0 -translate-y-12 translate-x-12 w-64 h-64 bg-[#2C8D0A]/5 rounded-full blur-3xl hidden lg:block"></div>

					<div class="relative grid grid-cols-1 lg:grid-cols-12 gap-12 items-center bg-white border border-gray-100 shadow-2xl shadow-[#2C8D0A]/10 rounded-[2rem] overflow-hidden">
						
						<div class="lg:col-span-7 bg-gray-50 flex items-center justify-center p-4 lg:p-8">
							<img 
								src="{{url('/images/bw.png')}}" 
								alt="BUSECO Heritage" 
								class="w-full h-auto max-h-[400px] lg:max-h-[600px] object-contain transition-transform duration-700 hover:scale-[1.02]" 
							/>
						</div>

						<div class="lg:col-span-5 p-8 lg:p-12 lg:pl-4">
							<div class="space-y-6">
								<div>
									<span class="inline-block bg-[#2C8D0A]/10 text-[#2C8D0A] px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-4">
										Establishment & History
									</span>
									<h2 class="text-3xl md:text-4xl font-black text-gray-900 leading-tight uppercase">
										BUKIDNON II <br/>
										<span class="text-[#2C8D0A]">ELECTRIC COOPERATIVE, INC.</span>
									</h2>
									<div class="w-20 h-1.5 bg-[#2C8D0A] mt-4 rounded-full"></div>
								</div>

								<div class="space-y-4 text-gray-600 leading-relaxed text-sm md:text-base">
									<p class="text-justify italic border-l-4 border-[#2C8D0A] pl-4 bg-gray-50 py-2"> 
										Bukidnon II Electric Cooperative, Inc. (BUSECO) is a non-stock, non-profit electric cooperative duly organized and existing under and by virtue of the provisions of P.D. 269 and the laws of the Republic of the Philippines. 
									</p>
									
									<p class="text-justify">
										It was registered with the <span class="font-bold text-gray-800">National Electrification Administration</span> on July 28, 1977. Its franchise was granted permanent on June 10, 1981.
									</p>
									
									<p class="text-justify">
										Operations started on February 2, 1970 when BUSECO took over Manolo Fortich Municipal Electrical System, even if the first energization was on June 29, 1979. 
									</p>
									
									<div class="pt-4 mt-6 border-t border-gray-100">
										<p class="font-bold text-gray-800 mb-2 flex items-center gap-2">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#2C8D0A]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
											</svg>
											Coverage Areas:
										</p>
										<p class="text-xs md:text-sm text-gray-500 uppercase tracking-tight leading-loose">
											Malitbog, Baungon, Libona, Manolo Fortich, Sumilao, Impasug-ong, Malaybalay, Lantapan, Cabanglasan and some parts of Talakag and Valencia City.
										</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<section class="membership py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" id="membership">
					<div class="mx-auto max-w-screen-xl">
						<div class="text-center mb-12">
							<h2 class="font-black text-3xl md:text-4xl text-gray-900 tracking-tight">
								APPLYING FOR <span class="text-[#2C8D0A]">MEMBERSHIP</span>
							</h2>
							<div class="w-24 h-1.5 bg-[#2C8D0A] mx-auto mt-4 rounded-full"></div>
							<p class="text-gray-600 mt-4 font-bold uppercase text-xs tracking-[0.2em]">Become a part of our cooperative in 4 simple steps</p>
						</div>

						<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
							@php
								$steps = [
									['step' => '1', 'title' => 'COMPLETE THE APPLICATION', 'desc' => 'Applicants will be required to submit application.'],
									['step' => '2', 'title' => 'PAYMENT', 'desc' => 'Applicants will be required to settle necessary fees.'],
									['step' => '3', 'title' => 'TAKE THE ONLINE EXAM', 'desc' => 'Applicants will be required to attend the online PMES and take the exam.'],
									['step' => '4', 'title' => 'SUBMIT REQUIREMENTS', 'desc' => 'All applicants will be required to process and submit necessary requirements to the Buseco Office.'],
								];
							@endphp

							@foreach($steps as $s)
							<div class="group relative bg-white p-8 rounded-[2rem] shadow-sm hover:shadow-2xl transition-all duration-500 flex flex-col border border-gray-200 hover:-translate-y-2">
								<div class="absolute -top-4 left-8 bg-[#2C8D0A] text-white w-10 h-10 rounded-2xl flex items-center justify-center font-black shadow-lg shadow-[#2C8D0A]/30 transition-transform group-hover:rotate-12">
									{{ $s['step'] }}
								</div>

								<div class="mb-6 mt-2 relative overflow-hidden rounded-2xl bg-gray-50 p-4 border border-gray-100">
									<a href="/applying-for-membership">
										<img src="{{url('/images/step-'.$s['step'].'.png')}}" 
											alt="Step {{ $s['step'] }}" 
											class="w-full h-auto object-contain transform group-hover:scale-110 transition-transform duration-700" />
									</a>
								</div>

								<h3 class="text-center text-[15px] font-black text-gray-900 mb-4 h-12 flex items-center justify-center leading-tight uppercase tracking-tight">
									{{ $s['title'] }}
								</h3>
								
								<div class="w-12 border-b-2 border-[#2C8D0A] mx-auto mb-5 opacity-50"></div>

								<p class="text-center text-[14px] text-gray-700 font-bold leading-relaxed mb-8 flex-grow">
									{{ $s['desc'] }}
								</p>

								<a href="/applying-for-membership" 
								class="block text-center border-2 border-[#2C8D0A] bg-[#2C8D0A] text-white py-3 px-4 rounded-xl text-xs font-black tracking-widest hover:bg-white hover:text-[#2C8D0A] transition-all duration-300 shadow-md" 
								role="button">
									READ MORE
								</a>
							</div>
							@endforeach
						</div>
					</div>
				</section>

			<section class="faqa py-16 px-4 sm:px-6 lg:px-8 bg-white" id="faqa">
				<div class="mx-auto max-w-screen-xl">
					<div class="relative overflow-hidden bg-gray-50 rounded-[3rem] border border-gray-100 shadow-sm transition-all duration-500 hover:shadow-xl group">
						
						<div class="absolute -top-24 -right-24 w-96 h-96 bg-[#2C8D0A]/5 rounded-full blur-3xl group-hover:bg-[#2C8D0A]/10 transition-colors"></div>

						<div class="grid grid-cols-1 md:grid-cols-2 p-8 md:p-20 gap-12 relative z-10">
							<div class="flex flex-col justify-center text-center md:text-left">
								<span class="bg-[#2C8D0A]/10 text-[#2C8D0A] w-fit mx-auto md:mx-0 px-4 py-1 rounded-full text-xs font-black uppercase tracking-widest mb-6">
									Support Center
								</span>
								
								<h2 class="font-black text-4xl lg:text-5xl text-gray-900 leading-[1.1] mb-6 tracking-tight">
									FREQUENTLY ASKED <br />
									<span class="text-[#2C8D0A]">QUESTIONS</span>
								</h2>
								
								<div class="w-16 h-1.5 bg-[#2C8D0A] mx-auto md:mx-0 mb-10 rounded-full"></div>
								
								<div class="mb-10">
									<p class="text-gray-400 text-xs font-bold uppercase tracking-widest mb-2">Featured Question:</p>
									<p class="font-bold text-2xl lg:text-3xl text-gray-800 leading-snug">
										"Where can I pay <br class="hidden lg:block"> my bills?"
									</p>
								</div>

								<a href="/faq" 
								class="inline-flex items-center justify-center px-10 py-4 bg-[#FF5722] text-white font-black text-sm uppercase tracking-widest rounded-2xl shadow-lg shadow-orange-200 hover:bg-[#2C8D0A] hover:shadow-green-100 transition-all transform active:scale-95 w-full sm:w-fit" 
								role="button">
									View All FAQs
									<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
									</svg>
								</a>
							</div>

							<div class="my-auto hidden md:block group-hover:translate-x-2 transition-transform duration-700 ease-in-out">
								<div class="relative">
									<div class="absolute inset-0 bg-[#2C8D0A]/10 rounded-full blur-2xl transform scale-75"></div>
									<img src="{{url('/images/faqq-img.png')}}" 
										class="relative w-full h-auto drop-shadow-[0_20px_50px_rgba(0,0,0,0.15)]" 
										alt="Frequently Asked Questions" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

	{{-- <div class="blog mt-20" id="blog"> --}}
			<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50" id="blog">
				<div class="mx-auto max-w-screen-xl">
					<div class="text-center mb-12">
						<h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
							COOP <span class="text-[#2C8D0A]">NEWS AND UPDATES</span>
						</h2>
						<div class="w-24 h-1.5 bg-[#2C8D0A] mx-auto mt-4 rounded-full"></div>
					</div>

					<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
						@forelse($getLatestPostNewsAndJobOpp as $post)
							<article class="group bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col">
								<div class="relative aspect-video overflow-hidden bg-gray-100">
									<a href="{{route('blog.single', ['postSlug' => $post->post_slug] )}}">
										<img src="{{url($post->post_feature_image ?? 'images/busecoborder.png')}}" 
											class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-500" 
											alt="{{ $post->post_title }}" />
									</a>
								</div>

								<div class="p-6 flex flex-col flex-grow">
									<div class="flex items-center text-[11px] font-bold text-[#2C8D0A] mb-3 uppercase tracking-wider">
										<svg xmlns="http://www.w3.org/2000/svg" class="size-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
										</svg>
										{{ $post->created_at->format('M d, Y') }}
									</div>

									<h3 class="text-lg font-bold text-gray-900 mb-3 leading-snug group-hover:text-[#2C8D0A] transition-colors">
										<a href="{{route('blog.single', ['postSlug' => $post->post_slug] )}}">
											{{ $post->post_title }}
										</a>
									</h3>
									
									<p class="text-[14px] text-gray-700 leading-relaxed line-clamp-3 mb-6 flex-grow">
										@if(empty($post->post_excerpt))
											{{ Str::of($post->post_content)->stripTags()->words(25, '...') }}
										@else
											{{ Str::of($post->post_excerpt)->stripTags() }}
										@endif
									</p>

									<a href="{{route('blog.single', ['postSlug' => $post->post_slug] )}}" 
									class="inline-flex items-center text-sm font-bold text-[#2C8D0A] group/link border-b-2 border-transparent hover:border-[#2C8D0A] w-fit transition-all pb-0.5">
										Read Full Story
										<svg xmlns="http://www.w3.org/2000/svg" class="size-4 ml-1.5 transform group-hover/link:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6" />
										</svg>
									</a>
								</div>
							</article>
						@empty
							<div class="col-span-full py-20 text-center">
								<p class="text-gray-500 font-medium">No recent news or updates available.</p>
							</div>
						@endforelse
					</div>
					
					<div class="mt-12 text-center">
						<a href="{{route('blog.list')}}" 
						class="inline-flex items-center gap-2 px-8 py-3.5 bg-[#2C8D0A] text-white font-bold text-sm uppercase tracking-widest rounded-xl shadow-md hover:bg-[#1a5d06] transition-all">
							More Coop News
						</a>
					</div>
				</div>
			</section>

			<style>
				/* Legibility helpers */
				.line-clamp-3 {
					display: -webkit-box;
					-webkit-line-clamp: 3;
					-webkit-box-orient: vertical;
					overflow: hidden;
				}
			</style>
	{{-- payment method --}}
	<section class="py-12 px-4 sm:px-6 lg:px-8 bg-white" id="payment-channels">
			<div class="mx-auto max-w-screen-xl">
				<div class="flex flex-col items-center mb-10">
					<span class="bg-gray-100 text-gray-500 px-4 py-1.5 rounded-full text-[10px] font-black uppercase tracking-[0.3em] mb-4">
						Authorized Channels
					</span>
					<h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 text-center uppercase tracking-tight">
						Official Payment <span class="text-[#2C8D0A]">Options</span>
					</h2>
					<div class="w-12 h-1 bg-[#2C8D0A] mt-4 rounded-full"></div>
				</div>

				<div class="bg-gray-50 rounded-[2.5rem] p-8 md:p-16 border border-gray-100 shadow-sm transition-all duration-500 hover:shadow-xl group">
					<div class="flex flex-col items-center">
						<div class="relative w-full max-w-5xl overflow-hidden">
							<img 
								src="{{url('/images/payment-options.png')}}" 
								class="w-full h-auto object-contain filter grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-700 ease-in-out transform group-hover:scale-[1.01]" 
								alt="BUSECO Authorized Payment Partners" 
							/>
						</div>
						
						<div class="mt-12 pt-8 border-t border-gray-200 w-full flex flex-col md:flex-row justify-center items-center gap-6">
							<div class="flex items-center gap-2">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#2C8D0A]" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 4.946-3.078 9.168-7.422 10.835a.75.75 0 01-.556 0C5.578 16.168 2.5 11.946 2.5 7a6.991 6.991 0 01.166-2.001zm7.5 3.5a.75.75 0 011.5 0v2.5a.75.75 0 01-1.5 0v-2.5zm1.25 5.5a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
								</svg>
								<span class="text-xs font-bold text-gray-500 uppercase tracking-widest text-center">Secure & Encrypted Transactions</span>
							</div>
							<div class="hidden md:block w-px h-4 bg-gray-300"></div>
							<p class="text-[11px] text-gray-400 font-medium italic text-center">
								Please ensure you have your account number ready when paying.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

			<section class="advisories py-20 px-6 bg-red-600 overflow-hidden relative shadow-[inset_0_2px_20px_rgba(0,0,0,0.1)]" id="advisories">
			<div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-1/2 translate-x-1/2 blur-3xl"></div>
			<div class="absolute bottom-0 left-0 w-96 h-96 bg-black/20 rounded-full translate-y-1/2 -translate-x-1/2 blur-3xl"></div>

			<div class="max-w-7xl mx-auto relative z-10">
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
					
					<div class="text-center lg:text-left space-y-6">
						<div class="inline-flex items-center gap-3 bg-white px-5 py-2 rounded-full shadow-xl border border-white/50 transform hover:scale-105 transition-transform">
							<span class="relative flex h-3 w-3">
								<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-500 opacity-75"></span>
								<span class="relative inline-flex rounded-full h-3 w-3 bg-red-600"></span>
							</span>
							
							<span class="text-red-600 text-[15px] font-black uppercase tracking-[0.2em]">
								Live Updates
							</span>
						</div>
						
						<div class="flex flex-col md:flex-row items-center lg:items-start gap-4">
							<h2 class="text-5xl md:text-7xl font-black text-white uppercase tracking-tighter leading-none 
								drop-shadow-[0_4px_3px_rgba(0,0,0,0.4)] md:drop-shadow-[0_8px_6px_rgba(0,0,0,0.3)]">
								BUSECO <br/>ADVISORY!
							</h2>
							<img class="h-24 w-auto drop-shadow-[0_10px_10px_rgba(0,0,0,0.3)] animate-bounce" 
								src="{{url('/images/advisory.png')}}" 
								alt="advisory icon" />
						</div>

						<p class="text-white text-lg md:text-xl font-bold max-w-lg leading-relaxed drop-shadow-[0_2px_4px_rgba(0,0,0,0.5)]">
							Stay informed about scheduled power maintenance, emergency repairs, and important announcements in your area.
						</p>
					</div>

					<div class="bg-white rounded-[2.5rem] shadow-[0_20px_50px_rgba(0,0,0,0.3)] p-2 md:p-4 overflow-hidden border border-white/20">
						<div class="bg-gray-50 rounded-[2rem] p-6 md:p-10 shadow-inner">
							<ul class="space-y-4 max-h-[450px] overflow-y-auto pr-4 custom-scrollbar">
								@forelse($latestPublicAdvisories as $advisory)
									<li class="group bg-white p-5 rounded-2xl border border-gray-200 shadow-sm hover:shadow-xl hover:border-red-200 transition-all duration-300 transform hover:-translate-y-1">
										<a href="{{route('blog.single', ['postSlug' => $advisory->post_slug] )}}" class="flex flex-col gap-2">
											<h3 class="text-lg font-extrabold text-gray-900 group-hover:text-red-700 transition-colors leading-tight tracking-tight">
												{{$advisory->post_title}}
											</h3>
											<div class="flex items-center gap-2 text-gray-500 font-bold">
												<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
												</svg>
												<span class="text-[11px] font-black uppercase tracking-[0.1em]">
													{{ date_format($advisory->created_at,"F d, Y") }}
												</span>
											</div>
										</a>
									</li> 
								@empty
									<div class="py-20 text-center flex flex-col items-center justify-center">
										<div class="bg-red-50 p-6 rounded-full mb-4 shadow-inner">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
											</svg>
										</div>
										<p class="text-xl font-black text-gray-400 uppercase tracking-widest">No active advisories</p>
									</div>
								@endforelse
							</ul>
						</div>
					</div>

				</div>
			</div>
		</section>

<style>
    /* Lightweight Scrollbar for the feed */
    .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #ef4444; /* red-500 */
        border-radius: 10px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #dc2626; /* red-600 */
    }
</style>
</x-home-layout>
  
  
  