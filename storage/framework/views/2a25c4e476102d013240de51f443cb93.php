<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['position' => 'bottom-right']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['position' => 'bottom-right']); ?>
<?php foreach (array_filter((['position' => 'bottom-right']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-dropdown position="<?php echo e($position); ?>" <?php echo e($attributes->merge(['class' => 'relative'])); ?>>
    <?php if(isset($toggle)): ?>
        <?php echo e($toggle); ?>


        <template v-slot:toggle>
            <?php echo e($toggle); ?>

        </template>
    <?php endif; ?>

    <?php if(isset($content)): ?>
        <template v-slot:content>
            <div <?php echo e($content->attributes->merge(['class' => 'p-[20px]'])); ?>>
                <?php echo e($content); ?>

            </div>
        </template>
    <?php endif; ?>

    <?php if(isset($menu)): ?>
        <template v-slot:menu>
            <ul <?php echo e($menu->attributes->merge(['class' => 'py-[15px]'])); ?>>
                <?php echo e($menu); ?>

            </ul>
        </template>
    <?php endif; ?>
</v-dropdown>

<?php if (! $__env->hasRenderedOnce('19e1f2d6-2c72-4062-827a-c9e964682321')): $__env->markAsRenderedOnce('19e1f2d6-2c72-4062-827a-c9e964682321');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-dropdown-template">
        <div>
            <div
                class="select-none"
                ref="toggleBlock"
                @click="toggle()"
            >
                <slot name="toggle">Toggle</slot>
            </div>

            <transition
                tag="div"
                name="dropdown"
                enter-active-class="transition ease-out duration-100"
                enter-from-class="transform opacity-0 scale-95"
                enter-to-class="transform opacity-100 scale-100"
                leave-active-class="transition ease-in duration-75"
                leave-from-class="transform opacity-100 scale-100"
                leave-to-class="transform opacity-0 scale-95"
            >
                <div
                    class="absolute w-max z-10 overflow-hidden bg-white shadow-[0px_10px_84px_rgba(0,0,0,0.1)] rounded-[20px]"
                    :style="positionStyles"
                    v-show="isActive"
                >
                    <slot name="content"></slot>

                    <slot name="menu"></slot>
                </div>
            </transition>
        </div>
    </script>

    <script type="module">
        app.component('v-dropdown', {
            template: '#v-dropdown-template',

            props: {
                position: String,

                closeOnClick: {
                    type: Boolean,
                    required: false,
                    default: true
                },
            },

            data() {
                return {
                    toggleBlockWidth: 0,

                    toggleBlockHeight: 0,

                    isActive: false,
                };
            },

            created() {
                window.addEventListener('click', this.handleFocusOut);
            },

            mounted() {
                this.toggleBlockWidth = this.$refs.toggleBlock.clientWidth;

                this.toggleBlockHeight = this.$refs.toggleBlock.clientHeight;
            },

            beforeDestroy() {
                window.removeEventListener('click', this.handleFocusOut);
            },

            computed: {
                positionStyles() {
                    switch (this.position) {
                        case 'bottom-left':
                            return [
                                `min-width: ${this.toggleBlockWidth}px`,
                                `top: ${this.toggleBlockHeight}px`,
                                'left: 0',
                            ];

                        case 'bottom-right':
                            return [
                                `min-width: ${this.toggleBlockWidth}px`,
                                `top: ${this.toggleBlockHeight}px`,
                                'right: 0',
                            ];

                        case 'top-left':
                            return [
                                `min-width: ${this.toggleBlockWidth}px`,
                                `bottom: ${this.toggleBlockHeight}px`,
                                'left: 0',
                            ];

                        case 'top-right':
                            return [
                                `min-width: ${this.toggleBlockWidth}px`,
                                `bottom: ${this.toggleBlockHeight}px`,
                                'right: 0',
                            ];

                        default:
                            return [
                                `min-width: ${this.toggleBlockWidth}px`,
                                `top: ${this.toggleBlockHeight}px`,
                                'left: 0',
                            ];
                    }
                },
            },

            methods: {
                toggle() {
                    /**
                     * If still somehow width is zero then this will check for width one more time.
                     */
                    if (this.toggleBlockWidth === 0) {
                        this.toggleBlockWidth = this.$refs.toggleBlock.clientWidth;
                    }

                    /**
                     * If still somehow height is zero then this will check for height one more time.
                     */
                    if (this.toggleBlockHeight === 0) {
                        this.toggleBlockHeight = this.$refs.toggleBlock.clientHeight;
                    }

                    this.isActive = ! this.isActive;
                },

                handleFocusOut(e) {
                    if (! this.$el.contains(e.target) || (this.closeOnClick && this.$el.children[1].contains(e.target))) {
                        this.isActive = false;
                    }
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Shop\src/resources/views/components/dropdown/index.blade.php ENDPATH**/ ?>