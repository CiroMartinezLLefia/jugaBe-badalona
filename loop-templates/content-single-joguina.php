<?php
/**
 * Partial template for displaying single Joguina
 *
 * @package Understrap Child Portfolio
 */


defined( 'ABSPATH' ) || exit;

$img = get_the_post_thumbnail_url( get_the_ID(), 'full' );
?>

<article <?php post_class('single-joguina'); ?> id="post-<?php the_ID(); ?>">
        <div class="row g-0">
            <div class="col-md-6 d-flex">
                <?php if ( $img ) : ?>
                    <img src="<?php echo esc_url( $img ); ?>" 
                        alt="<?php the_title_attribute(); ?>" 
                        class="img-fluid w-100 h-100" 
                        style="object-fit: cover;">
                <?php endif; ?>
            </div>
        <div class="col-md-6 p-4 d-flex flex-column">
            <h1><?php the_title(); ?></h1>
            <p><?php echo esc_html( get_field('descripcion') ); ?></p>
            <p><small class="text-muted">Fabricant: <?php echo esc_html( get_field('fabricante') ); ?></small></p>
            
            <?php
                $preu = get_field('preu');
                $oferta = get_field('oferta');
                $descompte = get_field('descompte');
                $preu_total = $preu;
            ?>

            <?php if ( $oferta && $descompte ) : ?>
                <span class="badge bg-danger mb-2">Oferta -<?php echo esc_html( $descompte ); ?>%</span>
                <?php
                    $preu_total = $preu - ( $preu * ( $descompte / 100 ) );
                ?>
                <p>
                    <del><?php echo esc_html( $preu ); ?>€</del>
                    <strong><?php echo esc_html( number_format( $preu_total, 2 ) ); ?>€</strong>
                </p>
            <?php else : ?>
                <p><strong><?php echo esc_html( number_format( $preu_total, 2 ) ); ?>€</strong></p>
            <?php endif; ?>
        </div>
    </div>
</article>