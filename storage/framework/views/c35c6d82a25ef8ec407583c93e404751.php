<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['controlName' => '']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['controlName' => '']); ?>
<?php foreach (array_filter((['controlName' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(! empty($controlName)): ?>
    <v-error-message
        name="<?php echo e($controlName); ?>"
        <?php echo e($attributes); ?>

        v-slot="{ message }"
    >
        <p
            <?php echo e($attributes->merge(['class' => 'mt-1 text-red-600 text-xs italic'])); ?>

            v-text="message"
        >
        </p>
    </v-error-message>
<?php endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/form/control-group/error.blade.php ENDPATH**/ ?>