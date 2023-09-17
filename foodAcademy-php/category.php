<?php get_header(); ?>

<section class="aprender">
    <h1 class="aprender__titulo"><?php single_cat_title(); ?></h1>

    <div class="row">
        <!-- empieza el LOOP -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php
                /* variables para cada imagen */
                $full = get_the_post_thumbnail_url(get_the_ID(), 'full');
                $large = get_the_post_thumbnail_url(get_the_ID(), 'large');
                $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                $medium = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                ?>

                <div class=" col-12 col-md-6 col-lg-4 col-xxl-4 d-flex">
                
                    <article class="aprender__card col d-flex">
                        <div class="row g-0 col-12 flex-sm-column">
                            <div class="aprender__card-miniatura col-6 col-sm-12 bg-grey-700">
                                <picture>
                                    <source media="(min-width: 768px)" srcset="<?php echo esc_url($medium); ?>">
                                    <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>">
                                </picture>
                            </div>
                            <div class="aprender__card-contenido col-6 col-sm-12 d-flex flex-column justify-content-between">
                                <div>
                                    <h2 class="aprender__card-titulo"><?php the_title(); ?></h2>
                                    <time class="aprender__card-fecha" datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo get_the_date(); ?></time>
                                    <div class="aprender__card-extracto d-none d-md-block"><?php the_excerpt(); ?></div> <!-- texto lorem -->
                                </div>
                                <a href="<?php the_permalink(); ?>" class="aprender__card-btn d-flex justify-content-between align-items-center">
                                    <?php include('datos-profesor-min.php'); ?>
                                    <i class="ico-flecha"></i>
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