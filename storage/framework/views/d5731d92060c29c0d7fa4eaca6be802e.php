<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'type' => 'text',
    'name' => '',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'type' => 'text',
    'name' => '',
]); ?>
<?php foreach (array_filter(([
    'type' => 'text',
    'name' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php switch($type):
    case ('hidden'): ?>
    <?php case ('text'): ?>
    <?php case ('email'): ?>
    <?php case ('password'): ?>
    <?php case ('number'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <input
                type="<?php echo e($type); ?>"
                name="<?php echo e($name); ?>"
                v-bind="field"
                :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-600 hover:border-red-600' : '']"
                <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'flex w-full min-h-[39px] py-2 px-3 border rounded-[6px] text-[14px] text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 dark:focus:border-gray-400 dark:bg-gray-900 dark:border-gray-800'])); ?>

            >
        </v-field>

        <?php break; ?>

    <?php case ('file'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', ':rules', 'label', ':label'])); ?>

        >
            <input
                type="<?php echo e($type); ?>"
                name="<?php echo e($name); ?>"
                :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-600 hover:border-red-600' : '']"
                <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'flex w-full min-h-[39px] py-2 px-3 border rounded-[6px] text-[14px] text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 dark:focus:border-gray-400 dark:bg-gray-900 dark:border-gray-800'])); ?>

            >
        </v-field>

        <?php break; ?>

    <?php case ('color'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->except('class')); ?>

        >
            <input
                type="<?php echo e($type); ?>"
                :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-500' : '']"
                v-bind="field"
                <?php echo e($attributes->except(['value'])->merge(['class' => 'w-full appearance-none border rounded-[6px] text-[14px] text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400'])); ?>

            >
        </v-field>
        <?php break; ?>

    <?php case ('textarea'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <textarea
                type="<?php echo e($type); ?>"
                name="<?php echo e($name); ?>"
                v-bind="field"
                :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-600 hover:border-red-600' : '']"
                <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'flex w-full min-h-[39px] py-2 px-3 border rounded-[6px] text-[14px] text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 dark:focus:border-gray-400 dark:bg-gray-900 dark:border-gray-800'])); ?>

            >
            </textarea>

            <?php if($attributes->get('tinymce', false) || $attributes->get(':tinymce', false)): ?>
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.tinymce.index','data' => ['selector' => 'textarea#' . $attributes->get('id'),':field' => 'field']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::tinymce'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['selector' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('textarea#' . $attributes->get('id')),':field' => 'field']); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
            <?php endif; ?>
        </v-field>

        <?php break; ?>

    <?php case ('date'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flat-picker.date','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::flat-picker.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <input
                    name="<?php echo e($name); ?>"
                    v-bind="field"
                    :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-600 hover:border-red-600' : '']"
                    <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'flex w-full min-h-[39px] py-2 px-3 border rounded-[6px] text-[14px] text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 dark:focus:border-gray-400 dark:bg-gray-900 dark:border-gray-800'])); ?>

                    autocomplete="off"
                >
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </v-field>

        <?php break; ?>

    <?php case ('datetime'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flat-picker.datetime','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::flat-picker.datetime'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <input
                    name="<?php echo e($name); ?>"
                    v-bind="field"
                    :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-600 hover:border-red-600' : '']"
                    <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'flex w-full min-h-[39px] py-2 px-3 border rounded-[6px] text-[14px] text-gray-600 dark:text-gray-300 transition-all hover:border-gray-400 dark:hover:border-gray-400 dark:hover:border-gray-400 focus:border-gray-400 dark:focus:border-gray-400 dark:focus:border-gray-400 dark:bg-gray-900 dark:border-gray-800'])); ?>

                    autocomplete="off"
                >
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </v-field>
        <?php break; ?>

    <?php case ('select'): ?>
        <v-field
            name="<?php echo e($name); ?>"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <select
                name="<?php echo e($name); ?>"
                v-bind="field"
                :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-500' : '']"
                <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'custom-select flex w-full min-h-[39px] py-[6px] px-[12px] bg-white dark:bg-gray-900 border dark:border-gray-800 rounded-[6px] text-[14px] text-gray-600 dark:text-gray-300 font-normal transition-all hover:border-gray-400 dark:hover:border-gray-400'])); ?>

            >
                <?php echo e($slot); ?>

            </select>
        </v-field>

        <?php break; ?>

    <?php case ('multiselect'): ?>
        <v-field
            as="select"
            name="<?php echo e($name); ?>"
            :class="[errors['<?php echo e($name); ?>'] ? 'border border-red-500' : '']"
            <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])->merge(['class' => 'flex flex-col w-full min-h-[82px] py-[6px] px-[12px] bg-white dark:bg-gray-900 border dark:border-gray-800 rounded-[6px] text-[14px] text-gray-600 dark:text-gray-300 font-normal transition-all hover:border-gray-400 dark:hover:border-gray-400'])); ?>

            multiple
        >
            <?php echo e($slot); ?>

        </v-field>

        <?php break; ?>

    <?php case ('checkbox'): ?>
        <v-field
            v-slot="{ field }"
            name="<?php echo e($name); ?>"
            type="checkbox"
            class="hidden"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <input
                type="checkbox"
                name="<?php echo e($name); ?>"
                v-bind="field"
                class="sr-only peer"
                <?php echo e($attributes->except(['rules', 'label', ':label'])); ?>

            />

            <v-checkbox-handler :field="field" checked="<?php echo e($attributes->get('checked')); ?>"></v-checkbox-handler>
        </v-field>

        <label
            class="icon-uncheckbox text-[24px] peer-checked:icon-checked peer-checked:text-blue-600  cursor-pointer"
            <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
        </label>

        <?php break; ?>

    <?php case ('radio'): ?>
        <v-field
            type="radio"
            name="<?php echo e($name); ?>"
            class="hidden"
            v-slot="{ field }"
            <?php echo e($attributes->only(['value', ':value', 'v-model', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
            <input
                type="radio"
                name="<?php echo e($name); ?>"
                v-bind="field"
                class="sr-only peer"
                <?php echo e($attributes->except(['rules', 'label', ':label'])); ?>

            />
        </v-field>

        <label
            class="icon-radio-normal text-[24px] peer-checked:icon-radio-selected peer-checked:text-blue-600 cursor-pointer"
            <?php echo e($attributes->except(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

        >
        </label>

        <?php break; ?>

    <?php case ('switch'): ?>
        <label class="relative inline-flex items-center cursor-pointer">
            <v-field
                type="checkbox"
                name="<?php echo e($name); ?>"
                class="hidden"
                v-slot="{ field }"
                <?php echo e($attributes->only(['value', ':value', 'v-model', 'rules', ':rules', 'label', ':label'])); ?>

            >
                <input
                    type="checkbox"
                    name="<?php echo e($name); ?>"
                    id="<?php echo e($name); ?>"
                    class="sr-only peer"
                    v-bind="field"
                    <?php echo e($attributes->except(['v-model', 'rules', ':rules', 'label', ':label'])); ?>

                />
                
                <v-checkbox-handler class="hidden" :field="field" checked="<?php echo e($attributes->get('checked')); ?>"></v-checkbox-handler>
            </v-field>

            <label
                class="rounded-full w-[36px] h-[20px] bg-gray-200 cursor-pointer peer-focus:ring-blue-300 after:bg-white dark:after:bg-white after:border-gray-300 dark:after:border-white peer-checked:bg-blue-600 dark:peer-checked:bg-gray-950 peer peer-checked:after:border-white peer-checked:after:ltr:translate-x-full peer-checked:after:rtl:-translate-x-full after:content-[''] after:absolute after:top-[2px] after:ltr:left-[2px] after:rtl:right-[2px] peer-focus:outline-none after:border after:rounded-full after:h-[16px] after:w-[16px] after:transition-all dark:bg-gray-800"
                for="<?php echo e($name); ?>"
            ></label>
        </label>

        <?php break; ?>

    <?php case ('image'): ?>
        <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.media.images','data' => ['name' => ''.e($name).'',':class' => '[errors[\''.e($name).'\'] ? \'border border-red-600 hover:border-red-600\' : \'\']','attributes' => $attributes]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::media.images'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => ''.e($name).'',':class' => '[errors[\''.e($name).'\'] ? \'border border-red-600 hover:border-red-600\' : \'\']','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

        <?php break; ?>

    <?php case ('custom'): ?>
        <v-field <?php echo e($attributes); ?>>
            <?php echo e($slot); ?>

        </v-field>
<?php endswitch; ?>

<?php if (! $__env->hasRenderedOnce('121b739a-755d-4c5f-ac14-4d05ecaa8e7d')): $__env->markAsRenderedOnce('121b739a-755d-4c5f-ac14-4d05ecaa8e7d');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-checkbox-handler-template">
    </script>

    <script type="module">
        app.component('v-checkbox-handler', {
            template: '#v-checkbox-handler-template',

            props: ['field', 'checked'],

            data() {
                return {
                }
            },

            mounted() {
                if (this.checked == '') {
                    return;
                }

                this.field.checked = true;

                this.field.onChange();
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/form/control-group/control.blade.php ENDPATH**/ ?>