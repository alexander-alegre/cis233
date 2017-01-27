// change color of cards on hover
$('.card').mouseover(function() {
	var red = Math.floor(Math.random() * 256);
	var green = Math.floor(Math.random() * 256);
	var blue = Math.floor(Math.random() * 256);
	var finalColor = red + ', ' + green + ', ' + blue + ', 0.8';
	console.log('Card Color' + ' ' +finalColor);
	$(this).css({
		boxShadow: '0 8px 100px 0',
		color: 'rgba('+ finalColor +')'
	});
});
// change to original when mouse leaves
$('.card').mouseleave(function(){
	$(this).css({
		boxShadow: '0 4px 8px 0',
		color: 'rgba(255,255,255,0)'
	});
});
// add the active class when nav link is clicked
$('li').click(function(){
	$('li').removeClass('active');
	$(this).addClass('active');
	// $(this).addClass('active').siblings().removeClass('active');
});
