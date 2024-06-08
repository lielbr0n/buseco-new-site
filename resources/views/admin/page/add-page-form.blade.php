<!DOCTYPE html>
<style>
    #container {
        width: 1000px;
        margin: 20px auto;
    }
    .ck-editor__editable[role="textbox"] {
        /* Editing area */
        min-height: 200px;
    }
    .ck-content .image {
        /* Block images */
        max-width: 80%;
        margin: 20px auto;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Page') }}
            </h2>
            <a href="{{route('page.add')}}" class="ml-auto px-4 py-2 bg-[#198754] border border-gray-300 rounded-md font-semibold text-xs text-[#ffffff] uppercase tracking-widest shadow-sm hover:bg-[#198754] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150'" type="submit">Add Page</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                   
                    <form action="{{route('page.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div>
                            <x-input-label for="post_title" :value="__('Title')" />
                            <x-text-input id="post_title" class="block mt-1 w-full py-2 px-4 border-2 border-gray-400" type="text" name="post_title" :value="old('post_title', $pageInfo->post_title ?? '')" placeholder='ex: Post Title' required autofocus autocomplete="post_title" />
                            <x-input-error :messages="$errors->get('post_title')" class="mt-2" />
                        </div>

                        <div class="mt-3 mb-3">
                            <x-input-label for="post_slug" :value="__('Slug')" />
                            <x-text-input id="post_slug" class="block mt-1 w-full py-2 px-4 border-2 border-gray-400" type="text" name="post_slug" :value="old('post_slug', $pageInfo->post_slug ?? '')" placeholder='ex: Post title' required autofocus autocomplete="post_slug" />
                            <x-input-error :messages="$errors->get('post_slug')" class="mt-2" />
                        </div>

                        {{-- <div class="mt-3 mb-6">
                            <x-input-label for="post_content" :value="__('Content')" />
                            <textarea id="post_content" name="post_content" rows="4" class="block w-full mt-1 py-2 px-4 border-2 border-gray-400"></textarea>
                            <x-input-error :messages="$errors->get('post_content')" class="mt-2" />
                        </div> --}}
                        {{-- <div id="container">
                            <div id="editor">
                            </div>
                        </div> --}}
                        {{-- <textarea >
                            Welcome to TinyMCE!
                        </textarea> --}}

                        <textarea id="mytextarea" name="post_content" value="{!! $pageInfo->post_content ?? '' !!}"></textarea>

                        <button
                            type="submit"
                            class="inline-block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong"
                            data-twe-ripple-init
                            data-twe-ripple-color="light">
                            Submit
                        </button>
                    </form>
                  
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
  
   
       
   
    // // This sample still does not showcase all CKEditor&nbsp;5 features (!)
    // // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
    // CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
    //     // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
    //     toolbar: {
    //         items: [
    //             'exportPDF','exportWord', '|',
    //             'findAndReplace', 'selectAll', '|',
    //             'heading', '|',
    //             'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
    //             'bulletedList', 'numberedList', 'todoList', '|',
    //             'outdent', 'indent', '|',
    //             'undo', 'redo',
    //             '-',
    //             'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
    //             'alignment', '|',
    //             'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
    //             'specialCharacters', 'horizontalLine', 'pageBreak', '|',
    //             'textPartLanguage', '|',
    //             'sourceEditing'
    //         ],
    //         shouldNotGroupWhenFull: true
    //     },
    //     // Changing the language of the interface requires loading the language file using the <script> tag.
    //     // language: 'es',
    //     list: {
    //         properties: {
    //             styles: true,
    //             startIndex: true,
    //             reversed: true
    //         }
    //     },
    //     // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
    //     heading: {
    //         options: [
    //             { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
    //             { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
    //             { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
    //             { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
    //             { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
    //             { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
    //             { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
    //         ]
    //     },
    //     // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
    //     placeholder: 'Welcome to CKEditor 5!',
    //     // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
    //     fontFamily: {
    //         options: [
    //             'default',
    //             'Arial, Helvetica, sans-serif',
    //             'Courier New, Courier, monospace',
    //             'Georgia, serif',
    //             'Lucida Sans Unicode, Lucida Grande, sans-serif',
    //             'Tahoma, Geneva, sans-serif',
    //             'Times New Roman, Times, serif',
    //             'Trebuchet MS, Helvetica, sans-serif',
    //             'Verdana, Geneva, sans-serif'
    //         ],
    //         supportAllValues: true
    //     },
    //     // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
    //     fontSize: {
    //         options: [ 10, 12, 14, 'default', 18, 20, 22 ],
    //         supportAllValues: true
    //     },
    //     // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
    //     // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
    //     htmlSupport: {
    //         allow: [
    //             {
    //                 name: /.*/,
    //                 attributes: true,
    //                 classes: true,
    //                 styles: true
    //             }
    //         ]
    //     },
    //     // Be careful with enabling previews
    //     // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
    //     htmlEmbed: {
    //         showPreviews: true
    //     },
    //     // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
    //     link: {
    //         decorators: {
    //             addTargetToExternalLinks: true,
    //             defaultProtocol: 'https://',
    //             toggleDownloadable: {
    //                 mode: 'manual',
    //                 label: 'Downloadable',
    //                 attributes: {
    //                     download: 'file'
    //                 }
    //             }
    //         }
    //     },
    //     // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
    //     mention: {
    //         feeds: [
    //             {
    //                 marker: '@',
    //                 feed: [
    //                     '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
    //                     '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
    //                     '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
    //                     '@sugar', '@sweet', '@topping', '@wafer'
    //                 ],
    //                 minimumCharacters: 1
    //             }
    //         ]
    //     },
    //     // The "superbuild" contains more premium features that require additional configuration, disable them below.
    //     // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
    //     removePlugins: [
    //         // These two are commercial, but you can try them out without registering to a trial.
    //         // 'ExportPdf',
    //         // 'ExportWord',
    //         'AIAssistant',
    //         'CKBox',
    //         'CKFinder',
    //         'EasyImage',
    //         // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
    //         // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
    //         // Storing images as Base64 is usually a very bad idea.
    //         // Replace it on production website with other solutions:
    //         // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
    //         // 'Base64UploadAdapter',
    //         'MultiLevelList',
    //         'RealTimeCollaborativeComments',
    //         'RealTimeCollaborativeTrackChanges',
    //         'RealTimeCollaborativeRevisionHistory',
    //         'PresenceList',
    //         'Comments',
    //         'TrackChanges',
    //         'TrackChangesData',
    //         'RevisionHistory',
    //         'Pagination',
    //         'WProofreader',
    //         // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
    //         // from a local file system (file://) - load this site via HTTP server if you enable MathType.
    //         'MathType',
    //         // The following features are part of the Productivity Pack and require additional license.
    //         'SlashCommand',
    //         'Template',
    //         'DocumentOutline',
    //         'FormatPainter',
    //         'TableOfContents',
    //         'PasteFromOfficeEnhanced',
    //         'CaseChange'
    //     ]
    // });
</script>
