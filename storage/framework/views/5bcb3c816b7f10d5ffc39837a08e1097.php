<?php
    $admin = auth()->guard('admin')->user();
?>

<header class="flex justify-between items-center px-[16px] py-[10px] bg-white dark:bg-gray-900  border-b-[1px] dark:border-gray-800 sticky top-0 z-[10001]">
    <div class="flex gap-[6px] items-center">
        
        <i
            class="hidden icon-menu text-[24px] p-[6px] max-lg:block cursor-pointer"
            @click="$refs.sidebarMenuDrawer.open()"
        >
        </i>

        
        <a
            href="<?php echo e(route('admin.dashboard.index')); ?>" 
            class="place-self-start -mt-[4px]"            
        >
            <?php if(core()->getConfigData('general.design.admin_logo.logo_image', core()->getCurrentChannelCode())): ?>
                <img src="<?php echo e(Storage::url(core()->getConfigData('general.design.admin_logo.logo_image', core()->getCurrentChannelCode()))); ?>" alt="<?php echo e(config('app.name')); ?>" style="height: 40px; width: 110px;"/>
            <?php else: ?>
                <?php if(! request()->cookie('dark_mode')): ?>
                    <img src="<?php echo e(bagisto_asset('images/logo.svg')); ?>" id="logo-image">
                <?php else: ?>
                    <img src="<?php echo e(bagisto_asset('images/dark-logo.svg')); ?>" id="logo-image">
                <?php endif; ?>
            <?php endif; ?>
        </a>

        
        <v-mega-search>
            <div class="flex items-center relative w-[525px] max-w-[525px] ltr:ml-[10px] rtl:mr-[10px]">
                <i class="icon-search text-[22px] flex items-center absolute ltr:left-[12px] rtl:right-[12px] top-[6px]"></i>

                <input 
                    type="text" 
                    class="bg-white dark:bg-gray-900 border dark:border-gray-800 rounded-lg block w-full px-[40px] py-[5px] leading-6 text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400"
                    placeholder="<?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.title'); ?>" 
                >
            </div>
        </v-mega-search>
    </div>

    <div class="flex gap-[10px] items-center">
        
        <v-dark>
            <div class="flex">
                <span
                    class="<?php echo e(request()->cookie('dark_mode') ? 'icon-light' : 'icon-dark'); ?> p-[6px] rounded-[6px] text-[24px] cursor-pointer transition-all hover:bg-gray-100 dark:hover:bg-gray-950"
                ></span>
            </div>
        </v-dark>

        <a 
            href="<?php echo e(route('shop.home.index')); ?>" 
            target="_blank"
            class="flex"
        >
            <span 
                class="icon-store p-[6px] rounded-[6px] text-[24px] cursor-pointer transition-all hover:bg-gray-100 dark:hover:bg-gray-950 "
                title="<?php echo app('translator')->get('admin::app.components.layouts.header.visit-shop'); ?>"
            >
            </span>
        </a>

       
        <v-notifications <?php echo e($attributes); ?>>
            <span class="flex relative">
                <span 
                    class="icon-notification p-[6px] rounded-[6px] text-[24px] cursor-pointer transition-all hover:bg-gray-100 dark:hover:bg-gray-950" 
                    title="<?php echo app('translator')->get('admin::app.components.layouts.header.notifications'); ?>"
                >
                </span>
            </span>
        </v-notifications>

        
        <?php if (isset($component)) { $__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.dropdown.index','data' => ['position' => 'bottom-'.e(core()->getCurrentLocale()->direction === 'ltr' ? 'right' : 'left').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'bottom-'.e(core()->getCurrentLocale()->direction === 'ltr' ? 'right' : 'left').'']); ?>
             <?php $__env->slot('toggle', null, []); ?> 
                <?php if($admin->image): ?>
                    <button class="flex w-[36px] h-[36px] overflow-hidden rounded-full cursor-pointer hover:opacity-80 focus:opacity-80">
                        <img
                            src="<?php echo e($admin->image_url); ?>"
                            class="w-full"
                        />
                    </button>
                <?php else: ?>
                    <button class="flex justify-center items-center w-[36px] h-[36px] bg-blue-400 rounded-full text-[14px] text-white font-semibold cursor-pointer leading-6 transition-all hover:bg-blue-500 focus:bg-blue-500">
                        <?php echo e(substr($admin->name, 0, 1)); ?>

                    </button>
                <?php endif; ?>
             <?php $__env->endSlot(); ?>

            
             <?php $__env->slot('content', null, ['class' => '!p-[0px]']); ?> 
                <div class="grid gap-[10px] px-[20px] py-[10px] border border-b-gray-300 dark:border-gray-800">
                    
                    <p class="text-gray-400">
                        <?php echo app('translator')->get('admin::app.components.layouts.header.app-version', ['version' => 'v' . core()->version()]); ?>
                    </p>
                </div>

                <div class="grid gap-[4px] pb-[10px]">
                    <a
                        class="px-5 py-2 text-[16px] text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-950 cursor-pointer"
                        href="<?php echo e(route('admin.account.edit')); ?>"
                    >
                        <?php echo app('translator')->get('admin::app.components.layouts.header.my-account'); ?>
                    </a>

                    
                    <?php if (isset($component)) { $__componentOriginal81b4d293d9113446bb908fc8aef5c8f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.index','data' => ['method' => 'DELETE','action' => ''.e(route('admin.session.destroy')).'','id' => 'adminLogout']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'DELETE','action' => ''.e(route('admin.session.destroy')).'','id' => 'adminLogout']); ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6)): ?>
<?php $attributes = $__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6; ?>
<?php unset($__attributesOriginal81b4d293d9113446bb908fc8aef5c8f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81b4d293d9113446bb908fc8aef5c8f6)): ?>
<?php $component = $__componentOriginal81b4d293d9113446bb908fc8aef5c8f6; ?>
<?php unset($__componentOriginal81b4d293d9113446bb908fc8aef5c8f6); ?>
<?php endif; ?>

                    <a
                        class="px-5 py-2 text-[16px] text-gray-800 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-950 cursor-pointer"
                        href="<?php echo e(route('admin.session.destroy')); ?>"
                        onclick="event.preventDefault(); document.getElementById('adminLogout').submit();"
                    >
                        <?php echo app('translator')->get('admin::app.components.layouts.header.logout'); ?>
                    </a>
                </div>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2)): ?>
