<x-home-layout>
    <div class="mx-auto max-w-screen-xl">
        <!-- template with right side bar -->
        @if($pageInfo->post_template === 'with-right-sidebar') 
            <div class="grid grid-cols-3 gap-4 ">
                <div class="col-span-3 md:col-span-2 pt-6 pl-6 pb-6 pr-6 md:pr-0">
                    <!-- Publish Status  or Draft Status but the user is Authenticated(editor, admin) -->
                    @if($pageInfo->post_status === 'publish' || (Auth::check() && $pageInfo->post_status === 'draft')) 
                        <div class="border-2 border-[#2C8D0A] ">
                            <h1  @class([
                                'font-medium text-4xl p-3',
                                'hidden' => $pageInfo->post_option === null, //hidden if null
                            ])>{{ $pageInfo->post_title }}</h1>
                           
                            <div class="page-contents mt-2 pl-3 pr-3 pb-3">
                                <div class="revert-tailwind">
                                    {!! $pageInfo->post_content !!}
                                </div>

                                <div class="grid grid-cols-3 gap-4">
                                    @foreach($postInfo as $post)
                                        <div class="pt-2 pb-2">
                                           
                                                <a href="{{route('blog.single', ['postSlug' => $post->post_slug] )}}">
                                                    <img src="{{url($post->post_feature_image ?? 'images/busecoborder.png')}}" class="object-cover w-full h-full" />
                                                </a>
                                           
                                        </div>
                                        <div class="col-span-2 pt-2 pl-4 pb-2">
                                            <div class="post-title">
                                                <a href="{{route('blog.single', ['postSlug' => $post->post_slug] )}}" class="text-[22px] font-bold hover:underline hover:text-[#0a961d]">{{ $post->post_title }}</a>
                                            </div>
                                            <div class="post-description text-justify" >
                                                @if(empty($post->post_excerpt))
                                                    {{ Str::of($post->post_content)->words('50', '...')->stripTags()->replace('&nbsp;', '') }}
                                                @else
                                                    {{ Str::of($post->post_excerpt)->stripTags()->replace('&nbsp;', '') }}
                                                @endif
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        {{ redirect(abort(404)); }} 
                    @endif
                </div>
                <div class="col-span-3 md:col-span-1 pl-6 md:pl-0 pt-0 md:pt-6 pr-6 pb-0 md:pb-6">
                    <div class="border-2 border-[#2C8D0A] p-[6px]">
                        @include('blog.sidebar-blog', ['latestPosts' => $latestPosts])
                    </div>
                </div>
            </div>
        <!-- template with full width -->
        @else
            <div class="grid grid-cols-1">
                <div class="p-6">
                    <div class="border-2 border-[#2C8D0A] ">
                        <h1  @class([
                            'font-medium text-4xl p-3',
                            'hidden' => $pageInfo->post_option === null, //hidden if null
                        ])>{{ $pageInfo->post_title }}</h1>

                        <div class="page-contents mt-2 pl-3 pr-3 pb-3">
                            <div class="revert-tailwind">
                                {!! $pageInfo->post_content !!}
                            </div>

                            <div class="grid grid-cols-3 gap-4">
                                @foreach($postInfo as $post)
                                    <div class="pt-2 pb-2">
                                        <a href="{{route('blog.single', ['postSlug' => $post->post_slug] )}}">
                                            <img src="{{url($post->post_feature_image ?? 'images/busecoborder.png')}}" class="object-cover w-full h-full" />
                                        </a>
                                    </div>
                                    <div class="col-span-2 pt-2 pl-4 pb-2">
                                        <div class="post-title">
                                            <a href="{{route('blog.single', ['postSlug' => $post->post_slug] )}}" class="text-[22px] font-bold hover:underline hover:text-[#0a961d]">{{ $post->post_title }}</a>
                                        </div>
                                        <div class="post-description text-justify" >
                                            @if(empty($post->post_excerpt))
                                                {{ Str::of($post->post_content)->words('50', '...')->stripTags()->replace('&nbsp;', '') }}
                                            @else
                                                {{ Str::of($post->post_excerpt)->stripTags()->replace('&nbsp;', '') }}
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
</x-home-layout>