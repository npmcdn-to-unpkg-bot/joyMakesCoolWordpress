<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i|Open+Sans+Condensed:300|Open+Sans:400,600" rel="stylesheet">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php 
          $logo = get_field('custom_logo', get_option('page_for_posts'));
        ?>
        <img src="<?php echo $logo['url'] ?>" alt="">
      </a>
    </h1>

    <?php wp_nav_menu( array(
      'container' => true,
      'theme_location' => 'primary'
    )); ?>
    <?php wp_nav_menu( array(
      'container' => true,
      'theme_location' => 'social'
    )); ?>
    <div class="copyright">
      <p>&copy;Copyright Joy Liu <?php echo date('Y'); ?></p>
    </div> 
  </div> <!-- /.container -->
</header><!--/.header-->


