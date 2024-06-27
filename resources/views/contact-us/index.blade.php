<x-home-layout>
    <div class="mx-auto max-w-screen-xl">
        <div class="grid grid-cols-1">
            <div class="p-6">
                <div class="border-2 border-[#b4e8ac] bg-[#e4eee3]">
                    <h1  class='font-medium text-4xl p-3 mt-6 text-gray-900 text-center'>CONTACT US</h1>

                    <div class="page-contents mt-2 mb-9 p-3">
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
                                    <label for="company" class="text-start block text-sm font-semibold leading-6 ttext-gray-900">Subject</label>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-home-layout>