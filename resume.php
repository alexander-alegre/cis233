<?php 
$title = "<title>CIS 233 Resume | Alexander Alegre</title>";
$custom_css = '<link rel="stylesheet" type="text/css" href="resources/css/resume.css">';
require('inc/header.php') 
?>
	<div class="content">
		<aside class="left-side">
			<div class="profile">
				<img src="resources/images/resume/profile.jpg">
				<p class="myName"><a href="resume.php">Shiloh</a></p>
			</div>
			<div class="profile-menu">
				<ul>
					<li class="menu-item" id="about">About Me</li>
					<li class="menu-item" id="school">School</li>
					<li class="menu-item" id="skills">Skills</li>
					<li class="menu-item" id="resume">Resume</li>
					<li class="menu-item" id="friends">Friends</li>
				</ul>
			</div>
		</aside>
		<aside class="right-side">
			<div class="load-content">
				<div class="ajax-content well well-lg">Hello, this page is to display my skills and it has every reason of why you would like to hire me!</div>
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