<?php 
/**
 * Plugin Name: Extension de l'exercice 1
 * Author: Yordan Toledano Prieto 
 * Description: Premier extension pour l'exercice 1 
 * Author URI: https://github.com/Dev2023/31w-extension1 
 */
?>
<?php
    function function_general() {
        function mon_31w_enqueue() {
            add_theme_support( 'title-tag' );
            add_theme_support( 'html5', array('search-form') );
            add_theme_support('custom-background');
        }
        add_action( 'after_setup_theme', 'mon_31w_setup' );
    }
    add_action('init', 'enqueue_style') //commentaire
?>
