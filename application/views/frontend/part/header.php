<!--
 * @package  : BELAJAR PEMROGRAMAN ONLINE.
 * @author   : Badriyatul Muawannah<annahasyim97@gmail.com>
 * @since    : 2017
 * @license  : https://muawannah.com/portofolio/belajar-online/
 -->
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Belajar Online</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>resources/backend/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/backend/font-awesome/css/font-awesome.css">
    <script src="<?php echo base_url() ?>resources/public/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>resources/public/js/bootstrap.min.js">       
    </script>
   </head>
   <!-- Static navbar -->
    <nav class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="row">
      <div class="col-md-4" style="padding-top: 15px">
        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo base_url();?>" title=""><img src="<?php echo base_url(); ?>resources/images/logo-code-school.svg" alt=""></a>
    </div>
      </div>
      <div class="col-md-8"  style="padding-top: 15px">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="nav navbar-nav navbar-right">
        <a style="border-radius: 0px" class="btn btn-success" href="<?php echo base_url() ?>Courses/"> <i class="fa fa-external-link-square"></i> Courses</a>
        <a style="border-radius: 0px" class="btn btn-warning" href="<?php echo base_url() ?>About/"> <i class="fa fa-home"></i> About</a>
        <a style="border-radius: 0px" class="btn btn-danger" href="<?php echo base_url() ?>frontend/login"> <i class="fa fa-sign-in"></i> Login</a>
      </div>
    </div><!-- /.navbar-collapse -->
      </div>
    </div>
</nav>
