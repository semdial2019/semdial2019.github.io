<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<title>LondonLogue - SemDial 2019</title>
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="css/jquery.bxslider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

	</head>
	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="?page=home">Home</a></li>
						<li><a href="?page=home">About</a></li>
						<li><a href="?page=registration">Registration</a></li>
						<li><a href="?page=call">Call for Papers</a></li>
						<li><a href="?page=program">Program</a></li>
						<li><a href="?page=venue">Venue</a></li>
						<!-- <li><a href="?page=contact">Contact</a></li> -->
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="https://twitter.com/QMCogSci?ref_src=twsrc%5Etfw%7Ctwcamp%5Eembeddedtimeline%7Ctwterm%5Eprofile%3AQMCogSci&ref_url=http%3A%2F%2Fcogsci.eecs.qmul.ac.uk%2F" target="_blank"><i class="fa fa-twitter"></i></a></li>
					</ul>

				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>

		<div class="container">
		<header>
			<a href="?page=home"><img src="images/semdial_23_header_4.png"></a>
		</header>
		<section>
			<div class="row">
				<div class="col-md-8">
					<?php 
						$allowed = array('home', 'about', 'program', 'venue', 'registration', 'call', 'contact'); 
						$page = ( isset($_GET['page']) ) ? $_GET['page'] : 'home';
						if ( in_array($page, $allowed) ) {
						    include("includes/$page.html");
						} else {

						    include("includes/home.html");
						}
					?>
				</div>
				<div class="col-md-4 sidebar-gutter">
					<aside>
					<!-- sidebar-widget -->
					<div class="sidebar-widget">
						<h3 class="sidebar-title">About</h3>
						<div class="widget-container widget-about">
							<!-- <h4>SemDial</h4>
							<div class="author-title">Workshop Series</div> -->
							<p>
								The SemDial Workshops aim at bringing together researchers working on the semantics and pragmatics of dialogue in fields such as formal semantics and pragmatics, artificial intelligence, computational linguistics, psychology, and neural science.
							</p>
							<p>

								In 2019, the 23rd edition of this workshop series will be hosted by the <a href="http://cogsci.eecs.qmul.ac.uk/" target="_blank">Cognitive Science Group (CogSci)</a> at the <a href="https://www.qmul.ac.uk/" target="_blank">Queen Mary University of London</a>, UK. 
							</p>
							<!-- <p>
								We invite submissions on all topics related to the semantics and pragmatics of dialogue. For more information about the scope, topic and format of the workshop please refer to our official <a href="?page=call">Call for papers</a> and our <a href="?page=call">Submission Site</a> for instructions on how to prepare and submit articles for presentation at SemdDial 2019.
							</p> -->
						</div>
					</div>
					<!-- sidebar-widget -->
					<div class="sidebar-widget">
						<h3 class="sidebar-title">Sponsors</h3>
						<div class="widget-container">
							<article class="widget-post">
								<div class="post-image">
									<a href="https://www.qmul.ac.uk/" target="_blank"><img src="images/qmul_logo.jpg" alt=""></a>
								</div>
							</article>
						</div>
					</div>
					<!-- sidebar-widget -->
			
					<div class="sidebar-widget">
						<h3 class="sidebar-title">Categories</h3>
						<div class="widget-container">
							<ul>
								<li><a href="#">Element</a></li>
								<li><a href="#">Uncategorized</a></li>
							</ul>
						</div>
					</div>
					</div>
					</aside>
				</div>
			</div>
		</section>
		</div><!-- /.container -->

		<footer class="footer">

			<div class="footer-socials">
				<a href="https://twitter.com/QMCogSci?ref_src=twsrc%5Etfw%7Ctwcamp%5Eembeddedtimeline%7Ctwterm%5Eprofile%3AQMCogSci&ref_url=http%3A%2F%2Fcogsci.eecs.qmul.ac.uk%2F" target="_blank"><i class="fa fa-twitter"></i></a>
			</div>

			<div class="footer-bottom">
				<i class="fa fa-copyright"></i> Copyright 2018. All rights reserved.<br>
				Theme made by <a href="http://www.moozthemes.com" target="_blank">MOOZ Themes</a> and adapted by <a href="http://www.janoschhaber.com" target="_blank">Janosch Haber</a>
			</div>
		</footer>

		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.bxslider.js"></script>
		<script src="js/mooz.scripts.min.js"></script>
	</body>
</html>