<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
?>
<section class="work-example">
    <div class="container">
        <div class="main-top work-example__top">
            <p class="main-top__title"><?php echo $title;?></p>
            <p class="main-top__text"><?php echo $description;?></p>
        </div>

        <ul class="work-example__list">
            <?php if (have_rows('images_list')):
                while (have_rows('images_list')) : the_row(); 
                    $image = get_sub_field('image');
                    $large_image = get_sub_field('large_image');
                ?>
                    <li class="work-example__item">
                        <div class="work-example__image">
                            <picture>
                                <img width="280" height="280" src="<?php echo $image;?>" alt="image">
                            </picture>
                        </div>
                        <div class="work-example__image work-example__image--big">
                            <picture>
                                <img width="824" height="280" src="<?php echo $large_image;?>" alt="image">
                            </picture>
                        </div>
                    </li>
                <?php endwhile;
                endif; 
            ?>
        </ul>
    </div>
</section>