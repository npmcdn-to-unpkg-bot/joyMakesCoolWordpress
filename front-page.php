<?php get_header();  ?>
<?php 
	$background = get_field('background_image');
?>
<div class="mainHome" style="background-image: url('<?php echo $background['url'] ?>')">
	<div class="headerSlide">
	  <i class="fa fa-angle-left" aria-hidden="true"></i>
	</div>
  <div class="containerEvent">
  	<div class="eventBox">
	    <div class="contentEvent">
	    </div> <!-- /,content -->
	  	<div class="eventDetail">
        	<p><?php the_field('event_date'); ?></p>
        	<h2><?php the_field('event_name'); ?></h2>
	   	</div>
	</div><!-- /.eventBox -->
  </div> <!-- /.container -->
</div> <!-- /.main -->
<div class="featuredEvent clearfix">
	<div class="main">
	  <div class="container">
	    <div class="content">
	    	<div class="closeButton">
	    		<a href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	    	</div>
	      <?php // Start the loop ?>
	      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	        <div class="eventDetail">
	            <p><?php the_field('event_date'); ?></p>
	            <h2><?php the_field('event_name'); ?></h2>
	        </div>
	        <div class="gallery" data-flickity>
	        <?php 
	          if(have_rows('event_gallery')) {
	            while(have_rows('event_gallery')) {
	              the_row();
	              ?>
	              <?php  
	                $galleryImage = get_sub_field('gallery_image');
	              ?>
	            <div class="galleryItem">
	              <img src="<?php echo $galleryImage['url'] ?>" alt="<?php echo $galleryImage['alt']; ?>"/>
	            </div>
	              <?php
	            } //end while
	          } //end if
	        ?>
	        </div>
	        <div class="intro">
	        	<?php the_content(); ?>	
	        </div>
	      <?php endwhile; // end the loop?>
	        <div class="postsShare clearfix">
	          <!-- === FACEBOOK LIKE BUTTON ===  -->
	          <div class="postsSocial">
	            <div class="fb-like" data-href="https://joykliu.io/" data-width="46px" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
	            <!-- === TWIITER TWEET BUTTON ===  -->
	            <a class="twitter-share-button"
	              href="https://twitter.com/intent/tweet?text=Check%20out%20this%20awesome%20event%20planner%20I%20found" data-size="medium">
	            Tweet</a>
	            <!-- === PINTEREST PIN IT BUTTON ===  -->
	            <span class="pinterest">
	              <a href="https://www.pinterest.com/pin/create/button/" data-pin-count="beside">
	                  <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" alt="<?php echo $galleryImage['alt']; ?>" />
	              </a>  
	            </span>
	          </div> 
	        </div>
	    </div> <!-- /,content -->
	  </div> <!-- /.container -->
	</div> <!-- /.main -->

	<!-- ====== ONLY USING SOCIAL SHARING ON THIS PAGE =====  -->
	 <!-- ======== LOADING FACEBOOK SHARING BUTTON ====== -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- ======= LOADING TWITTER TWEETING BUTTON ======= -->
	<script>window.twttr = (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0],
	    t = window.twttr || {};
	  if (d.getElementById(id)) return t;
	  js = d.createElement(s);
	  js.id = id;
	  js.src = "https://platform.twitter.com/widgets.js";
	  fjs.parentNode.insertBefore(js, fjs);
	 
	  t._e = [];
	  t.ready = function(f) {
	    t._e.push(f);
	  };
	  return t;
	}(document, "script", "twitter-wjs"));</script>
	<script
	    type="text/javascript"
	    async defer
	    src="//assets.pinterest.com/js/pinit.js"
	></script>
	<?php get_footer(); ?>	
</div>

<?php get_footer(); ?>