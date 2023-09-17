<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
<div class="carousel-inner">

<!-- comienza wp-query -->
<?php 
// La consulta con sus argumentos
$the_query_slide = new WP_Query( array(
    'cat' => 10, 
    'posts_per_page' => 3 
)); 
$i = 0;

// El loop
if ( $the_query_slide->have_posts() ) {while ( $the_query_slide->have_posts() ) {$the_query_slide->the_post();?>

	<?php $full = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>

	<div class="carousel-item <?php echo ($i == 0) ? 'active' : ''?>">
	<img class="d-block w-100" src="<?php echo esc_url($full); ?>" alt="<?php the_title(); ?>">
	<div class="carousel-caption d-none d-md-block">
		<h2><?php the_title(); ?></h2>
		<?php the_excerpt(); ?>
		</div>
	</div>	    

<?php $i++; }} wp_reset_postdata(); ?>
<!-- fin del wp-query -->

</div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
    </button>
</div>