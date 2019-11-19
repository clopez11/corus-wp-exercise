// Create Carousel

$(document).ready(function(){
	$('.main-gallery').slick({
		slidesToShow: 1,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		dots: true
	});
});