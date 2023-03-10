<?php

foreach ( glob( get_template_directory() . '/inc/post_types/*.php' ) as $filename ) {
    include_once $filename;
}
/**
 * Enqueue scripts and styles for the front end.
 *
 * @since custom 1.2
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'DS_ThemeAssets' ) ) {

    Class DS_ThemeAssets
    {

        public function __construct()
        {
            /**
             * Enqueue Admin panel additional styles and scripts
             */
            add_action( 'admin_enqueue_scripts', array( __CLASS__, 'theme_admin_assets' ) );
        }


        /**
         * Load Admin Panel styles and js
         */
        public static function theme_admin_assets()
        {
            wp_enqueue_style( 'admin-css', get_template_directory_uri() . '/admin/css/theme.css', array(), 1.0 );
            wp_enqueue_script( 'admin-js', get_template_directory_uri() . '/admin/js/theme.js', array() , 1.0, true );

            $issetPluginACF = class_exists( 'Acf' );
            wp_localize_script( 'admin-js', 'theme_js_params', array(
                'is_acf_exist' => $issetPluginACF,
                'theme_path' => get_stylesheet_directory_uri()
            ) );
        }
    }

    new DS_ThemeAssets();
}
