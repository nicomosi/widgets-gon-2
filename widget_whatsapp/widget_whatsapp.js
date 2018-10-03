/*
 * Fucntions of sites IMAR
 * Dual.ag
 * jojeda@dual.ag
 *
 * 2015/09/15
 *
 *
 *
 *
 *
 */

$(function(){
	$('#widget-whatsapp #widget-dialog-bubble').bind('click', function() {
		$('#widget-whatsapp').addClass('active');
	});

	$('#widget-whatsapp').find('#widget-display-phone').bind('click', function() {
		$('#widget-whatsapp').addClass('display-phone');
		$('#widget-whatsapp').addClass('active');
	});

	window.setInterval(function(){
		/// call your function here
		if($('#widget-whatsapp').hasClass('display-phone')) {}
		else {
			$('#widget-whatsapp').toggleClass('active');
		}
	}, 6000);  // Change Interval here to test. For eg: 5000 for 5 sec
});