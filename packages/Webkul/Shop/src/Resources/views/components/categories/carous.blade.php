<v-categories-carousel
    src="{{ $src }}"
    title="{{ $title }}"
    navigation-link="{{ $navigationLink ?? '' }}"
>
    <x-shop::shimmer.categories.carousel
        :count="8"
        :navigation-link="$navigationLink ?? false"
    ></x-shop::shimmer.categories.carousel>
</v-categories-carousel>
@vite('resources/css/app.css')
@pushOnce('scripts')
    <script type="text/x-template" id="v-categories-carousel-template">
        <div class="container mt-[60px] max-lg:px-[30px] max-sm:mt-[20px]" v-if="! isLoading && categories?.length">
            <div class="relative gap-10 flex flex-col">
                <div
                    ref="swiperContainer"
                    class="flex h-full max-h-[75rem] w-full gap-10  max-sm:gap-4"

                >
                    <div
                        class=" flex flex-col  md:w-1/3 gap-[15px] justify-items-center  font-medium"
                        v-for="category in filteredCategories1" :key="category.id"
                        
                        
                    >
                        <a
                            :href="category.url_path"
                            class=" w-full rounded-md md:w-full overflow-hidden h-full bg-[#F5F5F5] "
                            :aria-label="category.name"
                        >
                            <template v-if="category.images.logo_url">
                                <x-shop::media.images.lazy
                                    ::src="category.images.logo_url"
                                    width="w-full"
                                    height="h-full"
                                    class="transition-transform duration-500 hover:scale-105 w-full h-full "
                                    ::alt="category.name"
                                ></x-shop::media.images.lazy>
                            </template>
                        </a>

                        <a
                            :href="category.url_path"
                            class=""
                        >
                            <p
                                class="text-center rounded-md text-black text-[18px] max-sm:font-normal"
                                v-text="category.name"
                            >
                            </p>
                        </a>
                    </div>
                    <div
                        class=" flex flex-col md:w-2/3 gap-[15px] justify-items-center  font-medium"
                        v-for="category in filteredCategories2" :key="category.id"
                        
                        
                    >
                        <a
                            :href="category.url_path"
                            class="  w-full md:w-full rounded-md overflow-hidden h-full bg-[#F5F5F5] "
                            :aria-label="category.name"
                        >
                            <template v-if="category.images.logo_url">
                                <x-shop::media.images.lazy
                                    ::src="category.images.logo_url"
                                    width="w-full"
                                    height="h-full"
                                    class="transition-transform duration-500 hover:scale-105 w-full h-full "
                                    ::alt="category.name"
                                ></x-shop::media.images.lazy>
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

                {{-- <span
                    class="flex items-center justify-center absolute top-[37px] -left-[41px] w-[50px] h-[50px] bg-white border border-black  transition icon-arrow-left-stylish text-[25px] hover:bg-black hover:text-white max-lg:-left-[29px] cursor-pointer"
                    @click="swipeLeft"
                >
                </span>

                <span
                    class="flex items-center justify-center absolute top-[37px] -right-[22px] w-[50px] h-[50px] bg-white border border-black  transition icon-arrow-right-stylish text-[25px] hover:bg-black hover:text-white max-lg:-right-[29px] cursor-pointer"
                    @click="swipeRight"
                >
                </span> --}}
                <div
                    ref="swiperContainer"
                    class="flex flex-col md:flex-row max-h-[45rem] w-full gap-10  max-sm:gap-4"

                >
                    <div
                        class=" flex  flex-col md:w-1/3 w-full  gap-[15px] justify-items-center  font-medium"
                        v-for="category in filteredCategories3" :key="category.id"
                        
                        
                    >
                        <a
                            :href="category.url_path"
                            class=" w-full md:w-full rounded-md overflow-hidden h-full bg-[#F5F5F5] "
                            :aria-label="category.name"
                        >
                            <template v-if="category.images.logo_url">
                                <x-shop::media.images.lazy
                                    ::src="category.images.logo_url"
                                    width="w-full"
                                    height="h-full"
                                    class="transition-transform duration-500 hover:scale-105 w-full h-full "
                                    ::alt="category.name"
                                ></x-shop::media.images.lazy>
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
            <x-shop::shimmer.categories.carousel
                :count="8"
                :navigation-link="$navigationLink ?? false"
            >
            </x-shop::shimmer.categories.carousel>
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

                // swipeLeft() {
                //     const container = this.$refs.swiperContainer;

                //     container.scrollLeft -= this.offset;
                // },

                // swipeRight() {
                //     const container = this.$refs.swiperContainer;

                //     container.scrollLeft += this.offset;
                // },
            },
        });
    </script>
@endPushOnce
