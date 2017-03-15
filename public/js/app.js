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
});

var slider = $("#slider").lightSlider({
	item: 1,
    auto: true,
    loop: true,
    pauseOnHover: true,
    speed: 1000,
    pause: 5000,
    onSliderLoad: function() {
        $('#slider').removeClass('cS-hidden');
    },
}); 
var tag = document.createElement('script');
tag.src = 'https://www.youtube.com/iframe_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
	
function onYouTubeIframeAPIReady() {
	$('#slider iframe').each(function() {
		var player = new YT.Player(this, {
			events: {
				'onStateChange': onPlayerStateChange
			}
		});
	});
}
function onPlayerStateChange(event) {
	changeStatus(event.data);
}
function changeStatus(playerStatus) {
	if (playerStatus == 0) {
		slider.play();
	} else if (playerStatus == 1) {
		slider.pause();
	} else if (playerStatus == 2) {
		slider.play();
	} else if (playerStatus == 3) {
		slider.pause();
	}
}