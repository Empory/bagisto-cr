<v-datagrid-export <?php echo e($attributes); ?>>
    <div class="p-[6px] items-center cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800 hover:rounded-[6px]">
        <p class="text-gray-600 dark:text-gray-300 font-semibold leading-[24px]">
            <?php echo app('translator')->get('admin::app.export.export'); ?>
        </p>
    </div>
</v-datagrid-export>

<?php if (! $__env->hasRenderedOnce('c9da5151-0d30-4ba7-8601-aabeaac5bfcb')): $__env->markAsRenderedOnce('c9da5151-0d30-4ba7-8601-aabeaac5bfcb');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-datagrid-export-template">
        <div class="p-[6px] items-center cursor-pointer transition-all hover:bg-gray-200 dark:hover:bg-gray-800 hover:rounded-[6px]">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.modal.index','data' => ['ref' => 'exportModal']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['ref' => 'exportModal']); ?>
                 <?php $__env->slot('toggle', null, []); ?> 
                    <p class="text-gray-600 dark:text-gray-300 font-semibold leading-[24px]">
                        <?php echo app('translator')->get('admin::app.export.export'); ?>
                    </p>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('header', null, []); ?> 
                    <p class="text-[18px] text-gray-800 dark:text-white font-bold">
                        <?php echo app('translator')->get('admin::app.export.download'); ?>
                    </p>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('content', null, []); ?> 
                    <div class="p-[16px]">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.index','data' => ['action' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => '']); ?>
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.form.control-group.control','data' => ['type' => 'select','name' => 'format','vModel' => 'format']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::form.control-group.control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'select','name' => 'format','v-model' => 'format']); ?>
                                    <option value="xls"><?php echo app('translator')->get('admin::app.export.xls'); ?></option>
                                    <option value="csv"><?php echo app('translator')->get('admin::app.export.csv'); ?></option>
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
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </div>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('footer', null, []); ?> 
                    <button
                        type="button"
                        class="primary-button"
                        @click="download"
                    >
                        <?php echo app('translator')->get('admin::app.export.export'); ?>
                    </button>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </div>
    </script>

    <script type="module">
        app.component('v-datagrid-export', {
            template: '#v-datagrid-export-template',

            props: ['src'],

            data() {
                return {
                    format: 'xls',

                    available: null,

                    applied: null,
                };
            },

            mounted() {
                this.registerEvents();
            },

            methods: {
                registerEvents() {
                    this.$emitter.on('change-datagrid', this.updateProperties);
                },

                updateProperties({available, applied }) {
                    this.available = available;

                    this.applied = applied;
                },

                download() {
                    if (! this.available?.records?.length) {                        
                        this.$emitter.emit('add-flash', { type: 'warning', message: '<?php echo app('translator')->get('admin::app.export.no-records'); ?>' });

                        this.$refs.exportModal.toggle();
                    } else {
                        let params = {
                            export: 1,
    
                            format: this.format,
    
                            sort: {},
    
                            filters: {},
                        };
    
                        if (
                            this.applied.sort.column &&
                            this.applied.sort.order
                        ) {
                            params.sort = this.applied.sort;
                        }
    
                        this.applied.filters.columns.forEach(column => {
                            params.filters[column.index] = column.value;
                        });
    
                        this.$axios
                            .get(this.src, {
                                params,
                                responseType: 'blob',
                            })
                            .then((response) => {
                                const url = window.URL.createObjectURL(new Blob([response.data]));

                                /**
                                 * Link generation.
                                 */
                                const link = document.createElement('a');
                                link.href = url;
                                link.setAttribute('download', `${(Math.random() + 1).toString(36).substring(7)}.${this.format}`);

                                /**
                                 * Adding a link to a document, clicking on the link, and then removing the link.
                                 */
                                document.body.appendChild(link);
                                link.click();
                                document.body.removeChild(link);

                                this.$refs.exportModal.toggle();
                            });
                    }
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/datagrid/export/index.blade.php ENDPATH**/ ?>