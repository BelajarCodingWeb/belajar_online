<style type="text/css">
	@import 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300';

*{
	font-family: 'Source Sans Pro', sans-serif;
	box-sizing: border-box;
	font-weight: 300;
	padding: 0;
	margin: 0;
}

.btn-wrapper{
	position: fixed;
	top: calc(50% - 22px);
	left: 0;
	width: 100%;
	text-align: center;
}

.btn{
	display: inline-block;
	box-shadow: none;
	appearance: none;
	border: 0;
	outline: 0;
	background-color: rgb(0, 240, 168);
	height: 45px;
	line-height: 42px;
	padding: 0 30px;
	font-size: 20px;
	border-radius: 30px;
	color: rgb(40, 45, 50);
	cursor: pointer;
	transition: all .5s;
	transition-timing-function: cubic-bezier(.2, 3, .4, 1);
	user-select: none;
	
	&:hover{
		transform: scale(1.1, 1.1);
	}
	
	&:active{
		transform: scale(1.05, 1.05);
	}
}
</style>

<div class="btn-wrapper">
	<button type="button" class="btn">Hai, My Name Anna :)</button>
</div>
<canvas id="canvas"></canvas>

<script type="text/javascript">
	var c = document.getElementById('canvas');
var ctx = c.getContext('2d');
var btn = document.getElementsByClassName('btn')[0];

c.width = window.innerWidth;
c.height = window.innerHeight;

var mouseX = c.width / 2;
var mouseY = c.height / 2;
var txtPosition = 0;

var particles = [];

btn.addEventListener('mouseup', function(e){
	mouseX = e.clientX;
	mouseY = e.clientY;
	
	createParticles();
	changeText();
});

setTimeout(function(){
	createParticles();
}, 250);

draw();

function draw(){
	
	drawBg();
	incParticles();
	drawParticles();
	
	window.requestAnimationFrame(draw);
	
}

function drawBg(){
	ctx.rect(0, 0, c.width, c.height);
	ctx.fillStyle = "rgb(40, 45, 50)";
	ctx.fill();
}

function drawParticles(){
	for(i = 0; i < particles.length; i++){
		ctx.beginPath();
		ctx.arc(particles[i].x,
					 particles[i].y,
					 particles[i].size,
					 0,
					 Math.PI * 2);
		ctx.fillStyle = particles[i].color;
		ctx.closePath();
		ctx.fill();
	}
}

function incParticles(){
	for(i = 0; i < particles.length; i++){
		particles[i].x += particles[i].velX;
		particles[i].y += particles[i].velY;
		
		particles[i].size = Math.max(0, (particles[i].size - .05));
		
		if(particles[i].size === 0){
			particles.splice(i, 1);
		}
	}
}

function createParticles(){
	for(i = 0; i < 30; i++){
		particles.push({
			x: mouseX,
			y: mouseY,
			size: parseInt(Math.random() * 10),
			color: 'rgb(' + ranRgb() + ')',
			velX: ranVel(),
			velY: ranVel()
		});
	}
}

function ranRgb(){
	var colors = [
		'255, 122, 206',
		'0, 157, 255',
		'0, 240, 168',
		'0, 240, 120'
	];
	
	var i = parseInt(Math.random() * 10);
	
	return colors[i];
}

function ranVel(){
	var vel = 0;
	
	if(Math.random() < 0.5){
		vel = Math.abs(Math.random());
	} else {
		vel = -Math.abs(Math.random());
	}
			
	return vel;
}

// Text

var btnTxt = [
	'Klik Me ^_^','Ouh -_-',
	'Huft :(','Welk :p',
	'Hai!','Aku suka saat bersamamu :)',
	'Tidak Terasa','Jika Hari Ini',
	'Menjadi',
	'Hari Yang',
	'Membuat Semua Orang',
	'Ikut Merasakan Bahagia',
	'Yap, Hari Bertambahnya',
	'1 Tahun Usiaku',
	'Semoga Dengan',
	'Bertambahnya Usiaku',
	'Jadi Lebih',
  'Baik :)',
	'Dewasa :)',
	'Percaya Diri :)',
	'Gak Gampang BT :)',
  'Gak Gampang Marah :)',
  'Nurut Sama Orang Tua :)',
  'Faham Jaga Kesehatan :)',
  'Semangat Untuk Belajar :)',
  'Taat Beribadah :)',
  'Pasti Tuhan Mengabulkan',
  'Amiin',
	'Made it with ♥',
  'by "----"',
  'Maaf Hanya Sebatas Ini :)',
];

function changeText(){
	if(txtPosition !== btnTxt.length){
		btn.innerHTML = btnTxt[txtPosition];
		txtPosition += 1;
	}
}
</script>
