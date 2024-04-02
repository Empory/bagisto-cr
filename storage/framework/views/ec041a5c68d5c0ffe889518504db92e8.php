<v-flash-group ref='flashes'></v-flash-group>

<?php if (! $__env->hasRenderedOnce('d8fe6775-c91f-4423-8975-a9c94f45c2b2')): $__env->markAsRenderedOnce('d8fe6775-c91f-4423-8975-a9c94f45c2b2');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-flash-group-template">
        <transition-group
            tag='div'
            name="flash-group"
            enter-from-class="ltr:translate-x-full rtl:-translate-x-full"
            enter-active-class="transform transition ease-in-out duration-200"
            enter-to-class="ltr:translate-x-0 rtl:-translate-x-0"
            leave-from-class="ltr:translate-x-0 rtl:-translate-x-0"
            leave-active-class="transform transition ease-in-out duration-200"
            leave-to-class="ltr:translate-x-full rtl:-translate-x-full"
            class='grid gap-[10px] fixed top-[20px] ltr:right-[20px] rtl:left-[20px] z-[10002] justify-items-end'
        >
            <?php if (isset($component)) { $__componentOriginal61c07debb335a63a383982eca0b85db9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal61c07debb335a63a383982eca0b85db9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flash-group.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::flash-group.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal61c07debb335a63a383982eca0b85db9)): ?>
<?php $attributes = $__attributesOriginal61c07debb335a63a383982eca0b85db9; ?>
<?php unset($__attributesOriginal61c07debb335a63a383982eca0b85db9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal61c07debb335a63a383982eca0b85db9)): ?>
<?php $component = $__componentOriginal61c07debb335a63a383982eca0b85db9; ?>
<?php unset($__componentOriginal61c07debb335a63a383982eca0b85db9); ?>
<?php endif; ?>
        </transition-group>
    </script>

    <script type="module">
        app.component('v-flash-group', {
            template: '#v-flash-group-template',

            data() {
                return {
                    uid: 0,

                    flashes: []
                }
            },

            created() {
                <?php $__currentLoopData = ['success', 'warning', 'error', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(session()->has($key)): ?>
                        this.flashes.push({'type': '<?php echo e($key); ?>', 'message': "<?php echo e(session($key)); ?>", 'uid':  this.uid++});
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                this.registerGlobalEvents();
            },

            methods: {
                add(flash) {
                    flash.uid = this.uid++;

                    this.flashes.push(flash);
                },

                remove(flash) {
                    let index = this.flashes.indexOf(flash);

                    this.flashes.splice(index, 1);
                },

                registerGlobalEvents() {
                    this.$emitter.on('add-flash', this.add);
                },
            }
        });
    </script>
<?php $__env->stopPush(); endif; ?><?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/flash-group/index.blade.php ENDPATH**/ ?>