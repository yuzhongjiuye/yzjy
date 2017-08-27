/*!
 * Contact Buttons Plugin Demo 0.1.0
 * https://github.com/joege/contact-buttons-plugin
 *
 * Copyright 2015, José Gonçalves
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
(function ($) {
    'use strict';
    // Main function
    $.contactButtons = function( options ){
        // Define the defaults
        var defaults = {
            effect  : '', // slide-on-scroll
            buttons : {
                'phone': {
                    class: 'phone', use: false, icon: 'phone', link: '', title: '联系我们',/* type: 'phone' ,*/text : '18275154717'},
                'email': {
                    class: 'email', use: false, icon: 'envelope', link: '', title: '联系我们', type: 'email' ,text : 'yuzhongjiuye@126.com'},
                'weixin': {
                    class: 'weixin', use: false, icon: 'weixin', link: '', title: '联系我们' ,text : 'guizhouyuzhong' },
                'qq': {
                    class: 'qq', use: false, icon: 'qq', link: '', title: '联系我们' ,text : '645289493'},
            }
        };
        // Merge defaults and options
        var s,
            settings = options;
        for (s in defaults.buttons) {
            if (options.buttons[s]) {
                settings.buttons[s] = $.extend( defaults.buttons[s], options.buttons[s] );
            }
        }
        // Define the container for the buttons
        var oContainer = $("#contact-buttons-bar");
        // Check if the container is already on the page
        if ( oContainer.length === 0 ) {
            // Insert the container element
            $('body').append('<div id="contact-buttons-bar">');
            // Get the just inserted element
            oContainer = $("#contact-buttons-bar");
            // Add class for effect
            oContainer.addClass(settings.effect);
            // Add show/hide button
            var sShowHideBtn = '<button class="contact-button-link show-hide-contact-bar">' +
                '<span class="fa fa-angle-left float-button"></span></button>';
            oContainer.append(sShowHideBtn);
            var i;
            for ( i in settings.buttons ) {
                var bs = settings.buttons[i],
                    sLink = bs.link,
                    active = bs.use;
                // Check if element is active
                if (active) {
                    // Change the link for phone and email when needed
                    if (bs.type === 'phone') {
                        sLink = 'tel:' + bs.link;
                    } else if (bs.type === 'email') {
                        sLink = 'mailto:' + bs.link;
                    }
                    // Insert the links
                    var sIcon = '<i class="fa fa-' + bs.icon + ' float-button"> </i>',
                        sButton = '<a id="aa_'+bs.icon+'" href="' + sLink +
                            '" class="contact-button-link cb-ancor ' + bs.class + '" ' +
                            bs.title + bs.extras + '>' +sIcon +'<span id="span_'+
                            bs.icon+'" style="display:none;font-size:13px">'+
                            bs.text+'</span>' +'</a>';
                    oContainer.append(sButton);
                }
            }
            // Make the buttons visible
            setTimeout(function(){
                oContainer.animate({ left : 0 });
            },10);
            // Show/hide buttons
            $('body').on('click', '.show-hide-contact-bar', function(e){
                e.preventDefault();
                e.stopImmediatePropagation();
                $('.show-hide-contact-bar').find('.fa').toggleClass('fa-angle-right fa-angle-left');
                oContainer.find('.cb-ancor').toggleClass('cb-hidden');
            });
        }
    };
    // Slide on scroll effect
    $(function(){
        // Define element to slide
        var el = $("#contact-buttons-bar.slide-on-scroll");
        // Load top default
        el.attr('data-top', el.css('top'));

        // Listen to scroll
        $(window).scroll(function() {
            clearTimeout( $.data( this, "scrollCheck" ) );
            $.data( this, "scrollCheck", setTimeout(function() {
                var nTop = $(window).scrollTop() + parseInt(el.attr('data-top'));
                el.animate({
                    top : nTop
                }, 500);
            }, 250) );
        });

        $("#aa_phone").mouseover(function(){
            $("#span_phone").show();
        });
        $("#aa_phone").mouseleave(function(){
            $("#span_phone").hide();
        });
        $("#aa_envelope").mouseover(function(){
            $("#span_envelope").show();
        });
        $("#aa_envelope").mouseleave(function(){
            $("#span_envelope").hide();
        });
        $("#aa_qq").mouseover(function(){
            $("#span_qq").show();
        });
        $("#aa_qq").mouseleave(function(){
            $("#span_qq").hide();
        });
        $("#aa_weixin").mouseover(function(){
            $("#span_weixin").show();
        });
        $("#aa_weixin").mouseleave(function(){
            $("#span_weixin").hide();
        });
    });

}( jQuery ));
WebFontConfig = {
    google: { families: [ 'Lato:400,700,250:latin' ] }
};
(function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
})();
// Initialize Share-Buttons
$.contactButtons({
    effect  : 'slide-on-scroll',
    buttons : {
        'phone': { class: 'phone', use: true, link: '#contact' },
        'email': { class: 'email', use: true, link: 'yuzhongjiuye@126.com' },
        'weixin': { class: 'weixin', use: true, link: '#contact' },
        'qq':{ class: 'qq', use: true, link: '#contact' },
    }
});