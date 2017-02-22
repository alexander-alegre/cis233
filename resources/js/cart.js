$(document).ready(function() {
	$('#discount').click(function() {
		var cartValue = $('#discount-amount').val();
		var currentValue = $('#discount-price').attr('value');
		alert(currentValue);
		if (cartValue == 1) {
			$('#discount-price').attr('value', currentValue - (currentValue * .05));
		} else if (cartValue == 2) {
			$('#discount-price').attr('value', currentValue - (currentValue * .10));
		} else {
			$('#discount-price').attr('value', currentValue - (currentValue * .15));
		}
	});	
});