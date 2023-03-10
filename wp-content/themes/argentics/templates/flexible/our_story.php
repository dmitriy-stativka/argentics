<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $image = get_sub_field('image');
    $background = get_sub_field('background');
?>
<section class="our-story">
    <div class="container">
        <div class="our-story__box" style="background-image: url(<?php echo $background;?>);">
            <div class="our-story__image">
                <picture>
                    <img width='543' height='728' src='<?php echo $image;?>' alt='image'>
                </picture>
            </div>
            <article class="our-story__article">
                <span class="our-story__title"><?php echo $title;?></span>
                <p class="our-story__text"><?php echo $description;?></p>
            </article>
        </div>
    </div>
</section>