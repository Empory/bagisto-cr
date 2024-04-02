<div v-for="column in available.columns">
    <div v-if="column.filterable">
        <!-- Boolean -->
        <div v-if="column.type === 'boolean'">
            <div class="flex items-center justify-between">
                <p
                    class="text-[14px] font-medium leading-[24px] dark:text-white text-gray-800"
                    v-text="column.label"
                >
                </p>

                <div
                    class="flex items-center gap-x-[5px]"
                    @click="removeAppliedColumnAllValues(column.index)"
                >
                    <p
                        class="cursor-pointer text-[12px] font-medium leading-[24px] text-blue-600"
                        v-if="hasAnyAppliedColumnValues(column.index)"
                    >
                        <?php echo app('translator')->get('admin::app.components.datagrid.filters.custom-filters.clear-all'); ?>
                    </p>
                </div>
            </div>

            <div class="mb-[8px] mt-[5px]">
                <?php if (isset($component)) { $__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.dropdown.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <!-- Dropdown Toggler -->
                     <?php $__env->slot('toggle', null, []); ?> 
                        <button
                            type="button"
                            class="inline-flex w-full cursor-pointer appearance-none items-center justify-between gap-x-[8px] rounded-[6px] border dark:border-gray-800 bg-white dark:bg-gray-900 px-[10px] py-[6px] text-center leading-[24px] text-gray-600 dark:text-gray-300 transition-all marker:shadow hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400"
                        >
                            <span 
                                class="text-[14px] text-gray-400 dark:text-gray-400" 
                                v-text="'<?php echo app('translator')->get('admin::app.components.datagrid.filters.select'); ?>'"
                            >
                            </span>

                            <span class="icon-sort-down text-[24px]"></span>
                        </button>
                     <?php $__env->endSlot(); ?>

                    <!-- Dropdown Content -->
                     <?php $__env->slot('menu', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginal0223c8534d6a243be608c3a65289c4d0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0223c8534d6a243be608c3a65289c4d0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.dropdown.menu.item','data' => ['vFor' => 'option in column.options','vText' => 'option.label','@click' => 'filterPage(option.value, column)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::dropdown.menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-for' => 'option in column.options','v-text' => 'option.label','@click' => 'filterPage(option.value, column)']); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0223c8534d6a243be608c3a65289c4d0)): ?>
<?php $attributes = $__attributesOriginal0223c8534d6a243be608c3a65289c4d0; ?>
<?php unset($__attributesOriginal0223c8534d6a243be608c3a65289c4d0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0223c8534d6a243be608c3a65289c4d0)): ?>
<?php $component = $__componentOriginal0223c8534d6a243be608c3a65289c4d0; ?>
<?php unset($__componentOriginal0223c8534d6a243be608c3a65289c4d0); ?>
<?php endif; ?>
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

            <div class="mb-[16px] flex gap-2">
                <p
                    class="flex items-center rounded-[4px] bg-gray-600 px-[8px] py-[4px] font-semibold text-white"
                    v-for="appliedColumnValue in getAppliedColumnValues(column.index)"
                >
                    <!-- Retrieving the label from the options based on the applied column value. -->
                    <span v-text="column.options.find((option => option.value == appliedColumnValue)).label"></span>

                    <span
                        class="icon-cross cursor-pointer text-[18px] text-white ltr:ml-[5px] rtl:mr-[5px]"
                        @click="removeAppliedColumnValue(column.index, appliedColumnValue)"
                    >
                    </span>
                </p>
            </div>
        </div>

        <!-- Dropdown -->
        <div v-else-if="column.type === 'dropdown'">
            <!-- Basic -->
            <div v-if="column.options.type === 'basic'">
                <div class="flex items-center justify-between">
                    <p
                        class="text-[14px] font-medium leading-[24px] dark:text-white text-gray-800"
                        v-text="column.label"
                    >
                    </p>

                    <div
                        class="flex items-center gap-x-[5px]"
                        @click="removeAppliedColumnAllValues(column.index)"
                    >
                        <p
                            class="cursor-pointer text-[12px] font-medium leading-[24px] text-blue-600"
                            v-if="hasAnyAppliedColumnValues(column.index)"
                        >
                            <?php echo app('translator')->get('admin::app.components.datagrid.filters.custom-filters.clear-all'); ?>
                        </p>
                    </div>
                </div>

                <div class="mb-[8px] mt-[5px]">
                    <?php if (isset($component)) { $__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.dropdown.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <!-- Dropdown Toggler -->
                         <?php $__env->slot('toggle', null, []); ?> 
                            <button
                                type="button"
                                class="inline-flex w-full cursor-pointer appearance-none items-center justify-between gap-x-[8px] rounded-[6px] border dark:border-gray-800 bg-white dark:bg-gray-900 px-[10px] py-[6px] text-center leading-[24px] text-gray-600 dark:text-gray-300 transition-all marker:shadow hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 "
                            >
                                <span 
                                    class="text-[14px] text-gray-400 dark:text-gray-400" 
                                    v-text="'<?php echo app('translator')->get('admin::app.components.datagrid.filters.select'); ?>'"
                                >
                                </span>

                                <span class="icon-sort-down text-[24px]"></span>
                            </button>
                         <?php $__env->endSlot(); ?>

                        <!-- Dropdown Content -->
                         <?php $__env->slot('menu', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginal0223c8534d6a243be608c3a65289c4d0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0223c8534d6a243be608c3a65289c4d0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.dropdown.menu.item','data' => ['vFor' => 'option in column.options.params.options','vText' => 'option.label','@click' => 'filterPage(option.value, column)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::dropdown.menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-for' => 'option in column.options.params.options','v-text' => 'option.label','@click' => 'filterPage(option.value, column)']); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0223c8534d6a243be608c3a65289c4d0)): ?>
<?php $attributes = $__attributesOriginal0223c8534d6a243be608c3a65289c4d0; ?>
<?php unset($__attributesOriginal0223c8534d6a243be608c3a65289c4d0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0223c8534d6a243be608c3a65289c4d0)): ?>
<?php $component = $__componentOriginal0223c8534d6a243be608c3a65289c4d0; ?>
<?php unset($__componentOriginal0223c8534d6a243be608c3a65289c4d0); ?>
<?php endif; ?>
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

                <div class="mb-[16px] flex gap-2">
                    <p
                        class="flex items-center rounded-[4px] bg-gray-600 px-[8px] py-[4px] font-semibold text-white"
                        v-for="appliedColumnValue in getAppliedColumnValues(column.index)"
                    >
                        <!-- Retrieving the label from the options based on the applied column value. -->
                        <span v-text="column.options.params.options.find((option => option.value == appliedColumnValue)).label"></span>

                        <span
                            class="icon-cross cursor-pointer text-[18px] text-white ltr:ml-[5px] rtl:mr-[5px]"
                            @click="removeAppliedColumnValue(column.index, appliedColumnValue)"
                        >
                        </span>
                    </p>
                </div>
            </div>

            <!-- Searchable -->
            <div v-else-if="column.options.type === 'searchable'">
                <div class="flex items-center justify-between">
                    <p
                        class="text-[14px] font-medium leading-[24px] dark:text-white text-gray-800"
                        v-text="column.label"
                    >
                    </p>

                    <div
                        class="flex items-center gap-x-[5px]"
                        @click="removeAppliedColumnAllValues(column.index)"
                    >
                        <p
                            class="cursor-pointer text-[12px] font-medium leading-[24px] text-blue-600"
                            v-if="hasAnyAppliedColumnValues(column.index)"
                        >
                            <?php echo app('translator')->get('admin::app.components.datagrid.filters.custom-filters.clear-all'); ?>
                        </p>
                    </div>
                </div>

                <div class="mb-[8px] mt-[5px]">
                    <v-datagrid-searchable-dropdown
                        :datagrid-id="available.id"
                        :column="column"
                        @select-option="filterPage($event, column)"
                    >
                    </v-datagrid-searchable-dropdown>
                </div>

                <div class="mb-[16px] flex gap-2">
                    <p
                        class="flex items-center rounded-[4px] bg-gray-600 px-[8px] py-[4px] font-semibold text-white"
                        v-for="appliedColumnValue in getAppliedColumnValues(column.index)"
                    >
                        <span v-text="appliedColumnValue"></span>

                        <span
                            class="icon-cross cursor-pointer text-[18px] text-white ltr:ml-[5px] rtl:mr-[5px]"
                            @click="removeAppliedColumnValue(column.index, appliedColumnValue)"
                        >
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Date Range -->
        <div v-else-if="column.type === 'date_range'">
            <div class="flex items-center justify-between">
                <p
                    class="text-[14px] font-medium leading-[24px] dark:text-white"
                    v-text="column.label"
                >
                </p>

                <div
                    class="flex items-center gap-x-[5px]"
                    @click="removeAppliedColumnAllValues(column.index)"
                >
                    <p
                        class="cursor-pointer text-[12px] font-medium leading-[24px] text-blue-600"
                        v-if="hasAnyAppliedColumnValues(column.index)"
                    >
                        <?php echo app('translator')->get('admin::app.components.datagrid.filters.custom-filters.clear-all'); ?>
                    </p>
                </div>
            </div>

            <div class="mt-[5px] grid grid-cols-2 gap-[5px]">
                <p
                    class="cursor-pointer rounded-[6px] border px-[8px] py-[6px] text-center text-[14px] font-medium leading-[24px] text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:text-gray-300"
                    v-for="option in column.options"
                    v-text="option.label"
                    @click="filterPage(
                        $event,
                        column,
                        { quickFilter: { isActive: true, selectedFilter: option } }
                    )"
                >
                </p>

                <?php if (isset($component)) { $__componentOriginalfb6be9e824dd35fb24e37e299d255b9b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flat-picker.date','data' => [':allowInput' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::flat-picker.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([':allow-input' => 'false']); ?>
                    <input
                        value=""
                        class="flex min-h-[39px] w-full rounded-[6px] border px-3 py-2 text-[14px] text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300"
                        :type="column.input_type"
                        :name="`${column.index}[from]`"
                        :placeholder="column.label"
                        :ref="`${column.index}[from]`"
                        @change="filterPage(
                            $event,
                            column,
                            { range: { name: 'from' }, quickFilter: { isActive: false } }
                        )"
                    />
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b)): ?>
<?php $attributes = $__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b; ?>
<?php unset($__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb6be9e824dd35fb24e37e299d255b9b)): ?>
<?php $component = $__componentOriginalfb6be9e824dd35fb24e37e299d255b9b; ?>
<?php unset($__componentOriginalfb6be9e824dd35fb24e37e299d255b9b); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginalfb6be9e824dd35fb24e37e299d255b9b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flat-picker.date','data' => [':allowInput' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::flat-picker.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([':allow-input' => 'false']); ?>
                    <input
                        type="column.input_type"
                        value=""
                        class="flex min-h-[39px] w-full rounded-[6px] border px-3 py-2 text-[14px] text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300"
                        :name="`${column.index}[to]`"
                        :placeholder="column.label"
                        :ref="`${column.index}[from]`"
                        @change="filterPage(
                            $event,
                            column,
                            { range: { name: 'to' }, quickFilter: { isActive: false } }
                        )"
                    />
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b)): ?>
<?php $attributes = $__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b; ?>
<?php unset($__attributesOriginalfb6be9e824dd35fb24e37e299d255b9b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfb6be9e824dd35fb24e37e299d255b9b)): ?>
<?php $component = $__componentOriginalfb6be9e824dd35fb24e37e299d255b9b; ?>
<?php unset($__componentOriginalfb6be9e824dd35fb24e37e299d255b9b); ?>
<?php endif; ?>

                <div class="mb-[16px] flex gap-2">
                    <p
                        class="flex items-center rounded-[4px] bg-gray-600 px-[8px] py-[3px] font-semibold text-white"
                        v-for="appliedColumnValue in getAppliedColumnValues(column.index)"
                    >
                        <span v-text="appliedColumnValue.join(' to ')"></span>

                        <span
                            class="icon-cross cursor-pointer text-[18px] text-white ltr:ml-[5px] rtl:mr-[5px]"
                            @click="removeAppliedColumnValue(column.index, appliedColumnValue)"
                        >
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Date Time Range -->
        <div v-else-if="column.type === 'datetime_range'">
            <div class="flex items-center justify-between">
                <p
                    class="text-[14px] font-medium leading-[24px] dark:text-white"
                    v-text="column.label"
                >
                </p>

                <div
                    class="flex items-center gap-x-[5px]"
                    @click="removeAppliedColumnAllValues(column.index)"
                >
                    <p
                        class="cursor-pointer text-[12px] font-medium leading-[24px] text-blue-600"
                        v-if="hasAnyAppliedColumnValues(column.index)"
                    >
                        <?php echo app('translator')->get('admin::app.components.datagrid.filters.custom-filters.clear-all'); ?>
                    </p>
                </div>
            </div>

            <div class="my-[16px] grid grid-cols-2 gap-[5px]">
                <p
                    class="cursor-pointer rounded-[6px] border px-[8px] py-[6px] text-center text-[14px] font-medium leading-[24px] text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:text-gray-300"
                    v-for="option in column.options"
                    v-text="option.label"
                    @click="filterPage(
                        $event,
                        column,
                        { quickFilter: { isActive: true, selectedFilter: option } }
                    )"
                >
                </p>

                <?php if (isset($component)) { $__componentOriginal2199caa745350ee1c77f1b71e4499f91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2199caa745350ee1c77f1b71e4499f91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flat-picker.datetime','data' => [':allowInput' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::flat-picker.datetime'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([':allow-input' => 'false']); ?>
                    <input
                        value=""
                        class="flex min-h-[39px] w-full rounded-[6px] border px-3 py-2 text-[14px] text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300"
                        :type="column.input_type"
                        :name="`${column.index}[from]`"
                        :placeholder="column.label"
                        :ref="`${column.index}[from]`"
                        @change="filterPage(
                            $event,
                            column,
                            { range: { name: 'from' }, quickFilter: { isActive: false } }
                        )"
                    />
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2199caa745350ee1c77f1b71e4499f91)): ?>
<?php $attributes = $__attributesOriginal2199caa745350ee1c77f1b71e4499f91; ?>
<?php unset($__attributesOriginal2199caa745350ee1c77f1b71e4499f91); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2199caa745350ee1c77f1b71e4499f91)): ?>
<?php $component = $__componentOriginal2199caa745350ee1c77f1b71e4499f91; ?>
<?php unset($__componentOriginal2199caa745350ee1c77f1b71e4499f91); ?>
<?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal2199caa745350ee1c77f1b71e4499f91 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2199caa745350ee1c77f1b71e4499f91 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flat-picker.datetime','data' => [':allowInput' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::flat-picker.datetime'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([':allow-input' => 'false']); ?>
                    <input
                        type="column.input_type"
                        value=""
                        class="flex min-h-[39px] w-full rounded-[6px] border px-3 py-2 text-[14px] text-gray-600 transition-all hover:border-gray-400 dark:border-gray-800 dark:bg-gray-900 dark:text-gray-300"
                        :name="`${column.index}[to]`"
                        :placeholder="column.label"
                        :ref="`${column.index}[from]`"
                        @change="filterPage(
                            $event,
                            column,
                            { range: { name: 'to' }, quickFilter: { isActive: false } }
                        )"
                    />
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2199caa745350ee1c77f1b71e4499f91)): ?>
<?php $attributes = $__attributesOriginal2199caa745350ee1c77f1b71e4499f91; ?>
<?php unset($__attributesOriginal2199caa745350ee1c77f1b71e4499f91); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2199caa745350ee1c77f1b71e4499f91)): ?>
<?php $component = $__componentOriginal2199caa745350ee1c77f1b71e4499f91; ?>
<?php unset($__componentOriginal2199caa745350ee1c77f1b71e4499f91); ?>
<?php endif; ?>

                <div class="mb-[16px] flex gap-2">
                    <p
                        class="flex items-center rounded-[4px] bg-gray-600 px-[8px] py-[3px] font-semibold text-white"
                        v-for="appliedColumnValue in getAppliedColumnValues(column.index)"
                    >
                        <span v-text="appliedColumnValue.join(' to ')"></span>

                        <span
                            class="icon-cross cursor-pointer text-[18px] text-white ltr:ml-[5px] rtl:mr-[5px]"
                            @click="removeAppliedColumnValue(column.index, appliedColumnValue)"
                        >
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <!-- Rest -->
        <div v-else>
            <div class="flex items-center justify-between">
                <p
                    class="text-[14px] font-medium leading-[24px] dark:text-white"
                    v-text="column.label"
                >
                </p>

                <div
                    class="flex items-center gap-x-[5px]"
                    @click="removeAppliedColumnAllValues(column.index)"
                >
                    <p
                        class="cursor-pointer text-[12px] font-medium leading-[24px] text-blue-600"
                        v-if="hasAnyAppliedColumnValues(column.index)"
                    >
                        <?php echo app('translator')->get('admin::app.components.datagrid.filters.custom-filters.clear-all'); ?>
                    </p>
                </div>
            </div>

            <div class="mb-[8px] mt-[5px] grid">
                <input
                    type="text"
                    class="block w-full rounded-[6px] border dark:border-gray-800 bg-white dark:bg-gray-900 px-[8px] py-[6px] text-[14px] leading-[24px] text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400"
                    :name="column.index"
                    :placeholder="column.label"
                    @keyup.enter="filterPage($event, column)"
                />
            </div>

            <div class="mb-[16px] flex gap-2">
                <p
                    class="flex items-center rounded-[4px] bg-gray-600 px-[8px] py-[4px] font-semibold text-white"
                    v-for="appliedColumnValue in getAppliedColumnValues(column.index)"
                >
                    <span v-text="appliedColumnValue"></span>

                    <span
                        class="icon-cross cursor-pointer text-[18px] text-white ltr:ml-[5px] rtl:mr-[5px]"
                        @click="removeAppliedColumnValue(column.index, appliedColumnValue)"
                    >
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>

