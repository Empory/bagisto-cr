<v-categories-carousel
    src="<?php echo e($src); ?>"
    title="<?php echo e($title); ?>"
    navigation-link="<?php echo e($navigationLink ?? ''); ?>"
>
    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.categories.carousel','data' => ['count' => 8,'navigationLink' => $navigationLink ?? false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.categories.carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['count' => 8,'navigation-link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($navigationLink ?? false)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</v-categories-carousel>
<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
<?php if (! $__env->hasRenderedOnce('12e5c573-7295-4136-abee-7ad45406cab5')): $__env->markAsRenderedOnce('12e5c573-7295-4136-abee-7ad45406cab5');
$__env->startPush('scripts'); ?>
    <script type="text/x-template" id="v-categories-carousel-template">
        <div class="container mt-[60px] max-lg:px-[30px] max-sm:mt-[20px]" v-if="! isLoading && categories?.length">
            <div class="relative">
                <div
                    ref="swiperContainer"
                    class="flex h-full max-h-[75rem] w-full gap-10  max-sm:gap-4"

                >
                    <div
                        class=" flex flex-col  md:w-2/5 gap-[15px] justify-items-center  font-medium"
                        v-for="category in filteredCategories1" :key="category.id"
                        
                        
                    >
                        <a
                            :href="category.url_path"
                            class=" w-full md:w-full overflow-hidden h-full bg-[#F5F5F5] "
                            :aria-label="category.name"
                        >
                            <template v-if="category.images.logo_url">
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => [':src' => 'category.images.logo_url','width' => 'w-full','height' => 'h-full','class' => 'transition-transform duration-500 hover:scale-105 w-full h-full ',':alt' => 'category.name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([':src' => 'category.images.logo_url','width' => 'w-full','height' => 'h-full','class' => 'transition-transform duration-500 hover:scale-105 w-full h-full ',':alt' => 'category.name']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </template>
                        </a>

                        <a
                            :href="category.url_path"
                            class=""
                        >
                            <p
                                class="text-center text-black text-[18px] max-sm:font-normal"
                                v-text="category.name"
                            >
                            </p>
                        </a>
                    </div>
                    <div
                        class=" flex flex-col md:w-3/5 gap-[15px] justify-items-center  font-medium"
                        v-for="category in filteredCategories2" :key="category.id"
                        
                        
                    >
                        <a
                            :href="category.url_path"
                            class="  w-full md:w-full overflow-hidden h-full bg-[#F5F5F5] "
                            :aria-label="category.name"
                        >
                            <template v-if="category.images.logo_url">
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => [':src' => 'category.images.logo_url','width' => 'w-full','height' => 'h-full','class' => 'transition-transform duration-500 hover:scale-105 w-full h-full ',':alt' => 'category.name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([':src' => 'category.images.logo_url','width' => 'w-full','height' => 'h-full','class' => 'transition-transform duration-500 hover:scale-105 w-full h-full ',':alt' => 'category.name']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </template>
                        </a>

                        <a
                            :href="category.url_path"
                            class=""
                        >
                            <p
                                class="text-center text-black text-[18px] max-sm:font-normal"
                                v-text="category.name"
                            >
                            </p>
                        </a>
                    </div>
                    
                </div>

                
                <div
                    ref="swiperContainer"
                    class="flex flex-col md:flex-row h-full w-full gap-10  max-sm:gap-4"

                >
                    <div
                        class=" flex  flex-col  gap-[15px] justify-items-center  font-medium"
                        v-for="category in filteredCategories3" :key="category.id"
                        
                        
                    >
                        <a
                            :href="category.url_path"
                            class=" w-full md:w-full overflow-hidden h-full bg-[#F5F5F5] "
                            :aria-label="category.name"
                        >
                            <template v-if="category.images.logo_url">
                                <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.media.images.lazy','data' => [':src' => 'category.images.logo_url','width' => 'w-full','height' => 'h-full','class' => 'transition-transform duration-500 hover:scale-105 w-full h-full ',':alt' => 'category.name']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::media.images.lazy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([':src' => 'category.images.logo_url','width' => 'w-full','height' => 'h-full','class' => 'transition-transform duration-500 hover:scale-105 w-full h-full ',':alt' => 'category.name']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                            </template>
                        </a>

                        <a
                            :href="category.url_path"
                            class=""
                        >
                            <p
                                class="text-center text-black text-[18px] max-sm:font-normal"
                                v-text="category.name"
                            >
                            </p>
                        </a>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    
          
                
                

              
           

        <!-- Category Carousel Shimmer -->
        <template v-if="isLoading">
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'shop::components.shimmer.categories.carousel','data' => ['count' => 8,'navigationLink' => $navigationLink ?? false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('shop::shimmer.categories.carousel'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['count' => 8,'navigation-link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($navigationLink ?? false)]); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
        </template>
    </script>

    <script type="module">
        app.component('v-categories-carousel', {
            template: '#v-categories-carousel-template',

            props: [
                'src',
                'title',
                'navigationLink',
            ],

            data() {
  return {
    isLoading: true,
    categories: [],
    categories1: [],
    offset: 323,
  
  }
},
computed: {
  // Filter first 2 categories
  filteredCategories1() {
    return this.categories.slice(0, 1);
  },
  filteredCategories2() {
    return this.categories.slice(1, 2);
  },
  // Filter remaining categories for the second loop (up to 3)
  filteredCategories3() {
    return this.categories.slice(2, 5); // Slice from index 2 (excluding 2nd) to index 5 (excluding 5th)
  }
},

            mounted() {
                this.getCategories();
            },

            methods: {
                getCategories() {
                    this.$axios.get(this.src)
                        .then(response => {
                            this.isLoading = false;

                            this.categories = response.data.data;
                            this.categories1 = this.categories.slice(0, Math.ceil(this.categories.length /2));
                            this.categories2 = this.categories.slice(Math.ceil(this.categories.length /3));

                        }).catch(error => {
                            console.log(error);
                        });
                },

                swipeLeft() {
                    const container = this.$refs.swiperContainer;

                    container.scrollLeft -= this.offset;
                },

                swipeRight() {
                    const container = this.$refs.swiperContainer;

                    container.scrollLeft += this.offset;
                },
            },
        });
    </script>
<?php $__env->stopPush(); endif; ?>
<?php /**PATH C:\bagisto-cr\packages\Webkul\Shop\src/resources/views/components/categories/carous.blade.php ENDPATH**/ ?>