<?php
    $admin = auth()->guard('admin')->user();
?>

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
        <?php echo app('translator')->get('admin::app.dashboard.index.title'); ?>
     <?php $__env->endSlot(); ?>

    
    <div class="flex gap-[16px] justify-between items-center mb-[20px] max-sm:flex-wrap">
        <div class="grid gap-[6px]">
            <p class="pt-[6px] text-[20px] text-gray-800 dark:text-white font-bold leading-[24px]">
                <?php echo app('translator')->get('admin::app.dashboard.index.user-name', ['user_name' => $admin->name]); ?>
            </p>

            <p class="text-gray-600 dark:text-gray-300">
                <?php echo app('translator')->get('admin::app.dashboard.index.user-info'); ?>
            </p>
        </div>
    </div>

    
    <div class="flex gap-[10px] mt-[14px] max-xl:flex-wrap">
        
        <div class=" flex flex-col gap-[30px] flex-1 max-xl:flex-auto">
            
            <div class="flex flex-col gap-[8px]   ">
                <p class="text-[16px] text-gray-600 dark:text-gray-300 font-semibold">
                    <?php echo app('translator')->get('admin::app.dashboard.index.overall-details'); ?>
                </p>

                <div class="p-[16px] rounded-[4px] bg-white dark:bg-gray-900 box-shadow">
                    <div class="flex gap-[16px] flex-wrap ">
                        
                        <div class="flex gap-[10px] flex-1 min-w-[200px]">
                            <div class="w-full h-[60px] max-w-[60px] max-h-[60px] dark:invert dark:mix-blend-exclusion">
                                <img
                                    src="<?php echo e(bagisto_asset('images/total-sales.svg')); ?>"
                                    title="<?php echo app('translator')->get('admin::app.dashboard.index.total-sales'); ?>"
                                >
                            </div>

                            
                            <div class="grid gap-[4px] place-content-start">
                                <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo e(core()->formatBasePrice($statistics['over_all']['total_sales']['current'])); ?>

                                </p>

                                <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                    <?php echo app('translator')->get('admin::app.dashboard.index.total-sales'); ?>
                                </p>

                                
                                <div class="flex gap-[2px] items-center">
                                    <?php if($statistics['over_all']['total_sales']['progress'] < 0): ?>
                                        <span class="icon-down-stat text-[16px] text-red-500"></span>

                                        <p class="text-[12px] text-red-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.decreased', [
                                                'progress' => -number_format($statistics['over_all']['total_sales']['progress'], 1),
                                            ]); ?>
                                        </p>
                                    <?php else: ?>
                                        <span class="icon-up-stat text-[16px] text-emerald-500"></span>

                                        <p class="text-[12px] text-emerald-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.increased', [
                                                'progress' => number_format($statistics['over_all']['total_sales']['progress'], 1),
                                            ]); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        
                        <div class="flex gap-[10px] flex-1 min-w-[200px]">
                            <div class="w-full h-[60px] max-w-[60px] max-h-[60px] dark:invert dark:mix-blend-exclusion">
                                <img
                                    src="<?php echo e(bagisto_asset('images/total-orders.svg')); ?>"
                                    title="<?php echo app('translator')->get('admin::app.dashboard.index.total-orders'); ?>"
                                >
                            </div>

                            
                            <div class="grid gap-[4px] place-content-start">
                                <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo e($statistics['over_all']['total_orders']['current']); ?>

                                </p>

                                <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                    <?php echo app('translator')->get('admin::app.dashboard.index.total-orders'); ?>
                                </p>

                                
                                <div class="flex gap-[2px] items-center">
                                    <?php if($statistics['over_all']['total_orders']['progress'] < 0): ?>
                                        <span class="icon-down-stat text-[16px] text-red-500"></span>

                                        <p class="text-[12px] text-red-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.decreased', [
                                                'progress' => -number_format($statistics['over_all']['total_orders']['progress'], 1),
                                            ]); ?>
                                        </p>
                                    <?php else: ?>
                                        <span class="icon-up-stat text-[16px] text-emerald-500"></span>

                                        <p class="text-[12px] text-emerald-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.increased', [
                                                'progress' => number_format($statistics['over_all']['total_orders']['progress'], 1),
                                            ]); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        
                        <div class="flex gap-[10px] flex-1 min-w-[200px]">
                            <div class="w-full h-[60px] max-w-[60px] max-h-[60px] dark:invert dark:mix-blend-exclusion">
                                <img
                                    src="<?php echo e(bagisto_asset('images/customers.svg')); ?>"
                                    title="<?php echo app('translator')->get('admin::app.dashboard.index.total-customers'); ?>"
                                >
                            </div>

                            
                            <div class="grid gap-[4px] place-content-start">
                                <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo e($statistics['over_all']['total_customers']['current']); ?>

                                </p>

                                <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                    <?php echo app('translator')->get('admin::app.dashboard.index.total-customers'); ?>
                                </p>

                                
                                <div class="flex gap-[2px] items-center">
                                    <?php if($statistics['over_all']['total_customers']['progress'] < 0): ?>
                                        <span class="icon-down-stat text-[16px] text-red-500"></span>

                                        <p class="text-[12px] text-red-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.decreased', [
                                                    'progress' => -number_format($statistics['over_all']['total_customers']['progress'], 1)
                                            ]); ?>
                                        </p>
                                    <?php else: ?>
                                        <span class="icon-up-stat text-[16px] text-emerald-500"></span>

                                        <p class="text-[12px] text-emerald-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.increased', [
                                                'progress' => number_format($statistics['over_all']['total_customers']['progress'], 1)
                                            ]); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        
                        <div class="flex gap-[10px] flex-1 min-w-[200px]">
                            <div class="w-full h-[60px] max-w-[60px] max-h-[60px] dark:invert dark:mix-blend-exclusion">
                                <img
                                    src="<?php echo e(bagisto_asset('images/average-orders.svg')); ?>"
                                    title="<?php echo app('translator')->get('admin::app.dashboard.index.average-sale'); ?>"
                                >
                            </div>

                            
                            <div class="grid gap-[4px] place-content-start">
                                <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo e(core()->formatBasePrice($statistics['over_all']['avg_sales']['current'])); ?>

                                </p>

                                <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                    <?php echo app('translator')->get('admin::app.dashboard.index.average-sale'); ?>
                                </p>

                                
                                <div class="flex gap-[2px] items-center">
                                    <?php if($statistics['over_all']['avg_sales']['progress'] < 0): ?>
                                        <span class="icon-down-stat text-[16px] text-red-500"></span>

                                        <p class="text-[12px] text-red-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.decreased', [
                                                'progress' => -number_format($statistics['over_all']['avg_sales']['progress'], 1),
                                            ]); ?>
                                        </p>
                                    <?php else: ?>
                                        <span class="icon-up-stat text-[16px] text-emerald-500"></span>
                                        <p class="text-[12px] text-emerald-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.increased', [
                                                'progress' => number_format($statistics['over_all']['avg_sales']['progress'], 1),
                                            ]); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        
                        <div class="flex gap-[10px] flex-1 min-w-[200px]">
                            <div class="w-full h-[60px] max-w-[60px] max-h-[60px] dark:invert dark:mix-blend-exclusion">
                                <img
                                    src="<?php echo e(bagisto_asset('images/unpaid-invoices.svg')); ?>"
                                    title="<?php echo app('translator')->get('admin::app.dashboard.index.total-unpaid-invoices'); ?>"
                                >
                            </div>

                            <div class="grid gap-[4px] place-content-start">
                                <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo e(core()->formatBasePrice($statistics['over_all']['total_unpaid_invoices'])); ?>

                                </p>

                                <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                    <?php echo app('translator')->get('admin::app.dashboard.index.total-unpaid-invoices'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="flex flex-col gap-[8px]  ">
                <p class="text-[16px] text-gray-600 dark:text-gray-300 font-semibold">
                    <?php echo app('translator')->get('admin::app.dashboard.index.today-details'); ?>
                </p>

                <div class="rounded-[4px] box-shadow">
                    <div class="flex gap-[16px] flex-wrap p-[16px] bg-white dark:bg-gray-900 border-b-[1px] dark:border-gray-800">
                        
                        <div class="flex gap-[10px] flex-1">
                            <img
                                class="w-full h-[60px] max-w-[60px] max-h-[60px] dark:invert dark:mix-blend-exclusion"
                                src="<?php echo e(bagisto_asset('images/total-sales.svg')); ?>"
                                title="<?php echo app('translator')->get('admin::app.dashboard.index.today-sales'); ?>"
                            >

                            
                            <div class="grid gap-[4px] place-content-start">
                                <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo e(core()->formatBasePrice($statistics['today']['total_sales']['current'])); ?>

                                </p>

                                <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                    <?php echo app('translator')->get('admin::app.dashboard.index.today-sales'); ?>
                                </p>

                                
                                <div class="flex gap-[2px] items-center">
                                    <?php if($statistics['today']['total_sales']['progress'] < 0): ?>
                                        <span class="icon-down-stat text-[16px] text-red-500"></span>

                                        <p class="text-[12px] text-red-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.decreased', [
                                                'progress' => -number_format($statistics['today']['total_sales']['progress'], 1),
                                            ]); ?>
                                        </p>
                                    <?php else: ?>
                                        <span class="icon-up-stat text-[16px] text-emerald-500"></span>

                                        <p class="text-[12px] text-emerald-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.increased', [
                                                'progress' => number_format($statistics['today']['total_sales']['progress'], 1),
                                            ]); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        
                        <div class="flex gap-[10px] flex-1">
                            <img
                                class="w-full h-[60px] max-w-[60px] max-h-[60px] dark:invert dark:mix-blend-exclusion"
                                src="<?php echo e(bagisto_asset('images/total-orders.svg')); ?>"
                                title="<?php echo app('translator')->get('admin::app.dashboard.index.today-orders'); ?>"
                            >

                            
                            <div class="grid gap-[4px] place-content-start">
                                <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo e($statistics['today']['total_orders']['current']); ?>

                                </p>

                                <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                    <?php echo app('translator')->get('admin::app.dashboard.index.today-orders'); ?>
                                </p>

                                
                                <div class="flex gap-[2px] items-center">
                                    <?php if($statistics['today']['total_orders']['progress'] < 0): ?>
                                        <span class="icon-down-stat text-[16px] text-red-500"></span>

                                        <p class="text-[12px] text-red-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.decreased', [
                                                'progress' => -number_format($statistics['today']['total_orders']['progress'], 1),
                                            ]); ?>
                                        </p>
                                    <?php else: ?>
                                        <span class="icon-up-stat text-[16px] text-emerald-500"></span>

                                        <p class="text-[12px] text-emerald-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.increased', [
                                                'progress' => number_format($statistics['today']['total_orders']['progress'], 1),
                                            ]); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        
                        <div class="flex gap-[10px] flex-1">
                            <img
                                class="w-full h-[60px] max-w-[60px] max-h-[60px] dark:invert dark:mix-blend-exclusion"
                                src="<?php echo e(bagisto_asset('images/customers.svg')); ?>"
                                title="<?php echo app('translator')->get('admin::app.dashboard.index.today-customers'); ?>"
                            >

                            
                            <div class="grid gap-[4px] place-content-start">
                                <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo e($statistics['today']['total_customers']['current']); ?>

                                </p>

                                <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                    <?php echo app('translator')->get('admin::app.dashboard.index.today-customers'); ?>
                                </p>

                                
                                <div class="flex gap-[2px] items-center">
                                    <?php if($statistics['today']['total_customers']['progress'] < 0): ?>
                                        <span class="icon-down-stat text-[16px] text-red-500"></span>

                                        <p class="text-[12px] text-red-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.decreased', [
                                                'progress' => -number_format($statistics['today']['total_customers']['progress'], 1),
                                            ]); ?>
                                        </p>
                                    <?php else: ?>
                                        <span class="icon-up-stat text-[16px] text-emerald-500"></span>

                                        <p class="text-[12px] text-emerald-500 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.increased', [
                                                'progress' => number_format($statistics['today']['total_customers']['progress'], 1),
                                            ]); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Today Orders Details -->
                    <?php $__currentLoopData = $statistics['today']['orders']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row grid grid-cols-4 gap-y-[24px] p-[16px] bg-white dark:bg-gray-900 border-b-[1px] dark:border-gray-800 transition-all hover:bg-gray-50 dark:hover:bg-gray-950 max-1580:grid-cols-3 max-sm:grid-cols-1">
                            
                            <div class="flex gap-[10px]">
                                <div class="flex flex-col gap-[6px]">
                                    
                                    <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                        <?php echo app('translator')->get('admin::app.dashboard.index.order-id', ['id' => $item->id]); ?>
                                    </p>

                                    <p class="text-gray-600 dark:text-gray-300">
                                        <?php echo e($item->created_at); ?>

                                    </p>

                                    
                                    <?php switch($item->status):
                                        case ('processing'): ?>
                                            <p class="label-active">
                                                <?php echo e($item->status_label); ?>

                                            </p>
                                            <?php break; ?>

                                        <?php case ('completed'): ?>
                                            <p class="label-active">
                                                <?php echo e($item->status_label); ?>

                                            </p>
                                            <?php break; ?>

                                        <?php case ('pending'): ?>
                                            <p class="label-pending">
                                                <?php echo e($item->status_label); ?>

                                            </p>
                                            <?php break; ?>

                                        <?php case ('canceled'): ?>
                                            <p class="label-cancelled">
                                                <?php echo e($item->status_label); ?>

                                            </p>
                                            <?php break; ?>

                                        <?php case ('closed'): ?>
                                            <p class="label-closed">
                                                <?php echo e($item->status_label); ?>

                                            </p>
                                            <?php break; ?>

                                    <?php endswitch; ?>
                                </div>
                            </div>
        
                            
                            <div class="flex flex-col gap-[6px]">
                                
                                <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                    <?php echo e(core()->formatBasePrice($item->grand_total)); ?>

                                </p>

                                
                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo app('translator')->get('admin::app.dashboard.index.pay-by', ['method' => core()->getConfigData('sales.payment_methods.' . $item->payment->method . '.title')]); ?>
                                </p>

                                
                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo e($item->channel_name); ?>

                                </p>
                            </div>

                            <div class="flex flex-col gap-[6px]">
                                
                                <p class="text-[16px] text-gray-800 dark:text-white">
                                    <?php echo e($item->customer_first_name); ?> <?php echo e($item->customer_last_name); ?>

                                </p>

                                <p class="text-gray-600 dark:text-gray-300">
                                    <?php echo e($item->customer_email); ?>

                                </p>

                                
                                <?php $__currentLoopData = $item->addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($address->address_type == 'order_billing'): ?>
                                        <p class="text-gray-600 dark:text-gray-300">
                                            <?php echo e($address->city . ($address->country ? ', ' . core()->country_name($address->country) : '')); ?>

                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            
                            <div class="max-1580:col-span-full">
                                <div class="flex gap-[6px] items-center justify-between">
                                    <div class="flex gap-[6px] items-center flex-wrap">
                                        
                                        <?php $__currentLoopData = $item->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $orderItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <?php if($index >= 3 && $item->items->count() >= 5): ?>
                                                <?php break; ?>;
                                            <?php endif; ?>

                                            <div class="relative">
                                                <?php if($orderItem->product?->base_image_url): ?>
                                                    <img
                                                        class="min-h-[65px] min-w-[65px] max-h-[65px] max-w-[65px] rounded-[4px]"
                                                        src="<?php echo e($orderItem->product->base_image_url); ?>"
                                                    />
                                                <?php else: ?>
                                                    <div class="w-full h-[65px] max-w-[65px] max-h-[65px] relative border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] overflow-hidden dark:invert dark:mix-blend-exclusion">
                                                        <img src="<?php echo e(bagisto_asset('images/product-placeholders/front.svg')); ?>">

                                                        <p class="w-full absolute bottom-[5px] text-[6px] text-gray-400 text-center font-semibold">
                                                            <?php echo app('translator')->get('admin::app.dashboard.index.product-image'); ?>
                                                        </p>
                                                    </div>
                                                <?php endif; ?>


                                                <span class="absolute bottom-[1px] ltr:left-[1px] rtl:right-[1px] text-[12px] font-bold text-white bg-darkPink rounded-full px-[6px]">
                                                    <?php echo e($orderItem->product?->images->count()); ?>

                                                </span>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        
                                        <?php if(
                                            $item->items->count() - 3 
                                            && $item->items->count() > 4
                                        ): ?>
                                            <a href="<?php echo e(route('admin.sales.orders.view', $item->id)); ?>">
                                                <div class="flex items-center w-[65px] h-[65px] bg-gray-50 dark:bg-gray-800 rounded-[4px]">
                                                    <p class="text-[12px] text-gray-600 dark:text-gray-300 text-center font-bold px-[6px] py-[6px]">
                                                        <?php echo app('translator')->get('admin::app.dashboard.index.more-products', ['product_count' => $item->items->count() - 3 ]); ?>
                                                    </p>
                                                </div>
                                            </a>
                                        <?php endif; ?>
                                    </div>

                                    
                                    <a href="<?php echo e(route('admin.sales.orders.view', $item->id)); ?>">
                                        <span class="icon-sort-right text-[24px] ltr:ml-[4px] rtl:mr-[4px] p-[6px] cursor-pointer hover:bg-gray-200 dark:hover:bg-gray-800 hover:rounded-[6px]"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            
            <div class="flex flex-col gap-[8px]  ">
                <p class="text-[16px] text-gray-600 dark:text-gray-300 font-semibold">
                    <?php echo app('translator')->get('admin::app.dashboard.index.stock-threshold'); ?>
                </p>

                
                <?php if(! $statistics['stock_threshold']->isEmpty()): ?>
                    <div class="rounded-[4px] box-shadow">
                        <?php $__currentLoopData = $statistics['stock_threshold']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Single Product -->
                            <div class="relative">
                                <div class="row grid grid-cols-2 gap-y-[24px] p-[16px] bg-white dark:bg-gray-900 border-b-[1px] dark:border-gray-800 transition-all hover:bg-gray-50 dark:hover:bg-gray-950 max-sm:grid-cols-[1fr_auto]">
                                    <div class="flex gap-[10px]">
                                        <?php if($item->product?->base_image_url): ?>
                                            <div class="">
                                                <img
                                                    class="min-h-[65px] min-w-[65px] max-h-[65px] max-w-[65px] rounded-[4px]"
                                                    src="<?php echo e($item->product->base_image_url); ?>"
                                                >
                                            </div>
                                        <?php else: ?>
                                            <div class="w-full h-[65px] max-w-[65px] max-h-[65px] relative border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] overflow-hidden dark:invert dark:mix-blend-exclusion">
                                                <img src="<?php echo e(bagisto_asset('images/product-placeholders/front.svg')); ?>">

                                                <p class="w-full absolute bottom-[5px] text-[6px] text-gray-400 text-center font-semibold">
                                                    <?php echo app('translator')->get('admin::app.dashboard.index.product-image'); ?>
                                                </p>
                                            </div>
                                        <?php endif; ?>

                                        <div class="flex flex-col gap-[6px]">
                                            
                                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                                <?php if(isset($item->product->name)): ?>
                                                    <?php echo e($item->product->name); ?>

                                                <?php endif; ?>
                                            </p>

                                            
                                            <p class="text-gray-600 dark:text-gray-300">
                                                <?php echo app('translator')->get('admin::app.dashboard.index.sku', ['sku' => $item->product->sku]); ?>
                                            </p>

                                            
                                            <p class="text-gray-600 dark:text-gray-300">
                                                <?php if(
                                                    isset($item->product->product_number)
                                                    && ! empty($item->product->product_number)
                                                ): ?>
                                                    <?php echo app('translator')->get('admin::app.dashboard.index.product-number', ['product_number' => $item->product->product_number]); ?>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex gap-[6px] items-center justify-between">
                                        <div class="flex flex-col gap-[6px]">
                                            
                                            <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                                                <?php if(isset($item->product->price)): ?>
                                                    <?php echo e(core()->formatBasePrice($item->product->price)); ?>

                                                <?php endif; ?>
                                            </p>

                                            
                                            <p class="<?php echo e($item->total_qty > 10 ? 'text-emerald-500' : 'text-red-500'); ?> ">
                                                <?php echo app('translator')->get('admin::app.dashboard.index.total-stock', ['total_stock' => $item->total_qty]); ?>
                                            </p>
                                        </div>

                                        
                                        <a href="<?php echo e(route('admin.catalog.products.edit', $item->product_id)); ?>">
                                            <span class="icon-sort-right text-[24px] ltr:ml-[4px] rtl:mr-[4px] p-[6px] cursor-pointer hover:bg-gray-200 dark:hover:bg-gray-800 hover:rounded-[6px]"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                <?php else: ?>
                    <div class="rounded-[4px] box-shadow">
                        <div class="grid gap-[14px] justify-center justify-items-center py-[40px] px-[10px] ">
                            <img src="<?php echo e(bagisto_asset('images/icon-add-product.svg')); ?>" class="w-[80px] h-[80px] dark:invert dark:mix-blend-exclusion">
                            <div class="flex flex-col items-center">
                                <p class="text-[16px] text-gray-400 font-semibold">
                                    <?php echo app('translator')->get('admin::app.dashboard.index.empty-threshold'); ?>
                                </p>
            
                                <p class="text-gray-400">
                                    <?php echo app('translator')->get('admin::app.dashboard.index.empty-threshold-description'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>    
            </div>
        </div>

        
        <div class="flex flex-col gap-[8px] w-[360px] max-w-full   max-sm:w-full">
            
            <p class="text-[16px] text-gray-600 dark:text-gray-300 font-semibold">
                <?php echo app('translator')->get('admin::app.dashboard.index.store-stats'); ?>
            </p>

            
            <v-store-stats>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.dashboard.right.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.dashboard.right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            </v-store-stats>
        </div>
    </div>
    
    <?php $__env->startPush('scripts'); ?>
        <script type="module" src="<?php echo e(bagisto_asset('js/chart.js')); ?>"></script>

        <script type="text/x-template" id="v-store-stats-template">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.index','data' => ['action' => route('admin.catalog.categories.store')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.catalog.categories.store'))]); ?>
                <div class="rounded-[4px] bg-white dark:bg-gray-900 box-shadow">
                    <!-- Total Sales Shimmer -->
                    <template v-if="isLoading">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.dashboard.right.date-filters','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.dashboard.right.date-filters'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.dashboard.right.total-sales','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.dashboard.right.total-sales'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.dashboard.right.total-sales','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.dashboard.right.total-sales'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </template>

                    <template v-else>
                        <!-- Date Filter -->
                        <div class="flex gap-[6px] px-[16px] py-[8px] border-b dark:border-gray-800">
                            <!-- Start Date Filter -->
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.index','data' => ['class' => 'flex-1 mb-[10px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-1 mb-[10px]']); ?>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => ['class' => '!text-gray-800 dark:!text-white font-medium']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '!text-gray-800 dark:!text-white font-medium']); ?>
                                    <?php echo app('translator')->get('admin::app.dashboard.index.start-date'); ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'date','name' => 'startDate','class' => 'cursor-pointer','placeholder' => trans('admin::app.dashboard.index.start-date'),'vModel' => 'filters.start']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'date','name' => 'startDate','class' => 'cursor-pointer','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.dashboard.index.start-date')),'v-model' => 'filters.start']); ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    
                            <!-- End Date Filter -->
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.index','data' => ['class' => 'flex-1 mb-[10px]']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex-1 mb-[10px]']); ?>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.label','data' => ['class' => '!text-gray-800 dark:!text-white font-medium']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => '!text-gray-800 dark:!text-white font-medium']); ?>
                                    <?php echo app('translator')->get('admin::app.dashboard.index.end-date'); ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'date','name' => 'endDate','class' => 'cursor-pointer','placeholder' => trans('admin::app.dashboard.index.end-date'),'vModel' => 'filters.end']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'date','name' => 'endDate','class' => 'cursor-pointer','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('admin::app.dashboard.index.end-date')),'v-model' => 'filters.end']); ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        </div>
    
                        <!-- Total Sales Detailes -->
                        <div class="grid gap-[16px] px-[16px] py-[8px] border-b dark:border-gray-800">
                            <div class="flex gap-[8px] justify-between">
                                <div class="flex flex-col gap-[4px] justify-between">
                                    <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                        <?php echo app('translator')->get('admin::app.dashboard.index.total-sales'); ?>
                                    </p>
    
                                    <!-- Total Order Revenue -->
                                    <p class="text-[18px] text-gray-800 dark:text-white font-bold">
                                        {{ statistics.sales.total_sales?.formatted_total }}
                                    </p>
                                </div>
    
                                <div class="flex flex-col gap-[4px] justify-between">
                                    <!-- Orders Time Duration -->
                                    <p class="text-[12px] text-gray-400 font-semibold text-right dark:text-white">
                                        {{ "<?php echo app('translator')->get('admin::app.dashboard.index.date-duration'); ?>".replace(':start', formatStart ?? 0).replace(':end', formatEnd ?? 0) }}
                                    </p>
    
                                    <!-- Total Orders -->
                                    <p class="text-[12px] text-gray-400 font-semibold text-right dark:text-white">
                                        {{ "<?php echo app('translator')->get('admin::app.dashboard.index.order'); ?>".replace(':total_orders', statistics.sales.total_orders?.current ?? 0) }}
                                    </p>
                                </div>
                            </div>
    
                            <!-- Sales Graph -->
                            <canvas
                                id="totalSalesChart"
                                style="width: 100%; height: 230px"
                            >
                            </canvas>
                        </div>
    
                        <!-- Total Visitors Detailes -->
                        <div class="grid gap-[16px] px-[16px] py-[8px] border-b dark:border-gray-800">
                            <div class="flex gap-[8px] justify-between">
                                <div class="flex flex-col gap-[4px] justify-between">
                                    <p class="text-[12px] text-gray-600 dark:text-gray-300 font-semibold">
                                        <?php echo app('translator')->get('admin::app.dashboard.index.visitors'); ?>
                                    </p>
    
                                    <!-- Total Order Revenue -->
                                    <p class="text-[18px] text-gray-800 dark:text-white font-bold">
                                        {{ statistics.visitors.total.current }}
                                    </p>
                                </div>
    
                                <div class="flex flex-col gap-[4px] justify-between">
                                    <!-- Orders Time Duration -->
                                    <p class="text-[12px] text-gray-400 font-semibold text-right dark:text-white">
                                        {{ "<?php echo app('translator')->get('admin::app.dashboard.index.date-duration'); ?>".replace(':start', formatStart ?? 0).replace(':end', formatEnd ?? 0) }}
                                    </p>
    
                                    <!-- Total Orders -->
                                    <p class="text-[12px] text-gray-400 font-semibold text-right dark:text-white">
                                        {{ "<?php echo app('translator')->get('admin::app.dashboard.index.unique-visitors'); ?>".replace(':count', statistics.visitors.unique?.current ?? 0) }}
                                    </p>
                                </div>
                            </div>
    
                            <!-- Visitors Graph -->
                            <canvas
                                id="totalVisitorsChart"
                                style="width: 100%; height: 230px"
                            >
                            </canvas>
                        </div>
                    </template>

                    <!-- Top Selling Products -->
                    <div class="border-b dark:border-gray-800">
                        <div class="flex items-center justify-between p-[16px]">
                            <p class="text-gray-600 dark:text-gray-300 text-[16px] font-semibold">
                                <?php echo app('translator')->get('admin::app.dashboard.index.top-selling-products'); ?>
                            </p>

                            <p class="text-[12px] text-gray-400 font-semibold">
                                {{ "<?php echo app('translator')->get('admin::app.dashboard.index.date-duration'); ?>".replace(':start', formatStart ?? 0).replace(':end', formatEnd ?? 0) }}
                            </p>
                        </div>

                        <!-- Top Selling Products Shimmer -->
                        <template v-if="isLoading">
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.dashboard.right.top-selling','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.dashboard.right.top-selling'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        </template>

                        <!-- Top Selling Products Detailes -->
                        <template v-else>
                            <div
                                class="flex flex-col"
                                v-if="statistics?.products.length"
                            >
                                <a
                                    :href="`<?php echo e(route('admin.catalog.products.edit', '')); ?>/${item.product_id}`"
                                    class="flex gap-[10px] p-[16px] border-b-[1px] dark:border-gray-800 last:border-b-0 transition-all hover:bg-gray-50 dark:hover:bg-gray-950"
                                    v-for="item in statistics.products"
                                >
                                    <!-- Product Item -->
                                    <img
                                        v-if="item?.product?.images.length"
                                        class="w-full h-[65px] max-w-[65px] max-h-[65px] relative rounded-[4px] overflow-hidden"
                                        :src="item?.product?.images[0]?.url"
                                    />

                                    <div
                                        v-else
                                        class="w-full h-[65px] max-w-[65px] max-h-[65px] relative border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] overflow-hidden dark:invert dark:mix-blend-exclusion"
                                    >
                                        <img src="<?php echo e(bagisto_asset('images/product-placeholders/front.svg')); ?>">
                                        
                                        <p class="w-full absolute bottom-[5px] text-[6px] text-gray-400 text-center font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.product-image'); ?>
                                        </p>
                                    </div>

                                    <!-- Product Detailes -->
                                    <div class="flex flex-col gap-[6px] w-full">
                                        <p
                                            class="text-gray-600 dark:text-gray-300"
                                            v-text="item.name"
                                        >
                                        </p>

                                        <div class="flex justify-between">
                                            <p
                                                class="text-gray-600 dark:text-gray-300 font-semibold"
                                                v-text="item.formatted_price"
                                            >
                                            </p>

                                            <p
                                                class="text-[16px] text-gray-800 dark:text-white font-semibold"
                                                v-text="item.formatted_revenue"
                                            >
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Empty Product Design -->
                            <div
                                class="flex flex-col gap-[32px] p-[16px]"
                                v-else
                            >
                                <div class="grid gap-[14px] justify-center justify-items-center py-[10px]">
                                    <!-- Placeholder Image -->
                                    <img
                                        src="<?php echo e(bagisto_asset('images/icon-add-product.svg')); ?>"
                                        class="w-[80px] h-[80px] dark:invert dark:mix-blend-exclusion"
                                    >
    
                                    <!-- Add Variants Information -->
                                    <div class="flex flex-col items-center">
                                        <p class="text-[16px] text-gray-400 font-semibold">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.add-product'); ?>
                                        </p>
    
                                        <p class="text-gray-400">
                                            <?php echo app('translator')->get('admin::app.dashboard.index.product-info'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Top Customers -->
                    <div class="flex items-center justify-between p-[16px]">
                        <p class="text-gray-600 dark:text-gray-300 text-[16px] font-semibold">
                            <?php echo app('translator')->get('admin::app.dashboard.index.customer-with-most-sales'); ?>
                        </p>

                        <p class="text-[12px] text-gray-400 font-semibold">
                            {{ "<?php echo app('translator')->get('admin::app.dashboard.index.date-duration'); ?>".replace(':start', formatStart ?? 0).replace(':end', formatEnd ?? 0) }}
                        </p>
                    </div>

                    <!-- Customers Shimmer -->
                    <template v-if="isLoading">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.dashboard.right.most-customer-sales','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.dashboard.right.most-customer-sales'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </template>

                    <template v-else>
                        <!-- Customers Lists -->
                        <div
                            class="flex flex-col gap-[32px] p-[16px] border-b-[1px] dark:border-gray-800 last:border-b-0 transition-all hover:bg-gray-50 dark:hover:bg-gray-950"
                            v-if="statistics?.customers.length"
                            v-for="customer in statistics.customers"
                        >
                            <a :href="customer.id ? `<?php echo e(route('admin.customers.customers.view', '')); ?>/${customer.id}` : '#'">
                                <div class="flex justify-between gap-[6px]">
                                    <div class="flex flex-col">
                                        <p
                                            class="text-gray-600 dark:text-gray-300 font-semibold"
                                            v-text="customer.full_name"
                                        >
                                        </p>

                                        <p
                                            class="text-gray-600 dark:text-gray-300"
                                            v-text="customer.email"
                                        >
                                        </p>
                                    </div>

                                    <div class="flex flex-col">
                                        <p
                                            class="text-gray-800 font-semibold dark:text-white"
                                            v-text="customer.formatted_total"
                                        >
                                        </p>

                                        <p class="text-gray-600 dark:text-gray-300" v-if="customer.orders">
                                            {{ "<?php echo app('translator')->get('admin::app.dashboard.index.order-count'); ?>".replace(':count', customer.orders) }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div
                            class="flex flex-col gap-[32px] p-[16px]"
                            v-else
                        >
                            <div class="grid gap-[14px] justify-center justify-items-center py-[10px]">
                                <!-- Placeholder Image -->
                                <img
                                    src="<?php echo e(bagisto_asset('images/icon-add-product.svg')); ?>"
                                    class="w-[80px] h-[80px] dark:invert dark:mix-blend-exclusion"
                                />

                                <!-- Add Variants Information -->
                                <div class="flex flex-col items-center">
                                    <p class="text-[16px] text-gray-400 font-semibold">
                                        <?php echo app('translator')->get('admin::app.dashboard.index.add-customer'); ?>
                                    </p>

                                    <p class="text-gray-400">
                                        <?php echo app('translator')->get('admin::app.dashboard.index.customer-info'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </script>

        <script type="module">
            app.component('v-store-stats', {
                template: '#v-store-stats-template',

                data() {
                    return {
                        isLoading: true,

                        filters: {
                            start: "<?php echo e($startDate->format('Y-m-d')); ?>",
                            end: "<?php echo e($endDate->format('Y-m-d')); ?>",
                        },

                        formatStart: "",

                        formatEnd: "",

                        statistics: {},

                        salesChart: undefined,

                        visitorsChart: undefined,
                    }
                },

                mounted() {
                   this.get();
                },

                methods: {
                    get() {
                        this.$axios.get("<?php echo e(route('admin.dashboard.index')); ?>", {
                                params: this.filters
                            })
                            .then((response) => {
                                const { startDate, endDate, statistics } = response.data;

                                this.formatStart = startDate;

                                this.formatEnd = endDate;

                                this.statistics = statistics;

                                setTimeout(() => {
                                    this.salesGraphChart();

                                    this.visitorsGraphChart();
                                }, 0);

                                this.isLoading = false;
                            })
                            .catch(error => {
                                if (error.response.status == 422) {
                                    setErrors(error.response.data.errors);
                                }
                            });
                    },

                    salesGraphChart () {
                        const ctx = document.getElementById('totalSalesChart');

                        const data = this.statistics.sales.over_time;

                        if (this.salesChart) {
                           this.salesChart.destroy();
                        }

                        this.salesChart = new Chart(ctx, {
                            type: 'bar',
                            
                            data: {
                                labels: data.map(({ label }) => label),
                                datasets: [{
                                    data: data.map(({ total }) => total),
                                    barThickness: 6,
                                    backgroundColor: '#598de6',
                                }]
                            },
                    
                            options: {
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                },

                                scales: {
                                    x: {
                                        grid: {
                                            display: false
                                        },
                                    },
                                }
                            }
                        });
                    },

                    visitorsGraphChart () {
                        const ctx = document.getElementById('totalVisitorsChart');

                        const data = this.statistics.visitors.over_time;

                        if (this.visitorsChart) {
                           this.visitorsChart.destroy();
                        }

                        this.visitorsChart = new Chart(ctx, {
                            type: 'bar',
                            
                            data: {
                                labels: data.map(({ label }) => label),
                                datasets: [{
                                    data: data.map(({ total }) => total),
                                    barThickness: 6,
                                    backgroundColor: '#f87171',
                                }]
                            },
                    
                            options: {
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                },

                                scales: {
                                    x: {
                                        grid: {
                                            display: false
                                        },
                                    },
                                }
                            }
                        });
                    },
                },

                watch: {
                    filters: {
                        handler() {
                            this.get();
                        },

                        deep: true
                    }
                }
            });
        </script>   
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/dashboard/index.blade.php ENDPATH**/ ?>