<?php if (! $__env->hasRenderedOnce('7dcc54b2-0888-40f6-b538-03ff79008763')): $__env->markAsRenderedOnce('7dcc54b2-0888-40f6-b538-03ff79008763');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-datagrid-searchable-dropdown-template">
        <?php if (isset($component)) { $__componentOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf937e0ec72fa678d3a0c6dc6c0ac5f2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.dropdown.index','data' => [':closeOnClick' => 'false']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([':close-on-click' => 'false']); ?>
            <!-- Dropdown Toggler -->
             <?php $__env->slot('toggle', null, []); ?> 
                <button
                    type="button"
                    class="inline-flex w-full cursor-pointer appearance-none items-center justify-between gap-x-[8px] rounded-[6px] border dark:border-gray-800 bg-white dark:bg-gray-900 px-[10px] py-[6px] text-center leading-[24px] text-gray-600 dark:text-gray-300 transition-all marker:shadow hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 "
                >
                    <span
                        class="text-[14px] text-gray-400 dark:text-gray-400" 
                        v-text="'<?php echo app('translator')->get('admin::app.components.datagrid.filters.select'); ?>'"
                    >
                    </span>

                    <span class="icon-sort-down text-[24px]"></span>
                </button>
             <?php $__env->endSlot(); ?>

            <!-- Dropdown Content -->
             <?php $__env->slot('menu', null, []); ?> 
                <div class="relative">
                    <div class="relative rounded">
                        <ul class="list-reset">
                            <li class="p-2">
                                <input
                                    class="block w-full rounded-[6px] border dark:border-gray-800 bg-white dark:bg-gray-900 px-[8px] py-[6px] text-[14px] leading-[24px] text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400"
                                    @keyup="lookUp($event)"
                                >
                            </li>

                            <ul class="p-2">
                                <li v-if="!isMinimumCharacters">
                                    <p
                                        class="block p-2 text-gray-600 dark:text-gray-300"
                                        v-text="'<?php echo app('translator')->get('admin::app.components.datagrid.filters.dropdown.searchable.atleast-two-chars'); ?>'"
                                    >
                                    </p>
                                </li>

                                <li v-else-if="!searchedOptions.length">
                                    <p
                                        class="block p-2 text-gray-600 dark:text-gray-300"
                                        v-text="'<?php echo app('translator')->get('admin::app.components.datagrid.filters.dropdown.searchable.no-results'); ?>'"
                                    >
                                    </p>
                                </li>

                                <li
                                    v-for="option in searchedOptions"
                                    v-else
                                >
                                    <p
                                        class="text-[14px] text-gray-600 dark:text-gray-300 p-2 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-950"
                                        v-text="option.label"
                                        @click="selectOption(option)"
                                    >
                                    </p>
                                </li>
                            </ul>
                        </ul>
                    </div>
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
        app.component('v-datagrid-searchable-dropdown', {
            template: '#v-datagrid-searchable-dropdown-template',

            props: ['datagridId', 'column'],

            data() {
                return {
                    isMinimumCharacters: false,

                    searchedOptions: [],
                };
            },

            methods: {
                lookUp($event) {
                    let params = {
                        datagrid_id: this.datagridId,
                        column: this.column.index,
                        search: $event.target.value,
                    };

                    if (!(params['search'].length > 1)) {
                        this.searchedOptions = [];

                        this.isMinimumCharacters = false;

                        return;
                    }

                    this.$axios
                        .get('<?php echo e(route('admin.datagrid.look_up')); ?>', {
                            params
                        })
                        .then(({
                            data
                        }) => {
                            this.isMinimumCharacters = true;

                            this.searchedOptions = data;
                        });
                },

                selectOption(option) {
                    this.searchedOptions = [];

                    this.$emit('select-option', {
                        target: {
                            value: option.value
                        }
                    });
                },
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/datagrid/filters.blade.php ENDPATH**/ ?>