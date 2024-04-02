
<?php
    $showCompare = (bool) core()->getConfigData('general.content.shop.compare_option');

    $showWishlist = (bool) core()->getConfigData('general.content.shop.wishlist_option');
?>

<div class="gap-[15px] flex-wrap px-[15px] pt-[25px] hidden max-lg:flex max-lg:mb-[15px]">
    <div class="w-full flex justify-between items-center">
        
        <div class="flex items-center gap-x-[5px]">
            <?php if (isset($component)) { $__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.drawer.index','data' => ['position' => 'left','width' => '80%']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'left','width' => '80%']); ?>
                 <?php $__env->slot('toggle', null, []); ?> 
                    <span class="icon-hamburger text-[24px] cursor-pointer"></span>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('header', null, []); ?> 
                    <div class="flex justify-between items-center">
                        <a href="<?php echo e(route('shop.home.index')); ?>">
                            <img
                                src="<?php echo e(bagisto_asset('images/logo.svg')); ?>"
                                alt="Bagisto"
                                width="131"
                                height="29"
                            >
                        </a>
                    </div>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('content', null, []); ?> 
                    
                    <div class="grid grid-cols-[auto_1fr] gap-[15px] items-center mb-[15px] p-[10px] border border-[#E9E9E9] rounded-[12px]">
                        <div class="">
                            <img
                                src="<?php echo e(auth()->user()?->image_url ??  bagisto_asset('images/user-placeholder.png')); ?>"
                                class="w-[60px] h-[60px] rounded-full"
                            >
                        </div>

                        <?php if(auth()->guard('customer')->guest()): ?>
                            <a
                                href="<?php echo e(route('shop.customer.session.create')); ?>"
                                class="flex text-[16px] font-medium"
                            >
                                <?php echo app('translator')->get('Sign up or Login'); ?>

                                <i class="icon-double-arrow text-[24px] ml-[10px]"></i>
                            </a>
                        <?php endif; ?>

                        <?php if(auth()->guard('customer')->check()): ?>
                            <div class="flex flex-col gap-[10px] justify-between">
                                <p class="text-[25px] font-mediums">Hello! <?php echo e(auth()->user()?->first_name); ?></p>

                                <p class="text-[#6E6E6E] "><?php echo e(auth()->user()?->email); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>

                    
                    <v-mobile-category></v-mobile-category>

                    
                    <div class="absolute w-full flex bottom-0 left-0 bg-white shadow-lg p-4 gap-x-[20px] justify-between items-center mb-[15px]">
                        <?php if (isset($component)) { $__componentOriginal6eb652d0a4a36e6466d8d4f363feb553 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6eb652d0a4a36e6466d8d4f363feb553 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.dropdown.index','data' => ['position' => 'top-left']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'top-left']); ?>
                            <!-- Dropdown Toggler -->
                             <?php $__env->slot('toggle', null, []); ?> 
                                <div class="w-full flex gap-[10px] justify-between items-center cursor-pointer">
                                    <span>
                                        <?php echo e(core()->getCurrentCurrency()->symbol . ' ' . core()->getCurrentCurrencyCode()); ?>

                                    </span>

                                    <span class="icon-arrow-down text-[24px]"></span>
                                </div>
                             <?php $__env->endSlot(); ?>

                            <!-- Dropdown Content -->
                             <?php $__env->slot('content', null, ['class' => '!p-[0px]']); ?> 
                                <v-currency-switcher></v-currency-switcher>
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6eb652d0a4a36e6466d8d4f363feb553)): ?>
<?php $attributes = $__attributesOriginal6eb652d0a4a36e6466d8d4f363feb553; ?>
<?php unset($__attributesOriginal6eb652d0a4a36e6466d8d4f363feb553); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6eb652d0a4a36e6466d8d4f363feb553)): ?>
<?php $component = $__componentOriginal6eb652d0a4a36e6466d8d4f363feb553; ?>
<?php unset($__componentOriginal6eb652d0a4a36e6466d8d4f363feb553); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginal6eb652d0a4a36e6466d8d4f363feb553 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6eb652d0a4a36e6466d8d4f363feb553 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.dropdown.index','data' => ['position' => 'top-right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'top-right']); ?>
                             <?php $__env->slot('toggle', null, []); ?> 
                                
                                <div class="w-full flex gap-[10px] justify-between items-center cursor-pointer">
                                    <img
                                        src="<?php echo e(! empty(core()->getCurrentLocale()->logo_url)
                                                ? core()->getCurrentLocale()->logo_url
                                                : bagisto_asset('images/default-language.svg')); ?>"
                                        class="h-full"
                                        alt="Default locale"
                                        width="24"
                                        height="16"
                                    />

                                    <span>
                                        <?php echo e(core()->getCurrentChannel()->locales()->orderBy('name')->where('code', app()->getLocale())->value('name')); ?>

                                    </span>

                                    <span class="icon-arrow-down text-[24px]"></span>
                                </div>
                             <?php $__env->endSlot(); ?>

                            <!-- Dropdown Content -->
                             <?php $__env->slot('content', null, ['class' => '!p-[0px]']); ?> 
                                <v-locale-switcher></v-locale-switcher>
                             <?php $__env->endSlot(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6eb652d0a4a36e6466d8d4f363feb553)): ?>
