var setREVStartSize = function() {
	var	tpopt = new Object(); 
	tpopt.startwidth = 960;
	tpopt.startheight = 350;
	tpopt.container = jQuery('#rev_slider_1_1');
	tpopt.fullScreen = "on";
	tpopt.forceFullWidth="on";

	tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
};

setREVStartSize();

var revapi1;
$(document).ready(function() {
	if($('#rev_slider_1_1').revolution == undefined){
		revslider_showDoubleJqueryError('#rev_slider_1_1');
	}else{
		if(window.innerWidth >= 768){
		revapi1 = $('#rev_slider_1_1').show().revolution({

			dottedOverlay:"none",
			delay:9000,
			startwidth:960,
			startheight:350,
			hideThumbs:200,

			thumbWidth:100,
			thumbHeight:50,
			thumbAmount:3,
			minHeight:700,

			simplifyAll:"off",						
			navigationType:"none",
			navigationArrows:"solo",
			navigationStyle:"preview1",						
			touchenabled:"on",
			onHoverStop:"off",						
			nextSlideOnWindowFocus:"off",

			swipe_threshold: 75,
			swipe_min_touches: 1,
			drag_block_vertical: false,
				
				
			keyboardNavigation:"off",

			navigationHAlign:"center",
			navigationVAlign:"bottom",
			navigationHOffset:0,
			navigationVOffset:20,

			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:20,
			soloArrowLeftVOffset:0,

			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:20,
			soloArrowRightVOffset:0,

			shadow:0,
			fullWidth:"off",
			fullScreen:"on",

			spinner:"spinner2",
				
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,

			shuffle:"off",


			forceFullWidth:"on",						
			fullScreenAlignForce:"off",						
			minFullScreenHeight:"",						

			hideThumbsOnMobile:"off",
			hideNavDelayOnMobile:1500,
			hideBulletsOnMobile:"off",
			hideArrowsOnMobile:"off",
			hideThumbsUnderResolution:0,

			fullScreenOffsetContainer: "",
			fullScreenOffset: "",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			startWithSlide:0,
		});
	}
	}					
});

/*
 * Колонки одинаковой высоты
 */
function setEqualHeight(columns){
    var tallestcolumn = 0;
    columns.each(
        function(){
            currentHeight = $(this).height();
            if(currentHeight > tallestcolumn){
                tallestcolumn = currentHeight;
            }
        }
    );
    columns.height(tallestcolumn);
}

/*
 * Блок Наши Работы
 */
$(window).load(function(){
	var e=$(".tx-gallery-container").isotope({
		itemSelector:".tx-gallery-container li",layoutMode:"fitRows"
	});
	$(".tx-gallery-filters").on("click","li",function(){
		var t=$(this).attr("data-filter");
		e.isotope({filter:t});
		$(this).siblings().removeClass("active");
		$(this).addClass("active")
	});
	$(".tx-gallery-sort").on("click","li",function(){
		var t=$(this).attr("data-sort");
		e.isotope({sortBy:t});
		$(this).siblings().removeClass("active");
		$(this).addClass("active")
	});
});

/*
 * Фиксированное меню
 */
 $(document).ready(function(){
    var $menu = $(".j-menu");

    $(window).scroll(function(){
        if ( $(this).scrollTop() > 50 && $menu.hasClass("b-menu-default") ){
            $menu.fadeOut('fast',function(){
                $(this).removeClass("b-menu-default")
                       .addClass("fixed transbg")
                       .fadeIn('fast');
            });
        } else if($(this).scrollTop() <= 50 && $menu.hasClass("fixed")) {
            $menu.fadeOut('fast',function(){
                $(this).removeClass("fixed transbg")
                       .addClass("b-menu-default")
                       .fadeIn('fast');
            });
        }
    });
});