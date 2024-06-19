<x-home-layout>
    <div class="mx-auto max-w-screen-xl">
        <!-- template with right side bar -->
        @if($pageInfo->post_template === 'with-right-sidebar') 
            <div class="grid grid-cols-3 gap-4 ">
                <div class="col-span-2 pt-6 pl-6 pb-6">
                    <!-- Publish Status  or Draft Status but the user is Authenticated(editor, admin) -->
                    @if($pageInfo->post_status === 'publish' || (Auth::check() && $pageInfo->post_status === 'draft')) 
                        <div class="border-2 border-[#2C8D0A] ">
                            <h1  @class([
                                'font-medium text-4xl p-3',
                                'hidden' => $pageInfo->post_option === null, //hidden if null
                            ])>{{ $pageInfo->post_title }}</h1>
                        
                            <div class="page-contents mt-2 p-3">
                                {!! $pageInfo->post_content !!}
                            </div>
                        </div>
                    @else
                        {{ redirect(abort(404)); }} 
                    @endif
                </div>
                <div class="pt-6 pr-6 pb-6">
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

                        <div class="page-contents mt-2 p-3">
                            {!! $pageInfo->post_content !!}
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </div>
</x-home-layout>