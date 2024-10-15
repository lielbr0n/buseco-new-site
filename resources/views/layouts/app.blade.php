<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{{ url('images/buseco.png') }}">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- 
            tinymce js source from public/js/tinymce folder
            installation using self-hosted: https://www.tiny.cloud/docs/tinymce/latest/npm-projects/
        -->
        <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

        <!-- Settings for tinymce wysywyg -->
        <!-- docs: https://www.tiny.cloud/docs/tinymce/latest/laravel-composer-install/ -->
        <script>
            var editor_config = {
                path_absolute : "/",
                selector: 'textarea.post_content',
                relative_urls: false,
                plugins: [
                    'code', 'table', 'lists', 'codesample', 'image', 'wordcount', 'media', 'link', 'anchor', 'searchreplace', 'help'
                ],
                menubar: 'file edit view insert format tools table help',
                toolbar: 'undo redo |  blocks fontsizeinput fontinput  | bold italic underline strikethrough | alignleft aligncenter alignright | indent outdent | bullist numlist | table | link image media | code',
                license_key: 'gpl',
                images_upload_base_path: '/',
                height: 500,

                file_picker_callback : function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no",
                    onMessage: (api, message) => {
                    callback(message.content);
                    }
                });
                }
                
            };
            tinymce.init(editor_config);
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')
           
            <main>
                <div class="grid grid-cols-6 gap-2">
                    <!-- Side Bar Menu -->
                    <div class="bg-white h-[92vh] hidden sm:block"> <!-- Set the height to 92 vh(view height) -->
                        <ul class="px-2">
                            <li @class([
                                'my-1 py-1 hover:bg-[#0a961d] hover:text-white',
                                'bg-[#0a961d]' => request()->routeIs('dashboard'),
                            ])>
                                <a href="{{route('dashboard')}}" @class([
                                    'block text-base font-medium hover:text-white pl-1',
                                    'text-white' => request()->routeIs('dashboard'),
                                    'text-black' => !request()->routeIs('dashboard'),
                                ])>Dashboard</a>
                            </li>
                            <li @class([
                                'my-1 py-1 hover:bg-[#0a961d]',
                                'bg-[#0a961d]' => request()->routeIs('post.*'), 
                            ]) >
                                <a href="{{route('post.index')}}" @class([
                                    'block text-base font-medium hover:text-white pl-1',
                                    'text-white' => request()->routeIs('post.*'),
                                    'text-black' => !request()->routeIs('post.*'),
                                ])>Post</a>
                            </li>
                            
                            @if(Auth::user()->role === "admin" && Auth::user()->status === 1)
                                <li @class([
                                    'my-1 py-1 hover:bg-[#0a961d]',
                                    'bg-[#0a961d]' => request()->routeIs('page.*'),
                                ]) >
                                    <a href="{{route('page.index')}}" @class([
                                        'block text-base font-medium hover:text-white pl-1',
                                        'text-white' => request()->routeIs('page.*'),
                                        'text-black' => !request()->routeIs('page.*'),
                                    ])>Page</a>
                                </li>

                                <li @class([
                                    'my-1 py-1 hover:bg-[#0a961d]',
                                    'bg-[#0a961d]' => request()->routeIs('user.*'),
                                ]) >
                                    <a href="{{route('user.index')}}" @class([
                                        'block text-base font-medium hover:text-white pl-1',
                                        'text-white' => request()->routeIs('user.*'),
                                        'text-black' => !request()->routeIs('user.*'),
                                    ])>Users</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <!-- End Side Bar Menu -->

                    <!-- Admin Body -->
                    <div class="col-span-6 sm:col-span-5">
                        @if (isset($header))
                            <header class="bg-white shadow mr-1 ml-1 sm:mr-2 sm:ml-0">
                                <div class="w-full py-1 px-2">
                                    {{ $header }}
                                </div>
                            </header>
                        @endif

                        {{ $slot }}
                    </div>
                    <!-- End Admin Body -->
                </div>
            </main>
        </div>
    </body>
</html>
