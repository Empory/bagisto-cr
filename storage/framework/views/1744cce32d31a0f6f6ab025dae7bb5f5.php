<v-shimmer-image <?php echo e($attributes); ?>>
    <div <?php echo e($attributes->merge(['class' => 'shimmer'])); ?>>
    </div>
</v-shimmer-image>

<?php if (! $__env->hasRenderedOnce('b5babf5d-1119-4293-97f9-4da48dc34037')): $__env->markAsRenderedOnce('b5babf5d-1119-4293-97f9-4da48dc34037');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-shimmer-image-template">
        <div
            :id="'image-shimmer-' + $.uid"
            class="shimmer"
            v-bind="$attrs"
            v-show="isLoading"
        >
        </div>

        <img
            v-bind="$attrs"
            :data-src="src"
            :id="'image-' + $.uid"
            @load="onLoad"
            v-show="! isLoading"
        >
    </script>

    <script type="module">
        app.component('v-shimmer-image', {
            template: '#v-shimmer-image-template',

            props: ['src'],

            data() {
                return {
                    isLoading: true,
                };
            },

            mounted() {
                let self = this;
                
                let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = document.getElementById('image-' + self.$.uid);

                            lazyImage.src = lazyImage.dataset.src;

                            lazyImageObserver.unobserve(lazyImage);
                        }
                    });
                });

                lazyImageObserver.observe(document.getElementById('image-shimmer-' + this.$.uid));
            },
            
            methods: {
                onLoad() {
                    this.isLoading = false;
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Shop\src/resources/views/components/media/images/lazy.blade.php ENDPATH**/ ?>