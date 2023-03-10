<?php
/**
 * Template Name: Flexible Content
 */

get_header(); ?>

<?php get_template_part('templates/parts/subheader' ); ?>



<section class="single-blog">
      <div class="container container--blog">
        <article class="single-blog__box">
          <ul class="breadcrumbs single-blog__breadcrumbs">
            <li class="breadcrumbs__item">
              <a href="/" class="breadcrumbs__link">Main</a>
            </li>
            <li class="breadcrumbs__item">
              <a href="/blog" class="breadcrumbs__link">Blog</a>
            </li>
            <li class="breadcrumbs__item">
              <a href="#" class="breadcrumbs__link"><?php the_title();?></a>
            </li>
          </ul>
          <h1 class="single-blog__title"><?php the_title();?></h1>


          <div class="single-blog__image">
            <picture>
              <img width='960' height='327' src='<?php the_field('image');?>' alt='image'>
            </picture>
          </div>


          <?php the_content();?>

        </article>
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