<?php get_header();?>
    <img class="img-fluid" src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width?>" alt="">
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">Slide</div>
                </div>
                
            </section>
            <section class="services">
                <div class="container">
                    <div class="row">Services</div>
                </div>
                
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-3">Side Bar</aside>
                        <div class="news col-md-9">
                            <?php 
                                //if we have posts
                                if(have_posts()):
                                    //Show them the posts
                                    while(have_posts()): the_post();
                            ?>
                            <article>
                                    <h2><?php the_title()?></h2>
                                    <?php the_post_thumbnail(array(275,275))?>
                                    <p>Posted in <?php echo get_the_date();?> by <?php the_author_posts_link();?></p>
                                    <p>Categoryies: <?php the_category(' ')?></p>
                                    <p><?php the_tags('Tags: ',', ');?></p>
                                    <p><?php the_content()?></p>
                            </article>

                            <?php
                                    endwhile;
                                else:

                            ?>
                                <p>There are no posts</p>
                            <?php
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="map">
                 <div class="container">
                    <div class="row">Map</div>
                </div>
            
            </section>
        </main>
    </div>

    <?php get_footer();?>
