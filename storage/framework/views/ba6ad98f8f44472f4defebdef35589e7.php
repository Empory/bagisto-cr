<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name'             => 'images',
    'allowMultiple'    => false,
    'showPlaceholders' => false,
    'uploadedImages'   => [],
    'width'            => '120px',
    'height'           => '120px'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name'             => 'images',
    'allowMultiple'    => false,
    'showPlaceholders' => false,
    'uploadedImages'   => [],
    'width'            => '120px',
    'height'           => '120px'
]); ?>
<?php foreach (array_filter(([
    'name'             => 'images',
    'allowMultiple'    => false,
    'showPlaceholders' => false,
    'uploadedImages'   => [],
    'width'            => '120px',
    'height'           => '120px'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-media-images
    name="<?php echo e($name); ?>"
    v-bind:allow-multiple="<?php echo e($allowMultiple ? 'true' : 'false'); ?>"
    v-bind:show-placeholders="<?php echo e($showPlaceholders ? 'true' : 'false'); ?>"
    :uploaded-images='<?php echo e(json_encode($uploadedImages)); ?>'
    width="<?php echo e($width); ?>"
    height="<?php echo e($height); ?>"
    :errors="errors"
>
    <?php if (isset($component)) { $__componentOriginal2e576674e3d985561e911b6c77c40893 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e576674e3d985561e911b6c77c40893 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.image.index','data' => ['class' => 'w-[110px] h-[110px] rounded-[4px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[110px] h-[110px] rounded-[4px]']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e576674e3d985561e911b6c77c40893)): ?>
<?php $attributes = $__attributesOriginal2e576674e3d985561e911b6c77c40893; ?>
<?php unset($__attributesOriginal2e576674e3d985561e911b6c77c40893); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e576674e3d985561e911b6c77c40893)): ?>
<?php $component = $__componentOriginal2e576674e3d985561e911b6c77c40893; ?>
<?php unset($__componentOriginal2e576674e3d985561e911b6c77c40893); ?>
<?php endif; ?>
</v-media-images>

<?php if (! $__env->hasRenderedOnce('798cbc4f-672a-4a0b-8862-fe559cd6b2ac')): $__env->markAsRenderedOnce('798cbc4f-672a-4a0b-8862-fe559cd6b2ac');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-media-images-template">
        <!-- Panel Content -->
        <div class="grid">
            <div class="flex flex-wrap gap-[4px]">
                <!-- Upload Image Button -->
                <label
                    class="grid justify-items-center items-center w-full h-[120px] max-w-[120px] min-w-[120px] max-h-[120px] border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] cursor-pointer transition-all hover:border-gray-400 dark:invert dark:mix-blend-exclusion"
                    :style="{'max-width': this.width, 'max-height': this.height}"
                    :for="$.uid + '_imageInput'"
                    v-if="allowMultiple || images.length == 0"
                >
                    <div class="flex flex-col items-center">
                        <span class="icon-image text-[24px]"></span>

                        <p class="grid text-[14px] text-gray-600 dark:text-gray-300 font-semibold text-center">
                            <?php echo app('translator')->get('admin::app.components.media.images.add-image-btn'); ?>
                            
                            <span class="text-[12px]">
                                <?php echo app('translator')->get('admin::app.components.media.images.allowed-types'); ?>
                            </span>
                        </p>

                        <input
                            type="file"
                            class="hidden"
                            :id="$.uid + '_imageInput'"
                            accept="image/*"
                            :multiple="allowMultiple"
                            :ref="$.uid + '_imageInput'"
                            @change="add"
                        />
                    </div>
                </label>


                <!-- Uploaded Images -->
                <draggable
                    class="flex flex-wrap gap-[4px]"
                    ghost-class="draggable-ghost"
                    v-bind="{animation: 200}"
                    :list="images"
                    item-key="id"
                >
                    <template #item="{ element, index }">
                        <v-media-image-item
                            :name="name"
                            :index="index"
                            :image="element"
                            :width="width"
                            :height="height"
                            @onRemove="remove($event)"
                        ></v-media-image-item>
                    </template>
                </draggable>

                <!-- Placeholders -->
                <template v-if="showPlaceholders && ! images.length">
                    <!-- Front Placeholder -->
                    <div
                        class="w-full h-[120px] max-w-[120px] min-w-[120px] max-h-[120px] relative border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] dark:invert dark:mix-blend-exclusion"
                        v-for="placeholder in placeholders"
                    >
                        <img :src="placeholder.image">

                        <p class="w-full absolute bottom-[15px] text-[12px] text-gray-400 text-center font-semibold">
                            {{ placeholder.label }}
                        </p>
                    </div>
                </template>
            </div>
        </div>  
    </script>

    <script type="text/x-template" id="v-media-image-item-template">
        <div class="grid justify-items-center min-w-[120px] max-h-[120px] relative rounded-[4px] overflow-hidden transition-all hover:border-gray-400 group">
            <!-- Image Preview -->
            <img
                :src="image.url"
                class="min-h-[120px]"
                :style="{'width': this.width, 'height': this.height}"
            />

            <div class="flex flex-col justify-between invisible w-full p-[11px] bg-white dark:bg-gray-900 absolute top-0 bottom-0 opacity-80 transition-all group-hover:visible">
                <!-- Image Name -->
                <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold break-all"></p>

                <!-- Actions -->
                <div class="flex justify-between">
                    <span
                        class="icon-delete text-[24px] p-[6px] rounded-[6px] cursor-pointer hover:bg-gray-200 dark:hover:bg-gray-800"
                        @click="remove"
                    ></span>

                    <label
                        class="icon-edit text-[24px] p-[6px] rounded-[6px] cursor-pointer hover:bg-gray-200 dark:hover:bg-gray-800"
                        :for="$.uid + '_imageInput_' + index"
                    ></label>

                    <input type="hidden" :name="name + '[' + image.id + ']'" v-if="! image.is_new"/>

                    <input
                        type="file"
                        :name="name + '[]'"
                        class="hidden"
                        accept="image/*"
                        :id="$.uid + '_imageInput_' + index"
                        :ref="$.uid + '_imageInput_' + index"
                        @change="edit"
                    />
                </div>
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-media-images', {
            template: '#v-media-images-template',

            props: {
                name: {
                    type: String, 
                    default: 'images',
                },

                allowMultiple: {
                    type: Boolean,
                    default: false,
                },

                showPlaceholders: {
                    type: Boolean,
                    default: false,
                },

                uploadedImages: {
                    type: Array,
                    default: () => []
                },

                width: {
                    type: String,
                    default: '120px'
                },

                height: {
                    type: String,
                    default: '120px'
                },

                errors: {
                    type: Object,
                    default: () => {}
                }
            },

            data() {
                return {
                    images: [],

                    placeholders: [
                        {
                            label: "<?php echo app('translator')->get('admin::app.components.media.images.placeholders.front'); ?>",
                            image: "<?php echo e(bagisto_asset('images/product-placeholders/front.svg')); ?>"
                        }, {
                            label: "<?php echo app('translator')->get('admin::app.components.media.images.placeholders.next'); ?>",
                            image: "<?php echo e(bagisto_asset('images/product-placeholders/next-1.svg')); ?>"
                        }, {
                            label: "<?php echo app('translator')->get('admin::app.components.media.images.placeholders.next'); ?>",
                            image: "<?php echo e(bagisto_asset('images/product-placeholders/next-2.svg')); ?>"
                        }, {
                            label: "<?php echo app('translator')->get('admin::app.components.media.images.placeholders.zoom'); ?>",
                            image: "<?php echo e(bagisto_asset('images/product-placeholders/zoom.svg')); ?>"
                        }, {
                            label: "<?php echo app('translator')->get('admin::app.components.media.images.placeholders.use-cases'); ?>",
                            image: "<?php echo e(bagisto_asset('images/product-placeholders/use-cases.svg')); ?>"
                        }, {
                            label: "<?php echo app('translator')->get('admin::app.components.media.images.placeholders.size'); ?>",
                            image: "<?php echo e(bagisto_asset('images/product-placeholders/size.svg')); ?>"
                        }
                    ]
                }
            },

            mounted() {
                this.images = this.uploadedImages;
            },

            methods: {
                add() {
                    let imageInput = this.$refs[this.$.uid + '_imageInput'];

                    if (imageInput.files == undefined) {
                        return;
                    }

                    const validFiles = Array.from(imageInput.files).every(file => file.type.includes('image/'));

                    if (! validFiles) {
                        this.$emitter.emit('add-flash', {
                            type: 'warning',
                            message: "<?php echo app('translator')->get('admin::app.components.media.images.not-allowed-error'); ?>"
                        });

                        return;
                    }

                    imageInput.files.forEach((file, index) => {
                        this.images.push({
                            id: 'image_' + this.images.length,
                            url: '',
                            file: file
                        });
                    });
                },

                remove(image) {
                    let index = this.images.indexOf(image);

                    this.images.splice(index, 1);
                }
            }
        });

        app.component('v-media-image-item', {
            template: '#v-media-image-item-template',

            props: ['index', 'image', 'name', 'width', 'height'],

            mounted() {
                if (this.image.file instanceof File) {
                    this.setFile(this.image.file);

                    this.readFile(this.image.file);
                }
            },

            methods: {
                edit() {
                    let imageInput = this.$refs[this.$.uid + '_imageInput_' + this.index];

                    if (imageInput.files == undefined) {
                        return;
                    }

                    const validFiles = Array.from(imageInput.files).every(file => file.type.includes('image/'));

                    if (! validFiles) {
                        this.$emitter.emit('add-flash', {
                            type: 'warning',
                            message: "<?php echo app('translator')->get('admin::app.components.media.images.not-allowed-error'); ?>"
                        });

                        return;
                    }

                    this.setFile(imageInput.files[0]);

                    this.readFile(imageInput.files[0]);
                },

                remove() {
                    this.$emit('onRemove', this.image)
                },

                setFile(file) {
                    this.image.is_new = 1;

                    const dataTransfer = new DataTransfer();

                    dataTransfer.items.add(file);

                    this.$refs[this.$.uid + '_imageInput_' + this.index].files = dataTransfer.files;
                },

                readFile(file) {
                    let reader = new FileReader();

                    reader.onload = (e) => {
                        this.image.url = e.target.result;
                    }

                    reader.readAsDataURL(file);
                }
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/media/images.blade.php ENDPATH**/ ?>