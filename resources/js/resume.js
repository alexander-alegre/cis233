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

// show modal when mouse leaves window
var counter = 0;
$(document).mouseleave(function() {
	if (counter == 0) {
		counter ++;
		$('.modal').modal('show');
		console.log('modal appeared');
	}
});


$('.list-group-item').click(function() {
	$('.active').removeClass('active');
	$(this).addClass('active');
});