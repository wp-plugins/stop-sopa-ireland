$(document).ready(function(){
	var htmlMargin = $('html').css('margin-top');
	$('html').css('cssText', 'margin-top:'+(parseInt(htmlMargin)+40)+'px !important')
	$('#sopa_menubar').css({'top' : parseInt(htmlMargin)+'px', 'display' : 'block'});
});