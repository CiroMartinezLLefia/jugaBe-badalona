<?php
/**
 * Hero setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="wrapper" id="wrapper-hero">
    <div class="text-white py-2">
        <div class="container">
            <h1 class="display-4">JugaBe</h1>    
            <div class="mt-4">
                <a href="<?php echo home_url(); ?>" class="btn text-white">Home</a>
                <a href="<?php echo get_permalink( get_page_by_path( 'qui-som' ) ); ?>" class="btn text-white">Qui som</a>
                <a href="<?php echo get_permalink( get_page_by_path( 'cataleg' ) ); ?>" class="btn text-white">Catàleg</a>
                <a href="<?php echo get_permalink( get_page_by_path( 'ofertes' ) ); ?>" class="btn text-white">Ofertes</a>
            </div>
        </div>
    </div>
</div>