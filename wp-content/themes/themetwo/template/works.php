
    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row section-header has-bottom-sep narrow target-section" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead" id="work_title"><?= get_theme_mod( 'work_title' ) ?></h3>
                <h1 class="display-1"  id="work_content">
                <?= get_theme_mod( 'work_content' ) ?>
                </h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row masonry-wrap">

            <div class="masonry">
            <?php
                          $post_num = new WP_Query([
                          'post_type' => 'my-work',
                          'order' => 'ASC'
                           ]);
                          if ($post_num->have_posts() ) :
                           while ($post_num->have_posts() ) :
							$post_num->the_post();
    
                           ?>
        
                <div class="masonry__brick" data-aos="fade-up">

               <div class="item-folio"> 
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                <?php the_title() ?>
                            </h3>
                            <p class="item-folio__cat">
                                <?php the_category(' ,') ?>
                            </p>
                        </div>
                        <div class="item-folio__thumb">
                        <a href="<?=  get_the_post_thumbnail_url() ?>" class="thumb-link" title="Grow Green" data-size="1050x700">
                        <?php the_post_thumbnail() ?>
                            </a>
                       
                        </div>
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            <i class="icon-link"></i>
                        </a>

                        <div class="item-folio__caption">
                            <p><?php the_content() ?></p>
                        </div>

                  </div> 
                </div> <!-- end masonry__brick -->
                <?php endwhile ;
                                 endif;
                                   wp_reset_postdata(); 
                       ?>

            </div> <!-- end masonry -->

        </div> <!-- end masonry-wrap -->

    </section> <!-- end s-works -->
