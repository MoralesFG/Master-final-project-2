<?php /* Template Name: página contacto */ ?> <!-- Esto es lo que cogerá wp para el formulario de contacto, sin este comentario no aparecerá en la plantilla de wordpress -->
<?php get_header(); ?>

<div class="d-flex justify-content-center">
    <article class="pagina contenido contacto col-md-8 col-lg-7 col-xl-6">
        <!-- empieza el LOOP -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <h1 class="pagina__titulo"><?php the_title(); ?></h1>
                <?php echo do_shortcode('[contact-form-7 id="51" title="Formulario de contacto 1"]') ?>
                <?php the_content(); ?>

        <?php endwhile;
        endif; ?>
        <!-- termina el LOOP -->
    </article>
</div>

<?php get_footer(); ?>