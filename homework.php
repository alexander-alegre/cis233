<?php 
$title = "<title>CIS 233 Homework Page</title>";
$custom_css = '<link rel="stylesheet" type="text/css" href="resources/css/homework.css">';
require('inc/header.php') 
?>
	<div class="content">
		<a href="resume.php">
		<div class="assignment">
			<h4>Fake Resume</h4>
			<p class="due-date">Due Date: <span class="value resume"></span></p>
			<p class="points">Total Points: <span class="value">50</span></p>
			<p class="time-left">Completed: <span class="value"></span></p>
		</div>
		</a>
	</div>
	<div class="clock">
		<div class="clock-heading">
			<h4>Countdown to the Final!</h4>
			<p>You may change the color using the following formats:</p>
			<p>Name: blue, red, green</p>
			<p>Hex: #ff6347, #777</p>
			<p>RGB: rgb(121,223,123)</p>
			<input class="user-color" type="text" name="" value="" placeholder="blue, red, green">
			<button type="submit" class="change-color">Change Color</button>
			<button type="submit" class="original-color">Original Color</button>
		</div>
    	<div id="clockdiv">
	        <div>
	          <span class="days"></span>
	          <div class="smalltext">Days</div>
	        </div>
	        <div>
	          <span class="hours"></span>
	          <div class="smalltext">Hours</div>
	        </div>
	        <div>
	          <span class="minutes"></span>
	          <div class="smalltext">Minutes</div>
	        </div>
	        <div>
	          <span class="seconds"></span>
	          <div class="smalltext">Seconds</div>
	        </div>
	    </div>
    </div>


<?php 
$vendor_js = '<script src="vendors/stellar/jquery.stellar.min.js" type="text/javascript"></script>';
$custom_js = '<script src="resources/js/homework.js" type="text/javascript"></script><br />';
require('inc/footer.php') 
?>