<?php echo view_render_event('bagisto.shop.layout.header.before'); ?>


<header class="">
    <?php if (isset($component)) { $__componentOriginal8cc211b5dad97c0fb8f5f993653bc565 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8cc211b5dad97c0fb8f5f993653bc565 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.header.desktop.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts.header.desktop'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8cc211b5dad97c0fb8f5f993653bc565)): ?>
<?php $attributes = $__attributesOriginal8cc211b5dad97c0fb8f5f993653bc565; ?>
<?php unset($__attributesOriginal8cc211b5dad97c0fb8f5f993653bc565); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8cc211b5dad97c0fb8f5f993653bc565)): ?>
<?php $component = $__componentOriginal8cc211b5dad97c0fb8f5f993653bc565; ?>
<?php unset($__componentOriginal8cc211b5dad97c0fb8f5f993653bc565); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal8908cb9c8ecd2de6855a9cd5031f1952 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8908cb9c8ecd2de6855a9cd5031f1952 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.header.mobile.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts.header.mobile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8908cb9c8ecd2de6855a9cd5031f1952)): ?>
<?php $attributes = $__attributesOriginal8908cb9c8ecd2de6855a9cd5031f1952; ?>
<?php unset($__attributesOriginal8908cb9c8ecd2de6855a9cd5031f1952); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8908cb9c8ecd2de6855a9cd5031f1952)): ?>
<?php $component = $__componentOriginal8908cb9c8ecd2de6855a9cd5031f1952; ?>
<?php unset($__componentOriginal8908cb9c8ecd2de6855a9cd5031f1952); ?>
<?php endif; ?>
</header>

<?php echo view_render_event('bagisto.shop.layout.header.after'); ?>

<?php /**PATH C:\bagisto-cr\packages\Webkul\Shop\src/resources/views/components/layouts/header/index.blade.php ENDPATH**/ ?>