<v-date-picker <?php echo e($attributes); ?>>
    <?php echo e($slot); ?>

</v-date-picker>

<?php if (! $__env->hasRenderedOnce('52b1468b-9525-4971-8886-4f7ed28f7a8d')): $__env->markAsRenderedOnce('52b1468b-9525-4971-8886-4f7ed28f7a8d');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-date-picker-template">
        <span class="w-full relative inline-block">
            <slot></slot>

            <i class="icon-calendar text-[24px] text-gray-400 absolute ltr:right-[8px] rtl:left-[8px] top-[50%] -translate-y-[50%]"></i>
        </span>
    </script>

    <script type="module">
        app.component('v-date-picker', {
            template: '#v-date-picker-template',

            props: {
                name: String,

                value: String,

                allowInput: {
                    type: Boolean,
                    default: true,
                },

                disable: Array,

                minDate: String,

                maxDate: String,
            },

            data: function() {
                return {
                    datepicker: null
                };
            },

            mounted: function() {
                let options = this.setOptions();

                this.activate(options);
            },

            methods: {
                setOptions: function() {
                    let self = this;

                    return {
                        allowInput: this.allowInput ?? true,
                        disable: this.disable ?? [],
                        minDate: this.minDate ?? '',
                        maxDate: this.maxDate ?? '',
                        altFormat: "Y-m-d",
                        dateFormat: "Y-m-d",
                        weekNumbers: true,

                        onChange: function(selectedDates, dateStr, instance) {
                            self.$emit("onChange", dateStr);
                        }
                    };
                },

                activate: function(options) {
                    let element = this.$el.getElementsByTagName("input")[0];

                    this.datepicker = new Flatpickr(element, options);
                },

                clear: function() {
                    this.datepicker.clear();
                }
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/flat-picker/date.blade.php ENDPATH**/ ?>