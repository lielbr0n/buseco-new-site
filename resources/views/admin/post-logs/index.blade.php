<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('User Post Logs') }}
            </h2>
            <x-success-message-delete class="mt-0 mb-4" :postMessage="session('postMessage')" />

            <form class="ml-auto hidden">
                <div class="md:flex items-center pl-1 md:pl-0 pr-1 md:pr-0">
                    <x-text-input class="block w-full py-[4px] px-4 border-2 border-gray-400" type="search" id="search" name="search" value="{{ request()->search ?? '' }}" placeholder='ex: Name or Email' onchange="clearVal(this.value)" required />
                    <button class="flex items-center justify-center ml-2 w-3/12 rounded bg-primary px-6 py-2 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                        </svg>
                        <span class="ml-1">Search</span>
                    </button>
                </div>
            </form>

            {{-- <a href="{{route('user.add')}}" class="flex items-center ml-auto px-4 py-1 bg-[#198754] border border-gray-300 rounded-md font-semibold text-xs text-[#ffffff] uppercase tracking-widest shadow-sm hover:bg-[#198754] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2">
                    <path fill-rule="evenodd" d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875ZM12.75 12a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V18a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V12Z" clip-rule="evenodd" />
                    <path d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z" />
                </svg>   
                Add User
            </a> --}}
        </div>
    </x-slot>

    <div class="py-3">
        <div class="w-full pl-1 pr-1 sm:pr-2 sm:pl-0">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-3 text-gray-900">

                    <div class="flex flex-col mb-5 overflow-x-auto">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-x-auto">
                                    <table
                                        class="min-w-full text-start text-sm font-light text-surface dark:text-white">
                                        <thead
                                            class="border-b border-neutral-200 font-medium bg-[#2C8D0A] text-white dark:border-white/10">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">#</th>
                                            <th scope="col" class="px-6 py-4">Post/Page Title</th>
                                            <th scope="col" class="px-6 py-4">Operation</th>
                                            <th scope="col" class="px-6 py-4">Modified Fields</th>
                                            <th scope="col" class="px-6 py-4">Modified By</th>
                                            <th scope="col" class="px-6 py-4">Date Created</th>
                                            <th scope="col" class="px-6 py-4">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1  @endphp                                 
                                            @forelse($postLogs as $postLog)

                                                @php 
                                                    $routeTo = '';
                                                    if($postLog->operation === 'CREATE'){
                                                        $routeTo = route('post.edit', ['postId' => $postLog->postId]);
                                                    }else if($postLog->operation === 'UPDATE'){
                                                        $routeTo = route('post.revisions.modified.fields', ['postLogId' => $postLog->id]);
                                                    }else{
                                                        $routeTo = '#';
                                                    }
                                                @endphp

                                                <tr class="border-b border-neutral-200 dark:border-white/10">
                                                    <td class="whitespace-nowrap px-2 py-1 font-medium text-center">{{$no++}}</td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">
                                                        <a href="{{route('post.edit', ['postId' => $postLog->postId])}}" class="hover:underline">
                                                            {{ $postLog->postTitle }}
                                                        </a>
                                                    </td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">
                                                        <span @class([
                                                            "p-1 text-white rounded-lg text-[12px]",
                                                            "bg-danger" => $postLog->operation === 'DELETE',
                                                            "bg-success" => $postLog->operation === 'CREATE',
                                                            "bg-[#2d869f]" => $postLog->operation === 'UPDATE'
                                                            ])
                                                        > {{ $postLog->operation }}
                                                        </span>
                                                       
                                                    </td>
                                                   
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">
                                                        @php
                                                            if($postLog->modifiedFields){
                                                                $modFieldsArr = unserialize($postLog->modifiedFields);
                                                                $modFieldKeyCount = count(array_keys($modFieldsArr));

                                                                foreach($modFieldsArr as $x => $y){
                                                                    echo '<span class="font-semibold text-[#ff0000]">';
                                                                    echo $modFieldKeyCount > 1 ? $x.', ' : $x;
                                                                    echo '</span>';
                                                                }
                                                            }else{
                                                                echo "-";
                                                            }
                                                       @endphp
                                                    </td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">{{ $postLog->username }}</td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">{{ date_format(new DateTime($postLog->date_created),"F d, Y h:i:s a"); }}</td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium flex justify-center">
                                                        <a href="{{ $routeTo }}" class="border-2 border-info p-3 bg-info text-white hover:text-info hover:bg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                                                <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                                <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                                                            </svg>

                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="whitespace-nowrap px-6 py-4 font-bold">No Logs Found!</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ $postLogs->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    /* if input search x icon was clicked, it will redirect to rootUrl/members */
    const search = document.getElementById('search');

    search.addEventListener('input', evt => {
        if(!evt.inputType && search.value === ''){
        console.log('search input has been cleared');
        window.location.href = '/users';
    }});
     /* end if input x icon was clicked  */

    /* if input search was cleared */
    function clearVal(val) {
        //if input has no value, erase by use then it will redirect to rootUrl/members
        if(val === ''){
            window.location.href = '/users';
        }
    }
    /* end if input search was cleared */
</script>
