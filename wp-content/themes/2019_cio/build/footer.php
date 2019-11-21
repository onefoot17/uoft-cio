        <footer class="section--footer">
            <section class="section__width section__width--footer">
                <?php dynamic_sidebar( 'sidebar-footer' ); ?>
                
                <ul class="section--footer__bottom">
                    <li><?php echo esc_html( get_bloginfo( 'name' ) ); ?></li>
                    
                    <li>University of Toronto</li>
                </ul>
            </section>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>
