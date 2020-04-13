<?php

if ( ! function_exists( 'flash_footer_copyright' ) ) :
    /**
     * Footer Copyright Text.
     *
     * @since Flash 1.0
     */
    function flash_footer_copyright() {
        ?>
    <div class="copyright">
        <span class="copyright-text">
            <?php printf( esc_html__( 'Copyright %1$s %2$s', 'flash' ), '&copy; ', date( 'Y' ) ); ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
            <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'flash' ), 'Flash', '<a href="http://themegrill.com/themes/flash" rel="author">ThemeGrill</a>' ); ?>
        </span>
    </div><!-- .copyright -->
    <?php
    }
    endif;

    add_action( 'flash_copyright_area', 'flash_footer_copyright' );
