<?php 

/**
 * Plugin Name: Homepage Hero
 * Description: update the content of your homepage hero
 * Version: 1.0.0
 * Plugin URI: 
 * Author: Elevated
 * Author URI: 
 *
 */



add_action("admin_menu", "addMenu");

function addMenu() {
    add_menu_page('Homepage Hero', 'Homepage Hero', 4, "homepage-hero", "homepageHero");
}

function homepageHero() {

}