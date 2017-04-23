<style type="text/css">
  body {
  background-color:#B51541;
  overflow: hidden;
}
.container{
 
  max-width:100%;
  height:500px;
  text-align: center;
  padding-left: 100px
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

<div class="container" style="padding-top: 50px; text-align: center">
  <svg class="mainSVG" xmlns:xlink="http://www.w3.org/1999/xlink" width="1000" height="1000" viewBox="0 0 1000 1000" style=" padding-top: 20px;
    padding-left: 500px;"">
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
  <rect class="merryMask" y="265" fill="#01aebb" width="100%" height="60"/>
  </mask>
  </defs>
  <mask id="strokeMask1"/>
  <mask id="strokeMask2"/>
  <mask id="strokeMask3"/>
  <g mask="url(#strokeMask1)" stroke="#01aebb">
  <path id="springStroke1" fill="none" stroke-width="32" stroke-miterlimit="10" d="M295.79 306.05c4.88-40 59.64-50.35 89.11-30.94 28.87 19.02 36.98 66.23 9.7 92.82-28.82 28.09-95.93 25.53-125.28 12.41-45.16-20.19-64.58-75.02-50.54-113.88 24.37-67.46 78.03-82.94 124.6-85.46 81.7-4.41 135.04 48.72 138.78 52.04C533.59 278.71 540.15 305 553.67 340"/>
  </g>
  <g mask="url(#strokeMask2)" stroke="#01aebb">
  <path id="springStroke2" fill="none" stroke-width="32" stroke-miterlimit="10" d="M301 299c-8.88-30.88-22.07-52.82-31.33-66-17.16-24.42-38.97-55.44-76-60.67-18.91-2.67-34.3 2.45-41.33 5.33-31.61 12.96-55.3 47.33-56.67 80-2.14 51.11 51.95 61.79 56.67 122.67.49 6.36 3.73 57.6-30.67 80-26.63 17.34-63.99 9.68-86-7.33C-8.02 419.23-2.38 340.44 33 297.67c44.67-54 125.35-28.28 158-12.67 89.2 42.67 161.66 21.25 242.67-8 55.39-20 122.28 9.4 156 34"/>
  </g>
  <g mask="url(#strokeMask3)" stroke="#01aebb">
  <path id="springStroke3" fill="none" stroke-width="32" stroke-miterlimit="10" d="M467.82 270.07c93.65-33.69 90.62-162.02 89.85-169.4-.22-2.15-.86-8.25-4.67-10 0 0-3.04-1.4-8 1.33-9.43 5.19-9.23 122.41-7.33 222"/>
  </g>

  <g id="merryGroup" fill="#01aebb" style="text-align:center">
  <path class="fil0" d="M238 41l-19 -33c-1,-1 -1,-2 -1,-3 0,-2 2,-5 5,-5 2,0 4,1 5,3l15 28 16 -28c1,-2 3,-3 5,-3 3,0 5,2 5,5 0,1 0,2 -1,3l-19 33 0 27c0,3 -3,6 -6,6 -2,0 -5,-3 -5,-6l0 -27z"/>
  <path class="fil0" d="M37 41l-26 0 0 27c0,3 -3,6 -6,6 -2,0 -5,-3 -5,-6l0 -63c0,-3 2,-5 5,-5 3,0 6,2 6,5l0 25 26 0 0 -25c0,-3 3,-5 6,-5 3,0 5,2 5,5l0 63c0,3 -2,6 -5,6 -3,0 -6,-3 -6,-6l0 -27 0 0z"/>
  <path class="fil0" d="M129 43l0 25c0,3 -3,6 -6,6 -3,0 -5,-3 -5,-6l0 -60c0,-4 3,-7 6,-7l19 0c6,0 12,2 15,6 4,4 6,9 6,15 0,6 -2,11 -6,15 -2,2 -5,4 -8,5 -4,1 -5,1 -21,1zm14 -11c5,0 10,-2 10,-10 0,-6 -3,-11 -10,-11l-14 0 0 21 14 0z"/>
  <path class="fil0" d="M181 43l0 25c0,3 -3,6 -6,6 -3,0 -5,-3 -5,-6l0 -60c0,-4 3,-7 6,-7l19 0c6,0 12,2 15,6 4,4 6,9 6,15 0,6 -2,11 -6,15 -2,2 -5,4 -8,5 -4,1 -5,1 -21,1zm14 -11c5,0 10,-2 10,-10 0,-6 -3,-11 -10,-11l-14 0 0 21 14 0z"/>
  <path class="fil0" d="M296 42l0 21 14 0c7,0 10,-4 10,-10 0,-9 -5,-11 -10,-11l-1 0 -3 0 0 0 -10 0zm-6 31c-3,0 -5,-2 -5,-5l0 -1 0 -60 0 -1c0,-2 2,-5 5,-5 0,0 1,0 1,0l19 0c6,0 12,2 15,6 4,3 6,9 6,15 0,6 -2,11 -6,15l0 0 0 1c4,3 6,8 6,15 0,6 -2,11 -6,15 -3,4 -9,6 -15,6l-19 0c0,0 -1,0 -1,-1zm20 -41c5,0 10,-2 10,-10 0,-6 -3,-11 -10,-11l-14 0 0 21 10 0 0 0 3 0 1 0z"/>
  <path class="fil0" d="M96 55l-25 0 -6 15c-1,2 -3,4 -5,4 -3,0 -5,-3 -5,-6 0,0 0,-1 0,-1l22 -63c1,-2 4,-4 6,-4 2,0 5,2 6,4l22 63c0,0 0,1 0,1 0,3 -2,6 -5,6 -2,0 -4,-2 -5,-4l-5 -15zm-13 -35l-9 24 18 0 -9 -24 0 0z"/>
  <path class="fil0" d="M637 41l-19 -33c-1,-1 -1,-2 -1,-3 0,-2 2,-5 5,-5 2,0 4,1 5,3l16 28 15 -28c1,-2 3,-3 5,-3 3,0 5,2 5,5 0,1 0,2 -1,3l-19 33 0 27c0,3 -3,6 -5,6 -3,0 -6,-3 -6,-6l0 -27z"/>
  <path class="fil0" d="M570 26c0,-15 -10,-26 -26,-26 -6,0 -11,2 -16,5 -1,1 -2,2 -2,4l0 0 0 0 0 0 0 0 0 56c0,1 0,2 1,3 0,0 1,0 1,1 5,3 10,5 16,5 16,0 26,-11 26,-27l0 -21 0 0zm-33 -14c2,-1 4,-2 7,-2 10,0 15,7 15,16l0 21c0,10 -5,17 -15,17 -3,0 -5,-1 -7,-2l0 -50z"/>
  <path class="fil0" d="M493 41l-27 0 0 27c0,3 -2,6 -5,6 -3,0 -6,-3 -6,-6l0 -63c0,-3 3,-5 6,-5 3,0 5,2 5,5l0 25 27 0 0 -25c0,-3 2,-5 5,-5 3,0 5,2 5,5l0 63c0,3 -2,6 -5,6 -3,0 -5,-3 -5,-6l0 -27 0 0z"/>
  <path class="fil0" d="M373 43l-9 0 0 25c0,3 -3,6 -5,6 -3,0 -6,-3 -6,-6l0 -60c0,-4 3,-7 7,-7l19 0c6,0 11,2 15,6 3,4 6,9 6,15 0,6 -3,11 -6,15 -3,2 -6,4 -9,5l14 24c1,0 1,1 1,2 0,3 -3,6 -5,6 -2,0 -4,-1 -5,-3l-17 -28 0 0zm6 -11c4,0 10,-2 10,-10 0,-6 -4,-11 -10,-11l-15 0 0 21 15 0z"/>
  <path class="fil0" d="M336 5c0,-3 2,-5 5,-5 3,0 6,2 6,5l0 63c0,3 -3,6 -6,6 -3,0 -5,-3 -5,-6l0 -63 0 0z"/>
  <path class="fil0" d="M420 11l-15 0c-3,0 -5,-2 -5,-5 0,-3 2,-5 5,-5l41 0c3,0 5,2 5,5 0,3 -2,5 -5,5l-15 0 0 57c0,3 -3,6 -6,6 -3,0 -5,-3 -5,-6l0 -57 0 0z"/>
  <path class="fil0" d="M614 55l-26 0 -5 15c-1,2 -3,4 -5,4 -3,0 -5,-3 -5,-6 0,0 0,-1 0,-1l22 -63c1,-2 3,-4 6,-4 2,0 5,2 6,4l22 63c0,0 0,1 0,1 0,3 -2,6 -5,6 -2,0 -4,-2 -5,-4l-5 -15zm-13 -35l-9 24 18 0 -9 -24 0 0z"/>
  </g>

  <g id="particleContainer"/>
  <g id="letterI">
  <use class="endFlake" fill="#01aebb" xlink:href="#flake3" x="532" y="313"/>
  <use class="endFlake" fill="#01aebb" xlink:href="#flake3" x="532" y="313"/>
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

