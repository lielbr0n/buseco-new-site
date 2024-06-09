<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Page') }}
            </h2>
            <a href="{{route('page.add')}}" class="ml-auto px-4 py-2 bg-[#198754] border border-gray-300 rounded-md font-semibold text-xs text-[#ffffff] uppercase tracking-widest shadow-sm hover:bg-[#198754] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150'">Add Page</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="flex flex-col overflow-x-auto">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-x-auto">
                                    <table
                                        class="min-w-full text-start text-sm font-light text-surface dark:text-white">
                                        <thead
                                            class="border-b border-neutral-200 font-medium bg-[#2C8D0A] text-white dark:border-white/10">
                                        <tr>
                                            <th scope="col" class="px-6 py-4">#</th>
                                            <th scope="col" class="px-6 py-4">Title</th>
                                            <th scope="col" class="px-6 py-4">Slug</th>
                                            <th scope="col" class="px-6 py-4">Author</th>
                                            <th scope="col" class="px-6 py-4">Status</th>
                                            <th scope="col" class="px-6 py-4">Date Created</th>
                                            <th scope="col" class="px-6 py-4">Date Modified</th>
                                            <th scope="col" class="px-6 py-4">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1 @endphp
                                            @forelse($pages as $page)
                                                <tr class="border-b border-neutral-200 dark:border-white/10">
                                                    <td class="whitespace-nowrap px-2 py-1 font-medium text-center">{{$no++}}</td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium "><a href="{{route('page.edit', ['pageId' => $page->post_id])}}" class="text-[#2C8D0A] hover:underline">{{ $page->post_title }}<a></td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium"><a href="{{ '/'.$page->post_slug }}" class=" hover:underline" target="_blank">{{ '/'.$page->post_slug }}</a></td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">{{ $page->post_author_name }}</td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-semibold">
                                                        <span @class([
                                                            "p-1 text-white rounded-lg text-[14px]",
                                                            "bg-warning" => $page->post_status === 'draft',
                                                            "bg-success" => $page->post_status === 'publish'
                                                            ])
                                                        >{{ strtoupper($page->post_status) }}
                                                        </span>
                                                    </td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">{{ $page->created_at }}</td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">{{ $page->updated_at }}</td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium flex justify-center">
                                                        <a href="{{route('page.edit', ['pageId' => $page->post_id])}}" class="border-2 border-info p-3 bg-info text-white hover:text-info hover:bg-white ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                                                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                                            </svg>
                                                        </a>
                                                        <a href="{{route('page.delete', ['pageId' => $page->post_id])}}" onclick="return confirm('Are you sure you want to delete this post?')" class="border-2 border-danger ml-2 p-3 bg-danger text-white hover:text-danger hover:bg-white">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                                                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" />
                                                            </svg>                                                              
                                                        </a>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="whitespace-nowrap px-6 py-4">No Records Found!</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
