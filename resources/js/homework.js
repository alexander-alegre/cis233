var todayDate = Date();
// due dates for projects
var dueDates = [];
dueDates['resume'] = new Date('2/7/2017').toLocaleDateString();
dueDates['responsive'] = new Date('2/21/2017').toLocaleDateString();
dueDates['cart'] = new Date('2/28/2017').toLocaleDateString();
dueDates['lighbox'] = new Date('3/14/2017').toLocaleDateString();
dueDates['project'] = new Date('3/21/2017').toLocaleDateString();
dueDates['flash'] = new Date('3/28/2017').toLocaleDateString();
dueDates['php'] = new Date('4/11/2017').toLocaleDateString();
dueDates['rollover'] = new Date('4/18/2017').toLocaleDateString();
dueDates['wordpress'] = new Date('4/25/2017').toLocaleDateString();
dueDates['final'] = new Date('5/2/2017').toLocaleDateString();

$('.resume').text(dueDates['resume']);
$('.responsive').text(dueDates['responsive']);
$('.cart').text(dueDates['cart']);
$('.lightbox').text(dueDates['lightbox']);
$('.project').text(dueDates['project']);
$('.flash').text(dueDates['flash']);
$('.php').text(dueDates['php']);
$('.rollover').text(dueDates['rollover']);
$('.wordpress').text(dueDates['wordpress']);
$('.final').text(dueDates['final']);

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
});
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
});