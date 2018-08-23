$(document).ready(function () {

    var viewportHeight = $(window).height();
	var navHeight = $("nav.navbar").innerHeight();
	var heroHeight = viewportHeight-navHeight;
    $('#heroSec').css({"height": heroHeight+"px"});

    //Language Select Footer
    $('#languageSelect').fancySelect();

});

$(window).bind("load", function() { 
    var consec =  $('#abtBriefSec .consection').outerHeight();
    $('#abtBriefSec .bflex .image').css({"height": consec+"px"});
});
