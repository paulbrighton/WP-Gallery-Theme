<!DOCTYPE html>
<html>
<head>
  <title>PhotoGenik</title>
  <meta charset="<?php bloginfo('charset') ?>">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="w3-container w3-teal">
  		<div class="w3-row">
		  <div class="w3-col m9 l9">
		    <h1><?php bloginfo('name') ?></h1>
		  </div>
		  <div class="w3-col m3 l3">
		    <input class="w3-input" type="text" placeholder="Search...">
		  </div>
		</div>
	</header>

	<div class="main">
		<div class="w3-row">
			<div class="w3-col m3 l3">
			<ul class="w3-ul">
				<li><a href="#">Nature</a></li>
				<li><a href="#">Animals</a></li>
				<li><a href="#">Objects</a></li>
				<li><a href="#">People</a></li>
				<li><a href="#">Abstract</a></li>
			</ul>
			</div>
			<div class="w3-col m9 l9">
			<div class="w3-row">
				<div class="w3-col m4 l4 pic">
					<a href="single.html">
						<img src="images/1.jpg" class="w3-animate-opacity">
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="w3-col m4 l4 pic">
				<img src="images/2.jpg" class="w3-animate-opacity">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="w3-col m4 l4 pic">
				<img src="images/3.jpg" class="w3-animate-opacity">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>

				<div class="w3-col m4 l4 pic">
					<img src="images/4.jpg" class="w3-animate-opacity">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="w3-col m4 l4 pic">
				<img src="images/5.jpg" class="w3-animate-opacity">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<div class="w3-col m4 l4 pic">
				<img src="images/6.jpg" class="w3-animate-opacity">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			</div>
		</div>
	</div>

	<footer>
		<p><?php bloginfo('name') ?> &copy; 2016</p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>