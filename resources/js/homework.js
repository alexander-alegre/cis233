var todayDate = Date();
// start of contdown clock
function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}
// countdown clock
function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');
  function updateClock() {
    var t = getTimeRemaining(endtime);
    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }
  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}
var deadline = 'May 2 2017 18:00:00';
initializeClock('clockdiv', deadline);

// end of countdown clock
// change color of the clock
$('.change-color').click(function() {
	var userColor = $('.user-color').val();
	$('#clockdiv div span').css({
		backgroundColor: userColor
	});
	$('.change-color').css({
		backgroundColor: userColor
	});
	$('.original-color').css({
		backgroundColor: userColor
	});
  $('.content').css({
    borderColor: userColor
  });
});
// back to original color
$('.original-color').click(function(){
	$('#clockdiv div span').css({
		backgroundColor: '#00B1B2'
	});
	$('.change-color').css({
		backgroundColor: '#00B1B2'
	});
	$('.original-color').css({
		backgroundColor: '#00B1B2'
	});
  $('.content').css({
    borderColor: '#00B1B2'
  });
});