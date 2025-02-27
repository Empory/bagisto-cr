<v-flash-group ref='flashes'></v-flash-group>

<?php if (! $__env->hasRenderedOnce('e6e39e15-a06f-4048-bb01-f80f237eaef8')): $__env->markAsRenderedOnce('e6e39e15-a06f-4048-bb01-f80f237eaef8');
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
            class='grid gap-[10px] fixed top-[20px] ltr:right-[20px] rtl:left-[20px] z-[1] justify-items-end'
        >
            <?php if (isset($component)) { $__componentOriginal1dfdfd11830daf01eb02e80c390cb7c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1dfdfd11830daf01eb02e80c390cb7c1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.flash-group.item','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::flash-group.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1dfdfd11830daf01eb02e80c390cb7c1)): ?>
<?php $attributes = $__attributesOriginal1dfdfd11830daf01eb02e80c390cb7c1; ?>
<?php unset($__attributesOriginal1dfdfd11830daf01eb02e80c390cb7c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1dfdfd11830daf01eb02e80c390cb7c1)): ?>
<?php $component = $__componentOriginal1dfdfd11830daf01eb02e80c390cb7c1; ?>
<?php unset($__componentOriginal1dfdfd11830daf01eb02e80c390cb7c1); ?>
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
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Shop\src/resources/views/components/flash-group/index.blade.php ENDPATH**/ ?>