<!--
 * @package  : BELAJAR PEMROGRAMAN ONLINE.
 * @author   : Badriyatul Muawannah<annahasyim97@gmail.com>
 * @since    : 2017
 * @license  : https://muawannah.com/portofolio/belajar-online/
 -->
<style type="text/css">
    .container-inner {
   float:left;
   width:100%;
}
.container {

  width: auto !important;
}

li {
   
   background-color:#01aebb;
  -webkit-perspective: 360px;
          perspective: 360px;
}

.info {
  -webkit-transform: rotate3d(1, 0, 0, 90deg);
          transform: rotate3d(1, 0, 0, 90deg);
  width: 100%;
  height: 100%;
  padding: 0px 10px;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 4px;
  pointer-events: none;
  /*background-color: rgba(26, 88, 156, 0.9);*/
}
div.info p{
   color:#fff;
}
 

.in-top .info {
  -webkit-transform-origin: 50% 0%;
      -ms-transform-origin: 50% 0%;
          transform-origin: 50% 0%;
  -webkit-animation: in-top 300ms ease 0ms 1 forwards;
          animation: in-top 300ms ease 0ms 1 forwards;
}

.in-right .info {
  -webkit-transform-origin: 100% 0%;
      -ms-transform-origin: 100% 0%;
          transform-origin: 100% 0%;
  -webkit-animation: in-right 300ms ease 0ms 1 forwards;
          animation: in-right 300ms ease 0ms 1 forwards;
}

.in-bottom .info {
  -webkit-transform-origin: 50% 100%;
      -ms-transform-origin: 50% 100%;
          transform-origin: 50% 100%;
  -webkit-animation: in-bottom 300ms ease 0ms 1 forwards;
          animation: in-bottom 300ms ease 0ms 1 forwards;
}

.in-left .info {
  -webkit-transform-origin: 0% 0%;
      -ms-transform-origin: 0% 0%;
          transform-origin: 0% 0%;
  -webkit-animation: in-left 300ms ease 0ms 1 forwards;
          animation: in-left 300ms ease 0ms 1 forwards;
}

.out-top .info {
  -webkit-transform-origin: 50% 0%;
      -ms-transform-origin: 50% 0%;
          transform-origin: 50% 0%;
  -webkit-animation: out-top 300ms ease 0ms 1 forwards;
          animation: out-top 300ms ease 0ms 1 forwards;
}

.out-right .info {
  -webkit-transform-origin: 100% 50%;
      -ms-transform-origin: 100% 50%;
          transform-origin: 100% 50%;
  -webkit-animation: out-right 300ms ease 0ms 1 forwards;
          animation: out-right 300ms ease 0ms 1 forwards;
}

.out-bottom .info {
  -webkit-transform-origin: 50% 100%;
      -ms-transform-origin: 50% 100%;
          transform-origin: 50% 100%;
  -webkit-animation: out-bottom 300ms ease 0ms 1 forwards;
          animation: out-bottom 300ms ease 0ms 1 forwards;
}

.out-left .info {
  -webkit-transform-origin: 0% 0%;
      -ms-transform-origin: 0% 0%;
          transform-origin: 0% 0%;
  -webkit-animation: out-left 300ms ease 0ms 1 forwards;
          animation: out-left 300ms ease 0ms 1 forwards;
}

