<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'hasHeader'  => true,
    'hasFeature' => true,
    'hasFooter'  => true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'hasHeader'  => true,
    'hasFeature' => true,
    'hasFooter'  => true,
]); ?>
<?php foreach (array_filter(([
    'hasHeader'  => true,
    'hasFeature' => true,
    'hasFooter'  => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(core()->getCurrentLocale()->direction); ?>">
    <head>
        <title><?php echo e($title ?? ''); ?></title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="base-url" content="<?php echo e(url()->to('/')); ?>">
        <meta name="currency-code" content="<?php echo e(core()->getCurrentCurrencyCode()); ?>">
        <meta http-equiv="content-language" content="<?php echo e(app()->getLocale()); ?>">

        <?php echo $__env->yieldPushContent('meta'); ?>

        <link
            rel="icon"
            sizes="16x16"
            href="<?php echo e(core()->getCurrentChannel()->favicon_url ?? bagisto_asset('images/favicon.ico')); ?>"
        />

        <?php echo themes()->setBagistoVite(['src/Resources/assets/css/app.css', 'src/Resources/assets/js/app.js'])->toHtml(); ?>

        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" as="style">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">

        <link rel="preload" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" as="style">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap">

        <?php echo $__env->yieldPushContent('styles'); ?>

        <style>
            <?php echo core()->getConfigData('general.content.custom_scripts.custom_css'); ?>

        </style>

        <?php echo view_render_event('bagisto.shop.layout.head'); ?>

    </head>

    <body>
        <?php echo view_render_event('bagisto.shop.layout.body.before'); ?>


        <div id="app">
            
            <?php if (isset($component)) { $__componentOriginal32b426cadde54f0d7b8de12fc0e5c6a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal32b426cadde54f0d7b8de12fc0e5c6a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.flash-group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::flash-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal32b426cadde54f0d7b8de12fc0e5c6a0)): ?>
<?php $attributes = $__attributesOriginal32b426cadde54f0d7b8de12fc0e5c6a0; ?>
<?php unset($__attributesOriginal32b426cadde54f0d7b8de12fc0e5c6a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal32b426cadde54f0d7b8de12fc0e5c6a0)): ?>
<?php $component = $__componentOriginal32b426cadde54f0d7b8de12fc0e5c6a0; ?>
<?php unset($__componentOriginal32b426cadde54f0d7b8de12fc0e5c6a0); ?>
<?php endif; ?>

            
            <?php if (isset($component)) { $__componentOriginal5692e00db184034e913f6f80572595d8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5692e00db184034e913f6f80572595d8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.modal.confirm','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::modal.confirm'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5692e00db184034e913f6f80572595d8)): ?>
<?php $attributes = $__attributesOriginal5692e00db184034e913f6f80572595d8; ?>
<?php unset($__attributesOriginal5692e00db184034e913f6f80572595d8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5692e00db184034e913f6f80572595d8)): ?>
<?php $component = $__componentOriginal5692e00db184034e913f6f80572595d8; ?>
<?php unset($__componentOriginal5692e00db184034e913f6f80572595d8); ?>
<?php endif; ?>

            
            <?php if($hasHeader): ?>
                <?php if (isset($component)) { $__componentOriginal8840dbae58ccad6ecf4eb407b99d7661 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8840dbae58ccad6ecf4eb407b99d7661 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.header.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8840dbae58ccad6ecf4eb407b99d7661)): ?>
<?php $attributes = $__attributesOriginal8840dbae58ccad6ecf4eb407b99d7661; ?>
<?php unset($__attributesOriginal8840dbae58ccad6ecf4eb407b99d7661); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8840dbae58ccad6ecf4eb407b99d7661)): ?>
<?php $component = $__componentOriginal8840dbae58ccad6ecf4eb407b99d7661; ?>
<?php unset($__componentOriginal8840dbae58ccad6ecf4eb407b99d7661); ?>
<?php endif; ?>
            <?php endif; ?>

            <?php echo view_render_event('bagisto.shop.layout.content.before'); ?>


            
            <?php echo e($slot); ?>


            <?php echo view_render_event('bagisto.shop.layout.content.after'); ?>


            
            <?php if($hasFeature): ?>
                <?php if (isset($component)) { $__componentOriginal4e6579d172f266563daa97da5835e32c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4e6579d172f266563daa97da5835e32c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.features','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts.features'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4e6579d172f266563daa97da5835e32c)): ?>
<?php $attributes = $__attributesOriginal4e6579d172f266563daa97da5835e32c; ?>
<?php unset($__attributesOriginal4e6579d172f266563daa97da5835e32c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4e6579d172f266563daa97da5835e32c)): ?>
<?php $component = $__componentOriginal4e6579d172f266563daa97da5835e32c; ?>
<?php unset($__componentOriginal4e6579d172f266563daa97da5835e32c); ?>
<?php endif; ?>
            <?php endif; ?>

            
            <?php if($hasFooter): ?>
                <?php if (isset($component)) { $__componentOriginal52eadd6893b05c6c47a48f4bafc8ff6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal52eadd6893b05c6c47a48f4bafc8ff6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.footer.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal52eadd6893b05c6c47a48f4bafc8ff6b)): ?>
<?php $attributes = $__attributesOriginal52eadd6893b05c6c47a48f4bafc8ff6b; ?>
<?php unset($__attributesOriginal52eadd6893b05c6c47a48f4bafc8ff6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal52eadd6893b05c6c47a48f4bafc8ff6b)): ?>
<?php $component = $__componentOriginal52eadd6893b05c6c47a48f4bafc8ff6b; ?>
<?php unset($__componentOriginal52eadd6893b05c6c47a48f4bafc8ff6b); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>

        <?php echo view_render_event('bagisto.shop.layout.body.after'); ?>


        <?php echo $__env->yieldPushContent('scripts'); ?>

        <script type="text/javascript">
            <?php echo core()->getConfigData('general.content.custom_scripts.custom_javascript'); ?>

        </script>
    </body>
</html>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Shop\src/resources/views/components/layouts/index.blade.php ENDPATH**/ ?>