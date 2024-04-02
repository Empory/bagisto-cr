<div class="w-full flex justify-between min-h-[78px] px-[60px]  max-1180:px-[30px]">
    
    
  

    
    <div class="flex gap-x-[35px] items-center max-lg:gap-x-[30px] max-[1100px]:gap-x-[25px]">
        
        <form
            action="<?php echo e(route('shop.search.index')); ?>"
            class="flex items-center max-w-[445px]"
        >
            <label
                for="organic-search"
                class="sr-only"
            >
                <?php echo app('translator')->get('shop::app.components.layouts.header.search'); ?>
            </label>

            <div class="relative w-full">
                <div class="icon-search flex items-center  absolute ltr:left-[12px] rtl:right-[12px] top-[10px] text-[22px] pointer-events-none"></div>

                <input
                    type="text"
                    name="query"
                    value="<?php echo e(request('query')); ?>"
                    class="block w-full px-[44px] py-[13px] bg-[#F5F5F5] rounded-lg text-gray-900 text-xs font-medium transition-all border border-transparent hover:border-gray-400 focus:border-gray-400"
                    placeholder="<?php echo app('translator')->get('shop::app.components.layouts.header.search-text'); ?>"
                    required
                >

                <?php if(core()->getConfigData('general.content.shop.image_search')): ?>
                    <?php echo $__env->make('shop::search.images.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </div>
        </form>

        
        
    </div>
    <div class="flex items-center justify-center gap-x-[135px] pr-[186px] pt-[28px] max-[1180px]:gap-x-[20px]">
        <a
            href="<?php echo e(route('shop.home.index')); ?>"
            class="place-self-start -mt-[4px]"
            aria-label="Bagisto "
        >
            <img
                src="<?php echo e(core()->getCurrentChannel()->logo_url ?? bagisto_asset('images/logo.svg')); ?>"
                width="131"
                height="29"
                alt="Bagisto"
            >
        </a>

       
    </div>
    <div class="flex items-center gap-x-[35px] mt-[5px] max-lg:gap-x-[30px] max-[1100px]:gap-x-[25px]">
        
        

        

        
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
                <span class="icon-users inline-block text-[24px] cursor-pointer"></span>
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
                            class="primary-button block w-max px-[29px] mx-auto m-0 ml-[0px] rounded-[18px] text-base text-center"
                        >
                            <?php echo app('translator')->get('shop::app.components.layouts.header.sign-in'); ?>
                        </a>

                        <a
                            href="<?php echo e(route('shop.customers.register.index')); ?>"
                            class="secondary-button block w-max m-0 ml-[0px] mx-auto px-[29px] border-2 rounded-[18px] text-base text-center"
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

                        <?php if(core()->getConfigData('general.content.shop.wishlist_option')): ?>
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
        <?php echo $__env->make('shop::checkout.cart.mini-cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>

<div class="w-full flex justify-center items-center min-h-[78px] px-[60px]  max-1180:px-[30px]">
    <v-desktop-category>
        <div class="flex gap-[20px] items-center pb-[21px]">
            <span class="shimmer w-[80px] h-[24px] rounded-[4px]"></span>
            <span class="shimmer w-[80px] h-[24px] rounded-[4px]"></span>
            <span class="shimmer w-[80px] h-[24px] rounded-[4px]"></span>
        </div>
    </v-desktop-category>
</div>

<?php if (! $__env->hasRenderedOnce('3bef074d-11b6-4793-8868-30a162ac10ec')): $__env->markAsRenderedOnce('3bef074d-11b6-4793-8868-30a162ac10ec');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-desktop-category-template">
        <div
            class="flex gap-[20px] items-center pb-[21px]"
            v-if="isLoading"
        >
            <span class="shimmer w-[80px] h-[24px] rounded-[4px]"></span>
            <span class="shimmer w-[80px] h-[24px] rounded-[4px]"></span>
            <span class="shimmer w-[80px] h-[24px] rounded-[4px]"></span>
        </div>

        <div
            class="flex items-center"
            v-else
        >
            <div
                class="relative group border-b-[4px] border-transparent hover:border-b-[4px] hover:border-navyBlue"
                v-for="category in categories"
            >
                <span>
                    <a
                        :href="category.url"
                        class="inline-block pb-[21px] px-[20px] uppercase"
                        v-text="category.name"
                    >
                    </a>
                </span>

                <div
                    class="w-max absolute top-[49px] max-h-[580px] max-w-[1260px] p-[35px] z-[1] overflow-auto overflow-x-auto bg-white shadow-[0_6px_6px_1px_rgba(0,0,0,.3)] border border-b-0 border-l-0 border-r-0 border-t-[1px] border-[#F3F3F3] pointer-events-none opacity-0 transition duration-300 ease-out translate-y-1 group-hover:pointer-events-auto group-hover:opacity-100 group-hover:translate-y-0 group-hover:ease-in group-hover:duration-200 ltr:-left-[35px] rtl:-right-[35px]"
                    v-if="category.children.length"
                >
                    <div class="flex aigns gap-x-[70px] justify-between">
                        <div
                            class="grid grid-cols-[1fr] gap-[20px] content-start w-full flex-auto min-w-max max-w-[150px]"
                            v-for="pairCategoryChildren in pairCategoryChildren(category)"
                        >
                            <template v-for="secondLevelCategory in pairCategoryChildren">
                                <p class="text-navyBlue font-medium">
                                    <a
                                        :href="secondLevelCategory.url"
                                        v-text="secondLevelCategory.name"
                                    >
                                    </a>
                                </p>

                                <ul
                                    class="grid grid-cols-[1fr] gap-[12px]"
                                    v-if="secondLevelCategory.children.length"
                                >
                                    <li
                                        class="text-[14px] font-medium text-[#6E6E6E]"
                                        v-for="thirdLevelCategory in secondLevelCategory.children"
                                    >
                                        <a
                                            :href="thirdLevelCategory.url"
                                            v-text="thirdLevelCategory.name"
                                        >
                                        </a>
                                    </li>
                                </ul>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-desktop-category', {
            template: '#v-desktop-category-template',

            data() {
                return  {
                    isLoading: true,

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
                            this.isLoading = false;

                            this.categories = response.data.data;
                        }).catch(error => {
                            console.log(error);
                        });
                },

                pairCategoryChildren(category) {
                    return category.children.reduce((result, value, index, array) => {
                        if (index % 2 === 0) {
                            result.push(array.slice(index, index + 2));
                        }

                        return result;
                    }, []);
                }
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Shop\src/resources/views/components/layouts/header/desktop/bottom.blade.php ENDPATH**/ ?>