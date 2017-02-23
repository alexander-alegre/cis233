<?php 
$title = "<title>CIS 233 Responsive Page</title>";
$custom_css = '<link rel="stylesheet" type="text/css" href="resources/css/">';
require('inc/header.php') 
?>
	<div class="container-fluid">
		<div class="jumbotron">
			<h1>CIS 233 Responsive Page</h1>
			<p>This page will serve as a road map on what to do and how to learn the <a href="https://www.turnkeylinux.org/lampstack" target="_blank">LAMP</a> stack for web development.</p>
			<p>I will provide some of the sites that have work work me and I will talk about my journey and the mustakes i made so you dont make the same mistakes.</p>
			<p>I will give a brief description of each language, why I chose it and what roles it plays in web development.</p>
			<p>The blue line under each language is my understanding of each and how comfortable I am with them.</p>
			<p class="text-danger">DISCLAIMER: All of the statements on this page are my own opinions.</p>
		</div>
		<!-- html -->
		<div class="col-sm-12 col-md-6 col-lg-3">
			<h3><a href="resources/responsive/html.php">HTML5</a></h3>
			<p>HTML is the very first thing you should be learning if you want to become a web developer. If anyone tells you something different they are not a web developer. All websites use HTML for their markup. I recommend using HTML5 since it's the lastest version and has a lot of cool new features. You can learn the basics of HTML in a couple of days.</p>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
			    85%
			  </div>
			</div>
			<div class="text-center">
				<a href="cart.php" target="_blank" class="buy-me"><input type="submit" value="Buy My Course" class="btn-info"></a>
			</div>
		</div>
		<!-- css -->
		<div class="col-sm-12 col-md-6 col-lg-3">
			<h3><a href="resources/responsive/css.php">CSS3</a></h3>
			<p>CSS is another language that you have to learn right away. Without CSS you will have a very dull website that looks bad. CSS is really easy to understand and it can get complicated really fast! So be careful. I recommend using CSS3 because it's the latest version and now it can do things that previously developers had to use JavaScript to accomplish them. CSS is easy to learn but hard to master.</p>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
			    80%
			  </div>
			</div>
			<div class="text-center">
				<a href="cart.php" target="_blank" class="buy-me"><input type="submit" value="Buy My Course" class="btn-info"></a>
			</div>
		</div>
		<!-- js -->
		<div class="col-sm-12 col-md-6 col-lg-3">
			<h3><a href="resources/responsive/js.php">JavaScript</a></h3>
			<p>JavaScript is the <a href="http://stackoverflow.com/research/developer-survey-2016#most-popular-technologies-per-occupation" target="_blank">most used</a> programming language! That is amazing! The reason for this is that every browser uses JavaScript in the front end for things such as animations and on click functions. Then NODE.js came around and now you are able to use JavaScript server side and interact with a database. A very popular stack is the <a href="http://mean.io/" target="_blank">MEAN</a> stack.</p>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
			    60%
			  </div>
			</div>
			<div class="text-center">
				<a href="cart.php" target="_blank" class="buy-me"><input type="submit" value="Buy My Course" class="btn-info"></a>
			</div>
		</div>
		<!-- php -->
		<div class="col-sm-12 col-md-6 col-lg-3">
			<h3><a href="resources/responsive/php.php">PHP</a></h3>
			<p>PHP is a back-end language which means it can iteract with the server and a database. I chose PHP over NODE because it's a lot easier for begginers to learn. NODE.js is known to have a very steep learning curve. PHP is also very cheap to host and has been around since 1995 so if you have any questions there will be an answer out there waiting for you. Also PHP is used in over <a href="https://w3techs.com/technologies/overview/programming_language/all" target="_blank">80%</a> of websites. That is an outstanding figure!</p>
			<div class="progress">
			  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
			    75%
			  </div>
			</div>
			<div class="text-center">
				<a href="cart.php" target="_blank" class="buy-me"><input type="submit" value="Buy My Course" class="btn-info"></a>
			</div>
		</div>
	</div>



	
<?php 
$custom_js = '<script src="resources/js/" type="text/javascript"></script>';
require('inc/footer.php') 
?>