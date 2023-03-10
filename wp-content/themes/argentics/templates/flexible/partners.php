<section class="partners-logo">
    <div class="container">
        <div class="partners-logo__slider swiper-container">
            <ul class="partners-logo__wrapper swiper-wrapper">

                <?php if (have_rows('logos_list')):
                    while (have_rows('logos_list')) : the_row(); ?>
                        <?php
                            $image = get_sub_field('image');
                        ?>

                        <li class="partners-logo__slide swiper-slide">
                            <div class="partners-logo__image">
                                <picture>
                                    <img src="<?php echo $image;?>" alt="logo">
                                </picture>
                            </div>
                        </li>

                    <?php endwhile;
                    endif; 
                ?>
            
            </ul>
        </div>
    </div>
</section>