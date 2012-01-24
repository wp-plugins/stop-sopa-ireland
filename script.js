var $j = jQuery.noConflict();
$j(document).ready(function(){
	var htmlMargin = $j('html').css('margin-top');
	$j('html').css('cssText', 'margin-top:'+(parseInt(htmlMargin)+40)+'px !important')
	$j('#sopa_menubar').css({'top' : parseInt(htmlMargin)+'px', 'display' : 'block'});
});