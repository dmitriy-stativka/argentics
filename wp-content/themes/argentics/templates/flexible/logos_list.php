<section class="index-logo">
    <div class="container">
        <div class="index-logo__slider swiper-container">
          <ul class="index-logo__wrapper swiper-wrapper">
            <?php if (have_rows('logos_list')):
                while (have_rows('logos_list')) : the_row(); ?>
                      <li class="index-logo__slide swiper-slide">
                        <div class="index-logo__wrapper index-logo__item">
                            <picture>
                                <img width="70" height="55" src="<?php echo get_sub_field('logo');?>" alt="icon">
                            </picture>
                            <span><?php echo get_sub_field('title');?></span>
                        </div>
                    </li>
                <?php endwhile;
                endif; 
            ?>
          </ul>
        </div>
    </div>
</section>