<?php $attributes = $__attributesOriginal6eb652d0a4a36e6466d8d4f363feb553; ?>
<?php unset($__attributesOriginal6eb652d0a4a36e6466d8d4f363feb553); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6eb652d0a4a36e6466d8d4f363feb553)): ?>
<?php $component = $__componentOriginal6eb652d0a4a36e6466d8d4f363feb553; ?>
<?php unset($__componentOriginal6eb652d0a4a36e6466d8d4f363feb553); ?>
<?php endif; ?>
                    </div>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('footer', null, []); ?>  <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8)): ?>
<?php $attributes = $__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8; ?>
<?php unset($__attributesOriginal2b3e2da8ab003ef79d854b1862e64fc8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8)): ?>
<?php $component = $__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8; ?>
<?php unset($__componentOriginal2b3e2da8ab003ef79d854b1862e64fc8); ?>
<?php endif; ?>

            <a
                href="<?php echo e(route('shop.home.index')); ?>"
                class="max-h-[30px]"
                aria-label="Bagisto"
            >
                <img
                    src="<?php echo e(bagisto_asset('images/logo.svg')); ?>"
                    alt="Bagisto"
                    width="131"
                    height="29"
                >
            </a>
        </div>

        
        <div>
            <div class="flex  items-center gap-x-[20px]">
                <?php if($showCompare): ?>
                    <a
                        href="<?php echo e(route('shop.compare.index')); ?>"
                        aria-label="Compare "
                    >
                        <span class="icon-compare text-[24px] cursor-pointer"></span>
                    </a>
                <?php endif; ?>

                <?php echo $__env->make('shop::checkout.cart.mini-cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php if (isset($component)) { $__componentOriginal6eb652d0a4a36e6466d8d4f363feb553 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6eb652d0a4a36e6466d8d4f363feb553 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.dropdown.index','data' => ['position' => 'bottom-'.e(core()->getCurrentLocale()->direction === 'ltr' ? 'right' : 'left').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'bottom-'.e(core()->getCurrentLocale()->direction === 'ltr' ? 'right' : 'left').'']); ?>
                     <?php $__env->slot('toggle', null, []); ?> 
                        <span class="icon-users text-[24px] cursor-pointer"></span>
                     <?php $__env->endSlot(); ?>

                    
                    <?php if(auth()->guard('customer')->guest()): ?>
                         <?php $__env->slot('content', null, []); ?> 
                            <div class="grid gap-[10px]">
                                <p class="text-[20px] font-dmserif">
                                    <?php echo app('translator')->get('shop::app.components.layouts.header.welcome-guest'); ?>
                                </p>

                                <p class="text-[14px]">
                                    <?php echo app('translator')->get('shop::app.components.layouts.header.dropdown-text'); ?>
                                </p>
                            </div>

                            <p class="w-full mt-[12px] py-2px border border-[#E9E9E9]"></p>

                            <div class="flex gap-[16px] mt-[25px]">
                                <a
                                    href="<?php echo e(route('shop.customer.session.create')); ?>"
                                    class="block w-max mx-auto m-0 ml-[0px] py-[15px] px-[29px] bg-navyBlue rounded-[18px] text-white text-base font-medium text-center cursor-pointer"
                                >
                                    <?php echo app('translator')->get('shop::app.components.layouts.header.sign-in'); ?>
                                </a>

                                <a
                                    href="<?php echo e(route('shop.customers.register.index')); ?>"
                                    class="block w-max mx-auto m-0 ml-[0px] py-[14px] px-[29px] bg-white border-2 border-navyBlue rounded-[18px] text-navyBlue text-base font-medium  text-center cursor-pointer"
                                >
                                    <?php echo app('translator')->get('shop::app.components.layouts.header.sign-up'); ?>
                                </a>
                            </div>
                         <?php $__env->endSlot(); ?>
                    <?php endif; ?>

                    
                    <?php if(auth()->guard('customer')->check()): ?>
                         <?php $__env->slot('content', null, ['class' => '!p-[0px]']); ?> 
                            <div class="grid gap-[10px] p-[20px] pb-0">
                                <p class="text-[20px] font-dmserif">
                                    <?php echo app('translator')->get('shop::app.components.layouts.header.welcome'); ?>’
                                    <?php echo e(auth()->guard('customer')->user()->first_name); ?>

                                </p>

                                <p class="text-[14px]">
                                    <?php echo app('translator')->get('shop::app.components.layouts.header.dropdown-text'); ?>
                                </p>
                            </div>

                            <p class="w-full mt-[12px] py-2px border border-[#E9E9E9]"></p>

                            <div class="grid gap-[4px] mt-[10px] pb-[10px]">
                                <a
                                    class="px-5 py-2 text-[16px] hover:bg-gray-100 cursor-pointer"
                                    href="<?php echo e(route('shop.customers.account.profile.index')); ?>"
                                >
                                    <?php echo app('translator')->get('shop::app.components.layouts.header.profile'); ?>
                                </a>

                                <a
                                    class="px-5 py-2 text-[16px] hover:bg-gray-100 cursor-pointer"
                                    href="<?php echo e(route('shop.customers.account.orders.index')); ?>"
                                >
                                    <?php echo app('translator')->get('shop::app.components.layouts.header.orders'); ?>
                                </a>

                                <?php if($showWishlist): ?>
                                    <a
                                        class="px-5 py-2 text-[16px] hover:bg-gray-100 cursor-pointer"
                                        href="<?php echo e(route('shop.customers.account.wishlist.index')); ?>"
                                    >
                                        <?php echo app('translator')->get('shop::app.components.layouts.header.wishlist'); ?>
                                    </a>
                                <?php endif; ?>

                                
                                <?php if(auth()->guard('customer')->check()): ?>
                                    <?php if (isset($component)) { $__componentOriginal4d3fcee3e355fb6c8889181b04f357cc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4d3fcee3e355fb6c8889181b04f357cc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.form.index','data' => ['method' => 'DELETE','action' => ''.e(route('shop.customer.session.destroy')).'','id' => 'customerLogout']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'DELETE','action' => ''.e(route('shop.customer.session.destroy')).'','id' => 'customerLogout']); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4d3fcee3e355fb6c8889181b04f357cc)): ?>
<?php $attributes = $__attributesOriginal4d3fcee3e355fb6c8889181b04f357cc; ?>
<?php unset($__attributesOriginal4d3fcee3e355fb6c8889181b04f357cc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4d3fcee3e355fb6c8889181b04f357cc)): ?>
<?php $component = $__componentOriginal4d3fcee3e355fb6c8889181b04f357cc; ?>
<?php unset($__componentOriginal4d3fcee3e355fb6c8889181b04f357cc); ?>
<?php endif; ?>

                                    <a
                                        class="px-5 py-2 text-[16px] hover:bg-gray-100 cursor-pointer"
                                        href="<?php echo e(route('shop.customer.session.destroy')); ?>"
                                        onclick="event.preventDefault(); document.getElementById('customerLogout').submit();"
                                    >
                                        <?php echo app('translator')->get('shop::app.components.layouts.header.logout'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                         <?php $__env->endSlot(); ?>
                    <?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6eb652d0a4a36e6466d8d4f363feb553)): ?>
