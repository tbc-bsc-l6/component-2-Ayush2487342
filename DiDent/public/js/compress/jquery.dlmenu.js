!function(l,i){"use strict";var e=i.Modernizr,t=l("body");l.DLMenu=function(n,i){this.$el=l(i),this._init(n)},l.DLMenu.defaults={animationClasses:{classin:"dl-animate-in-1",classout:"dl-animate-out-1"},onLevelClick:function(n,i){return!1},onLinkClick:function(n,i){return!1}},l.DLMenu.prototype={_init:function(n){this.options=l.extend(!0,{},l.DLMenu.defaults,n),this._config();this.animEndEventName={WebkitAnimation:"webkitAnimationEnd",OAnimation:"oAnimationEnd",msAnimation:"MSAnimationEnd",animation:"animationend"}[e.prefixed("animation")]+".dlmenu",this.transEndEventName={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",msTransition:"MSTransitionEnd",transition:"transitionend"}[e.prefixed("transition")]+".dlmenu",this.supportAnimations=e.cssanimations,this.supportTransitions=e.csstransitions,this._initEvents()},_config:function(){this.open=!1,this.$trigger=this.$el.children(".dl-trigger"),this.$menu=this.$el.children("ul.dl-menu"),this.$menuitems=this.$menu.find("li:not(.dl-back)"),this.$el.find("ul.dl-submenu").prepend('<li class="dl-back"><a href="#">Back</a></li>'),this.$back=this.$menu.find("li.dl-back")},_initEvents:function(){var a=this;this.$trigger.on("click.dlmenu",function(){return a.open?a._closeMenu():a._openMenu(),!1}),this.$menuitems.on("click.dlmenu",function(n){n.stopPropagation();var i=l(this),e=i.children("ul.dl-submenu");if(0<e.length){var t=e.clone().css("opacity",0).insertAfter(a.$menu),s=function(){a.$menu.off(a.animEndEventName).removeClass(a.options.animationClasses.classout).addClass("dl-subview"),i.addClass("dl-subviewopen").parents(".dl-subviewopen:first").removeClass("dl-subviewopen").addClass("dl-subview"),t.remove()};return setTimeout(function(){t.addClass(a.options.animationClasses.classin),a.$menu.addClass(a.options.animationClasses.classout),a.supportAnimations?a.$menu.on(a.animEndEventName,s):s.call(),a.options.onLevelClick(i,i.children("a:first").text())}),!1}a.options.onLinkClick(i,n)}),this.$back.on("click.dlmenu",function(n){function i(){a.$menu.off(a.animEndEventName).removeClass(a.options.animationClasses.classin),o.remove()}var e=l(this),t=e.parents("ul.dl-submenu:first"),s=t.parent(),o=t.clone().insertAfter(a.$menu);return setTimeout(function(){o.addClass(a.options.animationClasses.classout),a.$menu.addClass(a.options.animationClasses.classin),a.supportAnimations?a.$menu.on(a.animEndEventName,i):i.call(),s.removeClass("dl-subviewopen");var n=e.parents(".dl-subview:first");n.is("li")&&n.addClass("dl-subviewopen"),n.removeClass("dl-subview")}),!1})},closeMenu:function(){this.open&&this._closeMenu()},_closeMenu:function(){function n(){i.$menu.off(i.transEndEventName),i._resetMenu()}var i=this;this.$menu.removeClass("dl-menuopen"),this.$menu.addClass("dl-menu-toggle"),this.$trigger.removeClass("dl-active"),this.supportTransitions?this.$menu.on(this.transEndEventName,n):n.call(),this.open=!1},openMenu:function(){this.open||this._openMenu()},_openMenu:function(){var n=this;t.off("click").on("click.dlmenu",function(){n._closeMenu()}),this.$menu.addClass("dl-menuopen dl-menu-toggle").on(this.transEndEventName,function(){l(this).removeClass("dl-menu-toggle")}),this.$trigger.addClass("dl-active"),this.open=!0},_resetMenu:function(){this.$menu.removeClass("dl-subview"),this.$menuitems.removeClass("dl-subview dl-subviewopen")}};function s(n){i.console&&i.console.error(n)}l.fn.dlmenu=function(i){if("string"==typeof i){var e=Array.prototype.slice.call(arguments,1);this.each(function(){var n=l.data(this,"dlmenu");n?l.isFunction(n[i])&&"_"!==i.charAt(0)?n[i].apply(n,e):s("no such method '"+i+"' for dlmenu instance"):s("cannot call methods on dlmenu prior to initialization; attempted to call method '"+i+"'")})}else this.each(function(){var n=l.data(this,"dlmenu");n?n._init():n=l.data(this,"dlmenu",new l.DLMenu(i,this))});return this}}(jQuery,window);