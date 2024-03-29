<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name'  => '',
    'value' => 1,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name'  => '',
    'value' => 1,
]); ?>
<?php foreach (array_filter(([
    'name'  => '',
    'value' => 1,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-quantity-changer
    <?php echo e($attributes->merge(['class' => 'flex border border-navyBlue items-center'])); ?>

    name="<?php echo e($name); ?>"
    value="<?php echo e($value); ?>"
>
</v-quantity-changer>

<?php if (! $__env->hasRenderedOnce('d0139780-fa1d-4097-9823-f36366e3017a')): $__env->markAsRenderedOnce('d0139780-fa1d-4097-9823-f36366e3017a');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-quantity-changer-template">
        <div>
            <span 
                class="icon-minus text-[24px] cursor-pointer" 
                @click="decrease"
            >
            </span>

            <p
                class="w-[10px] text-center select-none"
                v-text="quantity"
            ></p>
            
            <span 
                class="icon-plus text-[24px] cursor-pointer"
                @click="increase"
            >
            </span>

            <v-field
                type="hidden"
                :name="name"
                v-model="quantity"
            ></v-field>
        </div>
    </script>

    <script type="module">
        app.component("v-quantity-changer", {
            template: '#v-quantity-changer-template',

            props:['name', 'value'],

            data() {
                return  {
                    quantity: this.value,
                }
            },

            watch: {
                value() {
                    this.quantity = this.value;
                },
            },

            methods: {
                increase() {
                    this.$emit('change', ++this.quantity);
                },

                decrease() {
                    if (this.quantity > 1) {
                        this.quantity -= 1;
                    }

                    this.$emit('change', this.quantity);
                },
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Shop\src/resources/views/components/quantity-changer/index.blade.php ENDPATH**/ ?>