<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Post Revisions') }}
            </h2>
            <x-success-message-delete class="mt-0 mb-4" :postMessage="session('postMessage')" />
            
            {{-- <form class="ml-auto">
                <div class="md:flex items-center pl-1 md:pl-0 pr-1 md:pr-0">
                    <x-text-input class="block w-full py-[4px] px-4 border-2 border-gray-400" type="search" id="search" name="search" value="{{ request()->search ?? '' }}" placeholder='ex: Blog Title' onchange="clearVal(this.value)" required />
                    <button class="flex items-center justify-center ml-2 w-3/12 rounded bg-primary px-6 py-2 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                        </svg>
                        <span class="ml-1">Search</span>
                    </button>
                </div>
            </form> --}}

            <a href="{{route('post.add')}}" class="flex items-center ml-auto px-4 py-1 bg-[#198754] border border-gray-300 rounded-md font-semibold text-xs text-[#ffffff] uppercase tracking-widest shadow-sm hover:bg-[#198754] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2">
                    <path fill-rule="evenodd" d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875ZM12.75 12a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V18a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V12Z" clip-rule="evenodd" />
                    <path d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z" />
                </svg>   
                Add Post
            </a>
        </div>
    </x-slot>

    <div class="py-3">
        <div class="w-full pl-1 pr-1 sm:pr-2 sm:pl-0">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 text-gray-900">
                    <h1>Title: <b>{{$postLogsInfo->postTitle}}</b></h1>
                    <div class="font-medium">{{ date_format(new DateTime($postLogsInfo->date_created),"F d, Y h:i:s a"); }}</div>
                    <div>
                        <span>Updated by: <b>{{$postLogsInfo->username}}</b></span>
                        <div class="text-[#ff0000]">
                            <p class="font-semibold">Modified fields and values:</p>
                        
                                @php 
                                    $modFieldsArr = unserialize($postLogsInfo->modifiedFields);
                                    $modFieldKeyCount = count(array_keys($modFieldsArr));
                                    
                                    foreach($modFieldsArr as $x => $y){
                                        echo '<p class="font-bold">';
                                        echo '<span class="text-black">'. $x .' : </span>'. htmlspecialchars(($y));
                                        echo '</p>';
                                    }
                                @endphp
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>