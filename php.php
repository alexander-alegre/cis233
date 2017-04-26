<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	function displayCart()
	{
	// test connection
		// $user = 'root';
		// $password = '';
		// $db = new PDO('mysql:host=localhost;dbname=cis233;', $user, $password);
		// live connection
		$user = 'student';
		$password = '2letmystudentsin!';
		$db = new PDO('mysql:host=localhost;dbname=cis233;', $user, $password);

		$query = $db->prepare("SELECT * FROM `aalegre`");
		$query->execute();
		while($res = $query->fetch(PDO::FETCH_OBJ)) {
			// name vars for easy use
			$product_name = $res->aa_name;
			$product_description = $res->aa_description;
			$product_image = $res->aa_image;
			$product_price = $res->aa_price;
			// display all data
			echo "
				<div class='row-fluid'>
				  <div class='col-sm-6 col-md-4'>
				    <div class='thumbnail'>
				      <img src='".$product_image."' alt='Image of ".$product_name."'>
				      <div class='caption'>
				        <h3>".$product_name."</h3>
				        <p>".$product_description."</p>
				        <p>Only $".$product_price."</p>
				         
				         <form action='http://ww8.aitsafe.com/cf/add.cfm' method='post'>
					         
							<input name='userid' type='hidden' value='A1428224' />
							<input name='product' type='hidden' value='".$product_name."' />
							<input name='price' type='hidden' value='".$product_price."' />
							<input name='return' type='hidden' value='https://e-commerce.pvc.maricopa.edu/cis233/' />
							<input class='btn btn-primary' type='submit' value='Purchase' />
						</form>
				         
				      </div>
				    </div>
				  </div>
				</div>
			";
		}
	}
?>
<?php 
$title = "<title>CIS 233 PHP Page</title>";
$custom_css = '<link rel="stylesheet" type="text/css" href="resources/css/php.css">';
require('inc/header.php') 
?>
	<h1 class="text-center">PHP Shopping Cart</h1>
	<br>
	<?php
		displayCart();
	?>
<?php 
$custom_js = '<script src="resources/js/" type="text/javascript"></script>';
require('inc/footer.php') 
?>