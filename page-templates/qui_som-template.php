<?php
/**
 * Template Name: Qui Som Template
 * Template
 *
 * @package Understrap Child Portfolio
 */

defined( 'ABSPATH' ) || exit; // Safe check [cite: 37]

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="<?php echo esc_attr( $wrapper_id ); ?>">
 <div class="<?php echo esc_attr( $container ); ?>" id="content">
    <div class="row">
      <div class="col-md-12 content-area" id="primary">
        <main class="site-main" id="main" role="main">
            <h1>Qui Som</h1>
        </main>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>