<?php $attributes = $__attributesOriginal6eb652d0a4a36e6466d8d4f363feb553; ?>
<?php unset($__attributesOriginal6eb652d0a4a36e6466d8d4f363feb553); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6eb652d0a4a36e6466d8d4f363feb553)): ?>
<?php $component = $__componentOriginal6eb652d0a4a36e6466d8d4f363feb553; ?>
<?php unset($__componentOriginal6eb652d0a4a36e6466d8d4f363feb553); ?>
<?php endif; ?>
            </div>
        </div>
    </div>

    
    <form action="<?php echo e(route('shop.search.index')); ?>" class="flex items-center w-full">
        <label for="organic-search" class="sr-only">Search</label>

        <div class="relative w-full">
            <div
                class="icon-search flex items-center absolute left-[12px] top-[12px] text-[25px] pointer-events-none">
            </div>

            <input
                type="text"
                class="block w-full px-11 py-3.5 border border-['#E3E3E3'] rounded-xl text-gray-900 text-xs font-medium"
                name="query"
                value="<?php echo e(request('query')); ?>"
                placeholder="<?php echo app('translator')->get('shop::app.components.layouts.header.search-text'); ?>"
                required
            >

            
        </div>
    </form>
</div>

<?php if (! $__env->hasRenderedOnce('aa1759aa-4f5c-44f9-b5c1-159c95ff1504')): $__env->markAsRenderedOnce('aa1759aa-4f5c-44f9-b5c1-159c95ff1504');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-mobile-category-template">
        <div>
            <template v-for="(category) in categories">
                <div class="flex justify-between items-center border border-b-[1px] border-l-0 border-r-0 border-t-0 border-[#f3f3f5]">
                    <a
                        :href="category.url"
                        class="flex items-center justify-between pb-[20px] mt-[20px]"
                        v-text="category.name"
                    >
                    </a>

                    <span
                        class="text-[24px] cursor-pointer"
                        :class="{'icon-arrow-down': category.isOpen, 'icon-arrow-right': ! category.isOpen}"
                        @click="toggle(category)"
                    >
                    </span>
                </div>

                <div
                    class="grid gap-[8px]"
                    v-if="category.isOpen"
                >
                    <ul v-if="category.children.length">
                        <li v-for="secondLevelCategory in category.children">
                            <div class="flex justify-between items-center ml-3 border border-b-[1px] border-l-0 border-r-0 border-t-0 border-[#f3f3f5]">
                                <a
                                    :href="secondLevelCategory.url"
                                    class="flex items-center justify-between pb-[20px] mt-[20px]"
                                    v-text="secondLevelCategory.name"
                                >
                                </a>

                                <span
                                    class="text-[24px] cursor-pointer"
                                    :class="{
                                        'icon-arrow-down': secondLevelCategory.category_show,
                                        'icon-arrow-right': ! secondLevelCategory.category_show
                                    }"
                                    @click="secondLevelCategory.category_show = ! secondLevelCategory.category_show"
                                >
                                </span>
                            </div>

                            <div v-if="secondLevelCategory.category_show">
                                <ul v-if="secondLevelCategory.children.length">
                                    <li v-for="thirdLevelCategory in secondLevelCategory.children">
                                        <div class="flex justify-between items-center ml-3 border border-b-[1px] border-l-0 border-r-0 border-t-0 border-[#f3f3f5]">
                                            <a
                                                :href="thirdLevelCategory.url"
                                                class="flex items-center justify-between mt-[20px] ml-3 pb-[20px]"
                                                v-text="thirdLevelCategory.name"
                                            >
                                            </a>
                                        </div>
                                    </li>
                                </ul>

                                <span
                                    class="ml-2"
                                    v-else
                                >
                                    <?php echo app('translator')->get('No category found.'); ?>
                                </span>
                            </div>
                        </li>
                    </ul>

                    <span
                        class="ml-2"
                        v-else
                    >
                        <?php echo app('translator')->get('No category found.'); ?>
                    </span>
                </div>
            </template>
        </div>
    </script>

    <script type="module">
        app.component('v-mobile-category', {
            template: '#v-mobile-category-template',

            data() {
                return  {
                    categories: [],
                }
            },

            mounted() {
                this.get();
            },

            methods: {
                get() {
                    this.$axios.get("<?php echo e(route('shop.api.categories.tree')); ?>")
                        .then(response => {
                            this.categories = response.data.data;
                        }).catch(error => {
                            console.log(error);
                        });
                },

                toggle(selectedCategory) {
                    this.categories = this.categories.map((category) => ({
                        ...category,
                        isOpen: category.id === selectedCategory.id ? ! category.isOpen : false,
                    }));
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Shop\src/resources/views/components/layouts/header/mobile/index.blade.php ENDPATH**/ ?>