 
/*!
 * pagepiling.js 1.5.3
 *
 * https://github.com/alvarotrigo/pagePiling.js
 * @license MIT licensed
 *
 * Copyright (C) 2016 alvarotrigo.com - A project by Alvaro Trigo
 */
!function($,e,n,t){"use strict";$.fn.pagepiling=function(o){function i(e){e.addClass("pp-table").wrapInner('<div class="pp-tableCell" style="height:100%" />')}function a(e){var n=$(".pp-section.active").index(".pp-section"),t=e.index(".pp-section");return n>t?"up":"down"}function s(e,n){var t={destination:e,animated:n,activeSection:$(".pp-section.active"),anchorLink:e.data("anchor"),sectionIndex:e.index(".pp-section"),toMove:e,yMovement:a(e),leavingSection:$(".pp-section.active").index(".pp-section")+1};if(!t.activeSection.is(e)){"undefined"==typeof t.animated&&(t.animated=!0),"undefined"!=typeof t.anchorLink&&f(t.anchorLink,t.sectionIndex),t.destination.addClass("active").siblings().removeClass("active"),t.sectionsToMove=l(t),"up"===t.yMovement?(t.translate3d=W(),t.scrolling="100%",J.css3||t.sectionsToMove.each(function(e){e!=t.activeSection.index(".pp-section")&&$(this).css(d(t.scrolling))}),t.animateSection=t.activeSection):(t.translate3d="translate3d(0px, 0px, 0px)",t.scrolling="0",t.animateSection=e),$.isFunction(J.onLeave)&&J.onLeave.call(this,t.leavingSection,t.sectionIndex-1,t.yMovement),c(t),A(t.anchorLink),z(t.anchorLink,t.sectionIndex),F=t.anchorLink;var o=(new Date).getTime();Q=o}}function c(e){J.css3?(w(e.animateSection,e.translate3d,e.animated),e.sectionsToMove.each(function(){w($(this),e.translate3d,e.animated)}),setTimeout(function(){r(e)},J.scrollingSpeed)):(e.scrollOptions=d(e.scrolling),e.animated?e.animateSection.animate(e.scrollOptions,J.scrollingSpeed,J.easing,function(){p(e),r(e)}):(e.animateSection.css(d(e.scrolling)),setTimeout(function(){p(e),r(e)},400)))}function r(e){$.isFunction(J.afterLoad)&&J.afterLoad.call(this,e.anchorLink,e.sectionIndex+1)}function l(e){var n;return n="down"===e.yMovement?$(".pp-section").map(function(n){return n<e.destination.index(".pp-section")?$(this):void 0}):$(".pp-section").map(function(n){return n>e.destination.index(".pp-section")?$(this):void 0})}function p(e){"down"===e.yMovement&&e.sectionsToMove.each(function(n){$(this).css(d(e.scrolling))})}function d(e){return"vertical"===J.direction?{top:e}:{left:e}}function u(e,n){J.css3?w(e,W(),!1):e.css(d(n))}function f(e,n){J.anchors.length?(location.hash=e,v(location.hash)):v(String(n))}function v(e){e=e.replace("#",""),$("body")[0].className=$("body")[0].className.replace(/\b\s?pp-viewing-[^\s]+\b/g,""),$("body").addClass("pp-viewing-"+e)}function h(){var t=n.location.hash.replace("#",""),o=t,i=$(e).find('.pp-section[data-anchor="'+o+'"]');i.length>0&&s(i,J.animateAnchor)}function m(){var e=(new Date).getTime();return e-Q<G+J.scrollingSpeed}function g(){var t=n.location.hash.replace("#","").split("/"),o=t[0];if(o.length&&o&&o!==F){var i;i=isNaN(o)?$(e).find('[data-anchor="'+o+'"]'):$(".pp-section").eq(o-1),s(i)}}function S(e){return{"-webkit-transform":e,"-moz-transform":e,"-ms-transform":e,transform:e}}function w(e,n,t){e.toggleClass("pp-easing",t),e.css(S(n))}function y(e){var t=(new Date).getTime();e=e||n.event;var o=e.wheelDelta||-e.deltaY||-e.detail,i=Math.max(-1,Math.min(1,o)),a="undefined"!=typeof e.wheelDeltaX||"undefined"!=typeof e.deltaX,s=Math.abs(e.wheelDeltaX)<Math.abs(e.wheelDelta)||Math.abs(e.deltaX)<Math.abs(e.deltaY)||!a;V.length>149&&V.shift(),V.push(Math.abs(o));var c=t-ee;if(ee=t,c>200&&(V=[]),!m()){var r=$(".pp-section.active"),l=T(r),p=b(V,10),d=b(V,70),u=p>=d;return u&&s&&(0>i?x("down",l):i>0&&x("up",l)),!1}}function b(e,n){for(var t=0,o=e.slice(Math.max(e.length-n,1)),i=0;i<o.length;i++)t+=o[i];return Math.ceil(t/n)}function x(e,n){var t,o;if("down"==e?(t="bottom",o=U.moveSectionDown):(t="top",o=U.moveSectionUp),n.length>0){if(!M(t,n))return!0;o()}else o()}function M(e,n){return"top"===e?!n.scrollTop():"bottom"===e?n.scrollTop()+1+n.innerHeight()>=n[0].scrollHeight:void 0}function T(e){return e.filter(".pp-scrollable")}function C(){B.get(0).addEventListener?(B.get(0).removeEventListener("mousewheel",y,!1),B.get(0).removeEventListener("wheel",y,!1)):B.get(0).detachEvent("onmousewheel",y)}function E(){B.get(0).addEventListener?(B.get(0).addEventListener("mousewheel",y,!1),B.get(0).addEventListener("wheel",y,!1)):B.get(0).attachEvent("onmousewheel",y)}function k(){if(R){var e=D();B.off("touchstart "+e.down).on("touchstart "+e.down,P),B.off("touchmove "+e.move).on("touchmove "+e.move,Y)}}function L(){if(R){var e=D();B.off("touchstart "+e.down),B.off("touchmove "+e.move)}}function D(){var e;return e=n.PointerEvent?{down:"pointerdown",move:"pointermove",up:"pointerup"}:{down:"MSPointerDown",move:"MSPointerMove",up:"MSPointerUp"}}function I(e){var n=new Array;return n.y="undefined"!=typeof e.pageY&&(e.pageY||e.pageX)?e.pageY:e.touches[0].pageY,n.x="undefined"!=typeof e.pageX&&(e.pageY||e.pageX)?e.pageX:e.touches[0].pageX,n}function X(e){return"undefined"==typeof e.pointerType||"mouse"!=e.pointerType}function P(e){var n=e.originalEvent;if(X(n)){var t=I(n);j=t.y,H=t.x}}function Y(e){var n=e.originalEvent;if(!N(e.target)&&X(n)){var t=$(".pp-section.active"),o=T(t);if(o.length||e.preventDefault(),!m()){var i=I(n);_=i.y,K=i.x,"horizontal"===J.direction&&Math.abs(H-K)>Math.abs(j-_)?Math.abs(H-K)>B.width()/100*J.touchSensitivity&&(H>K?x("down",o):K>H&&x("up",o)):Math.abs(j-_)>B.height()/100*J.touchSensitivity&&(j>_?x("down",o):_>j&&x("up",o))}}}function N(e,n){n=n||0;var t=$(e).parent();return n<J.normalScrollElementTouchThreshold&&t.is(J.normalScrollElements)?!0:n==J.normalScrollElementTouchThreshold?!1:N(t,++n)}function q(){var e=$("#pp-nav");e.css("color",J.navigation.textColor),e.addClass(J.navigation.position);for(var n=0;n<$(".pp-section").length;n++){var t="";if(J.anchors.length&&(t=J.anchors[n]),"undefined"!==J.navigation.tooltips){var o=J.navigation.tooltips[n];"undefined"==typeof o&&(o="")}e.find("ul").append('<li data-tooltip="'+o+'"><a href="#'+t+'"><span></span></a></li>')}e.find("span").css("border-color",J.navigation.bulletsColor)}function z(e,n){J.navigation&&($("#pp-nav").find(".active").removeClass("active"),e?$("#pp-nav").find('a[href="#'+e+'"]').addClass("active"):$("#pp-nav").find("li").eq(n).find("a").addClass("active"))}function A(e){J.menu&&($(J.menu).find(".active").removeClass("active"),$(J.menu).find('[data-menuanchor="'+e+'"]').addClass("active"))}function O(){var o=e.createElement("p"),i,a={webkitTransform:"-webkit-transform",OTransform:"-o-transform",msTransform:"-ms-transform",MozTransform:"-moz-transform",transform:"transform"};e.body.insertBefore(o,null);for(var s in a)o.style[s]!==t&&(o.style[s]="translate3d(1px,1px,1px)",i=n.getComputedStyle(o).getPropertyValue(a[s]));return e.body.removeChild(o),i!==t&&i.length>0&&"none"!==i}function W(){return"vertical"!==J.direction?"translate3d(-100%, 0px, 0px)":"translate3d(0px, -100%, 0px)"}var U=$.fn.pagepiling,B=$(this),F,Q=0,R="ontouchstart"in n||navigator.msMaxTouchPoints>0||navigator.maxTouchPoints,j=0,H=0,_=0,K=0,V=[],G=600,J=$.extend(!0,{direction:"vertical",menu:null,verticalCentered:!0,sectionsColor:[],anchors:[],scrollingSpeed:0,easing:"easeInQuart",loopBottom:!0,loopTop:!1,css3:!1,navigation:{textColor:"#000",bulletsColor:"#000",position:"right",tooltips:[]},normalScrollElements:".dialog , .dialog__content",normalScrollElementTouchThreshold:5,touchSensitivity:5,keyboardScrolling:!0,sectionSelector:".section",animateAnchor:!1,afterLoad:null,onLeave:null,afterRender:null},o);$.extend($.easing,{easeInQuart:function(e,n,t,o,i){return o*(n/=i)*n*n*n+t}}),U.setScrollingSpeed=function(e){J.scrollingSpeed=e},U.setMouseWheelScrolling=function(e){e?E():C()},U.setAllowScrolling=function(e){e?(U.setMouseWheelScrolling(!0),k()):(U.setMouseWheelScrolling(!1),L())},U.setKeyboardScrolling=function(e){J.keyboardScrolling=e},U.moveSectionUp=function(){var e=$(".pp-section.active").prev(".pp-section");!e.length&&J.loopTop&&(e=$(".pp-section").last()),e.length&&s(e)},U.moveSectionDown=function(){var e=$(".pp-section.active").next(".pp-section");!e.length&&J.loopBottom&&(e=$(".pp-section").first()),e.length&&s(e)},U.moveTo=function(n){var t="";t=isNaN(n)?$(e).find('[data-anchor="'+n+'"]'):$(".pp-section").eq(n-1),t.length>0&&s(t)},$(J.sectionSelector).each(function(){$(this).addClass("pp-section")}),J.css3&&(J.css3=O()),$(B).css({overflow:"hidden","-ms-touch-action":"none","touch-action":"none"}),U.setAllowScrolling(!0),$.isEmptyObject(J.navigation)||q();var Z=$(".pp-section").length;$(".pp-section").each(function(e){$(this).data("data-index",e),$(this).css("z-index",Z),e||0!==$(".pp-section.active").length||$(this).addClass("active"),"undefined"!=typeof J.anchors[e]&&$(this).attr("data-anchor",J.anchors[e]),"undefined"!=typeof J.sectionsColor[e]&&$(this).css("background-color",J.sectionsColor[e]),J.verticalCentered&&!$(this).hasClass("pp-scrollable")&&i($(this)),Z+=1}).promise().done(function(){J.navigation&&($("#pp-nav").css("margin-top","-"+$("#pp-nav").height()/2+"px"),$("#pp-nav").find("li").eq($(".pp-section.active").index(".pp-section")).find("a").addClass("active")),$(n).on("load",function(){h()}),$.isFunction(J.afterRender)&&J.afterRender.call(this)}),$(n).on("hashchange",g),$(e).keydown(function(e){if(J.keyboardScrolling&&!m())switch(e.which){case 38:case 33:U.moveSectionUp();break;case 40:case 34:U.moveSectionDown();break;case 36:U.moveTo(1);break;case 35:U.moveTo($(".pp-section").length);break;default:return}}),J.normalScrollElements&&($(e).on("mouseenter",J.normalScrollElements,function(){U.setMouseWheelScrolling(!1)}),$(e).on("mouseleave",J.normalScrollElements,function(){U.setMouseWheelScrolling(!0)}));var ee=(new Date).getTime();$(e).on("click touchstart","#pp-nav a",function(e){e.preventDefault();var n=$(this).parent().index();s($(".pp-section").eq(n))}),$(e).on({mouseenter:function(){var e=$(this).data("tooltip");$('<div class="pp-tooltip '+J.navigation.position+'">'+e+"</div>").hide().appendTo($(this)).fadeIn(200)},mouseleave:function(){$(this).find(".pp-tooltip").fadeOut(200,function(){$(this).remove()})}},"#pp-nav li")}}(jQuery,document,window);