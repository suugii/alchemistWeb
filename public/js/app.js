$(document).ready(function() {
	var changeSides = function() {
		$('.ui.shape')
		.eq(0).shape('flip over').end()
		.eq(1).shape('flip over').end()
		.eq(2).shape('flip back').end()
		.eq(3).shape('flip back').end();
	};
	$('.ui.dropdown').dropdown({
		on: 'hover'
	});
	$('.masthead .information').transition('scale in', 800, function() {
		$('.containerSlide').addClass('animated');
	});
	$('.ui.card').popup();
	$('.ui.checkbox').checkbox();
	$('.masthead').visibility({
		once: false,
		onBottomPassed: function() {
			$('.fixed.menu').transition('fade in');
		},
		onBottomPassedReverse: function() {
			$('.fixed.menu').transition('fade out');
		}
	});
	$('.ui.sidebar').sidebar('attach events', '.toc.item');
	$('.ui.checkbox').checkbox();
	$('.message .close').on('click', function() {
		$(this).closest('.message').transition('fade out');
	});
	setInterval(changeSides, 3000);
	$("#slider").lightSlider({
		item: 1,
	    auto: true,
	    loop: true,
	    pauseOnHover: true,
	    speed: 400,
	    onSliderLoad: function() {
	        $('#slider').removeClass('cS-hidden');
	    },
	});
});