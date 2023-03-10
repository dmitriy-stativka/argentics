
<?php
/**
 * Template Name: Blog Template
 */
 
 get_header(); 
?>

<?php
    $title = get_field('title', 571);
    $description = get_field('description', 571);
?>

<section class="main-blog">
    <div class="container container--blog">
        <div class="main-top main-top--dark main-blog__top">
          <p class="main-top__title"><?php echo $title;?> </p>
          <p class="main-top__text"><?php echo $description;?></p>
        </div>

        <ul class="main-blog__list">
            <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'posts_per_page' => 2,// query last 2 posts  
                    'post_type' => 'blog', 
                    'paged' => $paged
                    );
                            
                $customPostQuery = new WP_Query($args);
              
                
                if($customPostQuery->have_posts() ): 
                
                    while($customPostQuery->have_posts()) :
                            $customPostQuery->the_post();
                            global $post;
                        ?>

                        <li class="main-blog__item">
                            <a href="<?php echo get_the_permalink(); ?>" class="main-blog__inner">
                                <div class="main-blog__image">
                                    <picture>
                                        <img width='460' height='360' src='<?php echo get_field('image');?>' alt='image'>
                                    </picture>
                                </div>
                                <span class="main-blog__date"><?php echo get_the_date('l, F d'); ?></span>
                                <span class="main-blog__title"><?php the_title();?> </span>
                                <p class="main-blog__text"><?php echo get_field('minidescription');?></p>
                            </a>
                        </li>   

                    <?php endwhile; 
                endif; 
                wp_reset_query();
            ?>
        </ul>
  
        <?php 
            if (function_exists("cpt_pagination")) {
                cpt_pagination($customPostQuery->max_num_pages); 
            }
        ?>
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




<?php
    get_footer();
?>