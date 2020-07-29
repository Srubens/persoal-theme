jQuery(function(){

    jQuery('.nav-item a[class!="active"]').click(function(){
        
        var goto = jQuery('.' + jQuery(this).attr('href').replace('#', '')).position().top;
        
        jQuery('html, body').animate({ scrollTop: goto - jQuery('.main_home').outerHeight() }, 1000)

        console.clear()

        console.log(goto)
        console.log('clique')

        return false;
    });

    //suspende o menu ou menu fixed
    jQuery(window).scroll(function () {
        // ele colocou + 150
        if (jQuery(this).scrollTop() > jQuery('.navbar').outerHeight() + 10) {
            // jQuery('body').css('padding-top', jQuery('.navbar').outerHeight());
            jQuery('.navbar').addClass('fixed-top');
        } else {
            // jQuery('body').css('padding-top', '0');
            jQuery('.navbar').removeClass('fixed-top');
        }
    });

});