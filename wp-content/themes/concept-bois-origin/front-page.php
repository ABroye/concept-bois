<?php get_header(); ?>

<main class="container">

    <section class="home-slider">
        <?php get_template_part( 'template-parts/sliders/homeSlider' ); ?>
    </section>

    <div class="row my-5">

        <div class="col-lg-10 col-md-8 col-sm-12">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="post-meta">
                            <span class="post-date"><?php the_date(); ?></span>
                            <span class="post-author"><?php the_author_posts_link(); ?></span>
                        </div>
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