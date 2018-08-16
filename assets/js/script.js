$(document).ready(function () {
    

    var viewportHeight = $("body").outerHeight();
	var navHeight = $("nav.navbar").innerHeight();
	
    var heroHeight = viewportHeight-navHeight;
    $('#heroSec').css({'height':'606px' });
    console.log(viewportHeight);
    console.log(navHeight);
    console.log(heroHeight);

    //Language Select Footer
    $('#languageSelect').fancySelect();

});