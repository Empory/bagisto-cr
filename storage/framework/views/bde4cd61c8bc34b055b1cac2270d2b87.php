<v-tinymce <?php echo e($attributes); ?>></v-tinymce>

<?php if (! $__env->hasRenderedOnce('eb8feccb-f4d7-4132-81c5-cca2971447e5')): $__env->markAsRenderedOnce('eb8feccb-f4d7-4132-81c5-cca2971447e5');
$__env->startPush('scripts'); ?>
    
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.6.2/tinymce.min.js"
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    ></script>

    <script type="module">
        app.component('v-tinymce', {
            props: ['selector', 'field'],

            render() {},

            mounted() {
                this.init();
            },

            methods: {
                init() {
                    // TODO (@devansh-webkul): Need to refactor this full method.
                    let tinyMCEHelper = {
                        initTinyMCE: function(extraConfiguration) {
                            let self = this;

                            let config = {
                                relative_urls: false,
                                menubar: false,
                                remove_script_host: false,
                                document_base_url: '<?php echo e(asset('/')); ?>',
                                uploadRoute: '<?php echo e(route('admin.tinymce.upload')); ?>',
                                csrfToken: '<?php echo e(csrf_token()); ?>',
                                ...extraConfiguration,
                            };

                            tinymce.init({
                                ...config,

                                file_picker_callback: function(cb, value, meta) {
                                    self.filePickerCallback(config, cb, value, meta);
                                },

                                images_upload_handler: function(blobInfo, success, failure, progress) {
                                    self.uploadImageHandler(config, blobInfo, success, failure, progress);
                                },
                            });
                        },

                        filePickerCallback: function(config, cb, value, meta) {
                            let input = document.createElement('input');
                            input.setAttribute('type', 'file');
                            input.setAttribute('accept', 'image/*');

                            input.onchange = function() {
                                let file = this.files[0];

                                let reader = new FileReader();
                                reader.readAsDataURL(file);
                                reader.onload = function() {
                                    let id = 'blobid' + new Date().getTime();
                                    let blobCache = tinymce.get().editorUpload.blobCache;
                                    let base64 = reader.result.split(',')[1];
                                    let blobInfo = blobCache.create(id, file, base64);
                                    blobCache.add(blobInfo);
                                    cb(blobInfo.blobUri(), {
                                        title: file.name
                                    });
                                };
                            };
                            input.click();
                        },

                        uploadImageHandler: function(config, blobInfo, success, failure, progress) {
                            let xhr, formData;

                            xhr = new XMLHttpRequest();

                            xhr.withCredentials = false;

                            xhr.open('POST', config.uploadRoute);

                            xhr.upload.onprogress = function(e) {
                                progress((e.loaded / e.total) * 100);
                            };

                            xhr.onload = function() {
                                let json;

                                if (xhr.status === 403) {
                                    failure("<?php echo app('translator')->get('admin::app.error.tinymce.http-error'); ?>", {
                                        remove: true
                                    });
                                    return;
                                }

                                if (xhr.status < 200 || xhr.status >= 300) {
                                    failure("<?php echo app('translator')->get('admin::app.error.tinymce.http-error'); ?>");
                                    return;
                                }

                                json = JSON.parse(xhr.responseText);

                                if (!json || typeof json.location != 'string') {
                                    failure("<?php echo app('translator')->get('admin::app.error.tinymce.invalid-json'); ?>" + xhr.responseText);
                                    return;
                                }

                                success(json.location);
                            };

                            xhr.onerror = function() {
                                failure("<?php echo app('translator')->get('admin::app.error.tinymce.upload-failed'); ?>");
                            };

                            formData = new FormData();
                            formData.append('_token', config.csrfToken);
                            formData.append('file', blobInfo.blob(), blobInfo.filename());

                            xhr.send(formData);
                        },
                    };

                    tinyMCEHelper.initTinyMCE({
                        selector: this.selector,
                        plugins: 'image media wordcount save fullscreen code table lists link',
                        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor alignleft aligncenter alignright alignjustify | link hr |numlist bullist outdent indent  | removeformat | code | table',
                        image_advtab: true,
                        valid_elements: '*[*]',
                        directionality : "<?php echo e(core()->getCurrentLocale()->direction); ?>",

                        setup: editor => {
                            editor.on('keyup', () => {
                                this.field.onInput(editor.getContent());
                            });
                        },
                    });
                }
            },
        })
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/tinymce/index.blade.php ENDPATH**/ ?>