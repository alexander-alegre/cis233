<?php 
$title = "<title>CIS 233 Resume</title>";
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
					<li id="about">About Me</li>
					<li id="school">School</li>
					<li id="awards">Awards</li>
					<li id="resume">Resume</li>
					<li id="friends">Friends</li>
				</ul>
			</div>
		</aside>
		<aside class="right-side">
			<div class="load-content">
				<div class="ajax-content">Data will display here</div>
			</div>
		</aside>
	</div>


<?php 
$custom_js = '<script src="resources/js/resume.js" type="text/javascript"></script>';
require('inc/footer.php') 
?>