<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['isMultiRow' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['isMultiRow' => false]); ?>
<?php foreach (array_filter((['isMultiRow' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<v-datagrid-table>
    <?php echo e($slot); ?>

</v-datagrid-table>

<?php if (! $__env->hasRenderedOnce('0e0e3642-ea3b-4191-a5a1-4de3b3e2f930')): $__env->markAsRenderedOnce('0e0e3642-ea3b-4191-a5a1-4de3b3e2f930');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-datagrid-table-template">
        <div class="w-full">
            <div class="table-responsive grid w-full box-shadow rounded-[4px] bg-white dark:bg-gray-900 overflow-hidden">
                <slot name="header">
                    <template v-if="$parent.isLoading">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.datagrid.table.head','data' => ['isMultiRow' => $isMultiRow]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.datagrid.table.head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMultiRow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isMultiRow)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </template>

                    <template v-else>
                        <div
                            class="row grid gap-[10px] min-h-[47px] px-[16px] py-[10px] border-b-[1px] dark:border-gray-800 text-gray-600 dark:text-gray-300 bg-gray-50 dark:bg-gray-900 font-semibold items-center"
                            :style="`grid-template-columns: repeat(${gridsCount}, 1fr)`"
                        >
                            <!-- Mass Actions -->
                            <p v-if="$parent.available.massActions.length">
                                <label for="mass_action_select_all_records">
                                    <input
                                        type="checkbox"
                                        name="mass_action_select_all_records"
                                        id="mass_action_select_all_records"
                                        class="peer hidden"
                                        :checked="['all', 'partial'].includes($parent.applied.massActions.meta.mode)"
                                        @change="$parent.selectAllRecords"
                                    >

                                    <span
                                        class="icon-uncheckbox cursor-pointer rounded-[6px] text-[24px]"
                                        :class="[
                                            $parent.applied.massActions.meta.mode === 'all' ? 'peer-checked:icon-checked peer-checked:text-blue-600 ' : (
                                                $parent.applied.massActions.meta.mode === 'partial' ? 'peer-checked:icon-checkbox-partial peer-checked:text-blue-600' : ''
                                            ),
                                        ]"
                                    >
                                    </span>
                                </label>
                            </p>

                            <!-- Columns -->
                            <p
                                v-for="column in $parent.available.columns"
                                class="flex gap-[5px] items-center"
                                :class="{'cursor-pointer select-none hover:text-gray-800 dark:hover:text-white': column.sortable}"
                                @click="$parent.sortPage(column)"
                            >
                                {{ column.label }}

                                <i
                                    class="text-[16px] text-gray-600 dark:text-gray-300 align-text-bottom"
                                    :class="[$parent.applied.sort.order === 'asc' ? 'icon-down-stat': 'icon-up-stat']"
                                    v-if="column.index == $parent.applied.sort.column"
                                ></i>
                            </p>

                            <!-- Actions -->
                            <p
                                class="col-start-[none]"
                                v-if="$parent.available.actions.length"
                            >
                                <?php echo app('translator')->get('admin::app.components.datagrid.table.actions'); ?>
                            </p>
                        </div>
                    </template>
                </slot>

                <slot name="body">
                    <template v-if="$parent.isLoading">
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.datagrid.table.body','data' => ['isMultiRow' => $isMultiRow]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.datagrid.table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isMultiRow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isMultiRow)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                    </template>

                    <template v-else>
                        <template v-if="$parent.available.records.length">
                            <div
                                class="row grid gap-[10px] items-center px-[16px] py-[16px] border-b-[1px] dark:border-gray-800 text-gray-600 dark:text-gray-300 transition-all hover:bg-gray-50 dark:hover:bg-gray-950"
                                v-for="record in $parent.available.records"
                                :style="`grid-template-columns: repeat(${gridsCount}, 1fr)`"
                            >
                                <!-- Mass Actions -->
                                <p v-if="$parent.available.massActions.length">
                                    <label :for="`mass_action_select_record_${record[$parent.available.meta.primary_column]}`">
                                        <input
                                            type="checkbox"
                                            class="peer hidden"
                                            :name="`mass_action_select_record_${record[$parent.available.meta.primary_column]}`"
                                            :value="record[$parent.available.meta.primary_column]"
                                            :id="`mass_action_select_record_${record[$parent.available.meta.primary_column]}`"
                                            v-model="$parent.applied.massActions.indices"
                                            @change="$parent.setCurrentSelectionMode"
                                        >

                                        <span class="icon-uncheckbox peer-checked:icon-checked peer-checked:text-blue-600 cursor-pointer rounded-[6px] text-[24px] peer-checked:text-blue-600">
                                        </span>
                                    </label>
                                </p>

                                <!-- Columns -->
                                <p
                                    v-if="record.is_closure"
                                    v-for="column in $parent.available.columns"
                                    v-html="record[column.index]"
                                >
                                </p>

                                <p
                                    v-else
                                    v-for="column in $parent.available.columns"
                                    v-html="record[column.index]"
                                >
                                </p>

                                <!-- Actions -->
                                <p
                                    v-if="$parent.available.actions.length"
                                    class="col-start-[none]"
                                >
                                    <span
                                        class="cursor-pointer rounded-[6px] p-[6px] text-[24px] transition-all hover:bg-gray-200 dark:hover:bg-gray-800 max-sm:place-self-center"
                                        :class="action.icon"
                                        v-text="!action.icon ? action.title : ''"
                                        v-for="action in record.actions"
                                        @click="$parent.performAction(action)"
                                    >
                                    </span>
                                </p>
                            </div>
                        </template>

                        <template v-else>
                            <div class="row grid px-[16px] py-[16px] border-b-[1px] dark:border-gray-800 text-gray-600 dark:text-gray-300 text-center">
                                <p>
                                    <?php echo app('translator')->get('admin::app.components.datagrid.table.no-records-available'); ?>
                                </p>
                            </div>
                        </template>
                    </template>
                </slot>
            </div>
        </div>
    </script>

    <script type="module">
        app.component('v-datagrid-table', {
            template: '#v-datagrid-table-template',

            computed: {
                gridsCount() {
                    let count = this.$parent.available.columns.length;

                    if (this.$parent.available.actions.length) {
                        ++count;
                    }

                    if (this.$parent.available.massActions.length) {
                        ++count;
                    }

                    return count;
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/datagrid/table.blade.php ENDPATH**/ ?>