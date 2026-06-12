<?php
$preu = get_field('preu');
$oferta = get_field('oferta');
$descompte = get_field('descompte');
$descripcion = get_field('descripcion');
$fabricante = get_field('fabricante');
$preu_total = 0;

if ($oferta) {
    $preu_total = $preu - ($preu * ($descompte / 100));
} else {
    $preu_total = $preu;
}

?>

<article class="card joguina-card" <?php echo $oferta ? "joguina-card--oferta" : ""; ?>>
    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('medium', ['class' => 'card-img-top object-fit']   ); ?>
    <?php endif; ?>

    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php echo esc_html($descripcion); ?></p>
        <p class="card-text"><small class="text-muted">Fabricant: <?php echo esc_html($fabricante); ?></small></p>

        <?php if ($oferta && $descompte) : ?>
            <span class="badge bg-danger">Oferta -<?php echo $descompte; ?>%</span>

        <p>
            <del><?php echo esc_html($preu); ?>€</del>
            <strong><?php echo esc_html(number_format($preu_total, 2)); ?>€</strong>
        </p>

        <?php else : ?>
            <p><strong><?php echo esc_html(number_format($preu_total, 2)); ?>€</strong></p>
        <?php endif; ?>

        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Veure joguina</a>
    </div>
</article>

