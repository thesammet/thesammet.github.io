$(document).ready(function () {
	$("#slider").bxSlider({
		auto: true,
		minSlides: 1,
		maxSlides: 1,
		moveSlides: 1,
		slideWidth: 250,
		slideMargin: 10,
		randomStart: true,
		pause: 3000,
		pager: true,
		pagerSelector: '#pager',
		pagerType: 'short',
	});
});
