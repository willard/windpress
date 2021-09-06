<?php
/**
 * The front-page template file
 */
get_header();
?>
	<main id="site-content" role="main" class="mx-auto">
        <nav x-data="{open:false}" class="absolute top-0 z-40 w-full">
            <div class="inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button
                        type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-black focus:outline-none"
                        aria-controls="mobile-menu"
                        aria-expanded="false"
                        @click="open = !open"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg :class="open ? 'hidden' : 'block'" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg :class="open ? 'block' : 'hidden'" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <div :class="open ? 'block' : 'hidden'" class="sm:hidden" id="mobile-menu">
                    <div class="px-2 space-y-1">
                        <a href="#" class="text-2xl mr-1"><i class="fab fa-instagram-square"></i></a>
                        <a href="#" class="text-2xl mr-1"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="text-2xl mr-1"><i class="fab fa-twitter-square"></i></a>
                        <a href="#" class="text-2xl mr-1"><i class="fab fa-youtube-square"></i></a>
                        <a href="#" class="text-2xl mr-1"><i class="fas fa-envelope-square"></i></a>
                        <a href="#" class="text-2xl"><i class="fas fa-phone-square"></i></a>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block sm:ml-6">
                <div class="flex justify-end">
                   <div class="p-3">
                       <a href="#" class="text-2xl mr-1"><i class="fab fa-instagram-square"></i></a>
                       <a href="#" class="text-2xl mr-1"><i class="fab fa-facebook-square"></i></a>
                       <a href="#" class="text-2xl mr-1"><i class="fab fa-twitter-square"></i></a>
                       <a href="#" class="text-2xl mr-1"><i class="fab fa-youtube-square"></i></a>
                       <a href="#" class="text-2xl mr-1"><i class="fas fa-envelope-square"></i></a>
                       <a href="#" class="text-2xl"><i class="fas fa-phone-square"></i></a>
                   </div>
                </div>
            </div>
        </nav>
		<section id="topBanner" class="relative overflow-hidden h-96">
			<div class="absolute z-30 flex items-center bg-gray-200 bg-opacity-75 px-12 text-center max-w-md h-full">
                <div class="w-10/12 mx-auto">
                    <img
                            class="object-cover object-center px-10"
                            src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo.png"
                    />
                    <div class="text-xl md:text-2xl break-words">
                        <p>Personalized photo and floor plan enhancement.</p>
                        <p class="italic text-lg md:text-xl text-right mt-1">Come join us in the café.</p>
                    </div>
                </div>
			</div>
            <div class="absolute top-0 right-0 block w-full h-full">
                <img
                        class="object-cover object-top min-w-full h-full"
                        src="<?php echo get_template_directory_uri(); ?>/src/assets/images/banner.png"
                />
            </div>
		</section>
        <section id="photoEnhancement">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <section id="virtualStaging">
            Virtual Staging
        </section>
	</main>

<?php
get_footer();