

<style type="text/css">
	body {
  background-color:#B51541;
  overflow: hidden;
}

body,
html {
  height: 100%;
  width: 100%;
  margin: 0;
  padding: 0;
}
.container{
  position:absolute;
  max-width:100%;
  height:600px;
}

svg{
  max-width:100%;
  visibility:hidden;
   overflow:visible
}
</style>

<script src="//s3-us-west-2.amazonaws.com/s.cdpn.io/16327/MorphSVGPlugin.min.js"></script>
<script src="//s3-us-west-2.amazonaws.com/s.cdpn.io/16327/DrawSVGPlugin.js?r=12"></script>
<!-- <script src="http://www.greensock.com/js/src/plugins/Physics2DPlugin.min.js"></script> -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>

<div class="container">
  <svg class="mainSVG" xmlns:xlink="http://www.w3.org/1999/xlink" width="600" height="600" viewBox="0 0 600 600">
  <ellipse id="dot" rx="0" ry="4" cx="300" cy="580" fill="#F3F1E2"/><circle id="splashDot" r="0" cx="300" cy="300" fill="#F3F1E2"/>
  <circle opacity="0" id="splashRing" r="6" cx="300" cy="300" fill="none" stroke="#F3F1E2" stroke-width="12"/>
  <defs>
  <circle id="circ" r="1"/>
  <path id="star" d="M4.55 0l1.4 2.85 3.15.45-2.28 2.22.54 3.13-2.81-1.48-2.81 1.48.53-3.13L0 3.3l3.14-.45z"/>
  <path id="cross" d="M4 3.5L2.5 2 4 .5 3.5 0 2 1.5.5 0 0 .5 1.5 2 0 3.5l.5.5L2 2.5 3.5 4z"/>
  <path id="heart" d="M2.9 0c-.37 0-.7.18-.9.47C1.8.18 1.47 0 1.1 0 .49 0 0 .49 0 1.1 0 2.6 1.56 4 2 4s2-1.4 2-2.9C4 .49 3.51 0 2.9 0z"/>
  <path id="flake1" d="M5 2.1l.46-.19-.08-.71.64-.3-.09-.7.41-.2.25.38-.42.56.4.58-.42.57.3.4.49.06.28-.65.71.06.28-.65.45.03.03.45-.65.28.06.71-.65.27.06.5.4.3.57-.42.58.4.56-.42.38.25-.2.41-.7-.09-.3.64-.71-.08L7.9 5l.19.46.71-.08.3.64.7-.09.2.41-.38.25-.56-.42-.58.4-.57-.42-.4.3-.06.49.65.28-.06.71.65.28-.03.45-.45.03-.28-.65-.71.06-.27-.65-.5.06-.3.4.42.57-.4.58.42.56-.25.38-.41-.2.09-.7-.64-.3.08-.71L5 7.9l-.46.19.08.71-.64.3.09.7-.41.2-.25-.38.42-.56-.4-.58.42-.57-.3-.4-.49-.06-.28.65-.71-.06-.28.65-.45-.03-.03-.45.65-.28-.06-.71.65-.27-.06-.5-.4-.3-.57.42-.58-.4-.56.42L0 6.34l.2-.41.7.09.3-.64.71.08L2.1 5l-.19-.46-.71.08-.3-.64-.7.09-.2-.41.38-.25.56.42.58-.4.57.42.4-.3.06-.49-.65-.28.06-.71-.65-.28.03-.45.45-.03.28.65.71-.06.27.65.5-.06.3-.4-.42-.57.4-.58-.42-.56.25-.38.41.2-.09.7.64.3-.07.73z"/>
  <path id="flake2" d="M5 2.29l1.48-.08L6.36.17 7.5 0l.42 1.07-1.82.92.67 1.32.81 1.24 1.7-1.12.72.9-.72.9-1.7-1.12-.81 1.24-.67 1.32 1.82.92-.42 1.07-1.14-.17.12-2.04L5 6.38l-1.48.07.12 2.04-1.14.17-.42-1.07 1.82-.92-.67-1.32-.81-1.24-1.7 1.12-.72-.9.72-.9 1.7 1.12.81-1.24.67-1.32-1.82-.92L2.5 0l1.14.17-.04 2.12z"/>
  <path id="flake3" d="M5 3.3l.51-.45-.06-.91.71-.57L6.1.46 6.55 0l.09.64-.58.69.23.88-.58.7.15.67.68-.07.48-.76.91-.06.48-.77.64-.1-.3.57-.88.22-.33.84-.88.23-.27.63.58.34.85-.33.76.49.84-.34.58.29-.58.28-.84-.34-.76.49-.85-.33-.58.35.27.62.88.23.32.84.89.23.29.57-.63-.11-.48-.77-.91-.05L6.54 6l-.68-.06-.15.66.58.7-.23.88.58.7-.1.63-.44-.46.06-.9-.71-.58.06-.91L5 6.21l-.51.45.06.91-.71.57.06.91-.45.46-.09-.63.58-.7-.23-.88.58-.7-.15-.66-.68.06-.48.77-.91.05-.48.77-.64.1.3-.56.88-.23.33-.84.88-.23.27-.62-.58-.35-.85.33-.76-.49-.84.34L0 4.75l.58-.28.84.34.76-.49.85.33.58-.35-.27-.62-.88-.22-.32-.85-.89-.22-.29-.57.63.1.48.77.91.05.48.77.68.07.15-.67-.58-.7.23-.88-.58-.69.1-.64.44.46-.06.91.71.57-.06.92z"/>
  <mask id="merryMask">
  <rect class="merryMask" y="265" fill="#FFF" width="100%" height="60"/>
  </mask>
  </defs>
  <mask id="strokeMask1"/>
  <mask id="strokeMask2"/>
  <mask id="strokeMask3"/>
  <g mask="url(#strokeMask1)" stroke="#F3F1E2">
  <path id="springStroke1" fill="none" stroke-width="32" stroke-miterlimit="10" d="M295.79 306.05c4.88-40 59.64-50.35 89.11-30.94 28.87 19.02 36.98 66.23 9.7 92.82-28.82 28.09-95.93 25.53-125.28 12.41-45.16-20.19-64.58-75.02-50.54-113.88 24.37-67.46 78.03-82.94 124.6-85.46 81.7-4.41 135.04 48.72 138.78 52.04C533.59 278.71 540.15 305 553.67 340"/>
  </g>
  <g mask="url(#strokeMask2)" stroke="#F3F1E2">
  <path id="springStroke2" fill="none" stroke-width="32" stroke-miterlimit="10" d="M301 299c-8.88-30.88-22.07-52.82-31.33-66-17.16-24.42-38.97-55.44-76-60.67-18.91-2.67-34.3 2.45-41.33 5.33-31.61 12.96-55.3 47.33-56.67 80-2.14 51.11 51.95 61.79 56.67 122.67.49 6.36 3.73 57.6-30.67 80-26.63 17.34-63.99 9.68-86-7.33C-8.02 419.23-2.38 340.44 33 297.67c44.67-54 125.35-28.28 158-12.67 89.2 42.67 161.66 21.25 242.67-8 55.39-20 122.28 9.4 156 34"/>
  </g>
  <g mask="url(#strokeMask3)" stroke="#F3F1E2">
  <path id="springStroke3" fill="none" stroke-width="32" stroke-miterlimit="10" d="M467.82 270.07c93.65-33.69 90.62-162.02 89.85-169.4-.22-2.15-.86-8.25-4.67-10 0 0-3.04-1.4-8 1.33-9.43 5.19-9.23 122.41-7.33 222"/>
  </g>

  <g id="merryGroup" fill="#F3F1E2">
  <!-- Huruf M -->
  <path d="M86.61 290.78l-9 16.32c-.6 1.08-1.8 1.8-3.06 1.8-1.32 0-2.46-.72-3.06-1.8l-9-16.32V317c0 1.74-1.5 3.18-3.18 3.18-1.74 0-3.18-1.44-3.18-3.18v-36.6c0-1.92 1.62-3.48 3.48-3.48 1.38 0 2.52.78 3.12 1.86l11.82 21.12 11.82-21.12c.6-1.08 1.86-1.86 3.12-1.86 1.92 0 3.48 1.56 3.48 3.48V317c0 1.74-1.5 3.18-3.24 3.18-1.68 0-3.12-1.44-3.12-3.18v-26.22z"/>
  <!-- Huruf E -->
  <path d="M105.03 319.57c-2.04 0-3.9-1.68-3.9-3.84v-34.38c0-2.04 1.74-3.84 3.9-3.84h17.4c1.74 0 3.12 1.38 3.12 3.12 0 1.68-1.38 2.94-3.12 2.94h-14.94v11.16h14.16c1.74 0 3.12 1.32 3.12 3.06 0 1.68-1.38 3-3.12 3h-14.16v12.72h15.36c1.68 0 3.12 1.32 3.12 3 0 1.74-1.44 3.06-3.12 3.06h-17.82z"/>
  <!-- Huruf R -->
  <path d="M143.73 301.94h-5.4v15.12c0 1.74-1.5 3.12-3.18 3.12-1.74 0-3.18-1.38-3.18-3.12v-35.7c0-2.1 1.74-3.84 3.9-3.84h11.16c3.54 0 6.6 1.14 8.82 3.36 2.28 2.28 3.48 5.4 3.48 9 0 3.6-1.2 6.66-3.42 8.82-1.44 1.38-3.18 2.28-5.22 2.82l8.34 13.98c.3.48.48 1.08.48 1.62 0 1.56-1.44 3.06-3.12 3.06-1.08 0-2.1-.54-2.64-1.5l-10.02-16.74zm3.3-6.06c2.76 0 5.94-1.14 5.94-6 0-3.6-2.1-6.3-5.94-6.3h-8.7v12.3h8.7z"/>
  <!-- Huruf R -->
  <path d="M176.97 301.94h-5.4v15.12c0 1.74-1.5 3.12-3.18 3.12-1.74 0-3.18-1.38-3.18-3.12v-35.7c0-2.1 1.74-3.84 3.9-3.84h11.16c3.54 0 6.6 1.14 8.82 3.36 2.28 2.28 3.48 5.4 3.48 9 0 3.6-1.2 6.66-3.42 8.82-1.44 1.38-3.18 2.28-5.22 2.82l8.34 13.98c.3.48.48 1.08.48 1.62 0 1.56-1.44 3.06-3.12 3.06-1.08 0-2.1-.54-2.64-1.5l-10.02-16.74zm3.3-6.06c2.76 0 5.94-1.14 5.94-6 0-3.6-2.1-6.3-5.94-6.3h-8.7v12.3h8.7z"/>
  <!-- Huruf P -->
  <path d="M0 5l0 -2c2,-1 4,-1 7,-2 2,0 4,-1 7,-1 0,0 1,0 1,0 2,0 4,0 5,0 2,1 4,2 5,3 1,2 3,4 3,6 1,2 1,3 1,5 0,1 0,2 0,2 -1,3 -1,5 -2,7 -1,3 -3,5 -4,6 -1,1 -2,1 -2,2 -1,0 -2,1 -3,2 -1,0 -3,1 -4,1 -1,0 -2,1 -3,1l-1 12 -1 1 -1 -4 -2 4 -2 -2 -1 0 -1 -35 -1 -1 4 -5 -5 0zm10 5l1 17c1,-1 2,-1 3,-2 0,0 1,0 2,-1 1,0 1,-1 1,-1 1,-1 2,-2 3,-3 0,-1 1,-3 1,-4 0,0 0,-1 0,-1 0,-1 0,-2 0,-2 -1,-2 -1,-3 -2,-3 -1,-1 -2,-1 -2,-1 -1,0 -1,0 -1,0 -1,0 -1,0 -2,0 -2,1 -3,1 -4,1z"/>
  <!-- Huruf Y -->
  <path d="M206.37 301.15l-11.58-19.56c-.3-.48-.42-1.02-.42-1.56 0-1.62 1.32-3.12 3.06-3.12 1.08 0 2.16.54 2.7 1.5l9.36 16.44 9.36-16.44c.54-.96 1.62-1.5 2.7-1.5 1.62 0 3.06 1.38 3.06 3.12 0 .54-.12 1.08-.42 1.56l-11.58 19.56v15.9c0 1.74-1.38 3.12-3.12 3.12-1.74 0-3.12-1.38-3.12-3.12v-15.9z"/>
  <path d="M243.15 292.46c0-9.3 6.24-15.54 15.48-15.54 3.24 0 6.36.96 9.24 2.82.9.6 1.44 1.56 1.44 2.58 0 1.62-1.38 2.94-3.12 2.94-.54 0-1.08-.18-1.62-.48-1.92-1.2-3.9-1.98-5.94-1.98-5.82 0-9.12 3.84-9.12 9.66v12.18c0 5.82 3.3 9.66 9.12 9.66 2.04 0 3.96-.84 5.88-2.04.54-.36 1.14-.54 1.74-.54 1.62 0 3.06 1.26 3.06 3 0 1.02-.54 2.04-1.44 2.64-2.88 1.86-6 2.82-9.24 2.82-9.24 0-15.48-6.24-15.48-15.54v-12.18z"/>
