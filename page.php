<?php get_header();?>



<div class="page" style="background-size: cover; background-position: center center; background-repeat: no-repeat; background-image: url('<?php bloginfo("template_directory");?>/images/blogBack.svg')">

   <img src="<?php the_post_thumbnail_url('largest');?>" class="" alt="">

   <h1><?php the_title();?></h1>

   <?php if (have_posts()) : while(have_posts()) : the_post();?>

      <?php the_content();?>

   <?php endwhile; endif;?>

</div>

<?php get_footer();?>