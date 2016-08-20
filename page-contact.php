<?php get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
		    <h3 class="pageTitle"><?php the_title(); ?></h3>
        <h2><?php the_title(); ?></h2>
        <div class="introContact">
	        <p><?php the_field('address_line_1') ?></p>
          <p><?php the_field('address_line_2') ?></p>
          <p><?php the_field('phone_number') ?></p>
        </div>
        <div class="aellaMap">
          <?php the_content() ?>
        </div>
        <div class="contactMsg">
          <h4>looking for a planner?</h4>
          <h4>tell us some details and you'll get contacted as soon as possible</h4>
        </div>
        <div class="contactForm">
          <form action="" method="post" id="contactform" class="contact-form">
            <p class="contact-form-author clearfix">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" value="" size="30" required="required">
            </p>
            <p class="contact-form-phone clearfix">
              <label for="phone">Phone</label>
              <input type="text" id="phone" name="phone" value="" size="30" required="required">
            </p>
            <p class="contact-form-email clearfix">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" value="" size="30" required="required">
            </p>
            <p class="contact-form-event clearfix">
              <label for="event">event type</label>
              <input type="text" id="event" name="event" value="" size="30" required="required">
            </p>
            <p class="contact-form-date clearfix">
              <label for="date">date</label>
              <input type="text" id="date" name="date" value="" size="30" required="required">
            </p>
            <p class="contact-form-location clearfix">
              <label for="location">location</label>
              <input type="text" id="location" name="location" value="" size="30" required="required">
            </p>
            <p class="contact-form-budget clearfix">
              <label for="budget">budget</label>
              <input type="text" id="budget" name="budget" value="" size="30" required="required">
            </p>
            <p class="contact-form-details clearfix">
              <label for="details">details</label>
              <textarea id="details" name="details" cols="45" rows="5" required="required"></textarea>
            </p>
            <p class="form-submit button clearfix">
              <button type="submit" name="submit" id="submit">Send</button>
            </p>
          </form>
        </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>