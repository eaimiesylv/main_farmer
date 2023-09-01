
$(document).ready(function() {
          
    // Toggle aside on mobile bar click
    $("#mobile_bar").click(function() {
        $("aside").toggle();
    });

    //toggle sub menu
    $('.nav-links li').has('.sub-links').click(function() {
        $(this).toggleClass('active').siblings().removeClass('active');
    });
    
})
alert('ok');