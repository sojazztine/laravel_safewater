    <x-sidebar-layout>

        <style>
            .ql-size-10px { font-size: 10px; }
            .ql-size-12px { font-size: 12px; }
            .ql-size-14px { font-size: 14px; }
            .ql-size-16px { font-size: 16px; }
            .ql-size-18px { font-size: 18px; }
            .ql-size-20px { font-size: 20px; }
            .ql-size-24px { font-size: 24px; }
            .ql-size-28px { font-size: 28px; }
            .ql-size-32px { font-size: 32px; }
            .ql-size-36px { font-size: 36px; }
            .ql-size-48px { font-size: 48px; }

            #editor {
                height: 300px;
                overflow-y: auto;
                width:600px;
                overflow-x:auto;
            }
            .ql-editor img {
                display: flex;
                max-width: 50%;
                margin-right: 10px;
            }
        </style>

        <h1 class="text-[#016262] text-xl">Post a new blog</h1>
        <card class="block w-[90%] max-w-full mt-5 p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" id="post_form">
                @csrf
                <div class="flex ">
                    <div class="w-[100%]">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="title" id="title" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required placeholder=" "  />
                            <label for="title" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title Blog</label>
                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <textarea name="description" id="description" rows="4" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required></textarea>
                            <label for="blog_description" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description Blog</label>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">60 words</p>
                        </div>

                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Image</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="image" name="image" type="file" required >
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>

                        <div class="relative z-0 w-full my-5 group">
                            <input type="text" name="publisher" id="publisher" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required  />
                            <label for="publisher" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Publish by</label>
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
                                        <option value="14px" selected>14px</option>
                                        <option value="16px">16px</option>
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
                                    <button class="ql-script" value="sub"></button>
                                    <button class="ql-script" value="super"></button>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-header" value="1"></button>
                                    <button class="ql-header" value="2"></button>
                                    <button class="ql-blockquote"></button>
                                    <button class="ql-code-block"></button>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-list" value="ordered"></button>
                                    <button class="ql-list" value="bullet"></button>
                                    <button class="ql-indent" value="-1"></button>
                                    <button class="ql-indent" value="+1"></button>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-direction" value="rtl"></button>
                                    <select class="ql-align"></select>
                                </span>
                                <span class="ql-formats">
                                    <button class="ql-link"></button>
                                    <button class="ql-image"></button>
                                    <button class="ql-video"></button>
                                    <button class="ql-formula"></button>
                                </span>

                                <span class="ql-formats">
                                    <button class="ql-clean"></button>
                                </span>
                            </div>
                            <div id="editor" class="min-h-[50%]"></div>
                            <input type="hidden" name="content" id="quill-content">
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center mt-5">
                    <button id="add-data-btn" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm max-w-full sm:w-auto px-8 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="width: -webkit-fill-available;">Submit</button>
                </div>
            </form>

            <script>
                var FontSize = Quill.import('formats/size');
                FontSize.whitelist = ['10px', '12px', '14px', '16px', '18px', '20px', '24px', '28px', '32px', '36px', '48px'];
                Quill.register(FontSize, true);

                const quill = new Quill('#editor', {
                    modules: {
                        syntax: true,
                        toolbar: '#toolbar-container',
                        keyboard: {
                            bindings: {
                                enter: {
                                    key: 13,
                                    handler: function(range, context) {
                                        quill.insertText(range.index, '\n'); // Insert a new line
                                        quill.setSelection(range.index + 1); // Move cursor
                                    }
                                }
                            }
                        }
                    },
                    placeholder: 'Compose here',
                    theme: 'snow',
                });

                document.getElementById('add-data-btn').addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent form from submitting immediately

                    // Get the Quill editor content
                    const editorContent = quill.root.innerHTML.trim(); // Trim the content to avoid white space issues
                    const title = document.getElementById('title').value;
                    const description = document.getElementById('description').value;
                    const image = document.getElementById('image').value;
                    const publisher = document.getElementById('publisher').value;
                    // Check if the editor content is empty
                    if (editorContent === "" || editorContent === "<p><br></p>" || title == "" || description == "" || image ==  "" || publisher ==  "" ) {
                        // If empty, show SweetAlert2 message
                        Swal.fire({
                            title: 'Please fill in the content!',
                            text: 'The content field cannot be empty.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        return; // Prevent submission
                    }

                    // Set the value of the hidden input to the Quill content
                    document.getElementById('quill-content').value = editorContent;

                    // Show SweetAlert2 confirmation dialog
                    Swal.fire({
                        title: 'Are you sure you want to submit this?',
                        text: 'You are about to submit the form.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, submit it',
                        cancelButtonText: 'No, cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Show success message and submit the form
                            Swal.fire({
                                title: 'Success',
                                text: 'Your post has been successfully submitted!',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                document.getElementById('post_form').submit(); // Submit the form after confirmation
                            });
                        }
                    });
                });
            </script>
        </card>
    </x-sidebar-layout>
