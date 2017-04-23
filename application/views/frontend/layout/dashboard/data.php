<style type="text/css">
  .timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}
.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 50%;
  margin-left: -1.5px;
}
.timeline > li {
  margin-bottom: 20px;
  position: relative;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li > .timeline-panel {
  width: 50%;
  float: left;
  border: 1px solid #d4d4d4;
  border-radius: 2px;
  padding: 20px;
  position: relative;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline > li.timeline-inverted + li:not(.timeline-inverted),
.timeline > li:not(.timeline-inverted) + li.timeline-inverted {
margin-top: -60px;
}

.timeline > li:not(.timeline-inverted) {
padding-right:90px;
}

.timeline > li.timeline-inverted {
padding-left:90px;
}
.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  right: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-left: 15px solid #ccc;
  border-right: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}
.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  right: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-left: 14px solid #fff;
  border-right: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}
.timeline > li > .timeline-badge {
  color: #fff;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 50%;
  margin-left: -25px;
  background-color: #999999;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: right;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  border-left-width: 0;
  border-right-width: 15px;
  left: -15px;
  right: auto;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  border-left-width: 0;
  border-right-width: 14px;
  left: -14px;
  right: auto;
}
.timeline-badge.primary {
  background-color: #2e6da4 !important;
}
.timeline-badge.success {
  background-color: #3f903f !important;
}
.timeline-badge.warning {
  background-color: #f0ad4e !important;
}
.timeline-badge.danger {
  background-color: #d9534f !important;
}
.timeline-badge.info {
  background-color: #5bc0de !important;
}
.timeline-title {
  margin-top: 0;
  color: inherit;
}
.timeline-body > p,
.timeline-body > ul {
  margin-bottom: 0;
}
.timeline-body > p + p {
  margin-top: 5px;
}

