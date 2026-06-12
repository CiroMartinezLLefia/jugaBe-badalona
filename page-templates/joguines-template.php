<?php
/**
 * Template Name: Joguines Template
 * Template
 *
 * @package Understrap Child Portfolio
 */

defined( 'ABSPATH' ) || exit; // Safe check [cite: 37]

get_header();
get_template_part( 'global-templates/hero-banner' );

$container = get_theme_mod( 'understrap_container_type' );
$mostrar_solo_ofertas = get_field('mostrar_solo_ofertas');
?>

<div class="wrapper" id="<?php echo esc_attr( $wrapper_id ); ?>">
 <div class="<?php echo esc_attr( $container ); ?>" id="content">
    <div class="row">
      <div class="col-md-12 content-area" id="primary">
        <main class="site-main" id="main" role="main">
          <?php
          while ( have_posts() ) {
            the_post();
            get_template_part( 'loop-templates/content', 'page' );
          }
          ?>

          <section class="my-5">
            <div>
            <h2 class="h3">Joguines</h2>
            </div>

            <div class="row">
              <?php
                if ( $mostrar_solo_ofertas ) {
                    $joguines_query = new WP_Query([
                        'post_type'      => 'joguina',
                        'posts_per_page' => -1,
                        'meta_key'       => 'oferta',
                        'meta_value'     => '1',
                    ]);

                } else {
                    $joguines_query = new WP_Query([
                        'post_type'      => 'joguina',
                        'posts_per_page' => -1,
                    ]);
                }

                if ( $joguines_query->have_posts() ) :
                    while ( $joguines_query->have_posts() ) :
                        $joguines_query->the_post();
                        ?>
                        <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex align-items-stretch">
                            <?php 
                                get_template_part( 'loop-templates/content', 'joguina-card' ); 
                            ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<div class="col-12"><p">Nada</p></div>';
                endif;
              ?>
            </div>
          </section>
        </main>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>