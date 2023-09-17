</main>

<footer class="pie mt-auto"> <!-- mt-auto para que el footer quede abajo -->
    <div class="pie__container">
        <div class="col-10 col-sm-8 col-md-6 col-lg-5 col-xxl-4"> <!-- da igual que las col sean impares porque tenemos justify-content -->
            <div class="pie__cita">

            <!-- CITAS FOOTER -->
            <?php

            // La consulta con sus argumentos. Con esto la cita será aleatoria siempre cuando refresquemos la página
            $cita = new WP_Query( array(
                'cat' => 7, 
                'posts_per_page' => 1,
                'orderby' => 'rand'
            ));

            // El loop
            if ( $cita->have_posts() ) {while ( $cita->have_posts() )           {$cita->the_post();?>

                <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>

            <?php }} wp_reset_postdata(); ?>
            <!-- fin del wp-query -->

            </div>
            <div class="pie__redes">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'redes',
                        'container' => 'false',
                        'menu_class' => 'pie__menu'
                    )
                ); ?>
            </div>
            <div class="pie__copy">
                <p>Copyright</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>