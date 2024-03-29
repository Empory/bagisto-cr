<v-seo-helper></v-seo-helper>

<?php if (! $__env->hasRenderedOnce('20fe84d7-801d-4e10-badf-42be90c701a8')): $__env->markAsRenderedOnce('20fe84d7-801d-4e10-badf-42be90c701a8');
$__env->startPush('scripts'); ?>
    
    <script type="text/x-template" id="v-seo-helper-template">
        <div class="flex flex-col gap-[3px] mb-[30px]">
            <p 
                class="text-[#161B9D] dark:text-white"
                v-text="metaTitle"
            >
            </p>

            <!-- SEO Meta Title -->
            <p 
                class="text-[#135F29]"
                v-text="'<?php echo e(URL::to('/')); ?>/' + (metaTitle ? metaTitle.toLowerCase().replace(/\s+/g, '-') : '')"
            >
            </p>

            <!-- SEP Meta Description -->
            <p 
                class="text-gray-600 dark:text-gray-300"
                v-text="metaDescription"
            >
            </p>
        </div>
    </script>

    <script type="module">
        app.component('v-seo-helper', {
            template: '#v-seo-helper-template',

            data() {
                return {
                    metaTitle: this.$parent.getValues()['meta_title'],

                    metaDescription: this.$parent.getValues()['meta_description'],
                }
            },

            mounted() {
                let self = this;

                self.metaTitle = document.getElementById('meta_title').value;

                self.metaDescription = document.getElementById('meta_description').value;

                document.getElementById('meta_title').addEventListener('input', function(e) {
                    self.metaTitle = e.target.value;
                });

                document.getElementById('meta_description').addEventListener('input', function(e) {
                    self.metaDescription = e.target.value;
                });
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/seo/index.blade.php ENDPATH**/ ?>