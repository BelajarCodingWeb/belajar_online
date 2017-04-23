<!--
 * @package  : BELAJAR PEMROGRAMAN ONLINE.
 * @author   : Badriyatul Muawannah<annahasyim97@gmail.com>
 * @since    : 2017
 * @license  : https://muawannah.com/portofolio/belajar-online/
 -->
<style type="text/css">
.reveal{width:600px;height:350px;box-shadow:0 0 30px -5px grey;background:#fff;margin:calc(50vh - 175px) auto;max-width:96%;position:relative;overflow:hidden}
.revealleft,.revealright{width:50%;background:#dc143c;height:100%;position:absolute;left:0;transition:all 1s}
.revealright{left:50%}
.revealleft.revealed{left:-50%}
.revealright.revealed{left:100%}
.reveal button{opacity:.99;margin:15px;padding:8px 15px;background:#dc143c;border:2px solid #fff;border-radius:6px;color:#fff;cursor:pointer;position:absolute}
.reveal button:hover{background:#fff;color:#dc143c;outline:0;border-color:#dc143c}
.reveal button:focus{outline:0}
h3{font-family:'Montserrat',sans-serif;font-size:30px;text-align:center;color:#dc143c}
p{margin:0 30px;font-family:'Montserrat',sans-serif;color:grey;font-size:.8em;line-height:1.7em}
.ball{width:10px;height:10px;border-radius:100%;position:absolute;bottom:20px;left:50%;background:#dc143c}
#h1,#h3{position:absolute;bottom:-15px;width:300px;height:100%;z-index:100;pointer-events:none;-webkit-transform-origin:center bottom}

</style>
 	<div class="jumbotron" style="padding-top:50px;">
        <div style="padding-left:20px; text-align:left; color:#9e2222">
        <h1><strong><?php echo $title ?></strong></h1>
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
    			<div id="h1" style="left:-150px;-webkit-transform:rotate(7deg)">
</div>
<div id="h3" style="right:-140px;-webkit-transform:rotate(-7deg)"></div>
<div class="reveal">
  <div class="revealleft"></div>
  <div class="revealright"></div>
  <button onclick="$('.revealleft,.revealright').toggleClass('revealed');Launch()">Klik Me Please :)</button>
  <br>
  <br>
  <h3>A SURPRISE! <br>
  Happy Birth Day 21<sup>Th</sup></h3>
    <img style="text-align: center; width: 30%; height: auto" src="<?php echo base_url() ?>resources/images/image9.jpg">
    </div>
    		</div>
    	</div>
    </div>

    <script type="text/javascript">
        function g(a, n) {
  var divs = "";
  for (var s = 0; s < 50; s++) {
    divs += '<div class="div ball"  id="' + getRandom() + '"></div>';
  }
  document.getElementById(a).innerHTML += divs;
}
g('h1');
g('h3');

function f(x, n, a) {
  var t = 0;
  setInterval(function() {
    if (t < 50) {
      x.style.bottom = (46 * t * n - t * t) + 20 + 'px';
      x.style.height = 10 - t / 4.6 + 'px';
      x.style.width = 10 - t / 4.6 + 'px';
      if (t > 15) {
        x.style.left = (a * t + 150) + 'px';
        x.style.bottom = (46 * t * n * n - t * t) + 20 + 'px';
      }
      t += 1.3
    }
  }, 50)
}

function Launch() {
  if ($('.revealleft,.revealright').hasClass('revealed')) {
    var i;
    for (i = 0; i < 150; i++) {
      var x = document.getElementsByClassName('div')[i];
      var a = parseInt(x.id);
      x.style.left = '150px';
      f(x, 1 + ((Math.random() * 5) + 1) / 100, a)
    }
  }
}

function getRandom() {
  return Math.random() * 10 - 5
}
    </script>