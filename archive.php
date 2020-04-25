<?php get_header();?>

   <div class="archive" id="archive" style="background-size: cover; background-position: center center; background-repeat: no-repeat; background-image: url('<?php bloginfo("template_directory");?>/images/mainBackgroundSVG.svg')">

      <h1 class="archive__title">All posts</h1>

      <div class="archive__categories heading-2">
         <?php wp_list_categories();?>
      </div>

      <?php if (have_posts()) : 
         while(have_posts()) : the_post();?>

      <div class="archive__post" style="background-image: url('<?php the_post_thumbnail_url("largest");?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
         <!-- <?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">

         <?php endif;?> -->

         <div class="archive__post--inside">
         
            <h3 class="archive__post--title heading-2">
               <?php the_title();?>
            </h3>

            <h4 class="archive__publish">
               Published: <?php the_time('m/j/y g:i A') ?>
            </h4>
         
         
         <!-- <?php if(has_post_thumbnail()):?>

            <img src="<?php the_post_thumbnail_url('largest');?>" class="img-fluid">

         <?php endif;?> -->

      
      

         <?php the_excerpt();?>

            <button class="archive__btn">
               <a href="<?php the_permalink();?>" class="">read more</a>
            </button>      

            <h4 class="archive__category">
               <?php the_category() ?>
            </h4>
         </div>
      </div>
      
      <?php endwhile; endif;?>
      
      <a href="#archive">
         <img src="<?php bloginfo('template_directory');?>/images/bownarrow.svg" class="archive__bownarrow" alt="a bow n arrow pointing up toward the top of page.">
      </a>
      
   </div>

<?php get_footer();?>