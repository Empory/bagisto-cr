<div class="flex justify-between items-center w-full py-[11px] px-16 border border-t-0 border-b-[1px] border-l-0 border-r-0">
    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.dropdown.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <!-- Dropdown Toggler -->
         <?php $__env->slot('toggle', null, []); ?> 
            <div class="flex gap-[10px] cursor-pointer">
                <span>
                    <?php echo e(core()->getCurrentCurrency()->symbol . ' ' . core()->getCurrentCurrencyCode()); ?>

                </span>

                <span class="text-[24px] icon-arrow-down"></span>
            </div>
         <?php $__env->endSlot(); ?>

        <!-- Dropdown Content -->
         <?php $__env->slot('content', null, ['class' => '!p-[0px]']); ?> 
            <v-currency-switcher></v-currency-switcher>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

    <p class="text-xs font-medium">Get UPTO 40% OFF on your 1st order <a href="#" class="underline">SHOP NOW</a></p>

    
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.dropdown.index','data' => ['position' => 'bottom-right']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['position' => 'bottom-right']); ?>
         <?php $__env->slot('toggle', null, []); ?> 
            
            <div class="flex items-center gap-[10px] cursor-pointer">
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
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</div>

<?php if (! $__env->hasRenderedOnce('ef0d29ff-3516-426a-8379-6f841f160f94')): $__env->markAsRenderedOnce('ef0d29ff-3516-426a-8379-6f841f160f94');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-currency-switcher-template">
        <div class="grid gap-[4px] mt-[10px] pb-[10px]">
            <span
                class="px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100"
                v-for="currency in currencies"
                :class="{'bg-gray-100': currency.code == '<?php echo e(core()->getCurrentCurrencyCode()); ?>'}"
                @click="change(currency)"
            >
                {{ currency.symbol + ' ' + currency.code }}
            </span>
        </div>
    </script>

    <script type="text/x-template" id="v-locale-switcher-template">
        <div class="grid gap-[4px] mt-[10px] pb-[10px]">
            <span
                class="flex items-center gap-[10px] px-5 py-2 text-[16px] cursor-pointer hover:bg-gray-100"
                v-for="locale in locales"
                :class="{'bg-gray-100': locale.code == '<?php echo e(app()->getLocale()); ?>'}"
                @click="change(locale)"                  
            >
                <img
                    :src="locale.logo_url || '<?php echo e(bagisto_asset('images/default-language.svg')); ?>'"
                    width="24"
                    height="16"
                />

                {{ locale.name }}
            </span>
        </div>
    </script>

    <script type="module">
        app.component('v-currency-switcher', {
            template: '#v-currency-switcher-template',

            data() {
                return {
                    currencies: <?php echo json_encode(core()->getCurrentChannel()->currencies, 15, 512) ?>,
                };
            },

            methods: {
                change(currency) {
                    let url = new URL(window.location.href);

                    url.searchParams.set('currency', currency.code);

                    window.location.href = url.href;
                }
            }
        });

        app.component('v-locale-switcher', {
            template: '#v-locale-switcher-template',

            data() {
                return {
                    locales: <?php echo json_encode(core()->getCurrentChannel()->locales()->orderBy('name')->get(), 15, 512) ?>,
                };
            },

            methods: {
                change(locale) {
                    let url = new URL(window.location.href);

                    url.searchParams.set('locale', locale.code);

                    window.location.href = url.href;
                }
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Shop\src/resources/views/components/layouts/header/desktop/top.blade.php ENDPATH**/ ?>