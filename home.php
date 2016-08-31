<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">
        <div class="headerSlide">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
        </div>
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
              <a href="<?php echo get_post_permalink(); ?>">
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('full');
              }
            ?>
            </a>
          </figure>
          <div class="postsContent">
            <a href="<?php echo get_post_permalink(); ?>"><h3><?php the_title() ?></h3></a>
            <?php the_content('discover story'); ?>
          </div>
        </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->
<script>
  window.sr = ScrollReveal();
    sr.reveal('.posts');
    sr.reveal('.postImage');
  sr.reveal('.postsContent');
</script>

<?php get_footer(); ?>
