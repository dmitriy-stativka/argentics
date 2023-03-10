<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


 /**
 * Main theme functions: assets including, post types, walkers etc.
 */
require_once( 'inc/theme-setup.php' );

if ( ! function_exists( 'argentics_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function argentics_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'argentics_support' );

if ( ! function_exists( 'argentics_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function argentics_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'argentics-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Add styles inline.
		wp_add_inline_style( 'argentics-style', argentics_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'argentics-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'argentics_styles' );

if ( ! function_exists( 'argentics_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function argentics_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', argentics_get_font_face_styles() );

	}

endif;

add_action( 'admin_init', 'argentics_editor_styles' );


if ( ! function_exists( 'argentics_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions argentics_styles() and argentics_editor_styles() above.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return string
	 */
	function argentics_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) . "') format('woff2');
		}

		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Italic.ttf.woff2' ) . "') format('woff2');
		}
		";

	}

endif;

/**
 * Register Options page for ACF groups
 */
if ( ! function_exists( 'ds_register_theme_option_page' ) ) {
    function ds_register_theme_option_page() {
        if ( function_exists( 'acf_add_options_page' ) ) {
            // Register options page.
            $option_page = acf_add_options_page( array(
                'page_title' => __( 'Theme Options' ),
                'menu_title' => __( 'Theme Options' ),
                'menu_slug'  => 'theme-options',
            ) );
        }
    }
    add_action( 'acf/init', 'ds_register_theme_option_page' );
}


add_action( 'wp_footer', 'mycustom_wp_footer' );
function mycustom_wp_footer() { ?>
	<script type="text/javascript">
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			if ( '5' == event.detail.contactFormId ) { // Change 34 to the ID of the form 
				document.querySelector('.overlay').classList.add('active');
			}
		}, false );
	</script>
<?php  } ?>



<?php 
//  Custom post type pagination function 
	
    function cpt_pagination($pages = '', $range = 4)
    {
        $showitems = ($range * 2)+1;
        global $paged;
        if(empty($paged)) $paged = 1;
        if($pages == '')
        {
            global $wp_query;
            $pages = $wp_query->max_num_pages;
            if(!$pages)
            {
                $pages = 1;
            }
        }
        if(1 != $pages)
        {
            echo "<nav aria-label='Page navigation example'>  <ul class='pagination-list'>";
            if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
            if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
            for ($i=1; $i <= $pages; $i++)
            {
                if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                {
                    echo ($paged == $i)? "<li class=\"pagination-list__item pagination-list__item--navigation\"><a class='page-link'>".$i."</a></li>":"<li class='pagination-list__item'> <a href='".get_pagenum_link($i)."' class=\"page-link\">".$i."</a></li>";
                }
            }
            if ($paged < $pages && $showitems < $pages) echo " <li class='pagination-list__item'><a class='page-link' href=\"".get_pagenum_link($paged + 1)."\">i class='flaticon flaticon-back'></i></a></li>";
            if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo " <li class='pagination-list__item'><a class='page-link' href='".get_pagenum_link($pages)."'><i class='flaticon flaticon-arrow'></i></a></li>";
            echo "<span>Page ".$paged." of ".$pages."</span></ul>  </nav>\n";
        }
  }

?>