<x-sidebar-layout>
    <!-- Quill Core CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        .ql-size-10px { font-size: 10px !important; }
        .ql-size-12px { font-size: 12px !important; }
        .ql-size-14px { font-size: 14px !important; }
        .ql-size-16px { font-size: 16px !important; }
        .ql-size-18px { font-size: 18px !important; }
        .ql-size-20px { font-size: 20px !important; }
        .ql-size-24px { font-size: 24px !important; }
        .ql-size-28px { font-size: 28px !important; }
        .ql-size-32px { font-size: 32px !important; }
        .ql-size-36px { font-size: 36px !important; }
        .ql-size-48px { font-size: 48px !important; }

        #editor {
            height: 300px;
            overflow-y: auto;
            width:600px;
            overflow-x:auto;
        }
        .ql-editor{
            font-family: "Old Standard TT", serif;
            font-size: 16px;
        }

        .ql-editor img {
            display: flex;
            max-width: 50%;
            margin-right: 10px;
        }
        .ql-editor ul {
  list-style-type: disc !important; /* Ensures bullets are used */
}

.ql-editor ol {
  list-style-type: decimal !important; /* Ensures numbering for ordered lists */
}

.ql-editor li {
  list-style-position: inside; /* Keeps alignment clean */
}

       

    </style>
    <div class="flex gap-5">
        <a href="{{ route('posts.index') }}" type="button" class="text-white bg-[#016262] hover:bg-[#018266] focus:ring-4 rotate-180 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 ">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
            <span class="sr-only">Icon description</span>
        </a>
        <h1 class="text-[#016262] text-xl">Edit post</h1>
    </div>
    <div class="block w-[90%] max-w-full mt-5 p-6 bg-white border border-gray-200 rounded-lg shadow-sm ">
        <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data" id="post_form">
            @csrf
            @method('PUT')
            <div class="flex ">
                <div class="w-[100%]">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="title" id="title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none   focus:outline-none focus:ring-0 focus:border-blue-600 peer" required placeholder=" "  value="{{ $post->title }}" />
                        <label for="title" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title Blog</label>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <textarea name="description" id="description" rows="4" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required> {{ $post->description }}</textarea>
                        <label for="blog_description" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description Blog</label>
                    </div>

                    <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload Image</label>
                    <img id="preview" src="{{ Storage::url($post->image) }}" alt="Preview Image" class="w-48 mb-5">
                   
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-poin2ter bg-gray-50  focus:outline-none" aria-describedby="file_input_help" id="image" name="image" accept="image/*" type="file" required >
                    <p class="mt-1 text-sm text-gray-500 " id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>

                    <div class="relative z-0 w-full my-5 group">
                        <input type="text" name="publisher" id="publisher" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required   value="{{ $post->publisher }}" />
                        <label for="publisher" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Publish by</label>
                    </div>
                </div>

                <div class=" flex justify-center ms-5">
                    <div class="w-[100%]">
                        <div id="toolbar-container">
                            <span class="ql-formats">
                                <select class="ql-font"></select>
                                <select class="ql-size">
                                    <option value="10px">10px</option>
                                    <option value="12px">12px</option>
                                    <option value="14px">14px</option>
                                    <option value="16px" selected>16px</option>
                                    <option value="18px">18px</option>
                                    <option value="20px">20px</option>
                                    <option value="24px">24px</option>
                                    <option value="28px">28px</option>
                                    <option value="32px">32px</option>
                                    <option value="36px">36px</option>
                                    <option value="48px">48px</option>
                                </select>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-bold"></button>
                                <button class="ql-italic"></button>
                                <button class="ql-underline"></button>
                                <button class="ql-strike"></button>
                            </span>
                            <span class="ql-formats">
                                <select class="ql-color"></select>
                                <select class="ql-background"></select>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-header" value="1"></button>
                                <button class="ql-header" value="2"></button>
                                <button class="ql-blockquote"></button>
                                <button class="ql-code-block"></button>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-list" value="ordered"></button>
                                {{-- <button class="ql-list" value="bullet"></button> --}}
                            </span>
                            <span class="ql-formats">
                                <button class="ql-link"></button>
                                <button class="ql-image"></button>
                                <button class="ql-video"></button>
                            </span>
                        </div>
                        <div id="editor" class="min-h-[50%]"></div>
                        <input type="hidden" name="content" id="quill-content">
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center mt-5">
                <button id="add-data-btn" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm max-w-full sm:w-auto px-8 py-2.5 text-center " style="width: -webkit-fill-available;">Submit</button>
            </div>
        </form>

        <script>
            function applyInlineFontSize(content) {
                    return content.replace(/class="ql-size-([^"]+)"/g, (match, size) => {
                    return `style="font-size: ${size};"`;
                });
            }   
                // Function to apply inline font-family to all Quill content
              function applyInlineFontFamily(content) {
                       return content.replace(/<p>/g, '<p style="font-family: Old Standard TT, serif;">')
                      .replace(/<span>/g, '<span style="font-family: Old Standard TT, serif;">');
           }

            var FontSize = Quill.import('formats/size');
            FontSize.whitelist = ['10px', '12px', '14px', '16px', '18px', '20px', '24px', '28px', '32px', '36px', '48px'];
            Quill.register(FontSize, true);

            var Font = Quill.import('formats/font');
            Font.whitelist = ['oldstandard'];
            Quill.register(Font, true);
           
            const quill = new Quill('#editor', {
                modules: {
                    syntax: true,
                    toolbar: '#toolbar-container',
                    keyboard: {
                        bindings: {
                            enter: {
                                key: 13,
                                handler: function(range, context) {
                                    quill.insertText(range.index, '\n');
                                    quill.setSelection(range.index + 1);
                                }
                            }
                        }
                    }
                },
                placeholder: 'Compose here',
                theme: 'snow',
                formats: ['bold', 'italic', 'underline', 'strike', 'size', 'font','list', 'image']
            });
            

            @if($post->content)
                 quill.clipboard.dangerouslyPasteHTML({!! json_encode($post->content) !!});
            @endif
            document.getElementById('add-data-btn').addEventListener('click', function(e) {
                e.preventDefault(); // Prevent form from submitting immediately
        
                // Get the Quill editor content
                let editorContent = quill.root.innerHTML.trim();
                const title = document.getElementById('title').value;
                const description = document.getElementById('description').value;
                
                const publisher = document.getElementById('publisher').value;
        
                // Check if required fields are empty
                if (editorContent === "" || editorContent === "<p><br></p>" || title == "" || description == "" || publisher == "") {
                    Swal.fire({
                        title: 'Please fill in the content!',
                        text: 'The content field cannot be empty.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                    return;
                }
        
                // ✅ Convert Quill's `data-list` attributes to Proper `<ul>` & `<ol>`
                editorContent = applyInlineFontSize(editorContent);
                editorContent = applyInlineFontFamily(editorContent); 
                // editorContent = editorContent.replace(/<li data-list="bullet">/g, "<li style='list-style-type:disc;'>");
                editorContent = editorContent.replace(/<li data-list="ordered">/g, "<li style='list-style-type:decimal;margin-right:10px;'>");
                    // Ensure images have inline styles for centering
                editorContent = editorContent.replace(/<img /g, '<img style="display: flex; justify-content: center; margin: auto;" ');


        
                // Set the value of the hidden input to the processed Quill content
                document.getElementById('quill-content').value = editorContent;
        
                // Show confirmation dialog before submitting
                Swal.fire({
                    title: 'Are you sure you want to submit this?',
                    text: 'You are about to submit the form.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, submit it',
                    cancelButtonText: 'No, cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Success',
                            text: 'Your post has been successfully submitted!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            document.getElementById('post_form').submit();
                        });
                    }
                });
            });

            document.getElementById("image").addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("preview").src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
            });
        </script>
    </div>
</x-sidebar-layout>
