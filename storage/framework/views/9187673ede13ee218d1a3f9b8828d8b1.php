<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.layouts.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
     <?php $__env->slot('title', null, []); ?> 
        <?php echo app('translator')->get('admin::app.configuration.index.title'); ?>
     <?php $__env->endSlot(); ?>

    
    <div class="flex justify-between items-center mb-[26px]">
        <p class="text-[20px] text-gray-800 dark:text-white font-bold">
            <?php echo app('translator')->get('admin::app.configuration.index.title'); ?>
        </p>
    </div>

    
    <div class="grid gap-y-[30px]">
        <?php $__currentLoopData = $config->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemKey => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <div class="grid gap-[4px]">
                    
                    <p class="text-gray-600 dark:text-gray-300 font-semibold">
                        <?php echo app('translator')->get($item['name'] ?? ''); ?>
                    </p>

                    
                    <p class="text-gray-600 dark:text-gray-300">
                        <?php echo app('translator')->get($item['info'] ?? ''); ?>
                    </p>
                </div>

                <div class="grid grid-cols-4 gap-[48px] flex-wrap justify-between p-[16px] mt-[8px] bg-white dark:bg-gray-900 rounded-[4px] box-shadow max-1580:grid-cols-3 max-xl:grid-cols-2 max-sm:grid-cols-1">
                    
                    <?php $__currentLoopData = $item['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childKey =>  $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a 
                            class="flex items-center gap-[8px] max-w-[360px] p-[8px] rounded-[8px] transition-all hover:bg-gray-100 dark:hover:bg-gray-950"
                            href="<?php echo e(route('admin.configuration.index', ($itemKey . '/' . $childKey))); ?>"
                        >
                            <?php if(isset($child['icon'])): ?>
                                <img
                                    class="w-[60px] h-[60px] dark:invert dark:mix-blend-exclusion"
                                    src="<?php echo e(bagisto_asset('images/' . $child['icon'] ?? '')); ?>"
                                >
                            <?php endif; ?>

                            <div class="grid">
                                <p class="mb-[5px] text-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo app('translator')->get($child['name']); ?>
                                </p>
                                
                                <p class="text-[12px] text-gray-600 dark:text-gray-300">
                                    <?php echo app('translator')->get($child['info'] ?? ''); ?>
                                </p>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/configuration/index.blade.php ENDPATH**/ ?>