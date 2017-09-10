<header id="nv-masthead" class="nv-site-header">

    <div class="site-search-dropdown js-site-search-dropdown">
		<div class="nv-container">
            <button class="js-close-site-search close-site-search"><i class="fa fa-times" aria-hidden="true"></i></button>
			<?php get_search_form(); ?>
		</div><!-- .container -->
	</div><!-- .site-search-dropdown -->

    <div class="nv-container">
        <div class="nv-site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) : ?>
                <h1 class="nv-site-title site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
                <p class="nv-site-title site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
            endif;

            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p class="nv-site-description site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php
            endif; ?>
        </div><!-- .site-branding -->

        <a href="#mobile-navigation" class="mobile-menu-button hamburger-button">
            <span></span>
        </a>

        <nav id="nv-site-navigation" class="nv-main-navigation">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );
            ?>
        </nav><!-- #site-navigation -->

        <nav id="mobile-navigation" class="mobile-navigation" role="navigation">
			<div>
				<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu-1', 'menu_id' => 'mobile-menu' ) ); ?>
			</div>
		</nav><!-- #mobile-navigation -->
    </div>
</header><!-- #masthead -->