<!-- Huruf H -->
  <path d="M296.97 300.79h-15.6v16.2c0 1.74-1.44 3.18-3.12 3.18-1.74 0-3.24-1.44-3.24-3.18v-36.9c0-1.74 1.44-3.18 3.18-3.18 1.68 0 3.18 1.44 3.18 3.18v14.64h15.6V280.1c0-1.74 1.44-3.18 3.18-3.18 1.74 0 3.18 1.44 3.18 3.18V317c0 1.74-1.38 3.18-3.12 3.18-1.74 0-3.24-1.44-3.24-3.18v-16.21z"/>

  <path d="M323.25 301.94h-5.4v15.12c0 1.74-1.5 3.12-3.18 3.12-1.74 0-3.18-1.38-3.18-3.12v-35.7c0-2.1 1.74-3.84 3.9-3.84h11.16c3.54 0 6.6 1.14 8.82 3.36 2.28 2.28 3.48 5.4 3.48 9 0 3.6-1.2 6.66-3.42 8.82-1.44 1.38-3.18 2.28-5.22 2.82l8.34 13.98c.3.48.48 1.08.48 1.62 0 1.56-1.44 3.06-3.12 3.06-1.08 0-2.1-.54-2.64-1.5l-10.02-16.74zm3.3-6.06c2.76 0 5.94-1.14 5.94-6 0-3.6-2.1-6.3-5.94-6.3h-8.7v12.3h8.7z"/>

  <path d="M344.73 280.1c0-1.74 1.44-3.18 3.18-3.18 1.68 0 3.18 1.44 3.18 3.18V317c0 1.74-1.5 3.18-3.18 3.18-1.74 0-3.18-1.44-3.18-3.18v-36.9z"/>

  <path d="M364.59 298.75c-4.68-2.04-7.08-5.7-7.08-10.38 0-7.14 6.72-11.46 13.56-11.46 3.3 0 6.78.6 9.9 1.98 1.26.54 2.34 1.38 2.34 3.06 0 1.56-1.32 2.88-3 2.88-.36 0-.72-.06-1.14-.24-1.44-.54-3.54-1.8-8.4-1.8-2.94 0-6.84 1.2-6.84 5.28 0 2.82 1.38 4.08 3.78 5.16l6.84 3c4.56 1.98 8.88 4.8 8.88 11.22 0 7.26-5.22 12.72-13.32 12.72-3.54 0-7.62-.96-10.74-2.28-1.14-.48-1.86-1.5-1.86-2.82 0-1.68 1.08-3.06 2.88-3.06.78 0 1.38.18 1.92.42 2.46 1.08 4.98 1.86 7.8 1.86 4.32 0 6.9-2.1 6.9-6.06 0-3-2.52-5.1-5.22-6.3l-7.2-3.18z"/>

  <path d="M397.59 283.58h-8.88c-1.74 0-3.06-1.32-3.06-3 0-1.74 1.32-3.06 3.06-3.06h24.06c1.74 0 3.12 1.32 3.12 3.06 0 1.68-1.38 3-3.12 3h-8.82V317c0 1.74-1.44 3.18-3.18 3.18-1.74 0-3.18-1.44-3.18-3.18v-33.42z"/>
  <!-- Huruf M -->
  <path d="M450.21 290.78l-9 16.32c-.6 1.08-1.8 1.8-3.06 1.8-1.32 0-2.46-.72-3.06-1.8l-9-16.32V317c0 1.74-1.5 3.18-3.18 3.18-1.74 0-3.18-1.44-3.18-3.18v-36.6c0-1.92 1.62-3.48 3.48-3.48 1.38 0 2.52.78 3.12 1.86l11.82 21.12 11.82-21.12c.6-1.08 1.86-1.86 3.12-1.86 1.92 0 3.48 1.56 3.48 3.48V317c0 1.74-1.5 3.18-3.24 3.18-1.68 0-3.12-1.44-3.12-3.18v-26.22z"/>
  <!-- Huruf A -->
  <path d="M485.55 309.01h-14.76l-3.3 9.12c-.48 1.26-1.62 2.04-2.94 2.04-1.62 0-3.06-1.38-3.06-3.12 0-.36.06-.66.18-1.02l13.2-36.84c.48-1.26 1.8-2.28 3.3-2.28 1.38 0 2.82.96 3.3 2.34l13.2 36.78c.12.3.18.72.18 1.02 0 1.62-1.32 3.12-3.12 3.12-1.26 0-2.46-.78-2.94-2.04l-3.24-9.12zm-7.38-20.57l-5.22 14.52h10.44l-5.22-14.52z"/>

  <path d="M505.41 298.75c-4.68-2.04-7.08-5.7-7.08-10.38 0-7.14 6.72-11.46 13.56-11.46 3.3 0 6.78.6 9.9 1.98 1.26.54 2.34 1.38 2.34 3.06 0 1.56-1.32 2.88-3 2.88-.36 0-.72-.06-1.14-.24-1.44-.54-3.54-1.8-8.4-1.8-2.94 0-6.84 1.2-6.84 5.28 0 2.82 1.38 4.08 3.78 5.16l6.84 3c4.56 1.98 8.88 4.8 8.88 11.22 0 7.26-5.22 12.72-13.32 12.72-3.54 0-7.62-.96-10.74-2.28-1.14-.48-1.86-1.5-1.86-2.82 0-1.68 1.08-3.06 2.88-3.06.78 0 1.38.18 1.92.42 2.46 1.08 4.98 1.86 7.8 1.86 4.32 0 6.9-2.1 6.9-6.06 0-3-2.52-5.1-5.22-6.3l-7.2-3.18z"/>
  </g>

  <g id="particleContainer"/>
  <g id="letterI">
  <path fill="#F3F1E2" d="M533.19 316.27c0-2.16 1.74-3.9 3.9-3.9 2.1 0 3.84 1.74 3.84 3.9s-1.74 3.9-3.84 3.9c-2.16 0-3.9-1.74-3.9-3.9zm.78-36.23c0-1.74 1.38-3.12 3.12-3.12 1.68 0 3.06 1.38 3.06 3.12v23.76c0 1.68-1.38 3.06-3.06 3.06-1.74 0-3.12-1.38-3.12-3.06v-23.76z"/><use class="endFlake" fill="#F3F1E2" xlink:href="#flake2" x="532" y="313"/>
  <use class="endFlake" fill="#F3F1E2" xlink:href="#flake3" x="532" y="313"/>
  <use class="endFlake" fill="#F3F1E2" xlink:href="#flake3" x="532" y="313"/>
  </g>
  </svg>



