<?php get_header(); ?>

    <!--Portfolio-->
    <article class="article">
        <div class="container">
            <div class="row">
               
                <div class="content">
                    <div class="col-sm-9">
                       
                       <?php if ( have_posts() ) : ?>
                           <?php while ( have_posts() ) : the_post(); ?>
                               <?php get_template_part( 'content', get_post_format() ); ?>
                           <?php endwhile; ?>
                       <?php endif; ?>
                        
                    </div>
                </div><!-- Content End -->
                  
                <div class="aside">           
                    <div class="col-sm-3">
                        <?php get_sidebar(); ?>
                    </div>
                </div><!-- Aside End -->
                
            </div>
        </div>
    </article>

<?php get_footer(); ?>