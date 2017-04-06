<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Belajar Online</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('resources/backend/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('resources/backend/font-awesome/css/font-awesome.css');?>">
  </head>

   <!-- Static navbar -->
    <nav style="padding-top:5px; box-shadow: 0px 5px 20px #f2f7fd; height:10%" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav nav-pills">
            <li class="active"><a class="btn btn-success" href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          
          <ul class="nav nav-pills pull-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>