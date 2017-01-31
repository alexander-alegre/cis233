<?php
$title = "<title>CIS 233 Homework Page</title>";
$custom_css = '<link rel="stylesheet" type="text/css" href="resources/css/homework.css">';
require('inc/header.php');
$now = time() - (60*60*24);
$resumeDate = strtotime('2/7/2017');
$responsiveDate = strtotime('2/27/2017');
$cartDate = strtotime('2/28/2017');
$lightboxDate = strtotime('3/14/2017');
$projectDate = strtotime('3/21/2017');
$flashDate = strtotime('3/28/2017');
$phpDate = strtotime('4/11/2017');
$rolloverDate = strtotime('4/18/2017');
$wordpressDate = strtotime('4/25/2017');
$finalDate = strtotime('5/2/2017');
?>
	<!-- start of clock -->
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
    <!-- end of clock -->
    <!-- start of assignments cards -->
    <!-- Fake Resume -->
	<div class="content">
		<a href="resume.php">
		<div class="assignment">
			<h4>Fake Resume</h4>
			<p class="due-date">Due Date: <span class="value"><?php echo date('n/j/Y', $resumeDate); ?></span></p>
			<p class="points">Total Points: <span class="value">50</span></p>
			<p class="time-left">Completed: <span class="value <?php if ($resumeDate <= $now) {echo 'glyphicon glyphicon-thumbs-up';} else {echo 'glyphicon glyphicon-thumbs-down';} ?>"></span></p>
		</div>
		</a>
	</div>
	<!-- Responsive Site -->
	<div class="content">
		<a href="responsive.php">
		<div class="assignment">
			<h4>Responsive</h4>
			<p class="due-date">Due Date: <span class="value"><?php echo date('n/j/Y', $responsiveDate); ?></span></p>
			<p class="points">Total Points: <span class="value">100</span></p>
			<p class="time-left">Completed: <span class="value <?php if ($responsiveDate <= $now) {echo 'glyphicon glyphicon-thumbs-up';} else {echo 'glyphicon glyphicon-thumbs-down';} ?>"></span></p>
		</div>
		</a>
	</div>
	<!-- Shopping Cart -->
	<div class="content">
		<a href="cart.php">
		<div class="assignment">
			<h4>Shopping Cart</h4>
			<p class="due-date">Due Date: <span class="value"><?php echo date('n/j/Y', $cartDate); ?></span></p>
			<p class="points">Total Points: <span class="value">50</span></p>
			<p class="time-left">Completed: <span class="value <?php if ($cartDate <= $now) {echo 'glyphicon glyphicon-thumbs-up';} else {echo 'glyphicon glyphicon-thumbs-down';} ?>"></span></p>
		</div>
		</a>
	</div>
	<!-- Lighbox -->
	<div class="content">
		<a href="lightbox.php">
		<div class="assignment">
			<h4>Lightbox</h4>
			<p class="due-date">Due Date: <span class="value"><?php echo date('n/j/Y', $lightboxDate); ?></span></p>
			<p class="points">Total Points: <span class="value">50</span></p>
			<p class="time-left">Completed: <span class="value <?php if ($lightboxDate <= $now) {echo 'glyphicon glyphicon-thumbs-up';} else {echo 'glyphicon glyphicon-thumbs-down';} ?>"></span></p>
		</div>
		</a>
	</div>
	<!-- Project Plan -->
	<div class="content">
		<a href="project.php">
		<div class="assignment">
			<h4>Project Plan</h4>
			<p class="due-date">Due Date: <span class="value"><?php echo date('n/j/Y', $projectDate); ?></span></p>
			<p class="points">Total Points: <span class="value">50</span></p>
			<p class="time-left">Completed: <span class="value <?php if ($projectDate <= $now) {echo 'glyphicon glyphicon-thumbs-up';} else {echo 'glyphicon glyphicon-thumbs-down';} ?>"></span></p>
		</div>
		</a>
	</div>
	<!-- Flash Animation -->
	<div class="content">
		<a href="flash.php">
		<div class="assignment">
			<h4>Flash Animation</h4>
			<p class="due-date">Due Date: <span class="value"><?php echo date('n/j/Y', $flashDate); ?></span></p>
			<p class="points">Total Points: <span class="value">50</span></p>
			<p class="time-left">Completed: <span class="value <?php if ($flashDate <= $now) {echo 'glyphicon glyphicon-thumbs-up';} else {echo 'glyphicon glyphicon-thumbs-down';} ?>"></span></p>
		</div>
		</a>
	</div>
	<!-- PHP Website -->
	<div class="content">
		<a href="php.php">
		<div class="assignment">
			<h4>PHP Site</h4>
			<p class="due-date">Due Date: <span class="value"><?php echo date('n/j/Y', $phpDate); ?></span></p>
			<p class="points">Total Points: <span class="value">100</span></p>
			<p class="time-left">Completed: <span class="value <?php if ($phpDate <= $now) {echo 'glyphicon glyphicon-thumbs-up';} else {echo 'glyphicon glyphicon-thumbs-down';} ?>"></span></p>
		</div>
		</a>
	</div>
	<!-- Rollover Feature -->
	<div class="content">
		<a href="rollover.php">
		<div class="assignment">
			<h4>Rollover Feature</h4>
			<p class="due-date">Due Date: <span class="value"><?php echo date('n/j/Y', $rolloverDate); ?></span></p>
			<p class="points">Total Points: <span class="value">50</span></p>
			<p class="time-left">Completed: <span class="value <?php if ($rolloverDate <= $now) {echo 'glyphicon glyphicon-thumbs-up';} else {echo 'glyphicon glyphicon-thumbs-down';} ?>"></span></p>
		</div>
		</a>
	</div>
	<!-- Wordpress Site -->
	<div class="content">
		<a href="wordpress.php">
		<div class="assignment">
			<h4>Wordpress Site</h4>
			<p class="due-date">Due Date: <span class="value"><?php echo date('n/j/Y', $wordpressDate); ?></span></p>
			<p class="points">Total Points: <span class="value">50</span></p>
			<p class="time-left">Completed: <span class="value <?php if ($wordpressDate <= $now) {echo 'glyphicon glyphicon-thumbs-up';} else {echo 'glyphicon glyphicon-thumbs-down';} ?>"></span></p>
		</div>
		</a>
	</div>
	<!-- Final Project -->
	<div class="content">
		<a href="final.php">
		<div class="assignment">
			<h4>Final Project</h4>
			<p class="due-date">Due Date: <span class="value"><?php echo date('n/j/Y', $finalDate); ?></span></p>
			<p class="points">Total Points: <span class="value">200</span></p>
			<p class="time-left">Completed: <span class="value <?php if ($finalDate <= $now) {echo 'glyphicon glyphicon-thumbs-up';} else {echo 'glyphicon glyphicon-thumbs-down';} ?>"></span></p>
		</div>
		</a>
	</div>
	<!-- end of assignments cards -->
<?php 
$vendor_js = '<script src="vendors/stellar/jquery.stellar.min.js" type="text/javascript"></script>';
$custom_js = '<script src="resources/js/homework.js" type="text/javascript"></script><br />';
require('inc/footer.php') 
?>