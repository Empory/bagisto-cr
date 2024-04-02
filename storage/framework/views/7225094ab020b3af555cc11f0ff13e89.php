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

    <?php echo themes()->setBagistoVite(['src/Resources/assets/css/app.css', 'src/Resources/assets/js/app.js'])->toHtml(); ?>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap"
        rel="stylesheet"
    />

    <?php if($favicon = core()->getConfigData('general.design.admin_logo.favicon', core()->getCurrentChannelCode())): ?>
        <link 
            type="image/x-icon"
            href="<?php echo e(Storage::url($favicon)); ?>" 
            rel="shortcut icon"
            sizes="16x16"
        >
    <?php else: ?>
        <link 
            type="image/x-icon"
            href="<?php echo e(bagisto_asset('images/favicon.ico')); ?>" 
            rel="shortcut icon"
            sizes="16x16"
        />
    <?php endif; ?>

    <?php echo $__env->yieldPushContent('styles'); ?>

    <style>
        <?php echo core()->getConfigData('general.content.custom_scripts.custom_css'); ?>

    </style>

    <?php echo view_render_event('bagisto.shop.layout.head'); ?>

</head>

<body>
    <?php echo view_render_event('bagisto.shop.layout.body.before'); ?>


    <div id="app">
        
        <?php if (isset($component)) { $__componentOriginal701f473bf36886c6d0b4697249a816f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal701f473bf36886c6d0b4697249a816f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'admin::components.flash-group.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admin::flash-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal701f473bf36886c6d0b4697249a816f6)): ?>
<?php $attributes = $__attributesOriginal701f473bf36886c6d0b4697249a816f6; ?>
<?php unset($__attributesOriginal701f473bf36886c6d0b4697249a816f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal701f473bf36886c6d0b4697249a816f6)): ?>
<?php $component = $__componentOriginal701f473bf36886c6d0b4697249a816f6; ?>
<?php unset($__componentOriginal701f473bf36886c6d0b4697249a816f6); ?>
<?php endif; ?>

        <?php echo view_render_event('bagisto.shop.layout.content.before'); ?>


                
                <?php echo e($slot); ?>


        <?php echo view_render_event('bagisto.shop.layout.content.after'); ?>

    </div>

    <?php echo view_render_event('bagisto.shop.layout.body.after'); ?>


    <?php echo $__env->yieldPushContent('scripts'); ?>

    <script type="text/javascript">
        <?php echo core()->getConfigData('general.content.custom_scripts.custom_javascript'); ?>

    </script>
</body>

</html>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Admin\src/resources/views/components/layouts/anonymous.blade.php ENDPATH**/ ?>