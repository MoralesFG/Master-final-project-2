<?php get_header(); ?>

<?php include('page-slider.php'); ?> <!-- carrusel -->

<div class="d-flex justify-content-center mt-4">
    <article class="pagina contenido col-12 col-lg-8">
        <!-- empieza el LOOP -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h1 class="pagina__titulo"><?php the_title(); ?></h1>
                <?php the_content(); ?>

        <?php endwhile; endif; ?>
        <!-- termina el LOOP -->
    </article>
</div>

<?php get_footer(); ?>