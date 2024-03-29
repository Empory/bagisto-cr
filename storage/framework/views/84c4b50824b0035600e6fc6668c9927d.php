<template v-if="isLoading">
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.shimmer.datagrid.toolbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::shimmer.datagrid.toolbar'); ?>
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
    <div class="mt-[28px] flex items-center justify-between gap-[16px] max-md:flex-wrap">
        <!-- Left Toolbar -->
        <div class="flex gap-x-[4px]">
            <!-- Mass Actions Panel -->
            <div
                class="flex w-full items-center gap-x-[4px]"
                v-if="applied.massActions.indices.length"
            >
                <!-- Mass Action Dropdown -->
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
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
                            class="inline-flex w-full max-w-max cursor-pointer appearance-none items-center justify-between gap-x-[8px] rounded-[6px] border dark:border-gray-800 bg-white dark:bg-gray-900 px-[10px] py-[6px] text-center leading-[24px] text-gray-600 dark:text-gray-300 transition-all marker:shadow hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 focus:ring-black"
                        >
                            <span>
                                <?php echo app('translator')->get('admin::app.components.datagrid.toolbar.mass-actions.select-action'); ?>
                            </span>

                            <span class="icon-sort-down text-[24px]"></span>
                        </button>
                     <?php $__env->endSlot(); ?>

                    <!-- Dropdown Content -->
                     <?php $__env->slot('menu', null, ['class' => '!p-0 shadow-[0_5px_20px_rgba(0,0,0,0.15)] dark:border-gray-800']); ?> 
                        <template v-for="massAction in available.massActions">
                            <li
                                class="group/item relative overflow-visible"
                                v-if="massAction?.options?.length"
                            >
                                <a
                                    class="flex gap-[5px] justify-between whitespace-no-wrap cursor-not-allowed rounded-t px-4 py-2 text-[14px] text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-950"
                                    href="javascript:void(0);"
                                >
                                    <i
                                        class="text-[24px]"
                                        :class="massAction.icon"
                                        v-if="massAction?.icon"
                                    >
                                    </i>

                                    <span>
                                        {{ massAction.title }}
                                    </span>

                                    <i class="icon-arrow-left text-[20px] -mt-[1px]"></i>
                                </a>

                                <ul class="absolute ltr:left-full rtl:right-full top-0 z-10 hidden w-max min-w-[150px] border dark:border-gray-800 rounded-[4px] bg-white dark:bg-gray-900 shadow-[0_5px_20px_rgba(0,0,0,0.15)] group-hover/item:block">
                                    <li v-for="option in massAction.options">
                                        <a
                                            class="whitespace-no-wrap block rounded-t px-4 py-2 text-[14px] text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-950"
                                            href="javascript:void(0);"
                                            v-text="option.label"
                                            @click="performMassAction(massAction, option)"
                                        >
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li v-else>
                                <a
                                    class="flex gap-[5px] whitespace-no-wrap rounded-b px-4 py-2 text-[14px] text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-950"
                                    href="javascript:void(0);"
                                    @click="performMassAction(massAction)"
                                >
                                    <i
                                        class="text-[24px]"
                                        :class="massAction.icon"
                                        v-if="massAction?.icon"
                                    >
                                    </i>

                                    {{ massAction.title }}
                                </a>
                            </li>
                        </template>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                <div class="ltr:pl-[10px] rtl:pr-[10px]">
                    <p class="text-[14px] font-light text-gray-800 dark:text-white">
                        <!-- Need to manage this translation. -->
                        {{ applied.massActions.indices.length }} of {{ available.meta.total }} Selected
                    </p>
                </div>
            </div>

            <!-- Search Panel -->
            <div
                class="flex w-full items-center gap-x-[4px]"
                v-else
            >
                <!-- Search Panel -->
                <div class="flex max-w-[445px] items-center max-sm:w-full max-sm:max-w-full">
                    <div class="relative w-full">
                        <input
                            type="text"
                            name="search"
                            :value="getAppliedColumnValues('all')"
                            class="block w-full rounded-lg border dark:border-gray-800 bg-white dark:bg-gray-900 py-[6px] ltr:pl-[12px] rtl:pr-[12px] ltr:pr-[40px] rtl:pl-[40px] leading-6 text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400  dark:focus:border-gray-400"
                            placeholder="<?php echo app('translator')->get('admin::app.components.datagrid.toolbar.search.title'); ?>"
                            autocomplete="off"
                            @keyup.enter="filterPage"
                        >

                        <div class="icon-search pointer-events-none absolute ltr:right-[10px] rtl:left-[10px] top-[8px] flex items-center text-[22px]">
                        </div>
                    </div>
                </div>

                <!-- Information Panel -->
                <div class="ltr:pl-[10px] rtl:pr-[10px]">
                    <p class="text-[14px] font-light text-gray-800 dark:text-white">
                        <!-- Need to manage this translation. -->
                        {{ available.meta.total }} Results
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Toolbar -->
        <div class="flex gap-x-[16px]">
            <!-- Filters Activation Button -->
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.drawer.index','data' => ['width' => '350px','ref' => 'filterDrawer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['width' => '350px','ref' => 'filterDrawer']); ?>
                 <?php $__env->slot('toggle', null, []); ?> 
                    <div>
                        <div
                            class="relative inline-flex w-full max-w-max ltr:pl-[12px] rtl:pr-[12px] ltr:pr-[18px] rtl:pl-[18px] cursor-pointer select-none appearance-none items-center justify-between gap-x-[4px] rounded-[6px] border dark:border-gray-800 bg-white dark:bg-gray-900 px-[4px] py-[6px] text-center text-gray-600 dark:text-gray-300 transition-all marker:shadow hover:border-gray-400 dark:hover:border-gray-400 focus:outline-none focus:ring-2"
                            :class="{'[&>*]:text-blue-600 [&>*]:dark:text-white': applied.filters.columns.length > 1}"
                        >
                            <span class="icon-filter text-[22px]"></span>

                            <span>
                                <?php echo app('translator')->get('admin::app.components.datagrid.toolbar.filter.title'); ?>
                            </span>

                            <span
                                class="icon-dot absolute top-[5px] right-[8px] text-[14px] font-bold"
                                v-if="applied.filters.columns.length > 1"
                            ></span>
                        </div>

                        <div class="z-10 hidden w-full divide-y divide-gray-100 rounded bg-white dark:bg-gray-900 shadow">
                        </div>
                    </div>
                 <?php $__env->endSlot(); ?>

                <!-- Drawer Header -->
                 <?php $__env->slot('header', null, []); ?> 
                    <div class="flex justify-between items-center p-3">
                        <p class="text-[16px] text-gray-800 dark:text-white font-semibold">
                            <?php echo app('translator')->get('admin::app.components.datagrid.filters.title'); ?>
                        </p>
                    </div>
                 <?php $__env->endSlot(); ?>

                <!-- Drawer Content -->
                 <?php $__env->slot('content', null, ['class' => '!p-[20px]']); ?> 
                    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.datagrid.filters','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::datagrid.filters'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

            <div class="flex items-center gap-x-[8px]">
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
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
                            class="inline-flex w-full max-w-max cursor-pointer appearance-none items-center justify-between gap-x-[8px] rounded-[6px] border dark:border-gray-800 bg-white dark:bg-gray-900 px-[10px] py-[6px] text-center leading-[24px] text-gray-600 dark:text-gray-300 transition-all marker:shadow hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400"
                        >
                            <span v-text="applied.pagination.perPage"></span>

                            <span class="icon-sort-down text-[24px]"></span>
                        </button>
                     <?php $__env->endSlot(); ?>

                    <!-- Dropdown Content -->
                     <?php $__env->slot('menu', null, []); ?> 
                        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.dropdown.menu.item','data' => ['vFor' => 'perPageOption in available.meta.per_page_options','vText' => 'perPageOption','@click' => 'changePerPageOption(perPageOption)']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::dropdown.menu.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-for' => 'perPageOption in available.meta.per_page_options','v-text' => 'perPageOption','@click' => 'changePerPageOption(perPageOption)']); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                     <?php $__env->endSlot(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                <p class="whitespace-nowrap text-gray-600 dark:text-gray-300 max-sm:hidden">per page</p>

                <input
                    type="text"
                    class="ltr:ml-[8px] rtl:mr-[8px] inline-flex min-h-[38px] max-w-[40px] appearance-none items-center justify-center gap-x-[4px] rounded-[6px] border dark:border-gray-800 bg-white dark:bg-gray-900 px-[12px] py-[6px] text-center leading-[24px] text-gray-600 dark:text-gray-300 transition-all marker:shadow hover:border-gray-400 dark:hover:border-gray-400 focus:outline-none focus:border-gray-400 dark:focus:border-gray-400 max-sm:hidden"
                    :value="available.meta.current_page"
                    @change="changePage(parseInt($event.target.value))"
                >

                <div class="whitespace-nowrap text-gray-600 dark:text-gray-300">
                    <span>of </span>

                    <span v-text="available.meta.last_page"></span>
                </div>

                <!-- Pagination -->
                <div class="flex items-center gap-[4px]">
                    <div
                        class="inline-flex w-full max-w-max cursor-pointer appearance-none items-center justify-between gap-x-[4px] rounded-[6px] border border-transparent p-[6px] text-center text-gray-600 dark:text-gray-300 transition-all marker:shadow hover:bg-gray-200 dark:hover:bg-gray-800 active:border-gray-300"
                        @click="changePage('previous')"
                    >
                        <span class="icon-sort-left text-[24px]"></span>
                    </div>

                    <div
                        class="inline-flex w-full max-w-max cursor-pointer appearance-none items-center justify-between gap-x-[4px] rounded-[6px] border border-transparent p-[6px] text-center text-gray-600 dark:text-gray-300 transition-all marker:shadow hover:bg-gray-200 dark:hover:bg-gray-800 active:border-gray-300"
                        @click="changePage('next')"
                    >
                        <span class="icon-sort-right text-[24px]"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/datagrid/toolbar.blade.php ENDPATH**/ ?>