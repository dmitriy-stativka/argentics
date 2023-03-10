<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $shortcode = get_sub_field('shortcode');
?>
<section class="form-section" id="form-section">
    <div class="container">
        <div class="main-top form-section__top">
          <h2 class="main-top__title form-section__title"><?php echo $title;?></h2>
          <p class="main-top__text form-section__text"><?php echo $description;?></p>
        </div>
        <?php echo do_shortcode($shortcode);?>
    </div>
</section>