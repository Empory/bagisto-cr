<div class="tabs">
    <?php if($items = Arr::get($menu->items, implode('.children.', array_slice(explode('.', $menu->currentKey), 0, 2)) . '.children')): ?>
        <div class="flex gap-[15px] mb-[15px] pt-[8px] border-b-[2px] max-sm:hidden dark:border-gray-800">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($item['url']); ?>">
                    <div class="<?php echo e($menu->getActive($item) ? "mb-[-1px] border-blue-600 border-b-[2px] transition" : ''); ?> pb-[14px] px-[10px] text-[16px] font-medium text-gray-600 dark:text-gray-300 cursor-pointer">
                        <?php echo app('translator')->get($item['name']); ?>
                    </div>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div><?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/layouts/tabs.blade.php ENDPATH**/ ?>