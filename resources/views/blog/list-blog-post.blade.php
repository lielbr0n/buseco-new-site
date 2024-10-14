<x-home-layout>
    <div class="mx-auto max-w-screen-xl" id="bloglist">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-3 md:col-span-2 pt-6 pl-6 pb-6 pr-6 md:pr-0">
                <div class="border-2 border-[#2C8D0A] p-3" >
                    <h1 class="font-medium text-4xl mb-4">COOP NEWS AND UPDATES</h1>
                    @forelse($blogList as $blog)
                        <div class="blog-content-list bg-[#e9e8e8] mb-4 last:mb-0"  style="box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 5px 0 rgba(0, 0, 0, 0.19);">
                            <div class="blog-img-container h-[150px] md:h-[250px]">
                                <a href="{{route('blog.single', ['postSlug' => $blog->post_slug] )}}">
                                    <img src="{{url($blog->post_feature_image ?? 'images/busecoborder.png')}}" class="object-cover w-full h-full" />
                                </a>
                            </div>
                            <div class="p-2">
                                <div class="blog-date mt-1 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007f00" class="size-6 mr-1">
                                        <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
                                        <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-[#737373]">{{ date_format($blog->created_at,"F d, Y h:i:s a") }}</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#007f00" class="size-6 ml-3 mr-1">
                                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm text-[#737373]">{{ $blog->post_author_name }}</span>
                                </div>
                                <div class="blog-title mt-2 text-xl font-bold hover:underline hover:text-[#0a961d]"><a href="{{route('blog.single', ['postSlug' => $blog->post_slug] )}}">{{ $blog->post_title }}</a></div>
                                <div class="blog-description text-justify mt-1" id="blog-description">
                                    @if(empty($blog->post_excerpt))
                                        {{ Str::of($blog->post_content)->words('50', '...')->stripTags()->replace('&nbsp;', '') }}
                                    @else
                                        {{ Str::of($blog->post_excerpt)->stripTags()->replace('&nbsp;', '') }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <div>No Post Found!</div>
                    @endforelse
                    {{ $blogList->links() }}
                </div>
            </div>
            <div class="col-span-3 md:col-span-1 pt-6 pr-6 pb-0 md:pb-6 pl-6 md:pl-0">
                <div class="border-2 border-[#2C8D0A] p-[6px]">
                    @include('blog.sidebar-blog', ['latestPosts' => $latestPosts])
                </div>
            </div>
        </div>
    </div>
</x-home-layout>