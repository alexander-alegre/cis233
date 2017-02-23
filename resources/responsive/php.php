<?php
	$title = '<title>CIS 233 PHP Help</title>';
	require 'header.php';
?>
<div class="container-fluid">
	<img src="../images/responsive/php.jpeg" alt="php code on screen" class="image-bg img-responsive">
	<h1>PHP</h1>
	<p class="text-muted">PHP: Hypertext Processor</p>
	<p class="text-danger">Some of these resources can also be used for other languages not just this one. I used these particular resources because they are the ones I have used myself.</p>
  	<div class="col-sm-12 col-md-6">
	    <p>PHP was never meant to be a programming language so that is why you will see a lot of people on the internet bash it and say it's not a real programming language. Well that is false, spcially with the release of PHP7. Now PHP has a lot of funtionality that many other languages have. Also PHP is used all over the web, even Facebook uses PHP!</p>
	    <p>PHP is described as a server side language wich means when someone clicks "view page source" they will not see the code because it ersides in a server. This also means that it can interact with a database such as MySQL or SQLite. All web applications have a database so this is something you need to learn if you want to move on from creating websites to creating applications. Yes there are many other languages like the image below shows, but PHP is the easiest to learn you can even write PHP inside HTML code which is great!</p>
	    <img src="../../resources/images/responsive/php-cartoon.jpg" alt="php cartoon" class="js-img" />
	  </div>
	  <div class="col-sm-12 col-md-6">
	    <div class="col-sm-12 col-md-4 col-lg-4">
	      <img src="../../resources/images/responsive/step1.png" alt="step 1 image">
	      <p>Since you know the syntax of JavaScript it will be easier to learn PHP. Learn the syntax and the keywords used to do certain things. I would go ahead and download PHP and you can go to the console and run <span class="text-info">php -v</span> you should get the version and that means you did the install correctly! Good job!</p>
	    </div>
	    <div class="col-sm-12 col-md-4 col-lg-4">
	      <img src="../../resources/images/responsive/step2.png" alt="step 2 image">
	      <p>Now we discussed that PHP is a server side language so you need a server in order to see and run an application with an extionsion of .php. The easiest way of doing this is through the console, just run <span class="text-info">php -S localhost:8000</span> and this will boot up a local server. Now type "localhost:8000" in any browser and you will see your site! If you don't see the website make sure you have an index file or type "/filename.php" to get to the file that you named.</p>
	    </div>
	    <div class="col-sm-12 col-md-4 col-lg-4">
	      <img src="../../resources/images/responsive/step3.png" alt="step 3 image">
	      <p>Now that you have PHP installed and can develop locally I would recommend using Treehouse and do their structured PHP course which will also show you how to use a database with PHP. After you do this you should be really comfortable writing code and can easily make some money! Go to a local business and offer to build them a website. This will make you some money and will also help you build your porfolio so you can show it off to future employers. Now if all this info sounds great you can go ahead and <a href="../../cart.php">buy my course</a>! The HTML is on sale for a limited time!</p>
	    </div>
	  </div>
	  <div class="col-sm-12 col-md-6">
	    
	  </div>
	<!-- table of resources -->
	<table class="table">
		<tr>
			<td colspan="3" class="php-title">Resources</td>
		</tr>
  		<tr>
  			<th>Name</th>
  			<th>Helpfulness</th>
  			<th>Difficulty</th>
  		</tr>
  		<tr>
  			<td><a href="http://www.php.net/" target="_blank">PHP.net</a></td>
  			<td>8</td>
  			<td>8</td>
  		</tr>
  		<tr>
  			<td><a href="https://www.codecademy.com/learn/php" target="_blank">Code Academy</a></td>
  			<td>8</td>
  			<td>5</td>
  		</tr>
  		<tr>
  			<td><a href="http://www.learn-php.org/" target="_blank">Learn PHP</a></td>
  			<td>7</td>
  			<td>2</td>
  		</tr>
	</table>	
</div>




<?php
	require 'footer.php';
?>