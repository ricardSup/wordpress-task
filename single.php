<?php
get_header(); ?>

<section class="text-gray-600 body-font">
  <div class="max-w-4xl mx-auto px-4 py-24">
    <?php if (have_posts()) {
      while (have_posts()) {
        the_post(); ?>
        <div class="flex flex-wrap mb-8">
          <div class="w-full lg:w-1/3 flex-shrink-0 flex flex-col text-center leading-none">
            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200"><?php echo get_the_date('M'); ?></span>
            <span class="font-medium text-lg text-gray-800 title-font leading-none"><?php echo get_the_date('d'); ?></span>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1"><?php the_category(', '); ?></h2>
            <h1 class="title-font text-xl font-medium text-gray-900 mb-3"><?php the_title(); ?></h1>
            <p class="leading-relaxed mb-5"><?php the_content(); ?></p>
            <a class="inline-flex items-center">
              <img alt="<?php the_author(); ?>" src="https://dummyimage.com/103x103" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
              <span class="flex-grow flex flex-col pl-3">
                <span class="title-font font-medium text-gray-900"><?php the_author(); ?></span>
              </span>
            </a>
          </div>
        </div>
    <?php }
    } ?>
  </div>
</section>

<?php get_footer(); ?>