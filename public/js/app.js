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
	$('.masthead .information').transition('scale in', 1000);
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
		slideMove: 1,
	    slideMargin: 10,
	    auto:true,
	    loop: true,
	    pauseOnHover: true,
	    speed: 400,
	    onSliderLoad: function() {
	        $('#slider').removeClass('cS-hidden');
	    },
	});
});
// var tag = document.createElement('script');

// tag.src = "https://www.youtube.com/iframe_api";
// var firstScriptTag = document.getElementsByTagName('script')[0];
// firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// var player;
// function onYouTubeIframeAPIReady() {
// 	player = new YT.Player('player', {
// 		height: '720',
// 		width: '1280',
// 		videoId: '8nl4hRo7BZw',
// 		rel: 0,
// 		controls: 0,
// 		showinfo: 0,
// 		events: {
// 			'onReady': onPlayerReady,
// 		}
// 	});
// }
// function onPlayerReady(event) {
// 	event.target.playVideo();
// }
// function pausePlayer() {
// 	player.pauseVideo();
// }
// $("#slider").lightSlider({
// 	item: 1,
// 	slideMove: 1,
//     slideMargin: 10,
//     auto:true,
//     loop: true,
//     pauseOnHover: true,
//     speed: 400,
//     onSliderLoad: function() {
//         $('#slider').removeClass('cS-hidden');
//     },
//     onAfterSlide: function () {
// 		pausePlayer();
//     },
// });