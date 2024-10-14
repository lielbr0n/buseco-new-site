<!DOCTYPE html>
@php 
    // $post_template = [
    //     'with-right-sidebar' => 'With Right Side Bar',
    //     'full-width' => 'Full Width',
    // ];
    $post_status = [
        'publish' => 'Publish',
        'draft' => 'Draft',
    ];

    $post_category = [
        'news-articles' => 'News Articles',
        'public-advisory' => 'Public Advisory',
        'job-opportunities' => 'Job Opportunities',
        'erc' => 'ERC',
        'publication' => 'Publication',
        'services' => 'Services',
        'institute_advisory' => 'Institutional Advisory',
        'bids_awards' => 'Bids & Awards',
        'monthly-generation-mix-under-oath' => 'Monthly Generation Mix Under Oath',
        'district-election' => 'District Election',
        'agma' => 'AGMA',
        'daily-supply-and-load-outlook' => 'Daily Supply and Load Outlook',
        'coop-news' => 'Coop News',
        'applying-for-membership' => 'Applying for Membership',
        'net-metering' => 'Net Metering',
        'solar-home-system' => 'Solar Home System',
        'csp' => 'CSP',
        'lifeline-discount' => 'Lifeline Discount',
        'senior-citizen-discount' => 'Senior Citizen Discount',
        'scheduled-unbundled-rates' => 'Scheduled Unbundled Rates',
        'rates-2016' => 'Rates 2016',
        'rates-2017' => 'Rates 2017',
        'rates-2018' => 'Rates 2018',
        'rates-2019' => 'Rates 2019',
        'rates-2020' => 'Rates 2020',
        'rates-2021' => 'Rates 2021',
        'rates-2022' => 'Rates 2022',
        'rates-2023' => 'Rates 2023',
        'rates-2024' => 'Rates 2024'
    ];
@endphp

<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Post') }}
            </h2>
            <x-success-message-add-and-update class="mt-0 mb-4" :postMessage="session('postMessage')" />
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
                    <!-- if there is pageId, the action will be page.update if not then page.create -->
                    <form action="{{ request()->postId ? route('post.update', ['postId' => request()->postId]) : route('post.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- if there is pageId, method patch is added because it is update -->
                        @if(request()->postId)
                            @method('patch')
                        @endif

                        <div>
                            <x-input-label for="post_title" :value="__('Title')" />
                            <x-text-input id="post_title" class="block mt-1 w-full py-2 px-4 border-2 border-gray-400" type="text" name="post_title" :value="old('post_title', $postInfo->post_title ?? '')" placeholder='My First Post' required autofocus autocomplete="post_title" />
                            <x-input-error :messages="$errors->get('post_title')" class="mt-2" />
                        </div>

                        <div class="mt-3 mb-3">
                            <x-input-label for="post_slug" :value="__('Slug')" />
                            <x-text-input id="post_slug" class="block mt-1 w-full py-2 px-4 border-2 border-gray-400" type="text" name="post_slug" :value="old('post_slug', $postInfo->post_slug ?? '')" placeholder='my-first-post' required autofocus autocomplete="post_slug" />
                            <x-input-error :messages="$errors->get('post_slug')" class="mt-2" />
                        </div>

                        <div class="mt-3 mb-3">
                            <x-input-label for="textarea_post" :value="__('Content')" />
                            <textarea id="textarea_post" class="post_content" name="post_content">{!! old('post_content',  $postInfo->post_content ?? '') !!}</textarea>
                            <x-input-error :messages="$errors->get('post_content')" class="mt-2" />
                        </div>

                        {{-- <div class="mt-3 mb-3">
                            <x-input-label for="post_template" :value="__('Template')" />
                            <x-select :option="$post_template" id="post_template" :name="__('post_template')" :selected="$postInfo->post_template ?? null" class="block mt-1 w-full py-2 px-4 border-2 border-gray-400 border-gray-300 focus:border-black focus:ring-black" />
                        </div> --}}

                        <div class="mt-3 mb-3">
                            <x-input-label for="post_category" :value="__('Category')" />
                            <x-select :option="$post_category" id="post_category" :name="__('post_category')" :selected="$postInfo->post_category ?? null" class="block mt-1 w-full py-2 px-4 border-2 border-gray-400 border-gray-300 focus:border-black focus:ring-black" required />
                            <x-input-error :messages="$errors->get('post_category')" class="mt-2" />
                        </div>

                        <div class="mt-3 mb-3">
                            <x-input-label for="post_status" :value="__('Save as Publish or Draft?')" />
                            <x-select :option="$post_status" id="post_status" :name="__('post_status')" :selected="$postInfo->post_status ?? null" class="block mt-1 w-full py-2 px-4 border-2 border-gray-400 border-gray-300 focus:border-black focus:ring-black" />
                            <x-input-error :messages="$errors->get('post_status')" class="mt-2" />
                        </div>
                        
                        <div class="mt-5 mb-3">
                            <x-input-label class="mb-3 text-[green]" :value="__('Page Options:')" />
                            <div class="mb-[0.125rem] block min-h-[1.5rem] ps-[1.5rem]">
                                <input
                                    class="relative float-left -ms-[1.5rem] me-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-secondary-500 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-checkbox before:shadow-transparent before:content-[''] checked:border-[#198754] checked:bg-[#198754] checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ms-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-black/60 focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-black/60 focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-checkbox checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ms-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent rtl:float-right dark:border-neutral-400 dark:checked:border-primary dark:checked:bg-primary"
                                    type="checkbox"
                                    value="show_title"
                                    id="showPostTitle"
                                    name="post_show_posttitle" 
                                    {{ request()->postId ? '' : 'checked' }}
                                    @checked(old('post_show_posttitle', $postInfo->post_option ?? ''))
                                />
                                <label class="font-bold inline-block ps-[0.15rem] hover:cursor-pointer" for="showPostTitle">
                                    Show Post Title
                                </label>
                                <x-input-error :messages="$errors->get('post_show_posttitle')" class="mt-2" />
                            </div>
                            <div class="mt-2">
                                <x-input-label for="post_excerpt" :value="__('Post Excerpt')" />
                                <textarea id="post_excerpt" class="block mt-1 w-2/4 py-2 px-4 border-2 border-gray-400" name="post_excerpt" placeholder="Post excerpt are usually 50-80 words" rows=3 autofocus>{{ old('post_excerpt',  $postInfo->post_excerpt ?? '') }}</textarea>
                                <x-input-error :messages="$errors->get('post_excerpt')" class="mt-2" />
                            </div>
                        </div>

                        <div>
                            <x-input-label for="post_excerpt" :value="__('Feature Image')" />
                            <div class="flex">
                                <button id="lfm1" data-name="inputName" data-input="thumbnail" data-preview="holder" type="button" class="w-1/4 px-2 rounded bg-[#198754] px-6 py-3 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-[#198754] hover:shadow-primary-2 focus:bg-[#198754] focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2">
                                    <i class="fa fa-picture-o"></i> {{ empty($postInfo->post_feature_image) ? 'Choose' : 'Change Image' }}
                                </button>
                                <input id="thumbnail" class="w-full ml-3" type="hidden" name="filepath" value="{{old('filepath', $postInfo->post_feature_image ?? null)}}">
                                <input id="inputName" class="w-full ml-3" type="text" name="filename" value="{{old('filename')}}">
                            </div>
                           
                            <div class="w-3/12">
                                <div id="holder" style="margin-top:15px"></div>
                                <img id="preview_fromDb" class="w-full" src="{{ old('filepath', $postInfo->post_feature_image ?? null) }}">
                            </div>
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
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    
</script>