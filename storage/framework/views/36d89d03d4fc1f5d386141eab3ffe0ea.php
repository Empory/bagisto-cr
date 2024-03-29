<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['isMultiRow' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['isMultiRow' => false]); ?>
<?php foreach (array_filter((['isMultiRow' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if(! $isMultiRow): ?>
    <div class="row grid grid-cols-6 gap-[10px] items-center px-[16px] py-[10px] border-b-[1px] dark:border-gray-800">
        <!-- Mass Actions -->
        <div class="shimmer w-[24px] h-[26px]"></div>

        <div class="shimmer w-[100px] h-[17px]"></div>

        <div class="shimmer w-[100px] h-[17px]"></div>

        <div class="shimmer w-[100px] h-[17px]"></div>

        <div class="shimmer w-[100px] h-[17px]"></div>

        <div class="shimmer w-[100px] h-[17px] col-start-[none]"></div>
    </div>
<?php else: ?>
    <div class="row grid grid-cols-[2fr_1fr_1fr] gap-[10px] items-center px-[16px] py-[10px] border-b-[1px] dark:border-gray-800 tems-center">
        <!-- Mass Actions -->
        <div class="flex gap-[10px] items-center">
            <div class="shimmer w-[24px] h-[24px]"></div>

            <div class="shimmer w-[200px] h-[17px]"></div>
        </div>

        <div class="shimmer w-[200px] h-[17px]"></div>

        <div class="shimmer w-[200px] h-[17px]"></div>
    </div>
<?php endif; ?><?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/shimmer/datagrid/table/head.blade.php ENDPATH**/ ?>