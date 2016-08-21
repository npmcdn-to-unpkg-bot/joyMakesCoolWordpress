<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">
      <div class="headerSlide">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
      </div>
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
		    <h3 class="pageTitle"><?php the_title(); ?></h3>
        <h2 class="sevTitle"><?php the_title(); ?></h2>
        <div class="intro">
	        <h3><?php the_field('page_intro') ?></h3>
        </div>
        <figure class="introImg">
        <?php 
        	$pageImage = get_field('page_image')
         ?>
          <img src="<?php echo $pageImage['url']; ?>" alt="<?php echo $pageImage['alt']; ?>">
        </figure>
        <div class="eventContent clearfix">
          <div class="featureImg">
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('full');
              } 
            ?>     
          </div>
          <div class="eventDetail">
            <?php the_content(); ?> 
            
          </div>
          <div class="eventImage">
            <?php 
              $eventImage = get_field('event_images')
             ?>
            <img src="<?php echo $eventImage['url'] ?>" alt="<?php echo $eventImage['alt']; ?>">
          </div>
        </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>