<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="singlePost" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="postsDate">
            <p>
              <?php echo get_the_date('F jS, Y') ?>    
            </p>   
          </div>
          <div class="postImage">
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('full');
              } 
            ?> 
          </div>
          <div class="postsContent">
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-content">
              <?php the_content(); ?>
              <?php wp_link_pages(array(
                'before' => '<div class="page-link"> Pages: ',
                'after' => '</div>'
              )); ?>
            </div><!-- .entry-content -->
          </div>
        </div><!-- #post-## -->

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
                  <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
              </a>  
            </span>
          </div> 
          <div class="postsHeart">
            <?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?>
          </div>
        </div>

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </div> <!-- /.content -->

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

<!-- ======== GET FOOTER =======  -->
<?php get_footer(); ?>