.glyphicon {
    position: relative;
    top: 15px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
</style>


<!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron" style="padding-top:50px; background-image:url(http://localhost/belajar_online/resources/images/Back.png);
        background-repeat: no-repeat;
        background-size: 100%;
        height: 500px;">
        <div style="text-align:center; color:white; padding-top: 100px">
        <h3><strong>Belajar Pemrograman Online</strong></h3>
        <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>
          <a style="border-radius:50px" class="btn btn-success btn-outline" href="#" role="button">OK!, Saya Daftar Sekarang</a>
          <a style="border-radius:50px" class="btn btn-danger btn-outline" href="#" role="button">OK!, Belajar Mulai Sekarang</a>
        </p>
      </div>
      </div>

      <div class="container" style="text-align:center">
        <h2>Tentukan Langkahmu Sekarang</h2>
      </div>
      
    <div class="container" style="padding-top:50px">
      <div class="row">
      	<div class="col-md-6">
      		<div class="panel panel-default">
             <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <img class="img img-circle float" style="height:100px; width:auto" src="<?php echo base_url()?>resources/images/icon/ruby.png">
                </div>
                <div class="col-md-8">
                <h4 style="padding-left: 25px;text-align: left;">
                <a href="#"> RUBY</a>
                </h4>
                  <hr>
                  Master your ruby skills and increase your rails street cred by learning to build dynamic, sustainable applications for the web.
                </div>
              </div>
           </div>
         </div>
      </div>
      	<!-- di bagi 2 kolom -->
      	<div class="col-md-6">
      		<div class="panel panel-default">
             <div class="panel-body">
             <div class="row">
                <div class="col-md-4">
                  <img class="img img-circle" style="height:100px; width:auto" src="<?php echo base_url()?>resources/images/icon/html.png">
                </div>
                <div class="col-md-8">
                  <h4 style="padding-left: 25px;text-align: left;">
                <a href="#"> HTML</a>
                </h4>
                  <hr>
                  learn the fundamentals of design, front-end development, and crafting user experiences that are easy on the eyes
                </div>
              </div>
           </div>
         </div>
      </div>
      <!-- di bagi 3 kolom -->
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <img class="img img-circle" style="height:100px; width:auto" src="<?php echo base_url()?>resources/images/icon/ci.png">
                  </div>
                  <div class="col-md-8">
                   <h4 style="padding-left: 25px;text-align: left;">
                <a href="#"> CODEIGNITER</a>
                </h4>
                  <hr>
                  CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create web applications
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- di bagi 4 kolom -->
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                  <img class="img img-circle" style="height:100px; width:auto" src="<?php echo base_url()?>resources/images/icon/bootstrap.jpg">
                  </div>
                  <div class="col-md-8">
                   <h4 style="padding-left: 25px;text-align: left;">
                <a href="#"> BOOTSTRAP</a>
                </h4>
                  <hr>
                  Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web.
              </div>
            </div>
          </div>
        </div>
      </div>
        
        </div>
          </div>
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <div class="panel panel-default">
                    <div class="panel-body">
                    <div class="row">
                    <div class="col-md-4">
                    <img class="img img-circle" style="height:100px; width:auto" src="<?php echo base_url()?>resources/images/icon/js.png">
                    </div>
                    <div class="col-md-8">
                    <h4 style="padding-left: 25px;text-align: left;">
                <a href="#"> JAVASCRIPT</a>
                </h4>
                  <hr>
                 Begin learning here by typing in your first name surrounded by quotation marks, and ending with a semicolon. 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="container">
    <div class="page-header">
        <h1 id="timeline" style="text-align: center;">Manfaat Program Kami</h1>
    </div>
    <ul class="timeline">
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-facetime-video"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Video Tutorial</h4>
              <hr>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-briefcase"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Kurikulum Berorientasi Karir</h4>
              <hr>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-thumbs-up"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Bimbingan Para Ahli</h4>
              <hr>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
         <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-wrench"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Praktik Langsung</h4>
              <hr>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
            </div>
          </div>
        </li>
    </ul>
</div>
<div class="container">
              <div class="row">
                <div style="text-align:center;" class="col-md-6 col-md-offset-3">
                <h2>Profesional Partner Kami</h2>
                <p >
                  Code School has impacted over a million students from 237 countries. 
                  Read how these students learn by doing with Code School courses and screencasts.
                  </p>
        </div>
      </div>

<div class="container" style="padding-top:60px">
  <div class="row">
    <div class="col-md-4">
      <div class="row">
      <div class="col-md-4">
        <img class="img-circle" style="height:100px; width:auto" src="<?php echo base_url()?>resources/images/avatar/img_avatar2.png">
      </div>
      <div class="col-md-8" style="padding-top:0px">
      <h4 class="card-title">Badriyatul Muawannah</h4>
                        <div class="card-text">
                            Profesional System Designer
                        </div>
        <div class="card-footer">
                        <small style="padding-right: 40px" class="float-left">Last updated 3 mins ago</small>
                        <button class="btn btn-info float-right btn-sm"><i class="fa fa-check"></i> Follow</button>
                    </div>
      </div>
      </div>
    </div>
        <div class="col-md-4">
            <div class="row">
      <div class="col-md-4">
        <img class="img-circle" style="height:100px; width:auto" src="<?php echo base_url()?>resources/images/avatar/img_avatar2.png">
      </div>
      <div class="col-md-8" style="padding-top:0px">
         <h4 class="card-title">Faisal Mahadi</h4>
                        <div class="card-text">
                            Profesional Frontend Developer.
                        </div>
        <div class="card-footer">
                        <small style="padding-right: 40px" class="float-left">Last updated 3 mins ago</small>
                        <button class="btn btn-info float-right btn-sm"><i class="fa fa-check"></i> Follow</button>
                    </div>
      </div>
      </div>
    </div>
        <div class="col-md-4">
            <div class="row">
      <div class="col-md-4">
        <img class="img-circle" style="height:100px; width:auto" src="<?php echo base_url()?>resources/images/avatar/img_avatar2.png">
      </div>
      <div class="col-md-8" style="padding-top:0px">
         <h4 class="card-title">Fika Ridaul Maulayya</h4>
                        <div class="card-text">
                            Profesional Backend Developer.
                        </div>
        <div class="card-footer">
                        <small style="padding-right: 40px" class="float-left">Last updated 3 mins ago</small>
                        <button class="btn btn-info float-right btn-sm"><i class="fa fa-check"></i> Follow</button>
                    </div>
      </div>
      </div>
    </div>
    </div>
  </div>
</div>
<br>
<br>
 <div class="jumbotron" style="padding-top:10px; background-color: #2786c9;
        height: 500px;">
        <div style="text-align:center; color:white; padding-top: 150px;">
        <h1><strong>Siap Belajar Sekarang?</strong></h1>
        <p>Tentukan Sekarang dan Jadilah Developer Handal</p>
        <p>
          <a style="border-radius:50px" class="btn btn-lg btn-success" href="../../components/#navbar" role="button">OK!, Saya Daftar Sekarang</a>
        </p>
      </div>
      </div>