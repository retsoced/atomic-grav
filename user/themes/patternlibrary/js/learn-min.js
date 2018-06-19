function getScrollBarWidth(){var e=document.createElement("p");e.style.width="100%",e.style.height="200px";var t=document.createElement("div");t.style.position="absolute",t.style.top="0px",t.style.left="0px",t.style.visibility="hidden",t.style.width="200px",t.style.height="150px",t.style.overflow="hidden",t.appendChild(e),document.body.appendChild(t);var r=e.offsetWidth;t.style.overflow="scroll";var a=e.offsetWidth;return r==a&&(a=t.clientWidth),document.body.removeChild(t),r-a}function setMenuHeight(){$("#sidebar .highlightable").height($("#sidebar").innerHeight()-$("#header-wrapper").height()-40)}function fallbackMessage(e){var t="",r="cut"===e?"X":"C";return t=/iPhone|iPad/i.test(navigator.userAgent)?"No support :(":/Mac/i.test(navigator.userAgent)?"Press ⌘-"+r+" to "+e:"Press Ctrl-"+r+" to "+e}$(window).resize(function(){setMenuHeight()}),function($,e){var t=function(e,t,r){var a;return function i(){function n(){r||e.apply(o,s),a=null}var o=this,s=arguments;a?clearTimeout(a):r&&e.apply(o,s),a=setTimeout(n,t||100)}};jQuery.fn[e]=function(r){return r?this.bind("resize",t(r)):this.trigger(e)}}(jQuery,"smartresize"),jQuery(document).ready(function(){var e=searchStatus="open";setMenuHeight(),jQuery("#overlay").on("click",function(){return jQuery(document.body).toggleClass("sidebar-hidden"),e=jQuery(document.body).hasClass("sidebar-hidden")?"closed":"open",!1}),jQuery(".scrollbar-inner").scrollbar(),jQuery("[data-sidebar-toggle]").on("click",function(){return jQuery(document.body).toggleClass("sidebar-hidden"),e=jQuery(document.body).hasClass("sidebar-hidden")?"closed":"open",!1}),jQuery("[data-clear-history-toggle]").on("click",function(){return sessionStorage.clear(),location.reload(),!1}),jQuery("[data-search-toggle]").on("click",function(){return"closed"==e?(jQuery("[data-sidebar-toggle]").trigger("click"),jQuery(document.body).removeClass("searchbox-hidden"),searchStatus="open",!1):(jQuery(document.body).toggleClass("searchbox-hidden"),searchStatus=jQuery(document.body).hasClass("searchbox-hidden")?"closed":"open",!1)});var t;jQuery("[data-search-input]").on("input",function(){var e=jQuery(this),r=e.val(),a=jQuery("[data-nav-id]");if(a.removeClass("search-match"),!r.length)return $("ul.topics").removeClass("searched"),a.css("display","block"),sessionStorage.removeItem("search-value"),void $(".highlightable").unhighlight({element:"mark"});sessionStorage.setItem("search-value",r),$(".highlightable").unhighlight({element:"mark"}).highlight(r,{element:"mark"}),t&&t.abort&&t.abort(),t=jQuery.ajax({url:e.data("search-input")+":"+r}).done(function(e){e&&e.results&&e.results.length&&(a.css("display","none"),$("ul.topics").addClass("searched"),e.results.forEach(function(e){jQuery('[data-nav-id="'+e+'"]').css("display","block").addClass("search-match"),jQuery('[data-nav-id="'+e+'"]').parents("li").css("display","block")}))}),jQuery("[data-search-clear]").on("click",function(){jQuery("[data-search-input]").val("").trigger("input"),sessionStorage.removeItem("search-input"),$(".highlightable").unhighlight({element:"mark"})})}),sessionStorage.getItem("search-value")&&(jQuery(document.body).removeClass("searchbox-hidden"),jQuery("[data-search-input]").val(sessionStorage.getItem("search-value")),jQuery("[data-search-input]").trigger("input"));var r=!1;$("code").each(function(){var e=$(this),t=e.text();if(t.length>5){if(!r){var t,a=new Clipboard(".copy-to-clipboard",{text:function(e){return t=$(e).prev("code").text(),t.replace(/^\$\s/gm,"")}}),i;a.on("success",function(e){e.clearSelection(),i="PRE"==$(e.trigger).parent().prop("tagName"),$(e.trigger).attr("aria-label","Copied to clipboard!").addClass("tooltipped tooltipped-"+(i?"w":"s"))}),a.on("error",function(e){i="PRE"==$(e.trigger).parent().prop("tagName"),$(e.trigger).attr("aria-label",fallbackMessage(e.action)).addClass("tooltipped tooltipped-"+(i?"w":"s")),$(document).one("copy",function(){$(e.trigger).attr("aria-label","Copied to clipboard!").addClass("tooltipped tooltipped-"+(i?"w":"s"))})}),r=!0}e.after('<span class="copy-to-clipboard" title="Copy to clipboard" />'),e.next(".copy-to-clipboard").on("mouseleave",function(){$(this).attr("aria-label",null).removeClass("tooltipped tooltipped-s tooltipped-w")})}}),jQuery(function(){jQuery(".nav-prev").click(function(){location.href=jQuery(this).attr("href")}),jQuery(".nav-next").click(function(){location.href=jQuery(this).attr("href")})}),jQuery(document).keydown(function(e){"37"==e.which&&jQuery(".nav.nav-prev").click(),"39"==e.which&&jQuery(".nav.nav-next").click()})}),jQuery(window).on("load",function(){function e(){parseInt(jQuery("#body-inner").height())+83>=jQuery("#body").height()?jQuery(".nav.nav-next").css({"margin-right":getScrollBarWidth()}):jQuery(".nav.nav-next").css({"margin-right":0})}e(),jQuery(window).smartresize(function(){e()}),sessionStorage.setItem(jQuery("body").data("url"),1);for(var t in sessionStorage)1==sessionStorage.getItem(t)&&jQuery('[data-nav-id="'+t+'"]').addClass("visited");$(".highlightable").highlight(sessionStorage.getItem("search-value"),{element:"mark"})}),$(function(){$('a[rel="lightbox"]').featherlight({root:"section#body"})}),jQuery.extend({highlight:function(e,t,r,a){if(3===e.nodeType){var i=e.data.match(t);if(i){var n=document.createElement(r||"span");n.className=a||"highlight";var o=e.splitText(i.index);o.splitText(i[0].length);var s=o.cloneNode(!0);return n.appendChild(s),o.parentNode.replaceChild(n,o),1}}else if(1===e.nodeType&&e.childNodes&&!/(script|style)/i.test(e.tagName)&&(e.tagName!==r.toUpperCase()||e.className!==a))for(var l=0;l<e.childNodes.length;l++)l+=jQuery.highlight(e.childNodes[l],t,r,a);return 0}}),jQuery.fn.unhighlight=function(e){var t={className:"highlight",element:"span"};return jQuery.extend(t,e),this.find(t.element+"."+t.className).each(function(){var e=this.parentNode;e.replaceChild(this.firstChild,this),e.normalize()}).end()},jQuery.fn.highlight=function(e,t){var r={className:"highlight",element:"span",caseSensitive:!1,wordsOnly:!1};if(jQuery.extend(r,t),e){if(e.constructor===String&&(e=[e]),e=jQuery.grep(e,function(e,t){return""!=e}),e=jQuery.map(e,function(e,t){return e.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&")}),0==e.length)return this;var a=r.caseSensitive?"":"i",i="("+e.join("|")+")";r.wordsOnly&&(i="\\b"+i+"\\b");var n=new RegExp(i,a);return this.each(function(){jQuery.highlight(this,n,r.element,r.className)})}},$(document).ready(function(){var e=$(".topbar").offset().top,t=function(){$(window).scrollTop()>e?$(".nav").addClass("sticky"):$(".nav").removeClass("sticky")};t(),$(window).scroll(function(){t()})});