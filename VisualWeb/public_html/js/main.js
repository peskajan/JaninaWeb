$(document).ready(function() {	//executed after the page has loaded

    checkURL();	//check if the URL has a reference to a page and load it

    $("#navigation a").click(function(e) {	//traverse through all our navigation links..
        $("#navigation li").removeClass("active");  
        $(this).parent().addClass("active");
        checkURL(this.hash);	//.. and assign them a new onclick event, using their own hash as a parameter (#page1 for example)
        
    });

    $(window).bind("hashchange", function() {
        checkURL();
    });

});

function checkURL(hash) {
    if (!hash) {
        hash = window.location.hash;	//if no parameter is provided, use the hash value from the current address
    }
    loadPage(hash);	// and load the new page
}

function loadPage(url) {
    url = url.replace("#", "");	//strip the #page part of the hash and leave only the page number

    $("#content").load(url + ".html");

}