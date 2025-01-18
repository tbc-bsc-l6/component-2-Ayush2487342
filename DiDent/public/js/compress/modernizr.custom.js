window.Modernizr=function(e,f,i){function t(e){h.cssText=e}function a(e,t){return typeof e===t}function c(e,t){for(var n in e){var r=e[n];if(!~(""+r).indexOf("-")&&h[r]!==i)return"pfx"!=t||r}return!1}function r(e,t,n){var r=e.charAt(0).toUpperCase()+e.slice(1),o=(e+" "+y.join(r+" ")+r).split(" ");return a(t,"string")||a(t,"undefined")?c(o,t):function(e,t,n){for(var r in e){var o=t[e[r]];if(o!==i)return!1===n?e[r]:a(o,"function")?o.bind(n||t):o}return!1}(o=(e+" "+g.join(r+" ")+r).split(" "),t,n)}function n(e,t,n,r){var o,i,a,c,l=f.createElement("div"),s=f.body,u=s||f.createElement("body");if(parseInt(n,10))for(;n--;)(a=f.createElement("div")).id=r?r[n]:p+(n+1),l.appendChild(a);return o=["&#173;",'<style id="s',p,'">',e,"</style>"].join(""),l.id=p,(s?l:u).innerHTML+=o,u.appendChild(l),s||(u.style.background="",u.style.overflow="hidden",c=d.style.overflow,d.style.overflow="hidden",d.appendChild(u)),i=t(l,e),s?l.parentNode.removeChild(l):(u.parentNode.removeChild(u),d.style.overflow=c),!!i}var o,l,s={},d=f.documentElement,p="modernizr",u=f.createElement(p),h=u.style,m=" -webkit- -moz- -o- -ms- ".split(" "),v="Webkit Moz O ms",y=v.split(" "),g=v.toLowerCase().split(" "),b={},E=[],j=E.slice,C={}.hasOwnProperty;for(var w in l=a(C,"undefined")||a(C.call,"undefined")?function(e,t){return t in e&&a(e.constructor.prototype[t],"undefined")}:function(e,t){return C.call(e,t)},Function.prototype.bind||(Function.prototype.bind=function(r){var o=this;if("function"!=typeof o)throw new TypeError;var i=j.call(arguments,1),a=function(){if(this instanceof a){function e(){}e.prototype=o.prototype;var t=new e,n=o.apply(t,i.concat(j.call(arguments)));return Object(n)===n?n:t}return o.apply(r,i.concat(j.call(arguments)))};return a}),b.touch=function(){var t;return"ontouchstart"in e||e.DocumentTouch&&f instanceof DocumentTouch?t=!0:n(["@media (",m.join("touch-enabled),("),p,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(e){t=9===e.offsetTop}),t},b.cssanimations=function(){return r("animationName")},b.csstransitions=function(){return r("transition")},b)l(b,w)&&(o=w.toLowerCase(),s[o]=b[w](),E.push((s[o]?"":"no-")+o));return s.addTest=function(e,t){if("object"==typeof e)for(var n in e)l(e,n)&&s.addTest(n,e[n]);else{if(e=e.toLowerCase(),s[e]!==i)return s;t="function"==typeof t?t():t,d.className+=" "+(t?"":"no-")+e,s[e]=t}return s},t(""),u=null,function(e,a){function c(){var e=h.elements;return"string"==typeof e?e.split(" "):e}function l(e){var t=p[e[f]];return t||(t={},d++,e[f]=d,p[d]=t),t}function r(e,t,n){return t||(t=a),s?t.createElement(e):(n||(n=l(t)),(r=n.cache[e]?n.cache[e].cloneNode():u.test(e)?(n.cache[e]=n.createElem(e)).cloneNode():n.createElem(e)).canHaveChildren&&!i.test(e)?n.frag.appendChild(r):r);var r}function t(e){e||(e=a);var t=l(e);return!h.shivCSS||n||t.hasCSS||(t.hasCSS=!!function(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}(e,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),s||function(t,n){n.cache||(n.cache={},n.createElem=t.createElement,n.createFrag=t.createDocumentFragment,n.frag=n.createFrag()),t.createElement=function(e){return h.shivMethods?r(e,t,n):n.createElem(e)},t.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+c().join().replace(/\w+/g,function(e){return n.createElem(e),n.frag.createElement(e),'c("'+e+'")'})+");return n}")(h,n.frag)}(e,t),e}var n,s,o=e.html5||{},i=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,u=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f="_html5shiv",d=0,p={};!function(){try{var e=a.createElement("a");e.innerHTML="<xyz></xyz>",n="hidden"in e,s=1==e.childNodes.length||function(){a.createElement("a");var e=a.createDocumentFragment();return void 0===e.cloneNode||void 0===e.createDocumentFragment||void 0===e.createElement}()}catch(e){s=n=!0}}();var h={elements:o.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:!1!==o.shivCSS,supportsUnknownElements:s,shivMethods:!1!==o.shivMethods,type:"default",shivDocument:t,createElement:r,createDocumentFragment:function(e,t){if(e||(e=a),s)return e.createDocumentFragment();for(var n=(t=t||l(e)).frag.cloneNode(),r=0,o=c(),i=o.length;r<i;r++)n.createElement(o[r]);return n}};e.html5=h,t(a)}(this,f),s._version="2.6.2",s._prefixes=m,s._domPrefixes=g,s._cssomPrefixes=y,s.testProp=function(e){return c([e])},s.testAllProps=r,s.testStyles=n,s.prefixed=function(e,t,n){return t?r(e,t,n):r(e,"pfx")},d.className=d.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+" js "+E.join(" "),s}(this,this.document),function(e,d){function f(e){return"[object Function]"==o.call(e)}function p(e){return"string"==typeof e}function h(){}function m(e){return!e||"loaded"==e||"complete"==e||"uninitialized"==e}function v(){var e=E.shift();j=1,e?e.t?g(function(){("c"==e.t?y.injectCss:y.injectJs)(e.s,0,e.a,e.x,e.e,1)},0):(e(),v()):j=0}function t(e,t,n,r,o){return j=0,t=t||"j",p(e)?function(n,r,e,t,o,i,a){function c(e){if(!s&&m(l.readyState)&&(f.r=s=1,j||v(),l.onload=l.onreadystatechange=null,e))for(var t in"img"!=n&&g(function(){w.removeChild(l)},50),S[r])S[r].hasOwnProperty(t)&&S[r][t].onload()}a=a||y.errorTimeout;var l=d.createElement(n),s=0,u=0,f={t:e,s:r,e:o,a:i,x:a};1===S[r]&&(u=1,S[r]=[]),"object"==n?l.data=r:(l.src=r,l.type=n),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){c.call(this,u)},E.splice(t,0,f),"img"!=n&&(u||2===S[r]?(w.insertBefore(l,C?null:b),g(c,a)):S[r].push(l))}("c"==t?l:a,e,t,this.i++,n,r,o):(E.splice(this.i++,0,e),1==E.length&&v()),this}function c(){var e=y;return e.loader={load:t,i:0},e}var n,y,r=d.documentElement,g=e.setTimeout,b=d.getElementsByTagName("script")[0],o={}.toString,E=[],j=0,i="MozAppearance"in r.style,C=i&&!!d.createRange().compareNode,w=C?r:b.parentNode,a=(r=e.opera&&"[object Opera]"==o.call(e.opera),r=!!d.attachEvent&&!r,i?"object":r?"script":"img"),l=r?"script":a,s=Array.isArray||function(e){return"[object Array]"==o.call(e)},x=[],S={},N={timeout:function(e,t){return t.length&&(e.timeout=t[0]),e}};(y=function(e){function u(e,t,n,r,o){var i=function(e){e=e.split("!");var t,n,r,o=x.length,i=e.pop(),a=e.length;for(i={url:i,origUrl:i,prefixes:e},n=0;n<a;n++)r=e[n].split("="),(t=N[r.shift()])&&(i=t(i,r));for(n=0;n<o;n++)i=x[n](i);return i}(e),a=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(t&&(t=f(t)?t:t[e]||t[r]||t[e.split("/").pop().split("?")[0]]),i.instead?i.instead(e,t,n,r,o):(S[i.url]?i.noexec=!0:S[i.url]=1,n.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":void 0,i.noexec,i.attrs,i.timeout),(f(t)||f(a))&&n.load(function(){c(),t&&t(i.origUrl,o,r),a&&a(i.origUrl,o,r),S[i.url]=2})))}function t(e,t){function n(n,e){if(n){if(p(n))e||(c=function(){var e=[].slice.call(arguments);l.apply(this,e),s()}),u(n,c,t,0,i);else if(Object(n)===n)for(o in r=function(){var e,t=0;for(e in n)n.hasOwnProperty(e)&&t++;return t}(),n)n.hasOwnProperty(o)&&(e||--r||(f(c)?c=function(){var e=[].slice.call(arguments);l.apply(this,e),s()}:c[o]=function(t){return function(){var e=[].slice.call(arguments);t&&t.apply(this,e),s()}}(l[o])),u(n[o],c,t,o,i))}else e||s()}var r,o,i=!!e.test,a=e.load||e.both,c=e.callback||h,l=c,s=e.complete||h;n(i?e.yep:e.nope,!!a),a&&n(a)}var n,r,o=this.yepnope.loader;if(p(e))u(e,0,o,0);else if(s(e))for(n=0;n<e.length;n++)p(r=e[n])?u(r,0,o,0):s(r)?y(r):Object(r)===r&&t(r,o);else Object(e)===e&&t(e,o)}).addPrefix=function(e,t){N[e]=t},y.addFilter=function(e){x.push(e)},y.errorTimeout=1e4,null==d.readyState&&d.addEventListener&&(d.readyState="loading",d.addEventListener("DOMContentLoaded",n=function(){d.removeEventListener("DOMContentLoaded",n,0),d.readyState="complete"},0)),e.yepnope=c(),e.yepnope.executeStack=v,e.yepnope.injectJs=function(e,t,n,r,o,i){var a,c,l=d.createElement("script");r=r||y.errorTimeout;for(c in l.src=e,n)l.setAttribute(c,n[c]);t=i?v:t||h,l.onreadystatechange=l.onload=function(){!a&&m(l.readyState)&&(a=1,t(),l.onload=l.onreadystatechange=null)},g(function(){a||t(a=1)},r),o?l.onload():b.parentNode.insertBefore(l,b)},e.yepnope.injectCss=function(e,t,n,r,o,i){var a;r=d.createElement("link"),t=i?v:t||h;for(a in r.href=e,r.rel="stylesheet",r.type="text/css",n)r.setAttribute(a,n[a]);o||(b.parentNode.insertBefore(r,b),g(t,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};