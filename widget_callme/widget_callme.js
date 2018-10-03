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
	$('#widget-callme #widget-dialog-bubble').bind('click', function() {
		$('#widget-callme').addClass('active');
	});

	$('#widget-callme').find('#widget-display-phone').bind('click', function() {
		$('#widget-callme').addClass('display-phone');
		$('#widget-callme').addClass('active');
	});

	window.setInterval(function(){
		/// call your function here
		if($('#widget-callme').hasClass('display-phone')) {}
		else {
			$('#widget-callme').toggleClass('active');
		}
	}, 6000);  // Change Interval here to test. For eg: 5000 for 5 sec
});