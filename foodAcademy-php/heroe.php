<!-- HEROE -->
<!-- comienza wp-query -->
<?php

// La consulta con sus argumentos
$heroe = new WP_Query(array(
    'post_type' => 'page',
    'p' => 148
));

// El loop
if ($heroe->have_posts()) {
    while ($heroe->have_posts()) {
        $heroe->the_post(); ?>
        <?php
        // variable que llama al grupo
        $promo = get_field('curso_promocionado');

        // si se ha rellenado el grupo aparece
        if ($promo) : ?>
            <div class="heroe mb-4 d-md-flex">
                <div class="heroe__imagen col-md-5 order-md-last">
                    <img src="<?php echo $promo['imagen']; ?>">
                </div>
                <div class="col-md-7">
                    <h1 class="heroe__titulo text-center text-md-start my-3 mt-md-4"><?php the_title(); ?></h1>
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <a href="<?php echo $promo['vinculo']; ?>" class="boton-dark">Me interesa</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
<?php }
}

wp_reset_postdata(); ?>
<!-- FIN HEROE -->