<?php $attributes = $__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2; ?>
<?php unset($__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2)): ?>
<?php $component = $__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2; ?>
<?php unset($__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2); ?>
<?php endif; ?>
    </div>
</header>

<!-- Menu Sidebar Drawer -->
<?php if (isset($component)) { $__componentOriginal9bfb526197f1d7304e7fade44c26fbb8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9bfb526197f1d7304e7fade44c26fbb8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.drawer.index','data' => ['position' => 'left','width' => '270px','ref' => 'sidebarMenuDrawer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'left','width' => '270px','ref' => 'sidebarMenuDrawer']); ?>
    <!-- Drawer Header -->
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex justify-between items-center">
            <?php if(core()->getConfigData('general.design.admin_logo.logo_image', core()->getCurrentChannelCode())): ?>
                <img src="<?php echo e(Storage::url(core()->getConfigData('general.design.admin_logo.logo_image', core()->getCurrentChannelCode()))); ?>" alt="<?php echo e(config('app.name')); ?>" style="height: 40px; width: 110px;"/>
            <?php else: ?>
                <img src="<?php echo e(bagisto_asset('images/logo.svg')); ?>">
            <?php endif; ?>
        </div>
     <?php $__env->endSlot(); ?>

    <!-- Drawer Content -->
     <?php $__env->slot('content', null, ['class' => 'p-[16px]']); ?> 
        <div class="h-[calc(100vh-100px)] overflow-auto journal-scroll">
            <nav class="grid gap-[7px] w-full">
                
                <?php $__currentLoopData = $menu->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="relative group/item">
                        <a
                            href="<?php echo e($menuItem['url']); ?>"
                            class="flex gap-[10px] p-[6px] items-center cursor-pointer <?php echo e($menu->getActive($menuItem) == 'active' ? 'bg-blue-600 rounded-[8px]' : ' hover:bg-gray-100 dark:hover:bg-gray-950 '); ?> peer"
                        >
                            <span class="<?php echo e($menuItem['icon']); ?> text-[24px] <?php echo e($menu->getActive($menuItem) ? 'text-white' : ''); ?>"></span>
                            
                            <p class="text-gray-600 dark:text-gray-300 font-semibold whitespace-nowrap <?php echo e($menu->getActive($menuItem) ? 'text-white' : ''); ?>">
                                <?php echo app('translator')->get($menuItem['name']); ?>
                            </p>
                        </a>

                        <?php if(count($menuItem['children'])): ?>
                            <div class="<?php echo e($menu->getActive($menuItem) ? ' !grid bg-gray-100' : ''); ?> hidden min-w-[180px] ltr:pl-[40px] rtl:pr-[40px] pb-[7px] rounded-b-[8px] z-[100]">
                                <?php $__currentLoopData = $menuItem['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenuItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a
                                        href="<?php echo e($subMenuItem['url']); ?>"
                                        class="text-[14px] text-<?php echo e($menu->getActive($subMenuItem) ? 'blue':'gray'); ?>-600 whitespace-nowrap py-[4px]"
                                    >
                                        <?php echo app('translator')->get($subMenuItem['name']); ?>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </nav>
        </div>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9bfb526197f1d7304e7fade44c26fbb8)): ?>
