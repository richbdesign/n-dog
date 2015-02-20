jQuery.noConflict();

(function($) {
$(document).ready(function () {

	/* Use this js doc for all application specific JS */
    
    /* HIDE ADDRESS BAR ON IPHONE */
    //window.scrollTo(0,1);
	
	// if Modernizr detects class "touch"
	if($('html').hasClass('touch')) {
		// for each element with class "make-tel-link"
		$(".make-tel-link").each(function () {
			var jPhoneNumber = $(this).text();
			// wrap phone with href="tel:" and then insert phone number
			$(this).wrapInner('<a class="jPhoneLink" href=""></a>');
			$('.jPhoneLink').attr('href', 'tel:'+jPhoneNumber);
		});
	}
	
	if( /Android|webOS|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		$('html').addClass('mobile');
	}
	
	//social popups
	$(".newwindow").popupWindow({ 
		centerBrowser: 1,
		width: 650,
		height: 375
	});
	
	//flexslider
	$('.single-artist .flexslider').flexslider({
	    animation: "slide",
	    controlNav: "thumbnails"
	 });
	 
	 //homeslider
	$('.home .flexslider').flexslider({
	    animation: "slide",
	    controlNav: false,
	    directionNav: true
	 });
	
});
})(jQuery);