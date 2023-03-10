<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>

<section class="technical">
      <div class="container">
        <div class="main-top main-top--dark technical__top">
        <div class="main-top art2D-works__top">
          <p class="main-top__title"><?php echo $title;?></p>
          <p class="main-top__text"><?php echo $description;?></p>
        </div>
        <div class="technical__slider swiper-slider">
            <ul class="technical__wrapper swiper-wrapper">

                <?php if (have_rows('list_of_technical')):
                    while (have_rows('list_of_technical')) : the_row(); 
                        $image = get_sub_field('image');
                        $title = get_sub_field('title');
                    ?>

                    <li class="technical__slide swiper-slide">
                        <div class="technical__image">
                            <picture>
                                <img width="56" height="56" src="<?php echo $image;?>" alt="icon">
                            </picture>
                        </div>
                        <span class="technical__name"><?php echo $title;?></span>
                    </li>

                    <?php endwhile;
                    endif; 
                ?>
            </ul>
        </div>
    </div>
</section>