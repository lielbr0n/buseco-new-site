<x-home-layout>
    <div class="mx-auto max-w-screen-xl">
        <div class="grid grid-cols-3 gap-4 ">
            <div class="col-span-2 pt-6 pl-6 pb-6">
                <div class="border-2 border-[#2C8D0A] ">
                    <h1 class="font-medium text-4xl p-3">{{ $pageInfo->post_title }}</h1>
                    <div class="page-contents mt-2 p-3">
                        {!! $pageInfo->post_content !!}
                    </div>
                </div>
            </div>
            <div class="pt-6 pr-6 pb-6">
                <div class="border-2 border-[#2C8D0A] ">
                    blog contents
                </div>
            </div>
    </div>
</x-home-layout>