<?php $attributes = $__attributesOriginal9bfb526197f1d7304e7fade44c26fbb8; ?>
<?php unset($__attributesOriginal9bfb526197f1d7304e7fade44c26fbb8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9bfb526197f1d7304e7fade44c26fbb8)): ?>
<?php $component = $__componentOriginal9bfb526197f1d7304e7fade44c26fbb8; ?>
<?php unset($__componentOriginal9bfb526197f1d7304e7fade44c26fbb8); ?>
<?php endif; ?>

<?php if (! $__env->hasRenderedOnce('3eadeae7-8771-49d1-afb3-6cfe69a844ac')): $__env->markAsRenderedOnce('3eadeae7-8771-49d1-afb3-6cfe69a844ac');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-mega-search-template">
        <div class="flex items-center relative w-[525px] max-w-[525px] ltr:ml-[10px] rtl:mr-[10px]">
            <i class="icon-search text-[22px] flex items-center absolute ltr:left-[12px] rtl:right-[12px] top-[6px]"></i>

            <input 
                type="text"
                class="bg-white dark:bg-gray-900 border dark:border-gray-800 rounded-lg block w-full px-[40px] py-[5px] leading-6 text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 peer"
                :class="{'border-gray-400': isDropdownOpen}"
                placeholder="<?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.title'); ?>"
                v-model.lazy="searchTerm"
                @click="searchTerm.length >= 2 ? isDropdownOpen = true : {}"
                v-debounce="500"
            >

            <div
                class="absolute top-[40px] w-full bg-white dark:bg-gray-900 shadow-[0px_0px_0px_0px_rgba(0,0,0,0.10),0px_1px_3px_0px_rgba(0,0,0,0.10),0px_5px_5px_0px_rgba(0,0,0,0.09),0px_12px_7px_0px_rgba(0,0,0,0.05),0px_22px_9px_0px_rgba(0,0,0,0.01),0px_34px_9px_0px_rgba(0,0,0,0.00)] border dark:border-gray-800 rounded-[8px] z-10"
                v-if="isDropdownOpen"
            >
                <!-- Search Tabs -->
                <div class="flex border-b-[1px] dark:border-gray-800 text-[14px] text-gray-600 dark:text-gray-300">
                    <div
                        class="p-[16px] hover:bg-gray-100 dark:hover:bg-gray-950 cursor-pointer"
                        :class="{ 'border-b-[2px] border-blue-600': activeTab == tab.key }"
                        v-for="tab in tabs"
                        @click="activeTab = tab.key; search();"
                    >
                        {{ tab.title }}
                    </div>
                </div>

                <!-- Searched Results -->
                <template v-if="activeTab == 'products'">
                    <template v-if="isLoading">
                        <?php if (isset($component)) { $__componentOriginaleba82ad7959d0b76a0ef438c765d88d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleba82ad7959d0b76a0ef438c765d88d7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.header.mega-search.products','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.header.mega-search.products'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleba82ad7959d0b76a0ef438c765d88d7)): ?>
<?php $attributes = $__attributesOriginaleba82ad7959d0b76a0ef438c765d88d7; ?>
<?php unset($__attributesOriginaleba82ad7959d0b76a0ef438c765d88d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleba82ad7959d0b76a0ef438c765d88d7)): ?>
<?php $component = $__componentOriginaleba82ad7959d0b76a0ef438c765d88d7; ?>
<?php unset($__componentOriginaleba82ad7959d0b76a0ef438c765d88d7); ?>
<?php endif; ?>
                    </template>

                    <template v-else>
                        <div class="grid max-h-[400px] overflow-y-auto">
                            <a
                                :href="'<?php echo e(route('admin.catalog.products.edit', ':id')); ?>'.replace(':id', product.id)"
                                class="flex gap-[10px] justify-between p-[16px] border-b-[1px] border-slate-300 dark:border-gray-800 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-950 last:border-b-0"
                                v-for="product in searchedResults.products.data"
                            >
                                <!-- Left Information -->
                                <div class="flex gap-[10px]">
                                    <!-- Image -->
                                    <div
                                        class="w-full h-[60px] max-w-[60px] max-h-[60px] relative rounded-[4px] overflow-hidden"
                                        :class="{'border border-dashed border-gray-300 dark:border-gray-800 rounded-[4px] dark:invert dark:mix-blend-exclusion overflow-hidden': ! product.images.length}"
                                    >
                                        <template v-if="! product.images.length">
                                            <img src="<?php echo e(bagisto_asset('images/product-placeholders/front.svg')); ?>">
                                        
                                            <p class="w-full absolute bottom-[5px] text-[6px] text-gray-400 text-center font-semibold">
                                                <?php echo app('translator')->get('admin::app.catalog.products.edit.types.grouped.image-placeholder'); ?>
                                            </p>
                                        </template>

                                        <template v-else>
                                            <img :src="product.images[0].url">
                                        </template>
                                    </div>

                                    <!-- Details -->
                                    <div class="grid gap-[6px] place-content-start">
                                        <p class="text-[16x] text-gray-600 dark:text-gray-300 font-semibold">
                                            {{ product.name }}
                                        </p>

                                        <p class="text-gray-500">
                                            {{ "<?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.sku'); ?>".replace(':sku', product.sku) }}
                                        </p>
                                    </div>
                                </div>

                                <!-- Right Information -->
                                <div class="grid gap-[4px] place-content-center text-right">
                                    <p class="text-gray-600 dark:text-gray-300 font-semibold">
                                        {{ product.formatted_price }}
                                    </p>
                                </div>
                            </a>
                        </div>

                        <div class="flex p-[12px] border-t-[1px] dark:border-gray-800">
                            <a
                                :href="'<?php echo e(route('admin.catalog.products.index')); ?>?search=:query'.replace(':query', searchTerm)"
                                class="text-[12px] text-blue-600 font-semibold cursor-pointer transition-all hover:underline"
                                v-if="searchedResults.products.data.length"
                            >
                                {{ "<?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.explore-all-matching-products'); ?>".replace(':query', searchTerm).replace(':count', searchedResults.products.total) }}
                            </a>

                            <a
                                href="<?php echo e(route('admin.catalog.products.index')); ?>"
                                class="text-[12px] text-blue-600 font-semibold cursor-pointer transition-all hover:underline"
                                v-else
                            >
                                <?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.explore-all-products'); ?>
                            </a>
                        </div>
                    </template>
                </template>

                <template v-if="activeTab == 'orders'">
                    <template v-if="isLoading">
                        <?php if (isset($component)) { $__componentOriginal3669cf86e00b23e4b4d606121255b4d7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3669cf86e00b23e4b4d606121255b4d7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.header.mega-search.orders','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.header.mega-search.orders'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3669cf86e00b23e4b4d606121255b4d7)): ?>
<?php $attributes = $__attributesOriginal3669cf86e00b23e4b4d606121255b4d7; ?>
<?php unset($__attributesOriginal3669cf86e00b23e4b4d606121255b4d7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3669cf86e00b23e4b4d606121255b4d7)): ?>
<?php $component = $__componentOriginal3669cf86e00b23e4b4d606121255b4d7; ?>
<?php unset($__componentOriginal3669cf86e00b23e4b4d606121255b4d7); ?>
<?php endif; ?>
                    </template>

                    <template v-else>
                        <div class="grid max-h-[400px] overflow-y-auto">
                            <a
                                :href="'<?php echo e(route('admin.sales.orders.view', ':id')); ?>'.replace(':id', order.id)"
                                class="grid gap-[6px] place-content-start p-[16px] border-b-[1px] border-slate-300 dark:border-gray-800 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-950 last:border-b-0"
                                v-for="order in searchedResults.orders.data"
                            >
                                <p class="text-[16x] text-gray-600 dark:text-gray-300 font-semibold">
                                    #{{ order.increment_id }}
                                </p>

                                <p class="text-gray-500 dark:text-gray-300">
                                    {{ order.formatted_created_at + ', ' + order.status_label + ', ' + order.customer_full_name }}
                                </p>
                            </a>
                        </div>

                        <div class="flex p-[12px] border-t-[1px] dark:border-gray-800  ">
                            <a
                                :href="'<?php echo e(route('admin.sales.orders.index')); ?>?search=:query'.replace(':query', searchTerm)"
                                class=" text-[12px] text-blue-600 font-semibold cursor-pointer transition-all hover:underline"
                                v-if="searchedResults.orders.data.length"
                            >
                                {{ "<?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.explore-all-matching-orders'); ?>".replace(':query', searchTerm).replace(':count', searchedResults.orders.total) }}
                            </a>

                            <a
                                href="<?php echo e(route('admin.sales.orders.index')); ?>"
                                class=" text-[12px] text-blue-600 font-semibold cursor-pointer transition-all hover:underline"
                                v-else
                            >
                                <?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.explore-all-orders'); ?>
                            </a>
                        </div>
                    </template>
                </template>

                <template v-if="activeTab == 'categories'">
                    <template v-if="isLoading">
                        <?php if (isset($component)) { $__componentOriginal9943e20bc07ac2bc6cf86ef88fcdcb7e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9943e20bc07ac2bc6cf86ef88fcdcb7e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.header.mega-search.categories','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.header.mega-search.categories'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9943e20bc07ac2bc6cf86ef88fcdcb7e)): ?>
<?php $attributes = $__attributesOriginal9943e20bc07ac2bc6cf86ef88fcdcb7e; ?>
<?php unset($__attributesOriginal9943e20bc07ac2bc6cf86ef88fcdcb7e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9943e20bc07ac2bc6cf86ef88fcdcb7e)): ?>
<?php $component = $__componentOriginal9943e20bc07ac2bc6cf86ef88fcdcb7e; ?>
<?php unset($__componentOriginal9943e20bc07ac2bc6cf86ef88fcdcb7e); ?>
<?php endif; ?>
                    </template>

                    <template v-else>
                        <div class="grid max-h-[400px] overflow-y-auto">
                            <a
                                :href="'<?php echo e(route('admin.catalog.categories.edit', ':id')); ?>'.replace(':id', category.id)"
                                class="p-[16px] border-b-[1px] dark:border-gray-800 text-[14px] text-gray-600 dark:text-gray-300 font-semibold cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-950 last:border-b-0"
                                v-for="category in searchedResults.categories.data"
                            >
                                {{ category.name }}
                            </a>
                        </div>

                        <div class="flex p-[12px] border-t-[1px] dark:border-gray-800">
                            <a
                                :href="'<?php echo e(route('admin.catalog.categories.index')); ?>?search=:query'.replace(':query', searchTerm)"
                                class=" text-[12px] text-blue-600 font-semibold cursor-pointer transition-all hover:underline"
                                v-if="searchedResults.categories.data.length"
                            >
                                {{ "<?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.explore-all-matching-categories'); ?>".replace(':query', searchTerm).replace(':count', searchedResults.categories.total) }}
                            </a>

                            <a
                                href="<?php echo e(route('admin.catalog.categories.index')); ?>"
                                class=" text-[12px] text-blue-600 font-semibold cursor-pointer transition-all hover:underline"
                                v-else
                            >
                                <?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.explore-all-categories'); ?>
                            </a>
                        </div>
                    </template>
                </template>

                <template v-if="activeTab == 'customers'">
                    <template v-if="isLoading">
                        <?php if (isset($component)) { $__componentOriginal49f90ce132a94cab4099342a89e8953c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal49f90ce132a94cab4099342a89e8953c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.header.mega-search.customers','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.header.mega-search.customers'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal49f90ce132a94cab4099342a89e8953c)): ?>
<?php $attributes = $__attributesOriginal49f90ce132a94cab4099342a89e8953c; ?>
<?php unset($__attributesOriginal49f90ce132a94cab4099342a89e8953c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal49f90ce132a94cab4099342a89e8953c)): ?>
<?php $component = $__componentOriginal49f90ce132a94cab4099342a89e8953c; ?>
<?php unset($__componentOriginal49f90ce132a94cab4099342a89e8953c); ?>
<?php endif; ?>
                    </template>

                    <template v-else>
                        <div class="grid max-h-[400px] overflow-y-auto">
                            <a
                                :href="'<?php echo e(route('admin.customers.customers.view', ':id')); ?>'.replace(':id', customer.id)"
                                class="grid gap-[6px] place-content-start p-[16px] border-b-[1px] border-slate-300 dark:border-gray-800 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-950 last:border-b-0"
                                v-for="customer in searchedResults.customers.data"
                            >
                                <p class="text-[16x] text-gray-600 dark:text-gray-300 font-semibold">
                                    {{ customer.first_name + ' ' + customer.last_name }}
                                </p>

                                <p class="text-gray-500">
                                    {{ customer.email }}
                                </p>
                            </a>
                        </div>

                        <div class="flex p-[12px] border-t-[1px] dark:border-gray-800">
                            <a
                                :href="'<?php echo e(route('admin.customers.customers.index')); ?>?search=:query'.replace(':query', searchTerm)"
                                class=" text-[12px] text-blue-600 font-semibold cursor-pointer transition-all hover:underline"
                                v-if="searchedResults.customers.data.length"
                            >
                                {{ "<?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.explore-all-matching-customers'); ?>".replace(':query', searchTerm).replace(':count', searchedResults.customers.total) }}
                            </a>

                            <a
                                href="<?php echo e(route('admin.customers.customers.index')); ?>"
                                class=" text-[12px] text-blue-600 font-semibold cursor-pointer transition-all hover:underline"
                                v-else
                            >
                                <?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.explore-all-customers'); ?>
                            </a>
                        </div>
                    </template>
                </template>
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-mega-search', {
            template: '#v-mega-search-template',

            data() {
                return {
                    activeTab: 'products',

                    isDropdownOpen: false,

                    tabs: {
                        products: {
                            key: 'products',
                            title: "<?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.products'); ?>",
                            is_active: true,
                            endpoint: "<?php echo e(route('admin.catalog.products.search')); ?>"
                        },
                        
                        orders: {
                            key: 'orders',
                            title: "<?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.orders'); ?>",
                            endpoint: "<?php echo e(route('admin.sales.orders.search')); ?>"
                        },
                        
                        categories: {
                            key: 'categories',
                            title: "<?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.categories'); ?>",
                            endpoint: "<?php echo e(route('admin.catalog.categories.search')); ?>"
                        },
                        
                        customers: {
                            key: 'customers',
                            title: "<?php echo app('translator')->get('admin::app.components.layouts.header.mega-search.customers'); ?>",
                            endpoint: "<?php echo e(route('admin.customers.customers.search')); ?>"
                        }
                    },

                    isLoading: false,

                    searchTerm: '',

                    searchedResults: {
                        products: [],
                        orders: [],
                        categories: [],
                        customers: []
                    },
                }
            },

            watch: {
                searchTerm: function(newVal, oldVal) {
                    this.search()
                }
            },

            created() {
                window.addEventListener('click', this.handleFocusOut);
            },

            beforeDestroy() {
                window.removeEventListener('click', this.handleFocusOut);
            },

            methods: {
                search() {
                    if (this.searchTerm.length <= 1) {
                        this.searchedResults[this.activeTab] = [];

                        this.isDropdownOpen = false;

                        return;
                    }

                    this.isDropdownOpen = true;

                    let self = this;

                    this.isLoading = true;
                    
                    this.$axios.get(this.tabs[this.activeTab].endpoint, {
                            params: {query: this.searchTerm}
                        })
                        .then(function(response) {
                            self.searchedResults[self.activeTab] = response.data;

                            self.isLoading = false;
                        })
                        .catch(function (error) {
                        })
                },

                handleFocusOut(e) {
                    if (! this.$el.contains(e.target)) {
                        this.isDropdownOpen = false;
                    }
                },
            }
        });
    </script>

    <script 
        type="text/x-template"
        id="v-notifications-template"
    >
        <?php if (isset($component)) { $__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.dropdown.index','data' => ['position' => 'bottom-'.e(core()->getCurrentLocale()->direction === 'ltr' ? 'right' : 'left').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'bottom-'.e(core()->getCurrentLocale()->direction === 'ltr' ? 'right' : 'left').'']); ?>
            <!-- Notification Toggle -->
             <?php $__env->slot('toggle', null, []); ?> 
                <span class="flex relative">
                    <span
                        class="icon-notification p-[6px] rounded-[6px] text-[24px] text-red cursor-pointer transition-all hover:bg-gray-100 dark:hover:bg-gray-950" 
                        title="<?php echo app('translator')->get('admin::app.components.layouts.header.notifications'); ?>"
                    >
                    </span>
                
                    <span
                        class="flex justify-center items-center min-w-[20px] h-[20px] absolute top-[-8px] p-[5px] ltr:left-[18px] rtl:right-[18px] bg-blue-600 rounded-[44px] text-white text-[10px] font-semibold leading-[9px] cursor-pointer"
                        v-text="totalUnRead"
                        v-if="totalUnRead"
                    >
                    </span>
                </span>
             <?php $__env->endSlot(); ?>

            <!-- Notification Content -->
             <?php $__env->slot('content', null, ['class' => '!p-0 min-w-[250px] max-w-[250px]']); ?> 
                <!-- Header -->
                <div class="text-[16px] p-[12px] text-gray-600 dark:text-gray-300 font-semibold border-b-[1px] dark:border-gray-800">
                    <?php echo app('translator')->get('admin::app.notifications.title', ['read' => 0]); ?>
                </div>

                <!-- Content -->
                <div class="grid">
                    <a
                        class="flex gap-[5px] items-start p-[12px] hover:bg-gray-50 dark:hover:bg-gray-950 border-b-[1px] dark:border-gray-800 last:border-b-0"
                        v-for="notification in notifications"
                        :href="'<?php echo e(route('admin.notification.viewed_notification', ':orderId')); ?>'.replace(':orderId', notification.order_id)"
                    >
                        <!-- Notification Icon -->
                        <span
                            v-if="notification.order.status in notificationStatusIcon"
                            class="h-fit"
                            :class="notificationStatusIcon[notification.order.status]"
                        >
                        </span>

                        <div class="grid">
                            <!-- Order Id & Status -->
                            <p class="text-gray-800 dark:text-white">
                                #{{ notification.order.id }}
                                {{ orderTypeMessages[notification.order.status] }}
                            </p>

                            <!-- Craeted Date In humand Readable Format -->
                            <p class="text-[12px] text-gray-600 dark:text-gray-300">
                                {{ notification.order.datetime }}
                            </p>
                        </div>
                    </a>
                </div>

                <!-- Footer -->
                <div class="flex gap-[10px] justify-between p-[12px] border-t-[1px] dark:border-gray-800">
                    <a
                        href="<?php echo e(route('admin.notification.index')); ?>"
                        class="text-[12px] text-blue-600 font-semibold cursor-pointer transition-all hover:underline"
                    >
                        <?php echo app('translator')->get('admin::app.notifications.view-all'); ?>
                    </a>

                    <a
                        class="text-[12px] text-blue-600 font-semibold cursor-pointer transition-all hover:underline"
                        v-if="notifications?.length"
                        @click="readAll()"
                    >
                        <?php echo app('translator')->get('admin::app.notifications.read-all'); ?>
                    </a>
                </div>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2)): ?>
