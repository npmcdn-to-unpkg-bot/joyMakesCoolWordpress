<?php get_header();  ?>
<?php 
	$background = get_field('background_image');
?>
<div class="mainHome" style="background-image: url('<?php echo $background['url'] ?>')">
  <div class="containerEvent">
  	<div class="eventBox">
	    <div class="contentEvent">
	    </div> <!-- /,content -->
	  	<div class="eventDetail">
	    	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	        	<p><?php the_field('event_date'); ?></p>
	        	<h2><?php the_field('event_name'); ?></h2>

		   	<?php endwhile; ?>
	   	</div>
		</div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>