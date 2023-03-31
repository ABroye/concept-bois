<?php get_header(); ?>

<section class="home-slider">
    <?php get_template_part( 'template-parts/sliders/homeSlider' ); ?>
</section>
<main class="container">
    <div class="row mx-3 mb-5 my-5 justify-content-center">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1 class="fs-2"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile;
            else : ?>
                <p><?php _e('Désolé, aucun article ne correspond à vos critères.'); ?></p>
            <?php endif; ?>

        </div>
        
    </div>
</main>

<div class="container-fluid bg-dark">
    <?php get_footer(); ?>
</div>