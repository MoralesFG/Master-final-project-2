<?php get_header(); ?>
    
<article class="articulo row">

    <div class="col-12 col-md-7 col-lg-8">
    <!-- empieza el LOOP -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php 
    /* variables para cada imagen */
    $full = get_the_post_thumbnail_url(get_the_ID(),'full'); 
    $large = get_the_post_thumbnail_url(get_the_ID(),'large');
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(),'thumbnail'); 
    $medium = get_the_post_thumbnail_url(get_the_ID(),'medium'); 
    ?>

    <picture class="articulo__imagen">
    <img src="<?php echo esc_url($large); ?>" alt="<?php the_title(); ?>"> 
    </picture>


<?php
$slide = get_field('slide');	
if( $slide ): ?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
	        <img src="<?php echo $slide['imagen_uno']; ?>" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $slide['imagen_dos']; ?>" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $slide['imagen_tres']; ?>" class="d-block w-100">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php endif; ?>


    <h1 class="articulo__titulo"><?php the_title(); ?></h1>
    <div class="articulo__contenido"><?php the_content(); ?></div>
    <?php the_author_posts_link(); ?>


    <?php endwhile; endif; ?>
    <!-- termina el LOOP -->
    </div>

    <aside class="col-12 col-md-5 col-lg-4">
        <?php include('datos-profesor.php'); ?>
        <?php include('datos-curso.php'); ?>
    </aside>

</article>

<hr class="my-5">

<?php include('relacionados.php'); ?>

<?php get_footer(); ?>