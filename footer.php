    <!--Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright">
                        <p>Copyright &copy; <?php the_date( 'Y' ); ?> by <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php the_author(); ?></a> | All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>