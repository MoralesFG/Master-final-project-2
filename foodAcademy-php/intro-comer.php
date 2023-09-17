<div class="intro row">
            <div class="col-12 col-lg-4 order-lg-last">
                <div class="intro__imagen intro__imagen--comer d-flex justify-content-center justify-content-lg-start">
                    <img src="<?php bloginfo('template_url'); ?>/img/intro-comer.svg">
                </div>
                <h3 class="intro__titulo text-center text-lg-start my-3 px-3 ps-lg-0"><?php echo get_cat_name(2); ?></h3>
            </div>
            <div class="col-12 col-lg-8">
                <!-- dos entradas de aprender -->
                <div class="row">
                <?php

                // La consulta con sus argumentos
                $intro_comer = new WP_Query(array(
                    'cat' => 2, 
                    'posts_per_page' => 2
                ));

                // El loop
                if ($intro_comer->have_posts()) {
                    while ($intro_comer->have_posts()) {
                        $intro_comer->the_post(); ?>

                <?php
                /* variables para cada imagen */
                $full = get_the_post_thumbnail_url(get_the_ID(), 'full');
                $large = get_the_post_thumbnail_url(get_the_ID(), 'large');
                $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                $medium = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                ?>

                <div class=" col-12 col-lg-6 d-flex">
                    <article class="aprender__card col d-flex">
                        <div class="row g-0 col-12 flex-lg-column">
                            <div class="aprender__card-miniatura col-6 col-lg-12 bg-grey-700">
                                <picture>
                                    <source media="(min-width: 768px)" srcset="<?php echo esc_url($medium); ?>">
                                    <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title(); ?>">
                                </picture>
                            </div>
                            <div class="aprender__card-contenido col-6 col-lg-12 d-flex flex-column justify-content-between">
                                <div>
                                    <h2 class="aprender__card-titulo"><?php the_title(); ?></h2>
                                    <time class="aprender__card-fecha" datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo get_the_date(); ?></time>
                                    <div class="aprender__card-extracto d-none d-lg-block"><?php the_excerpt(); ?></div> <!-- texto lorem -->
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="<?php the_permalink(); ?>" class="aprender__card-btn d-flex justify-content-between align-items-center">
                                    <i class="ico-flecha"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <?php }
                }
                wp_reset_postdata(); ?>
                </div> <!-- fin .row -->
                <!-- fin dos entradas de aprender -->
            </div>
        </div> <!-- fin intro -->