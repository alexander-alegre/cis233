<?php 
$title = "<title>CIS 233 Resume | Alexander Alegre</title>";
$custom_css = '<link rel="stylesheet" type="text/css" href="resources/css/resume.css">';
require('inc/header.php') 
?>
	<div class="content container-fluid">
		<aside class="col-sm-12 col-md-3">
			<div class="profile">
				<img src="resources/images/resume/profile.jpg" alt="image of a beagle next to a sign">
				<p class="myName"><a href="resume.php">Shiloh</a></p>
				<p>Full Stack Developer</p>
			</div>
			<div class="profile-menu container-fluid">
				<ul class="list-group">
					<li class="list-group-item" id="about">About Me</li>
					<li class="list-group-item" id="school">School</li>
					<li class="list-group-item" id="skills">Skills</li>
					<li class="list-group-item" id="resume">Resume</li>
					<li class="list-group-item" id="friends">Friends</li>
				</ul>
			</div>
		</aside>
		<aside class="col-sm-12 col-md-9">
			<div class="load-content">
				<div class="ajax-content well well-lg">Hello, this page is to display my skills and it has every reason of why you would like to hire me!</div>
				<!-- <img src="resources/images/resume/me.jpg" alt="image of a beagle in the bed of a truck" class="" /> -->
				<!-- modal will only show when the user leaves the page -->
				<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
				  <div class="modal-dialog modal-sm" role="document">
				    <div class="modal-content">
				      <h1><a href="http://www.w3schools.com/">W3Schools!</a></h1>
				      <p>Hey there buddy! Before you go, check out <a href="http://www.w3schools.com/">W3Schools</a>! They pay me big bucks! If you click on their link!</p>
				      <button type="button" class="btn btn-default col-xs-12" data-dismiss="modal">Close</button>
				    </div>
				  </div>
				</div>
			</div>
		</aside>
	</div>
<?php 
$custom_js = '<script src="resources/js/resume.js" type="text/javascript"></script>';
require('inc/footer.php') 
?>