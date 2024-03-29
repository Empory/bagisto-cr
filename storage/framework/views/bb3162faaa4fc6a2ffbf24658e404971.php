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

<?php for($i = 0;  $i < 10; $i++): ?>
    <?php if(! $isMultiRow): ?>
        <div class="row grid grid-cols-6 gap-[10px] px-[16px] py-[16px] border-b-[1px] dark:border-gray-800 text-gray-600 dark:text-gray-300">
            <div class="shimmer w-[24px] h-[24px] mb-[2px]"></div>

            <div class="shimmer w-[100px] h-[17px]"></div>
            
            <div class="shimmer w-[100px] h-[17px]"></div>
            
            <div class="shimmer w-[100px] h-[17px]"></div>
            
            <div class="shimmer w-[100px] h-[17px]"></div>
            
            <div class="flex gap-[10px] col-start-[none]">
                <div class="shimmer w-[24px] h-[24px] p-[6px]"></div>
                <div class="shimmer w-[24px] h-[24px] p-[6px]"></div>
            </div>
        </div>
    <?php else: ?>
        <div class="row grid grid-cols-[2fr_1fr_1fr] gap-[10px] px-[16px] py-[10px] border-b-[1px] dark:border-gray-800 text-gray-600 dark:text-gray-300">
            <div class="flex gap-[10px]">
                <div class="shimmer w-[24px] h-[24px]"></div>

                <div class="flex flex-col gap-[6px]">
                    <div class="shimmer w-[250px] h-[19px]"></div>
                    
                    <div class="shimmer w-[150px] h-[17px]"></div>
                    
                    <div class="shimmer w-[150px] h-[17px]"></div>
                </div>
            </div>

            <div class="flex gap-[6px] flex-col">
                <div class="shimmer w-[250px] h-[19px]"></div>
                
                <div class="shimmer w-[150px] h-[17px]"></div>
                
                <div class="shimmer w-[150px] h-[17px]"></div>
            </div>

            <div class="flex gap-[6px] flex-col">
                <div class="shimmer w-[250px] h-[19px]"></div>
                
                <div class="shimmer w-[150px] h-[17px]"></div>
                
                <div class="shimmer w-[150px] h-[17px]"></div>
            </div>
        </div>
    <?php endif; ?>
<?php endfor; ?><?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/shimmer/datagrid/table/body.blade.php ENDPATH**/ ?>