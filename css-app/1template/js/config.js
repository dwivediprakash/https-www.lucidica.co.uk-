// config

requirejs.config({
	baseUrl: 'js',
	paths: {
		jquery: [
			'https://code.jquery.com/jquery-1.12.4.min',
			'lib/jquery'
		],
		isotopeLib: 'lib/isotope',
		sliderWithShift: 'custom/slider-with-shift',
		scrollTo: 'custom/scroll-to',
		spyScroll: 'custom/spy-scroll',
		typedText: 'custom/typed-text',
		rotationImage: 'custom/rotation-image',
		interactiveImage: 'custom/interactive-image',
		tabs: 'custom/tabs',
		accordion: 'custom/accordion',
		isotopeAndMasonry: 'custom/isotope-and-masonry',
		feedbackForm: 'custom/feedback-form',
		modal: 'custom/modal',
		viewportChecker: 'custom/viewport-checker',
		directionalHover: 'custom/directional-hover',
		preloader: 'custom/preloader',
		counter: 'custom/counter',
		async: 'lib/async',
		googleMap: 'custom/google-map'
	}
});

require([
	'jquery',
	'sliderWithShift',
	'scrollTo',
	'spyScroll',
	'typedText',
	'rotationImage',
	'interactiveImage',
	'tabs',
	'accordion',
	'isotopeAndMasonry',
	'feedbackForm',
	'modal',
	'viewportChecker',
	'directionalHover',
	'preloader',
	'counter',
	'async',
	'googleMap'
]);