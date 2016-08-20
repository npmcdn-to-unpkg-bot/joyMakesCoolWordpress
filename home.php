<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">
        <h3 class="pageTitle"><?php echo get_the_title(10) ?></h3>
        <h2><?php echo get_the_title(10) ?></h2>
        <div class="intro">
	         <h3><?php the_field('page_intro', get_option('page_for_posts')) ?></h3>
        </div>
        <div class="searchPosts">
          <?php get_search_form(); ?>
      
        </div>
    <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="posts">
          <div class="postsDate">
            <p>
              <?php echo get_the_date('F jS, Y') ?>    
            </p>   
          </div>
          <figure class="postImage">
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('full');
              } 
            ?>       
          </figure>
          <div class="postsContent">
            <h3><?php the_title() ?></h3>
            <?php the_content('discover story'); ?> 
          </div>
        </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>