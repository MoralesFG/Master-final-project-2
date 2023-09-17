<?php
/*
Template Name: comer
Template Post Type: post
*/
?>

<?php get_header(); ?>

<div class="row justify-content-center">
    <div class="col-12 col-lg-8">
        <article class="pagina">
            <!-- empieza el LOOP -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php 
            /* variables para cada imagen */
                $full = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                $large = get_the_post_thumbnail_url(get_the_ID(),'large');
                $thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
                $medium = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
                ?>

                <picture class="articulo__imagen d-flex justify-content-center">
                    <img src="<?php echo esc_url($large); ?>" alt="<?php the_title(); ?>"> 
                </picture>

                <div class="col-md-12">
                    <h1 class="articulo__titulo text-lg-center"><?php the_title(); ?></h1>
                    <div class="articulo__contenido"><?php the_content(); ?></div>
                    <?php the_author_posts_link(); ?>

                    <?php endwhile; endif; ?>
                    <!-- termina el LOOP -->
                </div>
        </article>
    </div>
</div>


<?php get_footer(); ?>