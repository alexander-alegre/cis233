<!-- 
        ````
       ``  ``
      ``    ``
     ``      ``             =
    ``        ``            =
   `` ```````` ``   = = = = = = = = = 
  ``            ``          =
 ``              ``         =
``                ``
 -->
<?php
date_default_timezone_set("America/Phoenix");
$today = date("n/j/Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=0">
	<meta name="description" content="A website created by Alexander Alegre for CIS 233 at Paradise Valley Community College. This website has all of the work for the full semester.">
	<meta name="keywords" content="web developer, software developer, developer, Alexander Alegre, CIS 233, PVCC, PHP, JavaScript, pvcc, cis233, CIS233, CIS-233, cis-233, alex alegre, homework, cis233 homework">
	<meta name="author" content="Alexander Alegre">
	<link rel="icon" href="inc/favicon.ico">
	<title>Lightbox Page | CIS 233 | Alexander Alegre</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,600" rel="stylesheet" type="text/css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.css" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Styles -->
	<link rel="stylesheet" href="resources/css/global.css">
<!-- 	<script src="//cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.7/p5.js"></script>
	<script src="vendors/p5/p5.dom.js" type="text/javascript"></script>
	<script src="resources/js/light.js" type="text/javascript" charset="utf-8" async defer></script> -->
	<link rel="stylesheet" type="text/css" href="resources/popup/magnific-popup.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="homework.php"><?php echo $today; ?></a>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="homework.php">Home</a></li>
	        <li><a href="about.php">About</a></li>
	        <li><a href="resume.php">Resume</a></li>
	        <li><a href="responsive.php">Responsive</a></li>
	        <li><a href="cart.php">Cart</a></li>
	        <li><a href="lightbox.php">Lightbox</a></li>
	        <li><a href="project.php">Project</a></li>
	        <li><a href="flash.php">Flash</a></li>
	        <li><a href="php.php">PHP</a></li>
	        <li><a href="rollover.php">Rollover</a></li>
	        <li><a href="wordpress.php">Wordpress</a></li>
	        <li><a href="final.php">Final</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<!-- content start -->
	<div class="container-fluid">
		<section data-featherlight-gallery data-featherlight-filter="a">
			<h1 class="text-center">Lightbox</h1>
			<p class="text-center">Click on the images to see a larger version of them</p>
			<div class="parent-container">
				<a href="resources/images/light/dog-big.jpeg" class="col-sm-4 col-md-4 col-lg-4"><img src="resources/images/light/dog.jpeg" alt="dog" /></a>
				<a href="resources/images/light/car-big.jpeg" class="col-sm-4 col-md-4 col-lg-4"><img src="resources/images/light/car.jpeg" alt="car" /></a>
				<a href="resources/images/light/chess-big.jpeg" class="col-sm-4 col-md-4 col-lg-4"><img src="resources/images/light/chess.jpeg" alt="chess" /></a>
			</div>
		</section>
	</div>
	<!-- content end -->
	<footer>
		<p class="footer"><?php echo date('Y'); ?> &copy; Alexander Alegre</p>
	</footer>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript Bootstrap -->
	<script src="vendors/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.2/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.2/release/featherlight.gallery.min.js" type="text/javascript" charset="utf-8"></script>
	<script>
		autoBind: '[data-featherlight-gallery]'
		$('a.gallery').featherlightGallery({
				previousIcon: '«',
				nextIcon: '»',
				galleryFadeIn: 300,

				openSpeed: 300
		});
	</script>
</body>
</html>