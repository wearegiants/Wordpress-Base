// @codekit-prepend "site/shopify--cart.js"

function mobileMenuclone(){
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
}

$(document).ready(function(){
	mobileMenuclone();
});