<?php $attributes = $__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2; ?>
<?php unset($__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2)): ?>
<?php $component = $__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2; ?>
<?php unset($__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2); ?>
<?php endif; ?>
    </script>

    <script type="module">
        app.component('v-notifications', {
            template: '#v-notifications-template',

                props: [
                    'getReadAllUrl',
                    'readAllTitle',
                ],

                data() {
                    return {
                        notifications: [],

                        ordertype: {
                            pending: {
                                icon: 'icon-information',
                                message: 'Order Pending',
                            },
                            processing: {
                                icon: 'icon-processing',
                                message: 'Order Processing'
                            },
                            canceled: {
                                icon: 'icon-cancel-1',
                                message: 'Order Canceled'
                            },
                            completed: {
                                icon: 'icon-done',
                                message: 'Order Completed'
                            },
                            closed: {
                                icon: 'icon-cancel-1',
                                message: 'Order Closed'
                            },
                            pending_payment: {
                                icon: 'icon-information',
                                message: 'Payment Pending'
                            },
                        },

                        totalUnRead: 0,

                        orderTypeMessages: {
                            'pending': "<?php echo app('translator')->get('admin::app.notifications.order-status-messages.pending'); ?>",
                            'canceled': "<?php echo app('translator')->get('admin::app.notifications.order-status-messages.canceled'); ?>",
                            'closed': "<?php echo app('translator')->get('admin::app.notifications.order-status-messages.closed'); ?>",
                            'completed': "<?php echo app('translator')->get('admin::app.notifications.order-status-messages.completed'); ?>",
                            'processing': "<?php echo app('translator')->get('admin::app.notifications.order-status-messages.processing'); ?>",
                            'pending_payment': "<?php echo app('translator')->get('admin::app.notifications.order-status-messages.pending-payment'); ?>",
                        }
                    }
                },

                computed: {
                    notificationStatusIcon() {
                        return {
                            pending: 'icon-information text-[24px] text-amber-600 bg-amber-100 rounded-full',
                            closed: 'icon-repeat text-[24px] text-red-600 bg-red-100 rounded-full',
                            completed: 'icon-done text-[24px] text-blue-600 bg-blue-100 rounded-full',
                            canceled: 'icon-cancel-1 text-[24px] text-red-600 bg-red-100 rounded-full',
                            processing: 'icon-sort-right text-[24px] text-green-600 bg-green-100 rounded-full',
                        };
                    },
                },

                mounted() {
                    this.getNotification();
                },

                methods: {
                    getNotification() {
                        this.$axios.get('<?php echo e(route('admin.notification.get_notification')); ?>', {
                                params: {
                                    limit: 5,
                                    read: 0
                                }
                            })
                            .then((response) => {
                                this.notifications = response.data.search_results.data;

                                this.totalUnRead =   response.data.total_unread;
                            })
                            .catch(error => console.log(error))
                    },

                    readAll() {
                        this.$axios.post('<?php echo e(route('admin.notification.read_all')); ?>')
                            .then((response) => {
                                this.notifications = response.data.search_results.data;

                                this.totalUnRead = response.data.total_unread;

                            this.$emitter.emit('add-flash', { type: 'success', message: response.data.success_message });
                        })
                        .catch((error) => {});
                },
            },
        });
    </script>

    <script type="text/x-template" id="v-dark-template">
        <div class="flex">
            <span
                class="p-[6px] rounded-[6px] text-[24px] cursor-pointer transition-all hover:bg-gray-100 dark:hover:bg-gray-950"
                :class="[isDarkMode ? 'icon-light' : 'icon-dark']"
                @click="toggle"
            ></span>
        </div>
    </script>

    <script type="module">
        app.component('v-dark', {
            template: '#v-dark-template',

            data() {
                return {
                    isDarkMode: <?php echo e(request()->cookie('dark_mode') ?? 0); ?>,

                    logo: "<?php echo e(bagisto_asset('images/logo.svg')); ?>",

                    dark_logo: "<?php echo e(bagisto_asset('images/dark-logo.svg')); ?>",
                };
            },

            methods: {
                toggle() {
                    this.isDarkMode = parseInt(this.isDarkModeCookie()) ? 0 : 1;

                    var expiryDate = new Date();

                    expiryDate.setMonth(expiryDate.getMonth() + 1);

                    document.cookie = 'dark_mode=' + this.isDarkMode + '; path=/; expires=' + expiryDate.toGMTString();

                    document.documentElement.classList.toggle('dark', this.isDarkMode === 1);

                    if (this.isDarkMode) {
                        document.getElementById('logo-image').src= this.dark_logo;
                    } else {
                        document.getElementById('logo-image').src=this.logo;
                    }
                },

                isDarkModeCookie() {
                    const cookies = document.cookie.split(';');

                    for (const cookie of cookies) {
                        const [name, value] = cookie.trim().split('=');

                        if (name === 'dark_mode') {
                            return value;
                        }
                    }

                    return 0;
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/layouts/header/index.blade.php ENDPATH**/ ?>