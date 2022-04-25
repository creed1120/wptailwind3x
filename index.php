<?php
/**
 * 
 * Main Wordpress Index file
 * 
 * @package wptailwind3x
 * 
 */

 get_header(); ?>

<div class="md:container md:mx-auto px-4 sm:px-0 w-full">

    <h1 class="text-4xl font-extrabold py-6">Wordpress TailwindCSS v3.x Project</h1>

    <article class="max-w-full">
        
        <?php if(have_posts()) : while(have_posts()) : the_post() ?>

            <h2 class="text-2xl"><?php echo the_title(); ?></h2>
            <p><?php echo the_content(); ?></p>

        <?php endwhile; ?>
        <?php endif; ?>

    </article>

    <!-- <div class="grid grid-cols-1 gap-6 xl:w-96 py-8">
        <form action="/">
        <label class="block">
        <span class="text-gray-700 dark:text-white">Full name</span>
        <input type="text" class="
            mt-1
            block
            w-full
            rounded-md
            border-gray-300
            shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            " placeholder="">
        </label>
        <label class="block mt-4">
        <span class="text-gray-700 dark:text-white">Email address</span>
        <input type="email" class="
            mt-1
            block
            w-full
            rounded-md
            border-gray-300
            shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            " placeholder="john@example.com">
        </label>
        <label class="block mt-4">
        <span class="text-gray-700 dark:text-white">When is your event?</span>
        <input type="date" class="
            mt-1
            block
            w-full
            rounded-md
            border-gray-300
            shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            ">
        </label>
        <label class="block mt-4">
        <span class="text-gray-700 dark:text-white">What type of event is it?</span>
        <select class="
            block
            w-full
            mt-1
            rounded-md
            border-gray-300
            shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            ">
            <option>Corporate event</option>
            <option>Wedding</option>
            <option>Birthday</option>
            <option>Other</option>
        </select>
        </label>
        <label class="block mt-4">
        <span class="text-gray-700 dark:text-white">Additional details</span>
        <textarea class="
            mt-1
            block
            w-full
            rounded-md
            border-gray-300
            shadow-sm
            focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
            " rows="3"></textarea>
        </label>
        <div class="block">
        <div class="mt-2">
            <div>
            <label class="inline-flex items-center">
                <input type="checkbox" class="
                    rounded
                    border-gray-300
                    text-indigo-600
                    shadow-sm
                    focus:border-indigo-300
                    focus:ring
                    focus:ring-offset-0
                    focus:ring-indigo-200
                    focus:ring-opacity-50
                " checked="">
                <span class="ml-2">Email me news and special offers</span>
            </label>
            </div>
        </div>
        </div>

        <div class="mt-6">
        <input type="submit" class=" 
          bg-slate-600
            dark:bg-purple-700
            dark:text-slate-100
            mt-1
            block
            w-full
            rounded-md
            py-3
            cursor-pointer
            md:w-1/2
            ">
        </div>
        </form>
    </div> -->

</div>


<?php get_footer(); ?>