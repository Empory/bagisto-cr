<?php
    $channel = core()->getCurrentChannel();
?>



<?php $__env->startPush('meta'); ?>
    <meta name="title" content="<?php echo e($channel->home_seo['meta_title'] ?? ''); ?>" />

    <meta name="description" content="<?php echo e($channel->home_seo['meta_description'] ?? ''); ?>" />

    <meta name="keywords" content="<?php echo e($channel->home_seo['meta_keywords'] ?? ''); ?>" />
<?php $__env->stopPush(); ?>

<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
     <?php $__env->slot('title', null, []); ?> 
        <?php echo e($channel->home_seo['meta_title'] ?? ''); ?>

     <?php $__env->endSlot(); ?>
    
    
    <?php $__currentLoopData = $customizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php ($data = $customization->options); ?>

        
        <?php switch($customization->type):
            

            

            case ($customization::CATEGORY_CAROUSEL): ?>
                
                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.categories.carous','data' => ['title' => $data['title'] ?? '','src' => route('shop.api.categories.index', $data['filters'] ?? []),'navigationLink' => route('shop.home.index')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::categories.carous'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($data['title'] ?? ''),'src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('shop.api.categories.index', $data['filters'] ?? [])),'navigation-link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('shop.home.index'))]); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

                <?php break; ?>

            
        <?php endswitch; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Shop\src/resources/views/home/index.blade.php ENDPATH**/ ?>