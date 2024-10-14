<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold flex items-center text-xl text-gray-800 leading-tight">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007f00" class="size-10 mr-3">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                </svg>
                {{ __('User Profile') }} - {{ $user->email }}
            </h2>
            <x-success-message-add-and-update class="mt-0 mb-4" :postMessage="session('postMessage')" />
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

                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>
            
                <form method="post" action="{{ route('user.profile.update', ['userId' => request()->userId]) }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')
            
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="block mt-1 w-full py-2 px-4 border-2 border-gray-400" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
            
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="block mt-1 w-full py-2 px-4 border-2 border-gray-400" :value="old('email', $user->email)" required autocomplete="username" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
            
                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                            <div>
                                <p class="text-sm mt-2 text-gray-800">
                                    {{ __('Your email address is unverified.') }}
            
                                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>
            
                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 font-medium text-sm text-green-600">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>
            
                    <div>
                        <x-input-label for="role" :value="__('Role')" />
                        <select class='block mt-1 w-full py-2 px-4 border-2 border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm' id="role" name="role" required >
                            <option value="admin" {{$user->role == 'admin'  ? 'selected' : ''}}>Admin</option>
                            <option value="editor" {{$user->role == 'editor'  ? 'selected' : ''}}>Editor</option>
                        </select>
                        <x-input-error :messages="$errors->get('role')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="status" :value="__('Status')" />
                        <select class='block mt-1 w-full py-2 px-4 border-2 border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm' id="status" name="status" required >
                            <option value="1" {{$user->status == 1  ? 'selected' : ''}}>Active</option>
                            <option value="0" {{$user->status == 0  ? 'selected' : ''}}>Deactivated</option>
                        </select>
                        <x-input-error :messages="$errors->get('status')" class="mt-2" />
                    </div>
            
                    <div class="mt-3">
                        <button
                            type="submit"
                            class="flex items-center justify-center ml-auto w-3/12 rounded bg-primary px-6 py-3 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                            data-twe-ripple-init
                            data-twe-ripple-color="light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy-fill mr-2" viewBox="0 0 16 16">
                                <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z"/>
                                <path d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z"/>
                            </svg>
                            SAVE
                        </button>
                    </div>
                </form>


            </div>

            <!--Password Update Form -->
            {{-- <div class="mt-5 p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @include('admin.users.custom-update-password')
            </div> --}}
        </div>
        <!--Delete User Form -->
        <div class="w-full pl-1 pr-1 sm:pr-2 sm:pl-0 mt-5">
            <div class="p-3 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @include('admin.users.custom-delete-user')
            </div>
        </div>
    </div>
</x-app-layout>
