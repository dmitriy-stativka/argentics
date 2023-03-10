<?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $background = get_sub_field('background');
    $image = get_sub_field('image');
    $class = get_sub_field('class');
    $wrapper_class = get_sub_field('wrapper_class');
?>
<section class="gameDev-first main-section <?php echo $wrapper_class;?>" style="background-image: url(<?php echo $background;?>)">
    <div class="container">
        <div class="gameDev-first__box main-section__box">
          <article class="gameDev-first__article main-article">
            <ul class="breadcrumb">
              <li><a class="breadcrumb-link" href="/">Main</a> /</li>
              <li><?php the_title();?></li>
            </ul>
            <h1 class="gameDev-first__title main-article__title"><?php echo $title;?></h1>
            <p class="gameDev-first__text main-article__text"><?php echo $description;?></p>
          </article>

          <?php 
            if($image){ ?>
              <div class="main-section__image <?php echo $class;?>">
                <picture>
                  <img src="<?php echo $image;?>" alt="image">
                </picture>
              </div>
            <?php }
          ?>
        </div>
    </div>
</section>