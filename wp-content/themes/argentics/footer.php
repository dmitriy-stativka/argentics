</main>

<?php 
    do_action( 'ds_after_content' ); 
    $background = get_field('background', 'option');
    $logo = get_field('logo', 'option');
    $copyright = get_field('copyright', 'option');
    $footer_text = get_field('footer_text', 'option');
    $footer_link = get_field('footer_link', 'option');
?>

<footer class="site-footer" role="contentinfo" style="background-image: url(<?php echo $background;?>)">

    <div class="container">
        <ul class="footer">
            <li class="footer__coll footer__coll--first">
                    <a href="#" class="footer__logo">
                        <img src="<?php echo $logo;?>" alt="">
                    </a>
                    <ul class="footer-list">
                    <li class="footer-list__item">
                        <span class="footer-list__text"><?php echo $footer_text;?></span>
                    </li>
                    <li class="footer-list__item">
                        <a href="mailto:<?php echo $footer_link;?>" class="footer-list__mail"><?php echo $footer_link;?></a>
                    </li>
                </ul>
            </li>

            <li class="footer__coll footer__coll--second">
                <ul class="footer__nav">
                    <?php 
                        while (have_rows('footer_menu', 'option')) : the_row(); ?>
                            <li class="footer__nav-item">
                                <a href="<?php echo get_sub_field('item_link')?>"><?php echo get_sub_field('item_name')?></a>
                            </li>
                        <?php endwhile;
                    ?>
                </ul>
                <span class="reserved"><?php echo $copyright;?></span>
            </li>

            <li class="footer__coll footer__coll--third">
                <ul class="footer-social">
                    
                    <?php 
                        while (have_rows('social_list', 'option')) : the_row(); ?>
                            <li class="footer-social__item">
                                <a href="<?php echo get_sub_field('link');?>" class="footer-social__link">
                                    <img src="<?php echo get_sub_field('icon');?>" alt="">
                                </a>
                            </li>
                        <?php endwhile;
                    ?>
                </ul>
            </li>

        </ul>
    </div>
</footer>



<div class="overlay">

  <div class="modal-wrapper">

    <div class="modal">
      <button class="modal__close" data-close="">
        <svg width="28" height="28">
          <use href="./wp-content/themes/argentics/img/sprite/sprite.svg#close"></use>
        </svg>
      </button>
      <svg width="138" height="103" class="modal__icon">
        <use href="./wp-content/themes/argentics/img/sprite/sprite.svg#airbus"></use>
      </svg>

      <p class="modal__text">
        Thank you for your submission! We'll get back to you shortly.
      </p>

      <button class="modal__btn" data-close="">
        Ok
      </button>

    </div>

  </div>

</div>


</div><!--	wrapper-->

<?php wp_footer(); ?>



<script src="<?php echo get_stylesheet_directory_uri();?>/js/swiper.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/lightbox.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/js/common.min.js"></script>


</body>
</html>