<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Users') }}
            </h2>
            <a href="{{route('user.add')}}" class="flex items-center ml-auto px-4 py-1 bg-[#198754] border border-gray-300 rounded-md font-semibold text-xs text-[#ffffff] uppercase tracking-widest shadow-sm hover:bg-[#198754] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150'">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 mr-2">
                    <path fill-rule="evenodd" d="M5.625 1.5H9a3.75 3.75 0 0 1 3.75 3.75v1.875c0 1.036.84 1.875 1.875 1.875H16.5a3.75 3.75 0 0 1 3.75 3.75v7.875c0 1.035-.84 1.875-1.875 1.875H5.625a1.875 1.875 0 0 1-1.875-1.875V3.375c0-1.036.84-1.875 1.875-1.875ZM12.75 12a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V18a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V12Z" clip-rule="evenodd" />
                    <path d="M14.25 5.25a5.23 5.23 0 0 0-1.279-3.434 9.768 9.768 0 0 1 6.963 6.963A5.23 5.23 0 0 0 16.5 7.5h-1.875a.375.375 0 0 1-.375-.375V5.25Z" />
                </svg>   
                Add User
            </a>
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
                                            <th scope="col" class="px-6 py-4">Name</th>
                                            <th scope="col" class="px-6 py-4">Email</th>
                                            <th scope="col" class="px-6 py-4">Role</th>
                                            <th scope="col" class="px-6 py-4">Status</th>
                                            <th scope="col" class="px-6 py-4">Date Created</th>
                                            <th scope="col" class="px-6 py-4">Date Modified</th>
                                            <th scope="col" class="px-6 py-4">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1 @endphp
                                            @forelse($users as $user)
                                                <tr class="border-b border-neutral-200 dark:border-white/10">
                                                    <td class="whitespace-nowrap px-2 py-1 font-medium text-center">{{$no++}}</td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">{{ $user->name }}</td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">
                                                        <a href="{{route('user.profile.edit', ['userId' => $user->id] )}}" class="text-[#2C8D0A] hover:underline">{{ $user->email }}</a> 
                                                    </td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">{{ $user->role }}</td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">
                                                        <span @class([
                                                            "p-1 text-white rounded-lg text-[14px]",
                                                            "bg-danger" => $user->status === 0,
                                                            "bg-success" => $user->status === 1
                                                            ])
                                                        >{{$user->status === 1 ? 'Active' : 'Deactivated'}}</span>
                                                    </td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">{{ $user->created_at }}</td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium">{{ $user->updated_at }}</td>
                                                    <td class="whitespace-nowrap px-2 py-1 text-center font-medium flex justify-center">
                                                        <a href="{{route('user.profile.edit', ['userId' => $user->id] )}}" class="border-2 border-info p-3 bg-info text-white hover:text-info hover:bg-white ">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                                                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="whitespace-nowrap px-6 py-4 font-bold">No Post Found!</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
