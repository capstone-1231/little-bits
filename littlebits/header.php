<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package littlebits
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'littlebits' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<img src="images/" alt="">
		

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
				<ul class="nav-items">
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.php">ABOUT</a></li>
					<ul>
						<li><a href="program_profile.php">PROGRAM PROFILE</a></li>
						<li><a href="facility_grounds.php">FACILITY & GROUNDS</a></li>
						<li><a href="staff.php">STAFF</a></li>
						<li><a href="contact.php">CONTACT US</a></li>
					</ul>
					<li><a href="rider.php">RIDERS</a></li>
					<ul class="dropdown-list">
						<li><a href="rider_application.php">RIDER APPLICATION</a></li>
					</ul>
					<li><a href="volunteer.php">VOLUNTEERS</a></li>
					<ul class="dropdown-list">
						<li><a href="volunteer_application.php">VOLUNTEER APPLICATION</a></li>
					</ul>
					<li><a href="our_horses.php">OUR HORSES</a></li>
					<ul class="dropdown-list">
						<li><a href="retired_horses.php">RETIRED HORSES</a></li>
						<li><a href="in_memory.php">IN MEMORY OF</a></li>
					</ul>
					<li><a href="classes_schedules.php">CLASSES & SCHEDULES</a></li>
					<ul class="dropdown-list">
						<li><a href="events.php">EVENTS</a></li>
						<li><a href="newsletter.php">NEWSLETTER</a></li>
					</ul>
					<li><a href="sponsers.php">SPONSERS</a></li>
				</ul>
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
