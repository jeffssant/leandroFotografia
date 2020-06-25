<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?=THEME?>/style/images/favicon.png">
  <title><?php bloginfo('name') ?></title>
  <?php wp_head(); ?>

  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body <?php body_class()?>>
<div id="preloader">
    <div class="textload">Carregando</div>
    <div id="status">
      <div class="spinner"></div>
    </div>
  </div>
  <main class="body-wrapper">
    <div class="navbar">
      <div class="navbar-header">
        <div class="basic-wrapper">
          <div class="navbar-brand">
            <a href="<?=get_home_url()?>">
              <img src="#" srcset="<?=THEME?>/style/images/logo.png 1x, <?=THEME?>/style/images/logo@2x.png 2x" class="logo-light" alt="" />
              <img src="#" srcset="<?=THEME?>/style/images/logo-dark.png 1x, <?=THEME?>/style/images/logo-dark@2x.png 2x" class="logo-dark"
                alt="" width="202px;" />
            </a> </div>
          <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
        </div>
        <!-- /.basic-wrapper -->
      </div>
      <!-- /.navbar-header -->
      <nav class="collapse navbar-collapse">
        <ul id="menu-principal" class="nav navbar-nav">
          <li class="current"><a href="#home">Home</a></li>
          <li><a href="#services">Para Você</a></li>
          <li><a href="#portfolio">Para Empreas</a></li>
          <li><a href="#gallery">Galeria</a></li>
          <li><a href="#about">O Fotógrafo</a></li>
          <li><a href="#contact">Contato</a></li>
        </ul>
        <!-- /.navbar-nav -->
      </nav>
      <!-- /.navbar-collapse -->

      <div class="social-wrapper">
        <ul class="social naked">
          <li><a href="#"><i class="icon-s-facebook"></i></a></li>
          <li><a href="https://www.instagram.com/leandrosp.photographer/"><i class="icon-s-instagram"></i></a></li>
          <li><a href="#"><i class="icon-s-youtube"></i></a></li>
          <li><a href="https://br.pinterest.com/leandrophotographer"><i class="icon-s-pinterest"></i></a></li>
          <li><a href="https://twitter.com/LeandroPhotogr2"><i class="fab fa-twitter"></i></a></li>
          
        </ul>
        <!-- /.social -->
      </div>
      <!-- /.social-wrapper -->
    </div>
    <!-- /.navbar -->