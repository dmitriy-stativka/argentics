<?php 
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $background = get_sub_field('background');
    $description = get_sub_field('description');
?>
<section class="about-us" style="background-image: url(<?php echo $background; ?>)">
    <div class="container">
        <div class="about-us__box">
          <div class="about-us__image">
            <picture>
              <img width="490" height="480" src="<?php echo $image;?>" alt="image">
            </picture>
          </div>

          <article class="about-us__article index-massege_box">
            <p class="about-us__title"><?php echo $title;?></p>
            <p class="about-us__text"><?php echo $description;?> <span class="index-more-info">+</span> </p>
            <p class="index-massege"><?php echo get_sub_field('popup_text');?><span class="index-massege-close">×</span></p>
          </article>
          
        </div>
    </div>
</section>