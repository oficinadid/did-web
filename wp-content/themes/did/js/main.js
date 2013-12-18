var introautosize = function () {
	//Auto width & height #intro divs
	$('#intro .back').height($(window).height());
	$('#intro .front').height($(window).height());
	$('#proyectos').height($(window).height());
	$('#proyectos .slides').height($(window).height());

	// Auto margin-top #intro .content
	var mtopcontent = ($(document).height()/2) - ($('#intro .front .content').outerHeight()/2);
	$('#intro .front .content').css('margin-top', mtopcontent);
};

var stickymenu = function () {
	if($(document).scrollTop() > 20) {
		$('menu#main').addClass('fixed');
	} else {
		$('menu#main').removeClass('fixed');
	}
};

$(document).ready(introautosize);
$(window).resize(introautosize);
$(window).scroll(stickymenu);

$(document).ready(function() {

});

