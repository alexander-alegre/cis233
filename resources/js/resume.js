// AJAX call for the about page
$('#about').click(function(){
	$('.ajax-content').load('resources/ajax/about.html');
});
// AJAX call for school
$('#school').click(function(){
	$('.ajax-content').load('resources/ajax/school.html');
});
// AJAX call for awards
$('#skills').click(function(){
	$('.ajax-content').load('resources/ajax/skills.html');
});
// AJAX call for resume
$('#resume').click(function(){
	$('.ajax-content').load('resources/ajax/resume.html');
});
// AJAX call for friends
$('#friends').click(function(){
	$('.ajax-content').load('resources/ajax/friends.php');
});