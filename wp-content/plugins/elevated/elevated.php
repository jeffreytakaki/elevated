<?php 

/**
 * Plugin Name: Elevated
 * Description: update the content of your site
 * Version: 1.0.0
 * Plugin URI: 
 * Author: Elevated
 * Author URI: 
 *
 */


function elevated_init() {
    wp_register_style('elevated', plugins_url('admin/css/style.css',__FILE__ ));
    wp_enqueue_style('elevated');
    // wp_register_script( 'your_namespace', plugins_url('your_script.js',__FILE__ ));
    // wp_enqueue_script('your_namespace');
}

add_action( 'admin_init','elevated_init');

function addMenu() {
    add_menu_page('Elevated', 'Elevated', 4, "elevated", "elevatedMain");

    add_submenu_page(
        "elevated", 
        "Homepage",
        "Homepage", 
        "manage_options", 
        "homepage", 
        "callHomepageSubMenu");

    add_submenu_page(
        "elevated", 
        "Product Pages",
        "Product Pages", 
        "manage_options", 
        "products", 
        "callProductseSubMenu");

    // add_submenu_page( 
    //     string $parent_slug, 
    //     string $page_title, 
    //     string $menu_title, 
    //     string $capability, 
    //     string $menu_slug, 
    //     callable $function = '', 
    //     int $position = null )
}
add_action("admin_menu", "addMenu");

function elevatedMain() { ?>
    <h1>Global Configurations</h1>
    
    <form method="post" action="options.php">
    <?php settings_fields( 'elevated_global' ); ?>
    <?php do_settings_sections( 'elevated_global' ); ?>
        <style>

            .form-container {
                display: flex;
            }
        </style>

    <div class="form-container">
        <label for="hero-image">Brand Color:</label>
        <input type="text" name="brand-color" value="<?php echo get_option( 'brand-color' ); ?>"" />

        <label for="page-color">Page Color:</label>
        <input type="text" name="page-color" value="<?php echo get_option( 'page-color' ); ?>"" />
    </div>

    <?php submit_button(); ?>
    </form>

    <?php
}



function callHomepageSubMenu(){ ?>
    <h1>Homepage Configurations</h1>
    <!-- <form method="post" action="<?php echo esc_url( add_query_arg('tab', $active_tab, admin_url( 'options.php' )) ); ?>"> -->
    <form method="post" action="options.php">
    <?php settings_fields( 'elevated_homepage' ); ?>
    <?php do_settings_sections( 'elevated_homepage' ); ?>
        <style>

            .form-container {
                display: flex;
            }
        </style>
        <div class="form-container">
            <label for="hero-image">Homepage Hero Background Image</label>
            <input type="text" name="hero-image" value="<?php echo get_option( 'hero-image' ); ?>"" />
        </div>
        
        <div class="form-container">
            <div class="col">
                <label for="column-1-text">Column 1 Text</label>
                <input type="text" name="column-1-text" value="<?php echo get_option( 'column-1-text' ); ?>"/>
                <label for="column-1-image">Column 1 Image</label>
                <input type="text" name="column-1-image" value="<?php echo get_option( 'column-1-image' ); ?>"/>
            </div>
            <div class="col">
                <label for="column-1-text">Column 2 Text</label>
                <input type="text" name="column-1-text" value="<?php echo get_option( 'column-2-text' ); ?>"/>
                <label for="column-1-image">Column 2 Image</label>
                <input type="text" name="column-1-image" value="<?php echo get_option( 'column-2-image' ); ?>"/>
            </div>
            <div class="col">
                <label for="column-3-text">Column 1 Text</label>
                <input type="text" name="column-1-text" value="<?php echo get_option( 'column-3-text' ); ?>"/>
                <label for="column-3-image">Column 1 Image</label>
                <input type="text" name="column-1-image" value="<?php echo get_option( 'column-3-image' ); ?>"/>
            </div>
        </div>

        
    <?php submit_button(); ?>
    </form>
    <?php }


function callProductseSubMenu() {
    // add_action();
    echo "callProductseSubMenu";

}


/**
 * Register custom fields for plugin settings
 */

 function register_wp_general_settings() {
     
    // registers all settings

    register_setting('elevated_global', 'brand-color');
    register_setting('elevated_global', 'page-color');

    register_setting('elevated_homepage', 'hero-image');
    register_setting('elevated_homepage', 'column-1-text');
    register_setting('elevated_homepage', 'column-1-image');
    register_setting('elevated_homepage', 'column-2-text');
    register_setting('elevated_homepage', 'column-2-image');
    register_setting('elevated_homepage', 'column-3-text');
    register_setting('elevated_homepage', 'column-3-image');


     


 }

 add_action('admin_init','register_wp_general_settings');