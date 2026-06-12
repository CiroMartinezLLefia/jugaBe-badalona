<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

if ( get_post_type() === 'joguina' ) {
  get_template_part('loop-templates/content', 'single-joguina');
} else {
  get_template_part('loop-templates/content', 'single');
}
get_footer();
