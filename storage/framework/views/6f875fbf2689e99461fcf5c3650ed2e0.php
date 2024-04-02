<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'inputType' => 'checkbox'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'inputType' => 'checkbox'
]); ?>
<?php foreach (array_filter(([
    'inputType' => 'checkbox'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-tree-view 
    <?php echo e($attributes->except('input-type')); ?>

    input-type="<?php echo e($inputType); ?>"
>
    <?php if (isset($component)) { $__componentOriginalb4beef7df1b15d9a4369797cc87e2364 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb4beef7df1b15d9a4369797cc87e2364 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.tree.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.tree'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb4beef7df1b15d9a4369797cc87e2364)): ?>
<?php $attributes = $__attributesOriginalb4beef7df1b15d9a4369797cc87e2364; ?>
<?php unset($__attributesOriginalb4beef7df1b15d9a4369797cc87e2364); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb4beef7df1b15d9a4369797cc87e2364)): ?>
<?php $component = $__componentOriginalb4beef7df1b15d9a4369797cc87e2364; ?>
<?php unset($__componentOriginalb4beef7df1b15d9a4369797cc87e2364); ?>
<?php endif; ?>
</v-tree-view>

<?php if (! $__env->hasRenderedOnce('5e58cfc9-2dd3-4c8e-a99d-b8ea01d5ae74')): $__env->markAsRenderedOnce('5e58cfc9-2dd3-4c8e-a99d-b8ea01d5ae74');
$__env->startPush('scripts'); ?>
    
    <script type="module">
        app.component('v-tree-view',{
            name: 'v-tree-view',

            inheritAttrs: false,

            props: {
                inputType: {
                    type: String,
                    required: false,
                    default: 'checkbox'
                },

                nameField: {
                    type: String,
                    required: false,
                    default: 'permissions'
                },

                idField: {
                    type: String,
                    required: false,
                    default: 'id'
                },

                valueField: {
                    type: String,
                    required: false,
                    default: 'value'
                },

                captionField: {
                    type: String,
                    required: false,
                    default: 'name'
                },

                childrenField: {
                    type: String,
                    required: false,
                    default: 'children'
                },

                items: {
                    type: [Array, String, Object],
                    required: false,
                    default: () => ([])
                },

                behavior: {
                    type: String,
                    required: false,
                    default: 'reactive'
                },

                value: {
                    type: [Array, String, Object],
                    required: false,
                    default: () => ([])
                },

                fallbackLocale: {
                    type: String,
                    required: false
                },
            },

            data() {
                return {
                    finalValues: []
                }
            },

            computed: {
                savedValues () {
                    if(! this.value)
                        return [];

                    if(this.inputType == 'radio')
                        return [this.value];

                    return (typeof this.value == 'string') ? JSON.parse(this.value) : this.value;
                }
            },


            methods: {
                generateChildren () {
                    let childElements = [];

                    let items = (typeof this.items == 'string') ? JSON.parse(this.items) : this.items;

                    for (let key in items) {
                        childElements.push(this.generateTreeItem(items[key]));
                    }

                    return childElements;
                },

                generateTreeItem(item) {
                    return this.$h(this.$resolveComponent('v-tree-item'), {
                            items: item,
                            value: this.finalValues,
                            savedValues: this.savedValues,
                            nameField: this.nameField,
                            inputType: this.inputType,
                            captionField: this.captionField,
                            childrenField: this.childrenField,
                            valueField: this.valueField,
                            idField: this.idField,
                            behavior: this.behavior,
                            fallbackLocale: this.fallbackLocale,
                            onInputChange: (selection) => {
                                this.finalValues = selection;
                            },
                        })
                }
            },

            render () {
                return this.$h('div', {
                        class: [
                            'v-tree-container group',
                        ]
                    }, [this.generateChildren()]
                )
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?>


<?php if (isset($component)) { $__componentOriginal17b86099dc90d8ad5741e210241e1712 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal17b86099dc90d8ad5741e210241e1712 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.tree.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::tree.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal17b86099dc90d8ad5741e210241e1712)): ?>
<?php $attributes = $__attributesOriginal17b86099dc90d8ad5741e210241e1712; ?>
<?php unset($__attributesOriginal17b86099dc90d8ad5741e210241e1712); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal17b86099dc90d8ad5741e210241e1712)): ?>
<?php $component = $__componentOriginal17b86099dc90d8ad5741e210241e1712; ?>
<?php unset($__componentOriginal17b86099dc90d8ad5741e210241e1712); ?>
<?php endif; ?>

<?php if($inputType == 'checkbox'): ?>
    
    <?php if (isset($component)) { $__componentOriginalf5b82b1becb94d97b95cfacf5bc1ddd5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5b82b1becb94d97b95cfacf5bc1ddd5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.tree.checkbox','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::tree.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5b82b1becb94d97b95cfacf5bc1ddd5)): ?>
<?php $attributes = $__attributesOriginalf5b82b1becb94d97b95cfacf5bc1ddd5; ?>
<?php unset($__attributesOriginalf5b82b1becb94d97b95cfacf5bc1ddd5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5b82b1becb94d97b95cfacf5bc1ddd5)): ?>
<?php $component = $__componentOriginalf5b82b1becb94d97b95cfacf5bc1ddd5; ?>
<?php unset($__componentOriginalf5b82b1becb94d97b95cfacf5bc1ddd5); ?>
<?php endif; ?>
<?php else: ?> 
    
    <?php if (isset($component)) { $__componentOriginal007310bd60a01898981697bd0840b9f4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal007310bd60a01898981697bd0840b9f4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.tree.radio','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::tree.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal007310bd60a01898981697bd0840b9f4)): ?>
<?php $attributes = $__attributesOriginal007310bd60a01898981697bd0840b9f4; ?>
<?php unset($__attributesOriginal007310bd60a01898981697bd0840b9f4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal007310bd60a01898981697bd0840b9f4)): ?>
<?php $component = $__componentOriginal007310bd60a01898981697bd0840b9f4; ?>
<?php unset($__componentOriginal007310bd60a01898981697bd0840b9f4); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/tree/view.blade.php ENDPATH**/ ?>