/* rev slider custom js works */
(function ( $ ) {
	
	"use strict";
	
	var tpj=jQuery;
			
	var revapi001, revapi002, revapi003, revapi004, revapi005, revapi006, revapi007, revapi008;
	tpj(document).ready(function() {
		
		if(tpj("#rev_slider_001").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_001");
		}else{
			revapi001 = tpj("#rev_slider_001").show().revolution({
				sliderType:"standard",
				jsFileLocation:"revolution/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:5500,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
					onHoverStop:"off",
					bullets: {
						enable:false,
						hide_onmobile:false,
						style:"hermes",
						hide_onleave:false,
						direction:"horizontal",
						h_align:"center",
						v_align:"bottom",
						h_offset:0,
						v_offset:20,
						space:5,
						tmp:''
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[868,768,960,720],
				lazyType:"none",
				shadow:0,
				spinner:"off",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"off",
				autoHeight:"off",
				fullScreenAutoWidth:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: "",
				fullScreenOffset: "",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
		
		if(tpj("#rev_slider_002").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_002");
		}else{
			revapi002 = tpj("#rev_slider_002").show().revolution({
				sliderType:"standard",
				jsFileLocation:"revolution/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[868,768,960,720],
				lazyType:"none",
				parallax: {
					type:"mouse",
					origo:"slidercenter",
					speed:2000,
					levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
					type:"mouse",
					disable_onmobile:"on"
				},
				shadow:0,
				spinner:"off",
				stopLoop:"on",
				stopAfterLoops:0,
				stopAtSlide:1,
				shuffle:"off",
				autoHeight:"off",
				fullScreenAutoWidth:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: "",
				fullScreenOffset: "",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
		
		if(tpj("#rev_slider_003").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_003");
		}else{
			revapi003 = tpj("#rev_slider_003").show().revolution({
				sliderType:"standard",
				jsFileLocation:"revolution/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:9000,
				particles: {startSlide: "first", endSlide: "last", zIndex: "1",
					particles: {
						number: {value: 60}, color: {value: "#ffffff"},
						shape: {
							type: "circle", stroke: {width: 0, color: "#ffffff", opacity: 1},
							image: {src: ""}
						},
						opacity: {value: 0.5, random: true, min: 0.1, anim: {enable: false, speed: 3, opacity_min: 0, sync: false}},
						size: {value: 3, random: true, min: 0.5, anim: {enable: false, speed: 40, size_min: 1, sync: false}},
						line_linked: {enable: false, distance: 150, color: "#ffffff", opacity: 0.4, width: 1},
						move: {enable: true, speed: 1, direction: "top", random: true, min_speed: 2, straight: false, out_mode: "out"}},
					interactivity: {
						events: {onhover: {enable: true, mode: "bubble"}, onclick: {enable: false, mode: "repulse"}},
						modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 400, size: 1, opacity: 1}, repulse: {distance: 200}}
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[868,768,960,720],
				lazyType:"none",
				parallax: {
					type:"mouse",
					origo:"slidercenter",
					speed:400,
					speedbg:0,
					speedls:1000,
					levels:[2,4,6,8,10,12,14,16,-10,-15,-20,20,30,40,51,55],
				},
				shadow:0,
				spinner:"off",
				stopLoop:"on",
				stopAfterLoops:0,
				stopAtSlide:1,
				shuffle:"off",
				autoHeight:"off",
				fullScreenAutoWidth:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: "",
				fullScreenOffset: "",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}; /* END OF ON LOAD FUNCTION */

		if(tpj("#rev_slider_004").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_004");
		}else{
			revapi004 = tpj("#rev_slider_004").show().revolution({
				sliderType:"standard",
				jsFileLocation:"revolution/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					onHoverStop:"off",
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[600,500,400,270],
				lazyType:"none",
				parallax: {
					type:"scroll",
					origo:"slidercenter",
					speed:2000,
					levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
					type:"scroll",
				},
				shadow:0,
				spinner:"off",
				stopLoop:"on",
				stopAfterLoops:0,
				stopAtSlide:1,
				shuffle:"off",
				autoHeight:"off",
				fullScreenAutoWidth:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: "",
				fullScreenOffset: "",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
		
		if(tpj("#rev_slider_005").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_005");
		}else{
			revapi005 = tpj("#rev_slider_005").show().revolution({
				sliderType:"standard",
				jsFileLocation:"revolution/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"on",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
					,
					arrows: {
						style:"uranus",
						enable:true,
						hide_onmobile:false,
						hide_under:0,
						hide_onleave:false,
						tmp:'',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:20,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:20,
							v_offset:0
						}
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[868,768,960,600],
				lazyType:"none",
				shadow:0,
				spinner:"off",
				stopLoop:"on",
				stopAfterLoops:0,
				stopAtSlide:1,
				shuffle:"off",
				autoHeight:"off",
				fullScreenAutoWidth:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: "",
				fullScreenOffset: "",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
		
		if(tpj("#rev_slider_006").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_006");
		}else{
			revapi006 = tpj("#rev_slider_006").show().revolution({
				sliderType:"standard",
				jsFileLocation:"//server.local/revslider/wp-content/plugins/revslider/public/assets/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:9000,
							particles: {startSlide: "2", endSlide: "2", zIndex: "1",
								particles: {
									number: {value: 80}, color: {value: "#ffffff"},
									shape: {
										type: "circle", stroke: {width: 0, color: "#ffffff", opacity: 1},
										image: {src: ""}
									},
									opacity: {value: 0.5, random: true, min: 0.25, anim: {enable: false, speed: 3, opacity_min: 0, sync: false}},
									size: {value: 2, random: true, min: 0.5, anim: {enable: false, speed: 40, size_min: 1, sync: false}},
									line_linked: {enable: false, distance: 150, color: "#ffffff", opacity: 0.4, width: 1},
									move: {enable: true, speed: 1, direction: "none", random: true, min_speed: 1, straight: false, out_mode: "out"}},
								interactivity: {
									events: {onhover: {enable: false, mode: "repulse"}, onclick: {enable: false, mode: "repulse"}},
									modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 400, size: 40, opacity: 0.4}, repulse: {distance: 200}}
								}
							},
				responsiveLevels:[1240,1240,778,480],
				visibilityLevels:[1240,1240,778,480],
				gridwidth:[1200,1200,1200,480],
				gridheight:[800,800,800,700],
				lazyType:"none",
				parallax: {
					type:"mouse+scroll",
					origo:"slidercenter",
					speed:400,
					speedbg:0,
					speedls:0,
					levels:[1,2,3,4,5,6,7,8,12,16,47,48,49,50,51,55],
				},
				shadow:0,
				spinner:"off",
				stopLoop:"on",
				stopAfterLoops:0,
				stopAtSlide:1,
				shuffle:"off",
				autoHeight:"off",
				fullScreenAutoWidth:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: "",
				fullScreenOffset: "",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
			
		}
		
		if(tpj("#rev_slider_007").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_007");
		}else{
			revapi007 = tpj("#rev_slider_007").show().revolution({
				sliderType:"standard",
				jsFileLocation:"revolution/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					mouseScrollReverse:"default",
					onHoverStop:"off",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[868,768,960,720],
				lazyType:"none",
				parallax: {
					type:"mouse",
					origo:"slidercenter",
					speed:2000,
					levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
					type:"mouse",
					disable_onmobile:"on"
				},
				shadow:0,
				spinner:"off",
				stopLoop:"on",
				stopAfterLoops:0,
				stopAtSlide:1,
				shuffle:"off",
				autoHeight:"off",
				fullScreenAutoWidth:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: ".header",
				fullScreenOffset: "",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}
		
		if(tpj("#rev_slider_008").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_008");
		}else{
			revapi008 = tpj("#rev_slider_008").show().revolution({
				sliderType:"carousel",
				jsFileLocation:"revolution/js/",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:9000,
				carousel: {
					horizontal_align: "center",
					vertical_align: "center",
					fadeout: "off",
					maxVisibleItems: 3,
					infinity: "on",
					space: 0,
					stretch: "on"
				},
				viewPort: {
					enable:true,
					outof:"pause",
					visible_area:"80%",
					presize:false
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[600,600,500,400],
				lazyType:"none",
				parallax: {
					type:"mouse",
					origo:"slidercenter",
					speed:2000,
					levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
					type:"mouse",
				},
				shadow:0,
				spinner:"off",
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				shuffle:"off",
				autoHeight:"off",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					nextSlideOnWindowFocus:"off",
					disableFocusListener:false,
				}
			});
		}

		
	});	/*ready*/		
	 
}( jQuery ));