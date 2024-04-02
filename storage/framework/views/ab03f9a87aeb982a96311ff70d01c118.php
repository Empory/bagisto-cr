<div class="flex bg-headerBlack justify-between items-center w-full py-[11px] px-16 border border-t-0 border-b-[1px] border-l-0 border-r-0">
    

    <p class="text-xs bg-headerBlack text-white text-center w-full font-medium">
        Premium Handmade
         
        </p>

    
</div>

<?php if (! $__env->hasRenderedOnce('253af86a-63d6-4057-bd96-1ab2361f918a')): $__env->markAsRenderedOnce('253af86a-63d6-4057-bd96-1ab2361f918a');
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