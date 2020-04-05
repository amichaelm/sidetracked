<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sidetracked</title>

    <!-- injects wordpress functions.php within header and footer almost like a hook -->
    <?php wp_head();?>
</head>

<body class="header-body">

<div class="navo" id="backToTop">
    <!-- <img src="" alt="" class="navigation__logo"> -->
    <!-- <h3 class="heading-3"><a href="index.html">Donald Stephens</a></h3> -->
    <div class="navi">
        <input  type="checkbox" class="navi__checkbox" id="navi__toggle">
        <label for="navi__toggle" class="navi__button"> 
            <span class="navi__icon"></span>
            <span class="navi__icon"></span>
            <span class="navi__icon"></span>
        </label>
        <div class="navi__background">&nbsp;</div>

        <nav class="navi__nav">
            <ul class="navi__list">
                <li class="navi__item"><a href="<?php bloginfo('url');?>" class="navi__link"><span>1</span>home</a></li>
                <li class="navi__item"><a href="http://www.sidetracked.blog/category/archive" class="navi__link"><span>2</span>archives</a></li>
                <li class="navi__item"><a href="https://www.donaldstephens.net" class="navi__link"><span>3</span>contact</a></li>
            </ul>
        </nav>
    </div>
</div>

    <header>


        <a class="logo-container" href="<?php bloginfo('url');?>">
            <img src="<?php bloginfo('template_directory');?>/images/skullSVG.svg" class="logo" alt="sidetracked logo">
        </a>

            <?php wp_nav_menu(
            
            array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'navigation'
                )
            );?>

        <form action="#" class="search">
        
            <input class="search__field form-control" type="text" placeholder="What are you looking for?" aria-label="Search">
            
            <button class="search__button" type="Submit">
                <img src="<?php bloginfo('template_directory');?>/images/telescope.svg" class="search__icon img-fluid" alt="search bar telescope button">
            </button>
        </form action="#">

</header>