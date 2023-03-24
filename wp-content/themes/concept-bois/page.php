<?php get_header(); ?>

<main class="container">

    <div class="row my-5">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="card shadow border-0 h-100">
                            <div class="card-header bg-dark rounded-0">
                                <div class="card-title">
                                    <h1 class="fs-2 pt-1"><?php the_title() ?></h1>
                                </div>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <?php the_content(); ?>
                            </div>
                        </div>
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