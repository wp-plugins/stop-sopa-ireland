jQuery(document).ready(function(){
	var htmlMargin = jQuery('html').css('margin-top');
	jQuery('html').css('cssText', 'margin-top:'+(parseInt(htmlMargin)+40)+'px !important')
	jQuery('#sopa_menubar').css({'top' : parseInt(htmlMargin)+'px', 'display' : 'block'});
});