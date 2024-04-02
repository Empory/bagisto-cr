<div class="flex flex-wrap max-lg:hidden">
    <?php if (isset($component)) { $__componentOriginal545b25d9096572e7f54664393badf092 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal545b25d9096572e7f54664393badf092 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.header.desktop.top','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts.header.desktop.top'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal545b25d9096572e7f54664393badf092)): ?>
<?php $attributes = $__attributesOriginal545b25d9096572e7f54664393badf092; ?>
<?php unset($__attributesOriginal545b25d9096572e7f54664393badf092); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal545b25d9096572e7f54664393badf092)): ?>
<?php $component = $__componentOriginal545b25d9096572e7f54664393badf092; ?>
<?php unset($__componentOriginal545b25d9096572e7f54664393badf092); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginald037dc316bb847c92e2fa747ccab56ee = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald037dc316bb847c92e2fa747ccab56ee = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.header.desktop.bottom','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts.header.desktop.bottom'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald037dc316bb847c92e2fa747ccab56ee)): ?>
<?php $attributes = $__attributesOriginald037dc316bb847c92e2fa747ccab56ee; ?>
<?php unset($__attributesOriginald037dc316bb847c92e2fa747ccab56ee); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald037dc316bb847c92e2fa747ccab56ee)): ?>
<?php $component = $__componentOriginald037dc316bb847c92e2fa747ccab56ee; ?>
<?php unset($__componentOriginald037dc316bb847c92e2fa747ccab56ee); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Shop\src/resources/views/components/layouts/header/desktop/index.blade.php ENDPATH**/ ?>