<section id="portfolio">

<div class="row section-head">

    <div class="twelve columns">

        <h1>Our Latest Projects<span>.</span></h1>

       <hr />               

       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
       </p>

    </div>

</div> <!-- end section-head -->

<div class="row items">
         <!-- portfolio-wrapper -->
         <div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third tab-bgrid-half">
         <?php
                          $post_num = new WP_Query([
                          'post_type' => 'my-work',
                          'order' => 'ASC'
                           ]);
                          if ($post_num->have_posts() ) :
                           while ($post_num->have_posts() ) :
							$post_num->the_post();
    
                           ?>
            <div class="bgrid folio-item">
               <div class="item-wrap">
                  <a href="#modal-01">
	                  <img src="images/portfolio/underwater.jpg" alt="Underwater">
                     <div class="overlay"></div>                       
                     <div class="portfolio-item-meta">
     					      <h5><?php the_title() ?></h5>
                        <p><?php the_category(' ,' ) ?></p>
     					   </div> 
                     <div class="link-icon"><i class="fa fa-plus"></i></div>
                  </a>
               </div>
        		</div> <!-- item end -->


         </div> <!-- end portfolio-wrapper -->
         

         <!-- modal popup
	   	========================================================= -->
         <div id="modal-01" class="popup-modal mfp-hide">

		      <div class="media">
            <?php the_post_thumbnail() ?>
	      	</div>

		      <div class="description-box">
			      <h4><?php the_title() ?></h4>
			      <p><?php the_content() ?></p>
               <span class="categories"><?php the_category(' ,' ) ?></span>
		      </div>

            <div class="link-box group">
            	<a href="http://www.behance.net">Details</a>
            	<a href="#" class="popup-modal-dismiss">Close</a>         
            </div>

	      </div><!-- modal-01 end -->
          <?php endwhile ;
                                 endif;
                                   wp_reset_postdata(); 
                       ?>

      </div>  <!-- end row -->
 
      </section> <!-- end portfolio -->