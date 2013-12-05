$(document).ready(function() {	//executed after the page has loaded

    $("#navigation a").click(function(e) {	//traverse through all our navigation links..
        $("#navigation li").removeClass("active");  
        $(this).parent().addClass("active");
    });
});
