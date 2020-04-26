<?php get_header();?>

<!-- background image for landing page. insert image after div hero class -->

<!-- style="background-image: url('<?php bloginfo("template_directory");?>../images/mapBackground.jpg')" -->

<div class="hero" style="background-size: cover; background-position: center center; background-repeat: no-repeat; background-image: url('<?php bloginfo("template_directory");?>/images/mainBackgroundSVG.svg')">

   <img src="<?php bloginfo('template_directory');?>/images/bannerLogo.svg" class="hero__banner" alt="Sidetracked worn and torn banner logo.">
   
   <img src="<?php bloginfo('template_directory');?>/images/compassBackSVG.svg" class="hero__compass1 compass1" alt="gold circular back of compass rotating.">

   <img src="<?php bloginfo('template_directory');?>/images/compassTopSVG.svg" class="hero__compass2 compass2" alt="white compass pointer spinning back and forth.">

   <img src="<?php bloginfo('template_directory');?>/images/volcanoSVG.svg" class="hero__volcano volcano" alt="volcano in the distance smoking and ready to erupt.">

   <img src="<?php bloginfo('template_directory');?>/images/serpentSVG.svg" class="hero__serpent serpent" alt="a dotted sea serpent monster with a long tongue.">

   <img src="<?php bloginfo('template_directory');?>/images/shipwreck.svg" class="hero__shipwreck shipwreck" alt="A sunken pirate ship broken in half in the rocks.">

   <img src="<?php bloginfo('template_directory');?>/images/msgInBottle.svg" class="hero__msgInBottle msgInBottle" alt="A sunken pirate ship broken in half in the rocks.">

   <img src="<?php bloginfo('template_directory');?>/images/octopusSVG.svg" class="hero__octopus" alt="An octopus with huge eyes and tentacles looking down at the ocean.">

   <div class="hero__buttons">

      <button class="newAdventure">
         <img src="<?php bloginfo('template_directory');?>/images/arrow.svg" class="hero__buttons--svg svg" alt=".">
            <a href="http://www.sidetracked.blog/?redirect_to=latest">
               <!-- <img src="<?php bloginfo('template_directory');?>/images/axe.svg" class="hero__buttons--svg2" alt="."> -->
               <p>new adventure</p>
            </a>
         <img src="<?php bloginfo('template_directory');?>/images/arrow2.svg" class="hero__buttons--svg svg2" alt=".">
      </button>

      <button class="archives">
         <img src="<?php bloginfo('template_directory');?>/images/arrow.svg" class="hero__buttons--svg svg" alt=".">
            <a href="http://www.sidetracked.blog/category/archive">
               <!-- <img src="<?php bloginfo('template_directory');?>/images/closedChest.svg" class="hero__buttons--svg" alt="."> -->
               <p>archives</p>
            </a>
         <img src="<?php bloginfo('template_directory');?>/images/arrow2.svg" class="hero__buttons--svg svg2" alt=".">
      </button>   
   </div>
</div>

<?php get_footer();?>

<!-- <div class="hero__logo">

      <div class="button__container">

         <div class="hero__inner--button1">
            <img src="<?php bloginfo('template_directory');?>/images/axe2x.png" class="axe" alt="">
            <h3>new adventure</h3>
         </div>
         <div class="hero__inner--button2">
            <img src="<?php bloginfo('template_directory');?>/images/chest2x.png" class="chest" alt="">
            <h3>archives</h3>
         </div>

      </div>

      <h1><?php the_title();?></h1>

      <?php if (have_posts()) : while(have_posts()) : the_post();?>

         <?php the_content();?>

      <?php endwhile; endif;?>
   </div> -->