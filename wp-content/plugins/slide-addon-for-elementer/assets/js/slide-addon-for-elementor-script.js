!function(t){"use strict";var e=function(t,e){e(".hero-section").each(function(){var t,a=0,i=0,n=0,s=0,h=e("#wpadminbar"),d=e("#top-bar"),o=e(this),r=e(window).height(),l=e("header").height(),c=o.find(".vegas-content"),p=c.height(),g=Number(o.data("delay")),f=o.data("content");t=o.data("height"),d.length&&(i=d.height()),h.length&&(a=h.height()),s="full-height"==t?r:t,e("body").hasClass("header.header-absolute")?(o.css({height:s-a+"px"}),n=(s-p)/2+i+f,c.css("padding-top",n+"px")):"full-height"==t?(o.css({height:s+"px"}),n=(s-p)/2+f,c.css("padding-top",n+"px")):(s=s-l-i-a,o.css({height:s+"px"}),n=(s-p)/2+f,c.css("padding-top",n+"px")),e(window).on("load resize",function(){var t,a=0,i=0,n=0,s=0,h=e("#wpadminbar"),d=e("#top-bar"),r=e(window).height(),l=e("#header").height(),c=o.find(".vegas-content"),p=c.height(),g=o.data("content");t=o.data("height"),d.length&&(i=d.height()),h.length&&(a=h.height()),s="full-height"==t?r:t,e("body").hasClass("header.header-absolute")?(o.css({height:s-a+"px"}),n=(s-p)/2+i+g,c.css("padding-top",n+"px")):"full-height"==t?(o.css({height:s+"px"}),n=(s-p)/2+g,c.css("padding-top",n+"px")):(s=s-l-i-a,o.css({height:s+"px"}),n=(s-p)/2+g,c.css("padding-top",n+"px"))}),e().vegas&&e(".hero-section").each(function(){for(var t=e(this),a=t.data("count"),i=(a=parseInt(a,10),t.data("effect")),n=t.data("image"),s=t.data("overlay"),h=t.data("poverlay"),d=0,o=[],r=n.split("|");d<a;)o.push({src:r[d]}),d++;t.vegas({slides:o,overlay:!0,transition:i,delay:g});var l=e("<div />",{class:"overlay",style:"background:"+s});e(this).append(l).find(".vegas-overlay").addClass(h)}),e(".slide-fancy-text").is(".scroll")&&e(".slide-fancy-text.scroll").each(function(){var t=e(this),a=1,i=t.children(".heading").height(),n=t.children().length,s=t.children(".heading:nth-child(1)");t.height(i),t.siblings(".prefix-text, .suffix-text").height(i),setInterval(function(){var t=a*-i;s.css("margin-top",t+"px"),a===n?(s.css("margin-top","0px"),a=1):a++},g)}),e(".slide-fancy-text").is(".typed")&&e().typed&&e(".slide-fancy-text.typed").each(function(){var t=e(this),a=t.data("fancy").split(",");t.find(".text").typed({strings:a,typeSpeed:40,loop:!0,backDelay:g})})}),e(".hero-section").each(function(){e(this).find(".scroll-target").on("click",function(){var t=e(this).attr("href").split("#")[1];if(t&&e("#"+t).length>0){var a=0;e("body").hasClass("header-sticky")&&(a=e("#site-header").height());var i=e("#"+t).offset().top-a;if(e("body").hasClass("admin-bar")){var n=e("#wpadminbar").height();i=e("#"+t).offset().top-a-n}e("html,body").animate({scrollTop:i},1e3,"easeInOutExpo")}return!1})})},a=function(){t(".flexslider").each(function(){var e=t(this),a=0,i=0,n=t("#wpadminbar"),s=t("#top-bar"),h=t("header").height(),d=e.data("height"),o=e.find(".flex_caption"),r=o.height();e.find(".item-slide").height(d),s.length&&(a=s.height()),n.length&&n.height(),0==r&&(r=.5*d),e.hasClass("header-absolute")?(i=(d+a+h-r)/2,o.css("padding-top",i+"px")):(i=(d-r)/2,o.css("padding-top",i+"px"));var l=t(this).data("animation_images"),c=t(this).data("autoplay"),p=t(this).data("slideshowspeed"),g=t(this).data("animationspeed"),f=t(this).data("controlnav"),u=t(this).data("directionnav"),x=t(this).data("prevtext"),v=t(this).data("nexttext"),y=t(this).data("infinite_loop");t(this).flexslider({animation:l,slideshow:c,slideshowSpeed:p,animationSpeed:g,animationLoop:y,controlNav:f,directionNav:u,prevText:'<i class="'+x+'" aria-hidden="true"></i>',nextText:'<i class="'+v+'" aria-hidden="true"></i>',useCCS:!1})})};t(window).on("elementor/frontend/init",function(){elementorFrontend.hooks.addAction("frontend/element_ready/vegas-slider.default",e),elementorFrontend.hooks.addAction("frontend/element_ready/flex-slider.default",a)}),t(window).on("load resize",function(){a()})}(jQuery);