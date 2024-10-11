<x-home-layout>
    <div class="mx-auto max-w-screen-xl">
        <div class="grid grid-cols-1 gap-4">
            <div class="p-6">
                <div class="border-2 border-[#b4e8ac] bg-[#01440D]">
                    <h1  class='font-medium text-4xl p-4 mt-6 text-white text-center'>CONTACT US</h1>

                    <div class="page-contents mt-2 mb-9 p-3">
                        <form method="POST" action="{{route('contactus.email')}}" class="mx-auto max-w-xl mt-[10px]">
                            @csrf
                            <x-success-message-status class="mt-0 mb-4" :message="session('message')" />
                            <?php //dd(@errors) ?>
                            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                <div class="sm:col-span-2">
                                    <label for="fullname" class="text-start block text-medium font-semibold leading-6 text-white">FULL NAME <span class="text-[#ff0000]">*</span></label>
                                    <div class="mt-2.5">
                                        <input type="text" name="fullname" id="fullname" autocomplete="given-name" value="{{ old('fullname') }}" class="block w-full rounded-md border-0 px-3.5 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        <x-input-error :messages="$errors->get('fullname')" class="mt-2 text-[#ff3333] font-bold text-base" />
                                    </div>
                                </div>
                            
                                <div class="sm:col-span-2">
                                    <label for="email" class="text-start block text-medium font-semibold leading-6 text-white">EMAIL ADDRESS <span class="text-[#ff0000]">*</span></label>
                                    <div class="mt-2.5">
                                        <input type="email" name="email" id="email" autocomplete="email" value="{{ old('email') }}" class="block w-full rounded-md border-0 px-3.5 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-[#ff3333] font-bold text-base" />
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="municipality" class="text-start block text-medium font-semibold leading-6 text-white">MUNICIPALITY <span class="text-[#ff0000]">*</span></label>
                                    <div class="mt-2.5">
                                        <select class='block w-full rounded-md border-0 px-3.5 py-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6' id="municipality" name="municipality" required >
                                            <option value="manolofortich"  {{ old('municipality') == 'manolofortich' ? 'selected' : '' }} >Manolo Fortich</option>
                                            <option value="malaybalay" {{ old('municipality') == 'malaybalay' ? 'selected' : '' }} >Malaybalay</option>
                                        </select>
                                        <x-input-error :messages="$errors->get('municipality')" class="mt-2 text-[#ff3333] font-bold text-base" />
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="subject" class="text-start block text-medium font-semibold leading-6 text-white">SUBJECT <span class="text-[#ff0000]">*</span></label>
                                    <div class="mt-2.5">
                                        <input type="text" name="subject" id="subject" autocomplete="subject" value="{{ old('subject') }}" class="block w-full rounded-md border-0 px-3.5 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                                        <x-input-error :messages="$errors->get('subject')" class="mt-2 text-[#ff3333] font-bold text-base" />
                                    </div> 
                                </div> 
                                <div class="sm:col-span-2">
                                    <label for="message" class="text-start block text-medium font-semibold leading-6 text-white">MESSAGE <span class="text-[#ff0000]">*</span></label>
                                    <div class="mt-2.5">
                                        <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>{{ old('message') }}</textarea>
                                        <x-input-error :messages="$errors->get('message')" class="mt-2 text-[#ff3333] font-bold text-base" />
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block text-[#ff3333] text-[13px] font-bold">
                                    {{ $errors->first('g-recaptcha-response') }}
                                </span>
                            @endif
                            <div class="mt-10">
                                <button type="submit" 
                                    class="block w-full rounded-md bg-blue-600 px-3.5 py-3 text-center text-large font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                                    onclick="this.form.submit(); this.disabled = true;"
                                >
                                    SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
<!-- 2nd column
            <div class="p-6">
                <div class="border-2 border-[#b4e8ac] bg-[#B4E8AC]">
                    <h1  class='font-medium text-4xl p-3 mt-6 text-gray-900 text-center'>Get in touch</h1>

                    <div class="page-contents mt-2 mb-9 p-3">
                       
                    </div>
                </div>
            </div>
-->
        </div>
<!--separate img contactus -->
            <div class="profile p-6" id="profile"> 
                    <div class="mx-auto max-w-screen-xl border-2 border-[#2C8D0A]">
                        <div class="grid grid-cols-2 px-6 py-8 gap-4">             
                            <div class="col-span-2">
                                    <img src="{{url('/images/contact-numbers.png')}}" class="w-full h-auto" />
                            </div>
                        </div>
                    </div>
            </div>
    </div>
</x-home-layout>