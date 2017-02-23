<?php 
$title = "<title>CIS 233 Shopping Cart | Learn to Program</title>";
$custom_css = '<link rel="stylesheet" type="text/css" href="resources/css/cart.css">';
require('inc/header.php') 
?>
	<div class="container-fluid">
		<h1>Learn to Program</h1>
		<p>Your one stop shop to become a coding guru.</p>
		<p class="text-info">For a limited time! HTML course gets a 5% discount for every course you purchase!</p>
		<p>If you'd like to learn more about the languages click on them!</p>
		<!-- start of html form -->
		<form action="http://ww8.aitsafe.com/cf/add.cfm" method="post" class="col-sm-12 col-md-6 col-lg-4">
			<!-- database info start -->
			<input name="userid" type="hidden" value="A1428224" />
			<input name="product" type="hidden" value="HTML Course" />
			<input name="price" type="hidden" value="19.95" id="discount-price" />
			<input name="return" type="hidden" value="https://e-commerce.pvc.maricopa.edu/cis233/" />
			<!-- database info end -->
			<a href="http://localhost:8000/resources/responsive/html.php" target="_blank"><img src="resources/images/cart/html.png" alt="html shopping image"></a>
			<p>This is the first step to become a web developer. With knowledge of HTML you can start putting content in your web pages.</p>
			<p class="text-warning">Only 19.95 for a limited time!</p>
			<div class="form-group">
				<label>Quantity</label>
				<select name="qty" id="discount-amount">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
				<!-- <input type="text" name="qty" id="qty-html" /> -->
			</div>
			<div class="form-group">
				<input class="btn-info" type="submit" value="Add To Cart" id="discount" />
			</div>
			<div class="form-group">
				<input class="btn-info" type="reset" value="Clear Order" />
			</div>
		</form>
		<!-- end of html form -->
		<!-- start of css form -->
		<form action="http://ww8.aitsafe.com/cf/add.cfm" method="post" class="col-sm-12 col-md-6 col-lg-4">
			<!-- database info start -->
			<input name="userid" type="hidden" value="A1428224" />
			<input name="product" type="hidden" value="CSS Course" />
			<input name="price" type="hidden" value="19.95" />
			<input name="return" type="hidden" value="https://e-commerce.pvc.maricopa.edu/cis233/" />
			<!-- database info end -->
			<a href="http://localhost:8000/resources/responsive/css.php" target="_blank"><img src="resources/images/cart/css.png" alt="css shopping image"></a>
			<p>CSS is a skill all developers need to learn. It's easy to learn but hard to master. My course will make you a master.</p>
			<p class="text-warning">Only 19.95 for a limited time!</p>
			<div class="form-group">
				<label>Quantity</label>
				<select name="qty">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
			</div>
			<div class="form-group">
				<input class="btn-info" type="submit" value="Add To Cart" />
			</div>
			<div class="form-group">
				<input class="btn-info" type="reset" value="Clear Order" />
			</div>
		</form>
		<!-- end of css form -->
		<!-- start of js form -->
		<form action="http://ww8.aitsafe.com/cf/add.cfm" method="post" class="col-sm-12 col-md-6 col-lg-4">
			<!-- database info start -->
			<input name="userid" type="hidden" value="A1428224" />
			<input name="product" type="hidden" value="JavaScript Course" />
			<input name="price" type="hidden" value="29.95" />
			<input name="return" type="hidden" value="https://e-commerce.pvc.maricopa.edu/cis233/" />
			<!-- database info end -->
			<a href="http://localhost:8000/resources/responsive/js.php" target="_blank"><img src="resources/images/cart/js.png" alt="js shopping image"></a>
			<p>JavaScript will always be found in the front end of websites. It adds functionality to web sites and applications and cool animations. My course will teach you everything you need to know.</p>
			<p class="text-warning">Only 29.95 for a limited time!</p>
			<div class="form-group">
				<label>Quantity</label>
				<select name="qty">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
				</select>
			</div>
			<div class="form-group">
				<input class="btn-info" type="submit" value="Add To Cart" />
			</div>
			<div class="form-group">
				<input class="btn-info" type="reset" value="Clear Order" />
			</div>
		</form>
		<!-- end of js form -->
		<!-- start of php form -->
		<form action="http://ww8.aitsafe.com/cf/add.cfm" method="post" class="col-sm-12 col-md-6 col-lg-4">
			<!-- database info start -->
			<input name="userid" type="hidden" value="A1428224" />
			<input name="product" type="hidden" value="PHP Course" />
			<input name="price" type="hidden" value="49.95" />
			<input name="return" type="hidden" value="https://e-commerce.pvc.maricopa.edu/cis233/" />
			<!-- database info end -->
			<a href="http://localhost:8000/resources/responsive/php.php" target="_blank"><img src="resources/images/cart/php.jpeg" alt="php shopping image"></a>
			<p>PHP will turn your website into a web application. Connecting to a web server is the most important thing when you want to create a real application with dynamic content.</p>
			<p class="text-warning">Only 49.95 for a limited time!</p>
			<div class="form-group">
				<label for="qty-php">Quantity</label>
				<input type="text" name="qty" id="qty-php" />
			</div>
			<div class="form-group">
				<input class="btn-info" type="submit" value="Add To Cart" />
			</div>
			<div class="form-group">
				<input class="btn-info" type="reset" value="Clear Order" />
			</div>
		</form>
		<!-- end of php form -->




	</div>
<?php 
$custom_js = '<script src="resources/js/cart.js" type="text/javascript"></script>';
require('inc/footer.php') 
?>