<?php 
$title = "<title>CIS 233 Resume | Alexander Alegre</title>";
$custom_css = '<link rel="stylesheet" type="text/css" href="resources/css/resume.css">';
require('inc/header.php') 
?>
	<div class="content">
		<aside class="left-side">
			<div class="profile">
				<img src="resources/images/resume/profile.jpg">
				<p>Shiloh</p>
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
				<div class="ajax-content">Hello, this page is to display my skills and it has every reason of why you would like to hire me!</div>
			</div>
		</aside>
	</div>


<?php 
$custom_js = '<script src="resources/js/resume.js" type="text/javascript"></script>';
require('inc/footer.php') 
?>