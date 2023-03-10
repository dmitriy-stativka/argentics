<?php get_header(); ?>


<section class="portfolio-first main-section" style="background-image: url(<?php echo get_field('background_single'); ?>)">
      <div class="container">
        <div class="portfolio-first__box main-section__box">
          <article class="portfolio-first__article main-article">
            <h1 class="portfolio-first__title main-article__title"><?php the_title();?></h1>
                <p class="portfolio-first__text main-article__text"><?php echo get_field('minidescription');?></p>
                <ul class="portfolio-first__list">
                  <?php if(get_field('client')){ ?>
                    <li class="portfolio-first__item">
                        <span class="portfolio-first__info">Client</span>
                        <span class="portfolio-first__value"><?php echo get_field('client');?></span>
                    </li>
                  <?php } ?>

                  <?php if(get_field('indastry')){ ?>
                    <li class="portfolio-first__item">
                        <span class="portfolio-first__info">Indastry</span>
                        <span class="portfolio-first__value"><?php echo get_field('indastry');?></span>
                    </li>
                  <?php } ?>

                  <?php if(get_field('region')){ ?>
                    <li class="portfolio-first__item">
                      <span class="portfolio-first__info">Region</span>
                      <span class="portfolio-first__value"><?php echo get_field('region');?></span>
                    </li>
                  <?php } ?>
                </ul>
          </article>

          <div class="portfolio-first__image main-section__image">
            <picture>
              <img width="478" height="612" src="<?php echo get_field('image_single');?>" alt="image">
            </picture>
          </div>
        </div>
      </div>
    </section>

    <section class="portfolio-second">
      <div class="container">
        <div class="portfolio-second__box">
          <div class="portfolio-second__task">
            <div class="portfolio-second__inner">
              <span class="portfolio-second__title"><?php the_field('title_content');?></span>
              <p class="portfolio-second__text"><?php echo get_field('text_content');?> </p>
            </div>
          </div>

          <?php if (have_rows('images_list')): ?>
              <ul class="portfolio-second__images">
                    <?php while (have_rows('images_list')) : the_row(); ?>
                      <?php
                          $image = get_sub_field('image');
                      ?>

                      <li class="portfolio-second__item">
                          <div class="portfolio-second__image">
                              <picture>
                                  <img width="379" height="379" src="<?php echo $image;?>" alt="image">
                              </picture>
                          </div>
                      </li>

                    <?php endwhile; ?>
              </ul>
          <?php endif; ?>

          <?php if(get_field('solution_title')){ ?>
            <div class="portfolio-solution">
              <div class="portfolio-second__inner">
                  <span class="portfolio-solution__title"><?php the_field('solution_title');?></span>

                  <p class="portfolio-solution__text"><?php the_field('solution_text');?></p>

                  <?php if(get_field('solution_more_info')){ ?>
                    <div class="portfolio-solution__bottom">
                      <span class="portfolio-solution__more accordion">
                        More Info
                        <svg class="arrow-icon" width="24" height="24">
                          <use href="img/sprite/sprite.svg#arrow-bottom"></use>
                        </svg>
                      </span>

                      <div class="portfolio-solution__hide panel">
                        <p class="portfolio-solution__text"><?php the_field('solution_more_info');?></p>
                      </div>

                    </div>
                  <?php } ?>
              </div>
            </div>
          <?php } ?>

          <?php if(get_field('result_title')){ ?>
              <div class="portfolio-result">
                  <div class="portfolio-second__inner">
                      <span class="portfolio-result__title"><?php the_field('result_title');?></span>
                      <p class="portfolio-result__text"><?php the_field('result_text');?></p>
                  </div>
              </div>
          <?php } ?>
        </div>
      </div>
    </section>


    <?php if ( have_rows('flexible') ): ?>

      <?php while ( have_rows('flexible') ): the_row(); ?>

        <?php if( get_row_layout() ){
          get_template_part('templates/flexible/' . get_row_layout() );
        }
        ?>

      <?php endwhile; ?>
    <?php endif; ?>


<?php get_footer(); ?>