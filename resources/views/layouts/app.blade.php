<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

       

        <!-- Place the first <script> tag in your HTML's <head> -->
        {{-- <script src="https://cdn.tiny.cloud/1/euy7e4j293ht6y12rxbbjsjfou9u4uhk1cu1i61yjlxsmj52/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
        <script>  
            tinymce.init({
                selector: 'textarea',
                width: "100%",
                height: 500,
                resize: false,
                autosave_ask_before_unload: false,
                powerpaste_allow_local_images: true,
                plugins: [
                    'a11ychecker', 'advcode', 'advlist', 'anchor', 'autolink', 'codesample', 'fullscreen', 'help',
                    'image', 'editimage', 'tinydrive', 'lists', 'link', 'media', 'powerpaste', 'preview',
                    'searchreplace', 'table', 'tinymcespellchecker', 'visualblocks', 'wordcount'
                ],
                toolbar: 'insertfile a11ycheck undo redo | bold italic | forecolor backcolor | codesample | alignleft aligncenter alignright alignjustify | bullist numlist | link image',
                spellchecker_dialog: true,
                spellchecker_ignore_list: ['Ephox', 'Moxiecode'],
                tinydrive_demo_files_url: '../_images/tiny-drive-demo/demo_files.json',
                tinydrive_token_provider: (success, failure) => {
                    success({ token: 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJqb2huZG9lIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.Ks_BdfH4CWilyzLNk8S2gDARFhuxIauLa8PwhdEQhEo' });
                },
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
        </script> --}}

        <!-- 
            tinymce js source from public/js/tinymce folder
            installation using self-hosted: https://www.tiny.cloud/docs/tinymce/latest/npm-projects/
        -->
        <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

        <!-- Settings for tinymce wysywyg -->
        <!-- docs: https://www.tiny.cloud/docs/tinymce/latest/laravel-composer-install/ -->
        <script>
                // tinymce.init({
                // path_absolute: "/",
                // selector: '#mytextarea',
                // plugins: 'code table lists codesample image wordcount media link anchor searchreplace help ',
                // menubar: 'file edit view insert format tools table help',
                // toolbar: 'undo redo |  blocks fontsizeinput fontinput  | bold italic underline strikethrough | alignleft aligncenter alignright | indent outdent | bullist numlist | table | link image media | code',
                // browser_spellcheck: true,
                // contextmenu: false,
                // license_key: 'gpl',
                // relative_urls: false,
                // file_picker_types: 'image',
                // file_picker_callback : function(callback, value, meta) {
                    
                //     var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                //     var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                //     var cmsURL = path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                //     if (meta.filetype == 'image') {
                //         cmsURL = cmsURL + "&type=Images";
                //     } else {
                //         cmsURL = cmsURL + "&type=Files";
                //     }

                //     tinyMCE.activeEditor.windowManager.openUrl({
                //         url : cmsURL,
                //         title : 'Filemanager',
                //         width : x * 0.8,
                //         height : y * 0.8,
                //         resizable : "yes",
                //         close_previous : "no",
                //         onMessage: (api, message) => {
                //         callback(message.content);
                //         }
                //     });
                //     }
                // });

                var editor_config = {
                    path_absolute : "/",
                    selector: '#mytextarea',
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

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
          
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
