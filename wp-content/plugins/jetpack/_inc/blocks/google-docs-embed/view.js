(()=>{var t={79366:(t,e,r)=>{"object"==typeof window&&window.Jetpack_Block_Assets_Base_Url&&(r.p=window.Jetpack_Block_Assets_Base_Url)},98490:t=>{"use strict";t.exports=window.wp.domReady}},e={};function r(o){var s=e[o];if(void 0!==s)return s.exports;var c=e[o]={exports:{}};return t[o](c,c.exports,r),c.exports}r.n=t=>{var e=t&&t.__esModule?()=>t.default:()=>t;return r.d(e,{a:e}),e},r.d=(t,e)=>{for(var o in e)r.o(e,o)&&!r.o(t,o)&&Object.defineProperty(t,o,{enumerable:!0,get:e[o]})},r.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(t){if("object"==typeof window)return window}}(),r.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e),(()=>{var t;r.g.importScripts&&(t=r.g.location+"");var e=r.g.document;if(!t&&e&&(e.currentScript&&"SCRIPT"===e.currentScript.tagName.toUpperCase()&&(t=e.currentScript.src),!t)){var o=e.getElementsByTagName("script");if(o.length)for(var s=o.length-1;s>-1&&(!t||!/^http(s?):/.test(t));)t=o[s--].src}if(!t)throw new Error("Automatic publicPath is not supported in this browser");t=t.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),r.p=t+"../"})(),(()=>{"use strict";r(79366)})(),(()=>{"use strict";var t=r(98490);const e=()=>{const t=document.querySelectorAll(".wp-block-jetpack-google-docs-embed");if(!t)return;const e=window.Jetpack_Google_Docs.error_msg;if(!e)return;const r=`<p class="wp-block-jetpack-google-docs-embed__error-msg">${e}</p>`;t.forEach((t=>{const e=t.querySelector("iframe"),o=t.querySelector(".loader");if(!e)return;const s=e.getAttribute("src").match(/^(http|https):\/\/(docs\.google.com)\/presentation\/d\/([A-Za-z0-9_-]+).*?$/i);if(null===s||void 0===s[1]||void 0===s[2]||void 0===s[3])return o.classList.remove("is-active"),void e.addEventListener("load",(function(){0===Object.keys(this.contentWindow).length&&(t.innerHTML=r)}));const c=s[3],n=`https://docs.google.com/presentation/d/${c}/edit`,i=`https://docs.google.com/presentation/d/${c}/embed`;e.setAttribute("src",n),e.addEventListener("load",(function(){i!==e.getAttribute("src")&&n===e.getAttribute("src")?0===Object.keys(this.contentWindow).length?t.innerHTML=r:e.setAttribute("src",i):o.classList.remove("is-active")}))}))};r.n(t)()((()=>{e()}))})()})();