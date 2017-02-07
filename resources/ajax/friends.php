<?php
require '../json/json.php';
?>
<h1>Shiloh</h1>
<p>Fill out this form to be displayed as my friend!</p>
<form method="post">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" name="name" class="form-control" id="name" placeholder=""/>
	</div>
	<div class="form-group">
	<label for="language">Favorite Language</label>
		<select multiple class="form-control" name="language" id="lanuage">
		  <option>JavaScript</option>
		  <option>Java</option>
		  <option>PHP</option>
		  <option>Ruby</option>
		  <option>Python</option>
		  <option>C#</option>
		</select>
	</div>
	<div class="form-group">
		<label for="born">Born</label>
		<input type="date" name="born" class="form-control" id="born" placeholder=""/>
	</div>
	<div class="form-group">
		<label for="code">First Line of Code</label>
		<input type="date" name="code" class="form-control" id="code" placeholder=""/>
	</div>
	<input type="submit" class="btn btn-default" name="submit" id="submit" />
</form>
<br/>



<!-- display all of the friends -->
<h4>List of Friends</h4>
<?php
	appendData();
	getFriends();
?>
<?php
	$custom_js = '';
	require '../../inc/footer.php';
?>