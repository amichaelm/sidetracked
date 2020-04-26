<!-- wp_footer is a hook that plugins can plug into to add their js scripts @ bottom of doc -->

<footer class="footer">
<?php wp_footer();?> 

    <div class="footer__navigation">
        <h3 class="">
            Navigation
        </h3>
        <ul class="footer__navigation--list">
            <li><a href="<?php bloginfo('url');?>">home</a></li>
            <li><a href="http://www.sidetracked.blog/category/archive">archive</a></li>
            <li><a href="#">about</a></li>
        </ul>
    </div>

    <div class="footer__follow">
        <h3 class="">
            Follow Us
        </h3>
        <ul class="footer__navigation--list">
            <li><a href="https://www.instagram.com/donniestephens/"><img src="<?php bloginfo('template_directory');?>/images/insta.svg" class="instaSvg">instagram</a></li>
        </ul>
    </div>

    <div class="footer__ask">
        <h3 class="">
            Ask Us
        </h3>
        <ul class="footer__navigation--list">
            <li>
                <a href="mailto:stephens.dona@gmail.com">
                    <img src="<?php bloginfo('template_directory');?>/images/gmail.svg" class="gmailSvg">
                    email
                </a>
            </li>
        </ul>
    </div>
</footer>

    <div class="info">
        <p class="info__copyright">©2020 sidetracked blog. All Rights Reserved</p>
        
        <p class="info__by">
            Website made on 🌎 
            <a href="https://amichaelm.github.io/">
                byalexm.com
            </a>
        </p>
    </div>

</body>
</html>