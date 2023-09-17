<?php get_header(); ?>

<h1 class="resultados__titulo mb-4">
        Has buscado:
        <?php
        $allsearch = new WP_Query("s=$s&showposts=-1");
        $key = wp_specialchars($s, 1);
        $count = $allsearch->post_count;
        echo '<strong> ' . $key . '</strong> - encontrados <strong> ' . $count . '</strong>:';
        wp_reset_query();
        ?>
</h1>

<div class="row">
        <!-- empieza el LOOP -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class=" col-12 col-md-6 col-lg-4 col-xxl-4 d-md-flex">
                
                        <article class="aprender__card col d-flex">
                                <div class="row g-0 col-12 flex-sm-column">
                                <div class="aprender__card-contenido col-12 d-flex flex-column justify-content-between">
                                <div>
                                        <h2 class="aprender__card-titulo"><?php the_title(); ?></h2>
                                        <time class="aprender__card-fecha" datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo get_the_date(); ?></time>
                                        <div class="aprender__card-extracto"><?php the_excerpt(); ?></div> <!-- texto lorem -->
                                </div>
                                <a href="<?php the_permalink(); ?>" class="aprender__card-btn d-flex justify-content-between align-items-center">
                                        Saber más...
                                </a>
                                </div>
                        </div>
                        </article>
                </div>

        <?php endwhile;
        endif; ?>
        <!-- termina el LOOP -->

        </div> <!-- este div viene de row -->

        <ul class="paginador">
                <li class="paginador__anterior"><?php previous_posts_link('<i class="ico-flecha"></i>'); ?></li>
                <li class="paginador__numeros"><?php echo paginate_links(); ?></li>
                <li class="paginador__siguiente"><?php next_posts_link('<i class="ico-flecha"></i>'); ?></li>
        </ul> <!-- no aparece la primera flecha -->



</section>

<?php get_footer(); ?> 