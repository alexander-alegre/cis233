	<footer>
		<p class="footer"><?php echo date('Y'); ?> &copy; Alexander Alegre</p>
	</footer>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript Bootstrap -->
	<script src="vendors/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
	<script>
	$('.navbar-nav li').click(function() {
		$('.active').removeClass('active');
		$(this).addClass('active');
	});
	</script>
	<?php echo $custom_js; ?>
</body>
</html>