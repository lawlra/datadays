<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package datadays
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image" content="http://www.datadays.eu/wp-content/themes/datadays/img/logo-big.png"/>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>

	<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<!-- Bootstrap navbar -->
    <nav class="navbar navbar-default" role="navigation"> 
	
	<!-- Brand and toggle get grouped for better mobile display --> 
      <div class="navbar-header"> 
        <button type="button" class="navbar-toggle glyphicon glyphicon-play" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
          <span class="sr-only">Toggle navigation</span> 
        </button> 
        <a class="navbar-brand" href="<?php bloginfo('url')?>">
          <div class="brand-logo big hidden-xs hidden-sm"></div>
          <div class="brand-logo small visible-xs visible-sm"></div>
        </a> 
      </div> 
      <!-- Collect the nav links, forms, and other content for toggling --> 
      <div class="navbar-spacer hidden-xs hidden-sm"></div>
      <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right"> 
        <?php /* Primary navigation */
          wp_nav_menu( array(
            'menu' => 'top_menu',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'nav navbar-nav',
            //Process nav menu using our custom nav walker
            'walker' => new wp_bootstrap_navwalker())
          );
        ?>
      </div>

	  </nav>
	</div>
	  <!--
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		-->
		<?php if (is_front_page()): ?>
		<div id="header-image" class="hidden-xs">
		<div class="middle">
		<div id="hero-text"><div class="balloon">Join <strong>Open Data</strong> Pioneers, practitioners, thinkers and researchers from <strong>across the world</strong> to unlock and advance the power of collaboration and <strong>Open Innovation</strong> in this joint conference by the Open Knowledge Foundation (<strong>OKFN</strong>), <strong>Citadel on the Move</strong> and Linked Organization of Local Authority ICT Societies (<strong>LOLA</strong>).</div></div>
		<div id="hero-subtext"><div class="balloon">17/18/19 February 2014<br/>Bijloke, Gent</div></div>
		
		</div>
		</div>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
