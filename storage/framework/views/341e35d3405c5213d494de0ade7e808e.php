<?php
    $channel = core()->getCurrentChannel();
?>



<?php $__env->startPush('meta'); ?>
    <meta name="title" content="<?php echo e($blog_seo_meta_title ?? ( $channel->home_seo['meta_title'] ?? '' )); ?>" />

    <meta name="description" content="<?php echo e($blog_seo_meta_keywords ?? ( $channel->home_seo['meta_description'] ?? '' )); ?>" />

    <meta name="keywords" content="<?php echo e($blog_seo_meta_description ?? ( $channel->home_seo['meta_keywords'] ?? '' )); ?>" />
<?php $__env->stopPush(); ?>

<?php if (isset($component)) { $__componentOriginal2643b7d197f48caff2f606750db81304 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2643b7d197f48caff2f606750db81304 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.layouts.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::layouts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
     <?php $__env->slot('title', null, []); ?> 
        <?php echo e(__('Blog Page')); ?>

     <?php $__env->endSlot(); ?>

    <?php $__env->startPush('styles'); ?>

        <?php echo $__env->make('blog::custom-css.custom-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php $__env->stopPush(); ?>

    <div class="main">

        <div>
            <div class="row col-12 remove-padding-margin"><!---->
                <div id="home-right-bar-container" class="col-12 no-padding content">
                    <div class="container-right row no-margin col-12 no-padding">
                        <div id="blog" class="container mt-5">
                            <div class="full-content-wrapper">
                                <div class="col-lg-12"><h1 class="mb-3 page-title">Our Blog</h1></div>
                                <div class="flex flex-wrap grid-wrap">

                                    <div class="column-9">

                                        <?php if( !empty($blogs) &&  count($blogs) > 0 ): ?>

                                            <div class="flex flex-wrap blog-grid-list">

                                                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="blog-post-item">
                                                        <div class="blog-post-box">
                                                            <div class="card mb-5">
                                                                <div class="blog-grid-img"><img
                                                                    src="<?php echo e('/storage/' . ( ( isset($blog->src) && !empty($blog->src) && !is_null($blog->src) ) ? $blog->src : 'placeholder-thumb.jpg' )); ?>"
                                                                    alt="<?php echo e($blog->name); ?>"
                                                                    class="card-img-top">
                                                                </div>
                                                                <div class="card-body">
                                                                    <h2 class="card-title"><a href="<?php echo e(route('shop.article.view',[$blog->category->slug . '/' . $blog->slug])); ?>"><?php echo e($blog->name); ?></a></h2>
                                                                    <div class="post-meta">
                                                                        <p>
                                                                            <?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('M j, Y')); ?> by
                                                                            <?php if( (int)$show_author_page == 1 ): ?>
                                                                                <a href="<?php echo e(route('shop.blog.author.index',[$blog->author_id])); ?>"><?php echo e($blog->author); ?></a>
                                                                            <?php else: ?>
                                                                                <a><?php echo e($blog->author); ?></a>
                                                                            <?php endif; ?>
                                                                        </p>
                                                                    </div>
                                                                    
                                                                    <?php if( !empty($blog->assign_categorys) && count($blog->assign_categorys) > 0 ): ?>
                                                                        <div class="post-categories">
                                                                            <p>
                                                                                <?php $__currentLoopData = $blog->assign_categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assign_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <a href="<?php echo e(route('shop.blog.category.index',[$assign_category->slug])); ?>" class="cat-link"><?php echo e($assign_category->name); ?></a>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </p>
                                                                        </div>
                                                                    <?php endif; ?>

                                                                    <div class="card-text text-justify">
                                                                        <?php echo $blog->short_description; ?>

                                                                    </div>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <a href="<?php echo e(route('shop.article.view',[$blog->category->slug . '/' . $blog->slug])); ?>" class="text-uppercase btn-text-link">Read more ></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <div class="w-full col-lg-12 mt-5 mb-5">
                                                    <?php echo $blogs->links(); ?>

                                                </div>

                                            </div>

                                        <?php else: ?>

                                            <div class="post-not-available">No post published yet!!</div>

                                        <?php endif; ?>

                                    </div>

                                    <div class=" column-3 blog-sidebar">
                                        <div class="row">
                                            <div class="col-lg-12 mb-4 categories">
                                                <h3>Categories</h3>
                                                <ul class="list-group">
                                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><a href="<?php echo e(route('shop.blog.category.index',[$category->slug])); ?>" class="list-group-item list-group-item-action">
                                                                <span><?php echo e($category->name); ?></span> 
                                                                <?php if( (int)$show_categories_count == 1 ): ?>
                                                                    <span class="badge badge-pill badge-primary"><?php echo e($category->assign_blogs); ?></span>
                                                                <?php endif; ?>
                                                        </a></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>

                                                <div class="tags-part">
                                                    <h3>Tags</h3> 
                                                    <div class="tag-list">
                                                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <a href="<?php echo e(route('shop.blog.tag.index',[$tag->slug])); ?>" role="button" class="btn btn-primary btn-lg"><?php echo e($tag->name); ?> 
                                                                <?php if( (int)$show_tags_count == 1 ): ?>
                                                                    <span class="badge badge-light"><?php echo e($tag->count); ?></span>
                                                                <?php endif; ?>
                                                            </a> 
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2643b7d197f48caff2f606750db81304)): ?>
<?php $attributes = $__attributesOriginal2643b7d197f48caff2f606750db81304; ?>
<?php unset($__attributesOriginal2643b7d197f48caff2f606750db81304); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2643b7d197f48caff2f606750db81304)): ?>
<?php $component = $__componentOriginal2643b7d197f48caff2f606750db81304; ?>
<?php unset($__componentOriginal2643b7d197f48caff2f606750db81304); ?>
<?php endif; ?>
<?php /**PATH C:\bagisto-cr\vendor\webbycrown\blog-for-bagisto\src\Providers/../Resources/views/shop/velocity/index.blade.php ENDPATH**/ ?>