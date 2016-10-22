<?php get_header(); ?>


              
              
              
    <!--Portfolio-->
    <section class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="portfolio-header">
                        <h2 class="line">Portfolio</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
               
                <?php 
                $portfolio = new WP_Query(array(
                    'post_type'      =>  'portfolio',
                    'posts_per_page' =>  6,
                ));

                if ( $portfolio->have_posts() ) : while ( $portfolio->have_posts() ) : $portfolio->the_post(); 

                $portfolio_url = get_post_meta( get_the_ID(), '_shakir_portfolio_url', true );
                $portfolio_des = get_post_meta( get_the_ID(), '_shakir_portfolio_des', true );
                $portfolio_clk = get_post_meta( get_the_ID(), '_shakir_portfolio_clk', true );
                ?>            

                    <div class="col-sm-4 slideanim">
                        <div class="single-portfolio thumbnail">
                            <?php the_post_thumbnail(); ?>
                            <a href="<?php echo $portfolio_url; ?>">
                                <div class="shadow">
                                    <div class="caption">
                                        <h2><?php the_title(); ?></h2>
                                        <h4><?php echo $portfolio_des; ?></h4>
                                        <p><?php echo $portfolio_clk; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>      

               <?php endwhile; endif; ?>

            </div>
        </div>
    </section>  
              
              
              
              

                       

                        

                


<?php get_footer(); ?>