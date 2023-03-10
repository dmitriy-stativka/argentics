<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>
<section class="portfolio-gallery">
    <div class="container">
        <div class="main-top portfolio-gallery__top">
            <p class="main-top__title"><?php echo $title;?></p>
            <p class="main-top__text"><?php echo $description;?></p>
        </div>
        <div class="portfolio-gallery__box">
          <ul class="portfolio-gallery__list" id="portfolioGallery">
            <?php if (have_rows('gallery')):
                while (have_rows('gallery')) : the_row(); 
                    $image = get_sub_field('image');
                ?>
                <li class="portfolio-gallery__item" data-src="<?php echo $image;?>">
                    <picture>
                        <img width="306" height="290" src="<?php echo $image;?>" alt="image">
                    </picture>
                </li>      
                <?php endwhile;
                endif; 
            ?>
          </ul>
          <button class="veiw-more">More Works</button>
        </div>
    </div>
</section>