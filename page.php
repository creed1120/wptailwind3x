<?php
/**
 * 
 * Main Wordpress Page file
 * 
 * @package wptailwind3x
 * 
 */

 get_header(); ?>

<div class="md:container md:mx-auto px-4 sm:px-0 w-full">

    <article class="max-w-full">
        
        <?php if(have_posts()) : while(have_posts()) : the_post() ?>

            <h2 class="text-2xl"><?php echo the_title(); ?></h2>
            <?php echo the_content(); ?>

        <?php endwhile; ?>
        <?php endif; ?>

    </article>

</div>


<?php get_footer(); ?>