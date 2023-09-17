<?php get_header(); ?>

<div class="comer row" data-masonry='{"percentPosition": true }'>
<!-- empieza el LOOP -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- aquí va el contenido -->
<div class="col-6 col-lg-4 col-xl-3">
    <a href="<?php the_permalink(); ?>" class="tarjeta-comer">
        <?php if ( has_post_thumbnail() ) {the_post_thumbnail('medium');} ?>
        <h2 class="tarjeta-comer__titulo"><?php the_title(); ?></h2>
    </a>
</div>

<?php endwhile; endif; ?>
<!-- termina el LOOP -->
</div>

<!-- SCRIPT MASONRY PARA EFECTO DE FOTOS -->
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
<?php get_footer(); ?>