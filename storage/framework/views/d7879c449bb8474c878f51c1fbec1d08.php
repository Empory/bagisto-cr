<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'isActive' => true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'isActive' => true,
]); ?>
<?php foreach (array_filter(([
    'isActive' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-accordion
    is-active="<?php echo e($isActive); ?>"
    <?php echo e($attributes); ?>

>
    <?php if (isset($component)) { $__componentOriginald4a2ee3b74458b25b1bb9b9a154dc326 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald4a2ee3b74458b25b1bb9b9a154dc326 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.accordion.index','data' => ['class' => 'w-[360px] h-[271px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.accordion'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-[360px] h-[271px]']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald4a2ee3b74458b25b1bb9b9a154dc326)): ?>
<?php $attributes = $__attributesOriginald4a2ee3b74458b25b1bb9b9a154dc326; ?>
<?php unset($__attributesOriginald4a2ee3b74458b25b1bb9b9a154dc326); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald4a2ee3b74458b25b1bb9b9a154dc326)): ?>
<?php $component = $__componentOriginald4a2ee3b74458b25b1bb9b9a154dc326; ?>
<?php unset($__componentOriginald4a2ee3b74458b25b1bb9b9a154dc326); ?>
<?php endif; ?>

    <?php if(isset($header)): ?>
        <template v-slot:header>
            <?php echo e($header); ?>

        </template>
    <?php endif; ?>

    <?php if(isset($content)): ?>
        <template v-slot:content>
            <div>
                <?php echo e($content); ?>

            </div>
        </template>
    <?php endif; ?>
</v-accordion>

<?php if (! $__env->hasRenderedOnce('57f0011b-7781-4d10-b660-dc319bf18494')): $__env->markAsRenderedOnce('57f0011b-7781-4d10-b660-dc319bf18494');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-accordion-template">
        <div <?php echo e($attributes->merge(['class' => 'bg-white dark:bg-gray-900 rounded-[4px] box-shadow'])); ?>>
            <div :class="`flex items-center justify-between p-[6px] ${isOpen ? 'active' : ''}`">
                <slot name="header">
                    Default Header
                </slot>

                <span 
                    :class="`text-[24px] p-[6px] rounded-[6px] cursor-pointer transition-all hover:bg-gray-100 dark:hover:bg-gray-950 ${isOpen ? 'icon-arrow-up' : 'icon-arrow-down'}`"
                    @click="toggle"
                ></span>
            </div>

            <div class="px-[16px] pb-[16px]" v-if="isOpen">
                <slot name="content">
                    Default Content
                </slot>
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-accordion', {
            template: '#v-accordion-template',

            props: [
                'isActive',
            ],

            data() {
                return {
                    isOpen: this.isActive,
                };
            },

            methods: {
                toggle() {
                    this.isOpen = ! this.isOpen;

                    this.$emit('toggle', { isActive: this.isOpen });
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/accordion/index.blade.php ENDPATH**/ ?>