<x-home-layout>
    <div class="mx-auto max-w-screen-xl">
        <div class="grid grid-cols-1 gap-4">
            <div class="p-6">
                <div class="border-2 border-[#b4e8ac] bg-[#01440D]">
                    <h1  class='font-medium text-4xl p-4 mt-6 text-white text-center'>CONTACT US</h1>

                    <div class="page-contents mt-2 mb-9 p-3">
                        <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-10">
                            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                <div>
                                <label for="first-name" class="text-start block text-medium font-semibold leading-6 text-white">FIRST NAME</label>
                                <div class="mt-2.5">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                </div>
                                <div>
                                <label for="last-name" class="text-start block text-medium font-semibold leading-6 text-white">LAST NAME</label>
                                <div class="mt-2.5">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                </div>
                                
                                <div class="sm:col-span-2">
                                <label for="email" class="text-start block text-medium font-semibold leading-6 text-white">EMAIL ADDRESS</label>
                                <div class="mt-2.5">
                                    <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="company" class="text-start block text-medium font-semibold leading-6 text-white">SUBJECT</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div> 
                                </div> 
                                <div class="sm:col-span-2">
                                <label for="message" class="text-start block text-medium font-semibold leading-6 text-white">MESSAGE</label>
                                <div class="mt-2.5">
                                    <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                                </div>
                            </div>
                            <div class="mt-10">
                                <button type="submit" class="block w-full rounded-md bg-blue-600 px-3.5 py-2.5 text-center text-large font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">SEND MESSAGE</button>
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