</div>

<script type="text/javascript">
	var xmlns="http://www.w3.org/2000/svg",xlinkns="http://www.w3.org/1999/xlink";select=function(a){return document.querySelector(a)};selectAll=function(a){return document.querySelectorAll(a)};container=select(".container");mainSVG=select(".mainSVG");merryGroup=select("#merryGroup");springStroke1=select("#springStroke1");springStroke2=select("#springStroke2");springStroke3=select("#springStroke3");particleContainer=select("#particleContainer");strokeMask1=select("#strokeMask1");strokeMask2=select("#strokeMask2");
strokeMask3=select("#strokeMask3");allTextMasks=selectAll(".textMask *");maskValueArr="#111 #222 #333 #444 #555 #666 #777 #888 #999 #aaa #bbb #ccc #ddd #eee #FFF".split(" ").reverse();particleColorArray=["#F3F1E2"];particleTypeArray=["#flake1","#flake2","#flake3","#star","#heart"];particlePool=[];particleCount=0;numParticles=512;isFirefox=-1<navigator.userAgent.toLowerCase().indexOf("firefox");TweenMax.set(container,{position:"absolute",top:"50%",left:"50%",xPercent:-50,yPercent:-50});
TweenMax.set("svg",{visibility:"visible"});TweenMax.set(particleContainer,{x:0,y:0});
var springTl1=new TimelineMax({paused:!0}),springTl2=new TimelineMax({paused:!0}),springTl3=new TimelineMax({paused:!0}),num=100,p,boxWidth=16,boxHeight=16,fillCount,fillStep=Math.round(num/maskValueArr.length),springPath1=MorphSVGPlugin.pathDataToBezier(springStroke1.getAttribute("d"),{offsetX:-(boxWidth/2),offsetY:-(boxHeight/2)}),springPath2=MorphSVGPlugin.pathDataToBezier(springStroke2.getAttribute("d"),{offsetX:-(boxWidth/2),offsetY:-(boxHeight/2)}),springPath3=MorphSVGPlugin.pathDataToBezier(springStroke3.getAttribute("d"),
{offsetX:-(boxWidth/2),offsetY:-(boxHeight/2)});
function createSpring(a,b,f,g){for(var d=fillCount=0;d<a;d++){var c=document.createElementNS(xmlns,"rect");isFirefox?mainSVG.appendChild(c):b.appendChild(c);d>fillCount*fillStep&&fillCount++;c.setAttributeNS(null,"fill",maskValueArr[fillCount]);c.setAttributeNS(null,"width",boxWidth);c.setAttributeNS(null,"rx",16);c.setAttributeNS(null,"ry",16);c.setAttributeNS(null,"height",boxHeight);TweenMax.set(c,{transformOrigin:"50% 50%",scaleY:1-d/100});var e=new TimelineMax;e.to(c,1.52,{bezier:{type:"cubic",
values:f,autoRotate:!0},ease:Linear.easeNone}).to(c,.1,{alpha:0},"-=0.1");g.add(e,d/200);isFirefox&&b.appendChild(c)}}var mainTl=new TimelineMax({repeat:-1,paused:!0});
mainTl.to("#dot",.4,{attr:{cy:200,rx:12,ry:12},ease:Power2.easeOut}).to("#dot",.3,{attr:{cy:300},ease:Power2.easeIn}).set("#splashRing",{alpha:1}).to("#dot",1.2,{attr:{rx:76,ry:76},alpha:0,ease:Power1.easeOut}).to("#splashRing",1.2,{attr:{r:50},strokeWidth:0,ease:Power1.easeOut},"-=1.2").to(springTl1,3,{time:2.33,ease:Power2.easeOut},"-=1.2").to(springTl2,3.9,{time:2.33,ease:Power2.easeOut},"-=2.9").staggerFrom("#merryGroup path",.9,{rotation:-95,alpha:0,transformOrigin:"50% 150%",ease:Elastic.easeOut.config(2,
.8)},.036,"-=3.3").to(springTl3,1,{time:2.1,ease:SlowMo.ease.config(.1,.86,!1)},"-=2.9").to(particleContainer,1.4,{bezier:{type:"cubic",values:springPath2,autoRotate:!1},onUpdate:playParticle,ease:Linear.easeNone},"-=4").from("#letterI",.76,{y:-200,alpha:0,ease:Power4.easeIn},"-=2.7").from("#letterI",1,{rotation:23,transformOrigin:"50% 100%",ease:Elastic.easeOut.config(1,.3)},"-=2.2").staggerTo(selectAll(".endFlake"),.6,{cycle:{x:[-10,0,10],y:[200,100,300],transformOrigin:["50% 50%","50% 150%"]},
alpha:0,rotation:randomBetween(200,360),ease:SlowMo.ease.config(.1,.4,!1)},.02,"-=1.95").staggerTo("#merryGroup *",.6,{alpha:0},.05).to("#letterI",.6,{alpha:0},"-=0.6");function setTextMask(){merryGroup.setAttributeNS(null,"mask","url(#textMask)")}
function createParticles(){for(var a=numParticles,b;-1<--a;)b=document.createElementNS(xmlns,"use"),b.setAttributeNS(xlinkns,"xlink:href",particleTypeArray[a%particleTypeArray.length]),mainSVG.appendChild(b),b.setAttributeNS(null,"fill",particleColorArray[a%particleColorArray.length]),b.setAttributeNS(null,"opacity",0),b.setAttribute("class","particle"),particlePool.push(b)}
function playParticle(a){a=particlePool[particleCount];TweenMax.set(a,{x:particleContainer._gsTransform.x,y:particleContainer._gsTransform.y,scale:randomBetween(1,15)/10,transformOrigin:"50% 50%"});(new TimelineMax).to(a,randomBetween(3,6),{physics2D:{velocity:randomBetween(5,10),angle:0,gravity:randomBetween(23,577)},scale:0,rotation:randomBetween(180,780),onStart:function(a){TweenMax.killTweensOf(a,{opacity:!0});TweenMax.fromTo(a,.7,{alpha:1},{alpha:Math.random(),ease:RoughEase.ease.config({template:Power0.easeNone,
strength:3,points:6,taper:"both",randomize:!0,clamp:!1}),repeat:-1})},onStartParams:[a]});particleCount++;particleCount=particleCount>=numParticles?0:particleCount}function animateParticleContainer(){TweenMax.to(particleContainer,6,{bezier:{type:"cubic",values:springPath1,autoRotate:!1},onUpdate:playParticle,ease:Linear.easeNone})}createParticles();createSpring(100,strokeMask1,springPath1,springTl1);createSpring(100,strokeMask2,springPath2,springTl2);
createSpring(100,strokeMask3,springPath3,springTl3);mainTl.timeScale(.8);TweenMax.delayedCall(2,function(){mainTl.play()});function randomBetween(a,b){return Math.floor(Math.random()*(b-a+1)+a)};

</script>

