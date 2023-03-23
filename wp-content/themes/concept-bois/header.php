<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <!-- Inclusion des styles CSS -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <?php if (is_front_page()) : ?>
        <div id="bg-top-bar" class="nav">
            <div class="container g-0">
                <ul class="nav justify-content-between">
                    <li class="nav-item">
                        <a href="mailto:contact@concept-bois.eu" class="nav-link text-white info"><i class="bi bi-envelope"></i> contact@concept-bois.eu</a>
                    </li>
                    <li class="nav-item">
                        <a href="tel:0749839900" class="nav-link text-white info"><i class="bi bi-telephone"></i> + 33 (0)749 83 99 00</a>
                    </li>
                </ul>
            </div>
        </div>
        <header class="bg-dark shadow-lg sticky-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
                <div class="container">
                    <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                            echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }                    
                    ?>
                    <a class="navbar-brand d-lg-none" href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                        <div class="offcanvas-header border-bottom">
                            <h5 class="offcanvas-title" id="offcanvasLabel">Concept Bois</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'main-menu',
                                    'container'      => false,
                                    'menu_class'     => '',
                                    'fallback_cb'    => '__return_false',
                                    'items_wrap'     => '<ul id="%1$s" class="navbar-nav justify-content-start flex-grow-1 %2$s">%3$s</ul>',
                                    'depth'          => 2,
                                    'walker'         => new bootstrap_5_wp_nav_menu_walker()
                                ));
                            ?>
                            <div class="text-center">
                                <a href="mon-compte"><button type="button" class="btn btn-outline-success me-2">Espace client</button></a>
                                <a href="#"><button type="button" class="btn btn-outline-success">Créer un compte</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

    <?php endif; ?>