@-webkit-keyframes in-top {
  from {
    -webkit-transform: rotate3d(-1, 0, 0, 90deg);
            transform: rotate3d(-1, 0, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}

@keyframes in-top {
  from {
    -webkit-transform: rotate3d(-1, 0, 0, 90deg);
            transform: rotate3d(-1, 0, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@-webkit-keyframes in-right {
  from {
    -webkit-transform: rotate3d(0, -1, 0, 90deg);
            transform: rotate3d(0, -1, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@keyframes in-right {
  from {
    -webkit-transform: rotate3d(0, -1, 0, 90deg);
            transform: rotate3d(0, -1, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@-webkit-keyframes in-bottom {
  from {
    -webkit-transform: rotate3d(1, 0, 0, 90deg);
            transform: rotate3d(1, 0, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@keyframes in-bottom {
  from {
    -webkit-transform: rotate3d(1, 0, 0, 90deg);
            transform: rotate3d(1, 0, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@-webkit-keyframes in-left {
  from {
    -webkit-transform: rotate3d(0, 1, 0, 90deg);
            transform: rotate3d(0, 1, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@keyframes in-left {
  from {
    -webkit-transform: rotate3d(0, 1, 0, 90deg);
            transform: rotate3d(0, 1, 0, 90deg);
  }
  to {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
}
@-webkit-keyframes out-top {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(-1, 0, 0, 104deg);
            transform: rotate3d(-1, 0, 0, 104deg);
  }
}
@keyframes out-top {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(-1, 0, 0, 104deg);
            transform: rotate3d(-1, 0, 0, 104deg);
  }
}
@-webkit-keyframes out-right {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(0, -1, 0, 104deg);
            transform: rotate3d(0, -1, 0, 104deg);
  }
}
@keyframes out-right {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(0, -1, 0, 104deg);
            transform: rotate3d(0, -1, 0, 104deg);
  }
}
@-webkit-keyframes out-bottom {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(1, 0, 0, 104deg);
            transform: rotate3d(1, 0, 0, 104deg);
  }
}
@keyframes out-bottom {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(1, 0, 0, 104deg);
            transform: rotate3d(1, 0, 0, 104deg);
  }
}
@-webkit-keyframes out-left {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(0, 1, 0, 104deg);
            transform: rotate3d(0, 1, 0, 104deg);
  }
}
@keyframes out-left {
  from {
    -webkit-transform: rotate3d(0, 0, 0, 0deg);
            transform: rotate3d(0, 0, 0, 0deg);
  }
  to {
    -webkit-transform: rotate3d(0, 1, 0, 104deg);
            transform: rotate3d(0, 1, 0, 104deg);
  }
}
/* you can ignore this ones */
ul {
    margin: 0 auto;
    padding: 0;
    width: 800px;
}
ul:after {
  content: "";
  display: table;
  clear: both;
}

li {
  position: relative;
  float: left;
  width: 180px;
  height: 180px;
  margin: 5px;
  padding: 0;
  list-style: none;
}
li a {
  display: inline-block;
  vertical-align: top;
  text-decoration: none;
  border-radius: 4px;
}
li h3 {
  margin: 0;
  font-size: 16px;
  color: rgba(255, 255, 255, 0.9);
}
li p {
  font-size: 12px;
  line-height: 1.5;
  color: rgba(255, 255, 255, 0.8);
}
li .normal {
  width: 100%;
  height: 100%;
  background-color: #ECF0F1;
  color: rgba(52, 73, 94, 0.6);
  box-shadow: inset 0 2px 20px #e6ebed;
  text-align: center;
  font-size: 50px;
  line-height: 200px;
}

* {
  box-sizing: border-box;
}

h2{
      color:#fff;
}

h1 {
  margin: 0 auto 5px;
  text-align: center;
   color:#fff;
}

h3 {
  font-family: 'Lato', serif;
      color:#fff;
}

.container {
  width: 100%;
  margin: 0 auto;
}

header {
  font-family: 'Lato', serif;
  text-align: center;
  margin: 50px 0 25px;
  color: #34495E;
}
header p {
  margin: 0;
  color: rgba(52, 73, 94, 0.4);
}
    ::selection {
  background: rgba(255,255,0,0.5);
}

.window {
  width: 340px;
  height: 340px;
  background: #a0d5d3;
  position: absolute;
  top: 50%;
  left: 50%;
  border-radius: 50%;
  margin-top: -60px;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  border: 10px solid #f8e7dc;
  overflow: hidden; }

.santa {
  position: absolute;
  left: 50%;
  bottom: 0;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%); }
  .santa .body {
    width: 190px;
    height: 210px;
    background: #de2f32;
    position: relative;
    border-radius: 50%;
    top: 0;
    -webkit-animation: bodyLaugh 4s linear infinite;
    -moz-animation: bodyLaugh 4s linear infinite;
    -ms-animation: bodyLaugh 4s linear infinite;
    -o-animation: bodyLaugh 4s linear infinite;
    animation: bodyLaugh 4s linear infinite;
    -webkit-transform: translateY(50%);
    -moz-transform: translateY(50%);
    -ms-transform: translateY(50%);
    -o-transform: translateY(50%);
    transform: translateY(50%); }
    .santa .body:before {
      content: " ";
      width: 7px;
      height: 7px;
      background: #f7be10;
      border-radius: 50%;
      position: absolute;
      top: 35%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      box-shadow: 0px -18px 0px #f7be10, 0px 18px 0px #f7be10; }
  .santa .head {
    z-index: 2;
    position: absolute;
    bottom: 90px;
    left: 50%;
    -webkit-animation: headLaugh 4s linear infinite;
    -moz-animation: headLaugh 4s linear infinite;
    -ms-animation: headLaugh 4s linear infinite;
    -o-animation: headLaugh 4s linear infinite;
    animation: headLaugh 4s linear infinite;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%); }
    .santa .head .face {
      width: 120px;
      height: 130px;
      background: #edcab0;
      background: radial-gradient(#edcab0, #e9a982);
      border-radius: 50%;
      border: 3px solid #f8e7dc; }
      .santa .head .face .redhat .whitepart {
        position: absolute;
        left: 50%;
        top: 0;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        width: 90%;
        height: 32px;
        background: #f8e7dc;
        border-radius: 50px;
        z-index: 4;
        box-shadow: 0px 6px 0px -4px rgba(0, 0, 0, 0.1); }
      .santa .head .face .redhat .redpart {
        width: 120px;
        height: 120px;
        background: #de2f32;
        position: absolute;
        top: -50px;
        left: 15px;
        border-radius: 50%;
        z-index: -1; }
        .santa .head .face .redhat .redpart:before {
          content: " ";
          width: 95px;
          height: 95px;
          position: absolute;
          left: 0;
          top: 12px;
          border-radius: 50%;
          box-shadow: inset -8px -1px 0px -5px rgba(0, 0, 0, 0.05); }
        .santa .head .face .redhat .redpart:after {
          content: " ";
          position: absolute;
          right: 0;
          top: 60px;
          background: #de2f32;
          width: 20px;
          height: 50px; }
      .santa .head .face .redhat .hatball {
        width: 38px;
        height: 38px;
        background: #f8e7dc;
        border-radius: 50%;
        z-index: 5;
        position: absolute;
        right: -20px;
        top: 40px;
        box-shadow: 0px 6px 0px -4px rgba(0, 0, 0, 0.1); }
      .santa .head .face .eyes {
        position: absolute;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        top: 57px; }
        .santa .head .face .eyes:before, .santa .head .face .eyes:after {
          content: " ";
          position: absolute;
          width: 15px;
          height: 9px;
          top: 0;
          border: 5px solid #a8744f;
          border-width: 0;
          border-top-width: 5px;
          border-radius: 50%; }
        .santa .head .face .eyes:before {
          left: -28px; }
        .santa .head .face .eyes:after {
          right: -28px; }
      .santa .head .face .beard {
        width: 55px;
        height: 55px;
        background: #f8e7dc;
        border-radius: 50%;
        position: absolute;
        bottom: -30px;
        left: 50%;
        -webkit-animation: beardLaugh 4s linear infinite;
        -moz-animation: beardLaugh 4s linear infinite;
        -ms-animation: beardLaugh 4s linear infinite;
        -o-animation: beardLaugh 4s linear infinite;
        animation: beardLaugh 4s linear infinite;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%); }
        .santa .head .face .beard:before, .santa .head .face .beard:after {
          content: " ";
          width: 80px;
          height: 80px;
          background: #f8e7dc;
          border-radius: 50%;
          position: absolute;
          bottom: 15px; }
        .santa .head .face .beard:before {
          left: -40px; }
        .santa .head .face .beard:after {
          right: -40px; }
        .santa .head .face .beard .nouse {
          width: 25px;
          height: 20px;
          border-radius: 50%;
          background: #edcab0;
          position: absolute;
          z-index: 3;
          box-shadow: inset -3px -3px 0px #e9a982;
          left: 50%;
          -webkit-transform: translateX(-50%);
          -moz-transform: translateX(-50%);
          -ms-transform: translateX(-50%);
          -o-transform: translateX(-50%);
          transform: translateX(-50%);
          top: -42px; }
        .santa .head .face .beard .mouth {
          background: #a8744f;
          z-index: 3;
          position: absolute;
          width: 15px;
          height: 5px;
          border-bottom-right-radius: 80px 50px;
          border-bottom-left-radius: 80px 50px;
          left: 50%;
          top: 0;
          -webkit-animation: mouthLaugh 4s linear infinite;
          -moz-animation: mouthLaugh 4s linear infinite;
          -ms-animation: mouthLaugh 4s linear infinite;
          -o-animation: mouthLaugh 4s linear infinite;
          animation: mouthLaugh 4s linear infinite;
          -webkit-transform: translateX(-50%);
          -moz-transform: translateX(-50%);
          -ms-transform: translateX(-50%);
          -o-transform: translateX(-50%);
          transform: translateX(-50%); }
    .santa .head .ears:before, .santa .head .ears:after {
      content: " ";
      width: 20px;
      height: 30px;
      border-radius: 50%;
      background: radial-gradient(#e9a982, #edcab0);
      position: absolute;
      top: 50%;
      z-index: -1; }
    .santa .head .ears:before {
      left: -8px;
      -webkit-transform: rotate(-10deg);
      -moz-transform: rotate(-10deg);
      -ms-transform: rotate(-10deg);
      -o-transform: rotate(-10deg);
      transform: rotate(-10deg); }
    .santa .head .ears:after {
      right: -8px;
      -webkit-transform: rotate(10deg);
      -moz-transform: rotate(10deg);
      -ms-transform: rotate(10deg);
      -o-transform: rotate(10deg);
      transform: rotate(10deg); }

@font-face {
  font-family: 'Mountains of Christmas';
  font-style: normal;
  src: local("Mountains of Christmas"), local("MountainsofChristmas-Regular"), url(https://fonts.gstatic.com/s/mountainsofchristmas/v8/dVGBFPwd6G44IWDbQtPewylJhLDHyIrT3I5b5eGTHmw.woff2) format("woff2"); }
.message {
  position: absolute;
  left: 50%;
  top: 50%;
  margin-top: 80px;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  color: #f8e7dc;
  font-family: 'Mountains of Christmas'; }
  .message h1 {
    font-style: normal;
    font-size: 75px;
    margin-bottom: 0;
    white-space: nowrap; }
  .message h2 {
    margin: 0;
    font-size: 20px;
    text-align: center;
    white-space: nowrap; }
    .message h2 a {
      color: #f7be10;
      opacity: 0.8; }
      .message h2 a:hover {
        opacity: 1; }

@-webkit-keyframes bodyLaugh {
  0% {
    top: 0px; }

  2% {
    top: -3px; }

  4% {
    top: 0px; }

  8% {
    top: -3px; }

  10% {
    top: 0px; }

  12% {
    top: -3px; }

  14% {
    top: 0px; }

  18% {
    top: -3px; }

  20% {
    top: 0px; }

  22% {
    top: -3px; }

  24% {
    top: 0px; }

  28% {
    top: -3px; }

  30% {
    top: 0px; }

  100% {
    top: 0px; } }
@-moz-keyframes bodyLaugh {
  0% {
    top: 0px; }

  2% {
    top: -3px; }

  4% {
    top: 0px; }

  8% {
    top: -3px; }

  10% {
    top: 0px; }

  12% {
    top: -3px; }

  14% {
    top: 0px; }

  18% {
    top: -3px; }

  20% {
    top: 0px; }

  22% {
    top: -3px; }

  24% {
    top: 0px; }

  28% {
    top: -3px; }

  30% {
    top: 0px; }

  100% {
    top: 0px; } }
@-ms-keyframes bodyLaugh {
  0% {
    top: 0px; }

  2% {
    top: -3px; }

  4% {
    top: 0px; }

  8% {
    top: -3px; }

  10% {
    top: 0px; }

  12% {
    top: -3px; }

  14% {
    top: 0px; }

  18% {
    top: -3px; }

  20% {
    top: 0px; }

  22% {
    top: -3px; }

  24% {
    top: 0px; }

  28% {
    top: -3px; }

  30% {
    top: 0px; }

  100% {
    top: 0px; } }
@keyframes bodyLaugh {
  0% {
    top: 0px; }

  2% {
    top: -3px; }

  4% {
    top: 0px; }

  8% {
    top: -3px; }

  10% {
    top: 0px; }

  12% {
    top: -3px; }

  14% {
    top: 0px; }

  18% {
    top: -3px; }

  20% {
    top: 0px; }

  22% {
    top: -3px; }

  24% {
    top: 0px; }

  28% {
    top: -3px; }

  30% {
    top: 0px; }

  100% {
    top: 0px; } }
@-webkit-keyframes beardLaugh {
  0% {
    bottom: -28px; }

  2% {
    bottom: -30px; }

  4% {
    bottom: -28px; }

  8% {
    bottom: -30px; }

  10% {
    bottom: -28px; }

  12% {
    bottom: -30px; }

  14% {
    bottom: -28px; }

  18% {
    bottom: -30px; }

  20% {
    bottom: -28px; }

  22% {
    bottom: -30px; }

  24% {
    bottom: -28px; }

  28% {
    bottom: -30px; }

  30% {
    bottom: -28px; }

  100% {
    bottom: -28px; } }
@-moz-keyframes beardLaugh {
  0% {
    bottom: -28px; }

  2% {
    bottom: -30px; }

  4% {
    bottom: -28px; }

  8% {
    bottom: -30px; }

  10% {
    bottom: -28px; }

  12% {
    bottom: -30px; }

  14% {
    bottom: -28px; }

  18% {
    bottom: -30px; }

  20% {
    bottom: -28px; }

  22% {
    bottom: -30px; }

  24% {
    bottom: -28px; }

  28% {
    bottom: -30px; }

  30% {
    bottom: -28px; }

  100% {
    bottom: -28px; } }
@-ms-keyframes beardLaugh {
  0% {
    bottom: -28px; }

  2% {
    bottom: -30px; }

  4% {
    bottom: -28px; }

  8% {
    bottom: -30px; }

  10% {
    bottom: -28px; }

  12% {
    bottom: -30px; }

  14% {
    bottom: -28px; }

  18% {
    bottom: -30px; }

  20% {
    bottom: -28px; }

  22% {
    bottom: -30px; }

  24% {
    bottom: -28px; }

  28% {
    bottom: -30px; }

  30% {
    bottom: -28px; }

  100% {
    bottom: -28px; } }
@keyframes beardLaugh {
  0% {
    bottom: -28px; }

  2% {
    bottom: -30px; }

  4% {
    bottom: -28px; }

  8% {
    bottom: -30px; }

  10% {
    bottom: -28px; }

  12% {
    bottom: -30px; }

  14% {
    bottom: -28px; }

  18% {
    bottom: -30px; }

  20% {
    bottom: -28px; }

  22% {
    bottom: -30px; }

  24% {
    bottom: -28px; }

  28% {
    bottom: -30px; }

  30% {
    bottom: -28px; }

  100% {
    bottom: -28px; } }
@-webkit-keyframes headLaugh {
  0% {
    bottom: 83px; }

  45% {
    bottom: 83px; }

  50% {
    bottom: 90px; }

  92% {
    bottom: 90px; }

  98% {
    bottom: 83px; }

  100% {
    bottom: 83px; } }
@-moz-keyframes headLaugh {
  0% {
    bottom: 83px; }

  45% {
    bottom: 83px; }

  50% {
    bottom: 90px; }

  92% {
    bottom: 90px; }

  98% {
    bottom: 83px; }

  100% {
    bottom: 83px; } }
@-ms-keyframes headLaugh {
  0% {
    bottom: 83px; }

  45% {
    bottom: 83px; }

  50% {
    bottom: 90px; }

  92% {
    bottom: 90px; }

  98% {
    bottom: 83px; }

  100% {
    bottom: 83px; } }
@keyframes headLaugh {
  0% {
    bottom: 83px; }

  45% {
    bottom: 83px; }

  50% {
    bottom: 90px; }

  92% {
    bottom: 90px; }

  98% {
    bottom: 83px; }

  100% {
    bottom: 83px; } }
@-webkit-keyframes mouthLaugh {
  0% {
    width: 20px; }

  45% {
    width: 20px; }

  50% {
    width: 15px; }

  92% {
    width: 15px; }

  98% {
    width: 20px; }

  100% {
    width: 20px; } }
@-moz-keyframes mouthLaugh {
  0% {
    width: 20px; }

  45% {
    width: 20px; }

  50% {
    width: 15px; }

  92% {
    width: 15px; }

  98% {
    width: 20px; }

  100% {
    width: 20px; } }
@-ms-keyframes mouthLaugh {
  0% {
    width: 20px; }

  45% {
    width: 20px; }

  50% {
    width: 15px; }

  92% {
    width: 15px; }

  98% {
    width: 20px; }

  100% {
    width: 20px; } }
@keyframes mouthLaugh {
  0% {
    width: 20px; }

  45% {
    width: 20px; }

  50% {
    width: 15px; }

  92% {
    width: 15px; }

  98% {
    width: 20px; }

  100% {
    width: 20px; } }

</style>

 	<div class="jumbotron" style="padding-top:50px; height: 600px;">
        <div style="padding-left:20px; text-align:left; color:#9e2222">
        <h1><strong><?php //echo $title ?></strong></h1>
        <div class="window">
        <div class="santa">
            <div class="head">
                <div class="face">
                    <div class="redhat">
                        <div class="whitepart"></div>
                        <div class="redpart"></div>
                        <div class="hatball"></div>
                    </div>
                    <div class="eyes"></div>
                    <div class="beard">
                        <div class="nouse"></div>
                        <div class="mouth"></div>
                    </div>
                </div>
                <div class="ears"></div>
            </div>
            <div class="body"></div>
        </div>
    </div>
    <div style="padding-top: 30px" class="message">
        <h1 style="color: #01aebb">Happy Birth Day</h1>
         <br>
        <h2 style="color: #01aebb" class="copyright"> Made it with ♥ by '----'</h2>
    </div>
      	</div>
    </div>
    <div class="row">
    	<div class="col-md-4">
    		<div class="list-group nav-stacked" style="padding-left:20px;">
                <a class="list-group-item" href="<?php echo base_url()?>About/" title="About"> About</a>
                <a class="list-group-item" href="<?php echo base_url()?>About/Jobs/" title="Jobs"> Jobs</a>
                 <a class="list-group-item" href="<?php echo base_url()?>About/Hai/" title=""> <strong>Hai</strong></a>
                <a class="list-group-item" href="<?php echo base_url()?>About/Untukmu/" title="For You"> <strong>Untukmu</strong></a>
                 <a class="list-group-item" href="<?php echo base_url()?>About/Doa/" title=""> <strong>Doa</strong></a>

            </div>
        <img style="width: 400px; height: auto; " src="<?php echo base_url() ?>resources/images/image3.png" alt="angry-birds-font" border="0">
    	</div>
    	<div class="col-md-8">
    		<div class="well">
    			<h3 style="text-align: center;">
          <img style="width: 850px; height: auto; " src="<?php echo base_url() ?>resources/images/image9.png" alt="angry-birds-font" border="0">
                <br>
                <img style="width: 700px; height: auto;" src="<?php echo base_url() ?>resources/images/image7.png" alt="angry-birds-font" border="0">
                </h3>
<div class="">
  <ul>
    <li style="background-image: url('http://localhost/belajar_online/resources/images/Chuck.png');"> 
      <div class='info'>
      <p style="font-weight: 700; text-shadow: -3px 1px 2px #45454c;">Semoga kamu sehat dan diberikan umur panjang serta bahagia selalu.. Amin.</p>   
      </div>
    </li>
    <li  style="background-image: url('http://localhost/belajar_online/resources/images/Red.png');">
      <div class='info'>
       <p style="font-weight: 700; text-shadow: -3px 1px 2px #45454c;">Semoga dengan hari mu kedepan berbahagia lagi dan penuh harapan
Meskipun ada sedikit rintangan anggaplah itu cuman suatu cobaan untuk menguatkan iman mu, Amin.</p>   
      </div>
    </li>
    <li style="background-image: url('http://localhost/belajar_online/resources/images/Bomb.png');">
      <div class='info'>
         <p style="font-weight: 700; text-shadow: -3px 1px 2px #45454c;">Tidak ada hadiah dan kado yang paling istimewa selain doa, semoga kau selalu diberi kebahagiaan, diberkahi umur yang panjang, dan semoga selalu di lindungi oleh Allah swt, Amin.</p>   
      </div>
    </li>
    <li style="background-image: url('http://localhost/belajar_online/resources/images/Matilda.png');">
      <div class='info'>
         <p style="font-weight: 700; text-shadow: -3px 1px 2px #45454c;"> saya berharap harimu dipenuhi oleh kehangatan sinar matahari, ribuan senyum dan tawa bahagia, dan cinta yang tidak ternilai harganya.</p>   
      </div>
    </li>
    <li style="background-image: url('http://localhost/belajar_online/resources/images/Stella.png');">
      <div class='info'>
         <p style="font-weight: 700; text-shadow: -3px 1px 2px #45454c;">Semoga aku bisa menjadi pribadi yang lebih baik dan semakin berguna bagi orang di sekitarku, Amin.</p>   
      </div>
    </li>
    <li style="background-image: url('http://localhost/belajar_online/resources/images/Blues.png');">
      <div class='info'>
         <p style="font-weight: 700; text-shadow: -3px 1px 2px #45454c;">Jadikanlah aku termasuk ke dalam hambaMu yang pandai bersyukur terhadap rezeki dan anugrah yang Engkau berikan, Amin.</p>   
      </div>
    </li>
    <li style="background-image: url('http://localhost/belajar_online/resources/images/Hatchling.png');">
      <div class='info'>
         <p style="font-weight: 700; text-shadow: -3px 1px 2px #45454c;">Kupasrahkan setiap tarikan nafasku, setiap langkahku hanya kepadaMu sekarang dan selamanya. Semoga hari ini menjadi sebuah optimisme baru, Amin.</p>   
      </div>
    </li>
    <li style="background-image: url('http://localhost/belajar_online/resources/images/Terence.png');"> 
      <div class='info'>
         <p style="font-weight: 700; text-shadow: -3px 1px 2px #45454c;">21 Tahun....
Ya Allah terima kasih sudah menambah umurku satu tahun lagi Entah berapa umur lagi yang nanti Engkau berikan kepada hambaMu ini tapi yang ku mohon berikan kesempatan untuk berbuat terbaik, Amin.</p>   
      </div>
    </li>
  </ul>
</div>
    		</div>
    	</div>
    </div>

    <script type="text/javascript">
      var nodes  = document.querySelectorAll('li'),
    _nodes = [].slice.call(nodes, 0);

var getDirection = function (ev, obj) {
    var w = obj.offsetWidth,
        h = obj.offsetHeight,
        x = (ev.pageX - obj.offsetLeft - (w / 2) * (w > h ? (h / w) : 1)),
        y = (ev.pageY - obj.offsetTop - (h / 2) * (h > w ? (w / h) : 1)),
        d = Math.round( Math.atan2(y, x) / 1.57079633 + 5 ) % 4;
  
    return d;
};

var addClass = function ( ev, obj, state ) {
    var direction = getDirection( ev, obj ),
        class_suffix = "";
    
    obj.className = "";
    
    switch ( direction ) {
        case 0 : class_suffix = '-top';    break;
        case 1 : class_suffix = '-right';  break;
        case 2 : class_suffix = '-bottom'; break;
        case 3 : class_suffix = '-left';   break;
    }
    
    obj.classList.add( state + class_suffix );
};

// bind events
_nodes.forEach(function (el) {
    el.addEventListener('mouseover', function (ev) {
        addClass( ev, this, 'in' );
    }, false);

    el.addEventListener('mouseout', function (ev) {
        addClass( ev, this, 'out' );
    }, false);
});
    </script>