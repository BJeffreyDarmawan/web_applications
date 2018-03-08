

$(document).ready(function(){

    // Fades in
    //$('#changin_content').css('display', 'none');
    $('#changin_content').fadeIn(1000);
    
    // Fades out
    $('a').click(function (e) {
    e.preventDefault();
    newLocation = this.href;
    $('#changin_content').fadeOut(1000, newpage); //after finish fading out, load the next page
    });
    
    function newpage() {
        window.location = newLocation;
    }

}); 

function Reload() {
    try {
        var headElement = document.getElementsByTagName("head")[0];
        if (headElement && headElement.innerHTML)
            headElement.innerHTML += "<meta http-equiv=\"refresh\" content=\"1\">";
    }
    catch (e) {
        
    }
}

if ((/iphone|ipod|ipad.*os 5/gi).test(navigator.appVersion)) {
    window.onpageshow = function(evt) {
        if (evt.persisted) {
            document.body.style.display = "none";
            location.reload();
        }
};
}
