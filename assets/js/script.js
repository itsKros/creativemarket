$(document).ready(function () {
    

    var viewportHeight = $("body").outerHeight();
	var navHeight = $("nav.navbar").innerHeight();
	
    var heroHeight = viewportHeight-navHeight;
    $('#heroSec').css({'height':'calc(100vh - 20px)' });
    console.log(viewportHeight);
    console.log(navHeight);
    console.log(heroHeight);
});