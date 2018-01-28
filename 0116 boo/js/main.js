$(function(){
	$('.fadeslider').slick({
		dots: false,
		infinite: true,
		speed: 1500,
		fade: true,
		cssEase: 'linear',
		autoplay: true,
		arrows: false
	});
	$('.menuSlider').slick({
		dots: false,
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 0,
		speed: 4000,
		cssEase: "linear",
		slidesToShow: 4,
		slidesToScroll: 1,
	});
});