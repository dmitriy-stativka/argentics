<section class="portfolio-list">
    <div class="container">
        <ul class="portfolio-list__list">
            <?php
                $args = array(
                    'post_type' => 'projects',
                    'posts_per_page' => 5,
                    'orderby' => 'title',
                    'order' => 'ASC'
                );
                $posts_query = new WP_Query($args);
                ?>
                <?php if ($posts_query->have_posts()) : ?>
                    <?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
                        
                        <li class="portfolio-list__item" style="background-image: url(<?php echo get_field('background'); ?>);">
                            <div class="portfolio-list__top">
                                <div class="portfolio-list__image-wrapper">
                                    <div class="portfolio-list__image <?php echo get_field('class'); ?>">
                                        <?php if(get_field('image')){ ?>
                                            <picture>
                                                <img width="566" height="600" src="<?php echo get_field('image'); ?>" alt="image">
                                            </picture>
                                        <?php } ?>
                                    </div>
                                </div>
                               
                                <div class="portfolio-list__description">
                                    <?php if(get_field('logo')){ ?>
                                        <img class="portfolio-list__logo" src="<?php echo get_field('logo'); ?>" alt="">
                                    <?php } ?>

                                    <span class="portfolio-list__title"><?php the_title();?></span>
                                    <p class="portfolio-list__text"><?php echo get_field('minidescription');?></p>
                                    <ul class="portfolio-list__info">
                                        <?php
                                            if(get_field('client')){ ?>
                                                <li class="portfolio-list__info-item">
                                                    <span class="portfolio-list__info-name">Client</span>
                                                    <span class="portfolio-list__info-value"><?php echo get_field('client');?></span>
                                                </li>
                                            <?php }
                                        ?>

                                        <?php
                                            if(get_field('indastry')){ ?>
                                                <li class="portfolio-list__info-item">
                                                    <span class="portfolio-list__info-name">Indastry</span>
                                                    <span class="portfolio-list__info-value"><?php echo get_field('indastry');?></span>
                                                </li>
                                            <?php }
                                        ?>

                                        <?php
                                            if(get_field('region')){ ?>
                                                <li class="portfolio-list__info-item">
                                                    <span class="portfolio-list__info-name">Region</span>
                                                    <span class="portfolio-list__info-value"><?php echo get_field('region');?></span>
                                                </li>
                                            <?php }
                                        ?>          

                                    </ul>
                                    <a href="<?php echo get_the_permalink();?>" class="portfolio-list__link">View Project</a>
                                </div>

                                <?php
                                    if(get_field('vr_game')){ ?>
                                        <div class="vr-info">
                                            <div class="vr-info__image">
                                                <picture>
                                                    <img width="80" height="53" src="../wp-content/themes/argentics/img/portfolio-list/vr.png" alt="image">
                                                </picture>
                                            </div>
                                            <span class="vr-info__text">VR Defence game</span>
                                        </div>
                                    <?php }
                                ?>
                               
                            </div>
                            
                            
                            <?php if (have_rows('list_of_category')): ?>
                                    <ul class="portfolio-list__bottom">
                                       <?php  while (have_rows('list_of_category')) : the_row(); 
                                            $category = get_sub_field('category');
                                        ?>
                                        <li class="portfolio-list__bottom-item"><?php echo $category;?></li>     
                                        <?php endwhile; ?>
                                    </ul>
                                    <?php endif; 
                                ?>
                        </li>

                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

        </ul>
    </div>
</section>