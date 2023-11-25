<?php
        function load_assets() {
        wp_enqueue_style("bootstrapcss", get_theme_file_uri('/inc/bootstrap.min.css'), array(), "1.0", "all");
        wp_enqueue_style("awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), "1.0", "all");
        wp_enqueue_style("csscustom", get_theme_file_uri('/assets/css/style.css'), array(), "1.0.2", "all");
        
        wp_enqueue_script("bootstrap", get_theme_file_uri() . '/inc/bootstrap.min.js', array('jquery'), "5.0.0", true);
        // wp_enqueue_script("index", get_theme_file_uri() . '/build/index.js', array('jquery'), '1.0.2', true);
        // wp_localize_script("index", 'smartEduData', array('root_url' => get_site_url()));
    }
    add_action("wp_enqueue_scripts", "load_assets");

    function fancy_lab_config() {
        // Register navigation menus
        register_nav_menus(
            array(
                'fancy_lab_main_menu'   => 'Fancy Lab Main Menu',
                'fancy_lab_footer_menu' => 'Fancy Lab Footer Menu',
            )
        );

        // Add theme support for WooCommerce
        add_theme_support( 'woocommerce', array(
            'thumbnail_image_width' => 150,
            'single_image_width'    => 300,

            'product_grid'          => array(
                'default_rows'    => 1,
                'min_rows'        => 2,
                'max_rows'        => 8,
                'default_columns' => 4,
                'min_columns'     => 2,
                'max_columns'     => 5,
            ),
	    ) );
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');
        if ( ! isset( $content_width ) ) {
	        $content_width = 600;
        }
    }
    // Hook the fancy_lab_config function to the after_setup_theme action
    add_action('after_setup_theme', 'fancy_lab_config', 0);

    require get_template_directory() . '/inc/wc-modifications.php';

?>
