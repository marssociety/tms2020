jQuery(function($){

    var eventFired = 0;

    if ($(window).width() > 768) {
        $('#footer1-menu').collapse({
            show:true
        });
        $('#footer2-menu').collapse({
            show:true
        });
        $('#footer3-menu').collapse({
            show:true
        });
    }

    $(window).resize(function() {
        if ($(window).width() > 768) {
            $('#footer1-menu').collapse({
                show:true
            });
            $('#footer2-menu').collapse({
                show:true
            });
            $('#footer3-menu').collapse({
                show:true
            });
        } else {
            $('#footer1-menu').collapse({
                show:false
            });
            $('#footer2-menu').collapse({
                show:false
            });
            $('#footer3-menu').collapse({
                show:false
            });
        }
    });

});