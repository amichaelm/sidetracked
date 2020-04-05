<?php get_header();?>


<div class="single" style="background-image: url('<?php bloginfo("template_directory");?>/images/blogBack.svg')">

   <h1 class="single__title heading-1"><?php the_title();?></h1>
   

   <?php if(has_post_thumbnail()):?>

      <!-- <img src="<?php the_post_thumbnail_url('largest');?>" class="single__img"> -->


   <?php endif;?>

<div class="single__content">

   <?php if (have_posts()) : while(have_posts()) : the_post();?>

      <?php the_content();?>

   <?php endwhile; endif;?>

</div>

</div>





<?php get_footer();?>