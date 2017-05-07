<!DOCTYPE html>
<html lang="es">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Segimiento estudiantes</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon -->
    <link href="/rsc/img/favicon.ico" rel="Shortcut icon">
    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="/css/ie8.min.css">
    <link type="text/css" rel="stylesheet" href="/css/blocks.min.css">
    <link type="text/css" rel="stylesheet" href="/css/plugins.min.css">
    <link type="text/css" rel="stylesheet" href="/css/style.min.css">
    <link type="text/css" rel="stylesheet" href="/css/app.min.css">
    <link type="text/css" rel="stylesheet" href="/css/shop.plugins.min.css">
    <link type="text/css" rel="stylesheet" href="/css/shop.blocks.min.css">
    <link type="text/css" rel="stylesheet" href="/css/style-switcher.min.css">
    <link type="text/css" rel="stylesheet" href="/css/shop.style.min.css">
    <link type="text/css" rel="stylesheet" href="/css/header-v6.min.css">
    <link type="text/css" rel="stylesheet" href="/css/header-v8.min.css">
    <link type="text/css" rel="stylesheet" href="/css/header.min.css">
    <link type="text/css" rel="stylesheet" href="/css/footer-v1.min.css">
    <link type="text/css" rel="stylesheet" href="/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="/css/line-icons.min.css">
    <link type="text/css" rel="stylesheet" href="/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="/css/owl.carousel.min.css">
    <link type="text/css" rel="stylesheet" href="/css/horizontal-parallax.min.css">
    <link type="text/css" rel="stylesheet" href="/css/layerslider.min.css">
    <link type="text/css" rel="stylesheet" href="/css/ured.min.css">
    <link type="text/css" rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css">
    <link type="text/css" rel="stylesheet" href="/css/sky-forms.min.css">
    <link type="text/css" rel="stylesheet" href="/css/custom-sky-forms.min.css">
    <link type="text/css" rel="stylesheet" href="/css/profile.min.css">
    <link type="text/css" rel="stylesheet" href="/css/brand-buttons.min.css">
    <link type="text/css" rel="stylesheet" href="/css/brand-buttons-inversed.min.css">
    <link type="text/css" rel="stylesheet" href="/css/hover.min.css">
    <link type="text/css" rel="stylesheet" href="/css/custom-hover-effects.min.css">
    <link type="text/css" rel="stylesheet" href="/css/custom.min.css">
    <link type="text/css" rel="stylesheet" href="/css/pgwslider.min.css">
    <link type="text/css" rel="stylesheet" href="/css/ufps.css">
    <link type="text/css" rel="stylesheet" href="/plugins/datatables/dataTables.bootstrap.css">
    dataTables.bootstrap.css

    <?php echo $__env->yieldContent("style"); ?>
  </head>
  <body class="header-fixed boxed-layout" style="position: relative; min-height: 100%; top: 0px;">
    <!--Contenido-->
    <div class="wrapper">
      <div id="menu-principal" class="header-v6 header-white-transparent header-sticky" style="position: relative;">
        <div id="barra-superior" class="header-v8">
          <!-- Topbar blog -->
          <div class="blog-topbar">

            <div class="container">
              <div class="row">
                <div class="col-sm-7 col-xs-7">
                 <div class="topbar-toggler" style="font-size: 10px; color: #eee; letter-spacing: 1px; text-transform: uppercase;"><span class="fa fa-angle-down"></span> PERFILES</div>
                   <ul class="topbar-list topbar-menu">
                     <li><a href="https://ww2.ufps.edu.co/universidad/perfiles/aspirantes/952" target="_blank"><i class="fa fa-users"></i>Aspirantes</a></li>
                     <li><a href="https://ww2.ufps.edu.co/universidad/perfiles/estudiantes/953" target="_blank"><i class="fa fa-user"></i>Estudiantes</a></li>
                     <li><a href="https://ww2.ufps.edu.co/universidad/perfiles/egresados/954" target="_blank"><i class="fa fa-graduation-cap"></i>Graduados</a></li>
                     <li><a href="https://docentes.ufps.edu.co/" target="_blank"><i class="fa fa-user-circle"></i>Docentes</a></li>
                     <li class="cd-log_reg hidden-sm hidden-md hidden-lg"><strong><a class="cd-signup" href="javascript:void(0);">Lenguaje</a></strong>
                        <ul class="topbar-dropdown">
                          <li><a href="#">Inglés</a></li>
                          <li><a href="#">Español</a></li>
                        </ul>
                      </li>
                   </ul>
                </div>
                <div class="col-sm-5 col-xs-5 clearfix">
                  <ul class="topbar-list topbar-log_reg pull-right visible-sm-block visible-md-block visible-lg-block">

                    <li class="cd-log_reg home">
                      <a href="#"><?php echo e(session('usuario')['tipo']); ?> : <?php echo e(session('usuario')['nombre']); ?></a>
                    </li>
                  </ul>
                </div>
              </div><!--/end row-->
            </div><!--/end container-->
          </div>
        <!-- End Topbar blog -->
        </div>
        <div class="header-v8 img-logo-superior" style="background-color: #aa1916;">
          <!--=== Parallax Quote ===-->
          <div class="parallax-quote parallaxBg" style="padding: 30px 30px;">
            <div class="parallax-quote-in" style="padding: 0px;">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-5">
                  <a href="index-2.html">
                    <img id="logo-header" src="/rsc/img/logo_vertical_ingsistemas_ht180.png" alt="Logo Programa de Ingeniería de Sistemas" style="max-height:180px;">
                  </a>
                </div>
                <div class="col-md-2 col-ms-1 col-xs-2 pull-right">
                  <a href="http://www.ufps.edu.co/"><img class="header-banner" src="/rsc/img/logo_ufps.png" style="max-height:160px;" alt="Escudo de la Universidad Francisco de Paula Santander" ></a>
                </div>
              </div>
            </div>
          </div>
          <!--=== End Parallax Quote ===-->
        </div><!--/end header-v8-->
        <div class="menu-responsive">
          <!-- Logo -->
          <a class="logo logo-responsive" href="index-2.html" style="margin-left:5px;">
            <img src="/rsc/img/horizontal_logo_ingsistemas_pequeno.png" alt="Logo">
          </a>
          <!-- End Logo -->
          <!-- Toggle get grouped for better mobile display -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="sr-only">Cambiar navegaci&oacute;n</span>
            <span class="fa fa-bars"></span>
          </button>
          <!-- End Toggle -->
        </div>
        <!-- Navbar -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
          <div class="containermenu">
<ul class="nav navbar-nav" style="float:left;">

  <li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Docentes</a>
    <ul class="dropdown-menu">
      <li><a href="/agregar-docente">Registrar </a></li>
      <li><a href="/listar-docente">Listar</a></li>
    </ul>
  </li>

  <li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Estudiantes</a>
    <ul class="dropdown-menu">
      <li><a href="/agregar-estudiante">Registrar </a></li>
      <li><a href="/listar-estudiante">Listar</a></li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Empresas</a>
    <ul class="dropdown-menu">
      <li><a href="/agregar-empresa">Registrar </a></li>
      <li><a href="/listar-empresa">Listar</a></li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Convenios</a>
    <ul class="dropdown-menu">
      <li><a href="/agregar-convenio">Registrar </a></li>
      <li><a href="/listar-convenio">Listar</a></li>
    </ul>
  </li>

  <li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Pasantias</a>
    <ul class="dropdown-menu">
      <li><a href="/agregar-pasantia">Registrar </a></li>
      <li><a href="/listar-pasantia">Listar</a></li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Practica</a>
    <ul class="dropdown-menu">
      <li><a href="/agregar-practica">Registrar </a></li>
      <li><a href="/listar-practica">Listar</a></li>
    </ul>
  </li>


  <li class="nodropdown">
    <a href="#" class="dropdown-toggle disabled" data-toggle="dropdown" target="_blank">Información</a>
  </li>


</ul>
          </div>
        </div><!--/navbar-collapse-->
      </div><!--header-v6-->

<!-- FORMULARIO -->
<?php echo $__env->yieldContent("content"); ?>

<!--
  <div class="container content-prin profile">
    <div class="row margin-top-10">
      <div class="headline-center-v2 headline-center-v2-dark margin-bottom-10">
        <h1 class="shop-h1" style="font-size: 30px;"><b>Titulo del </b></h1>
        <span class="bordered-icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
      </div>
      <div class="col-md-12">
        <div class="row equal-height-columns margin-bottom-10">
          <div class="container">
               FORMULARIO CREO QUE AQUI
          </div>
        </div>
      </div>
    </div>
  </div>
-->
<!--fin FORMULARIO -->

</div>
<!-- FIN EVENTOS -->


  <div class="owl-clients-v1" style="background-color:#EEE; padding: 5px;">
    <div class="item">
      <a href="http://www.mineducacion.gov.co/" target="_blank"><img src="/rsc/img/mineducacion.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.gobiernoenlinea.gov.co/" target="_blank"><img src="/rsc/img/gobiernoenlinea.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.contraloriagen.gov.co/" target="_blank"><img src="/rsc/img/contraloria.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.procuraduria.gov.co/" target="_blank"><img src="/rsc/img/procuraduriageneraldelanacion.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.urnadecristal.gov.co/" target="_blank"><img src="/rsc/img/urnadecristal.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.icfes.gov.co/" target="_blank"><img src="/rsc/img/icfes.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.icetex.gov.co/" target="_blank"><img src="/rsc/img/icetex.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.universia.net.co/" target="_blank"><img src="/rsc/img/universia.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.colombiaaprende.edu.co/" target="_blank"><img src="/rsc/img/colombiaaprende.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.renata.edu.co/" target="_blank"><img src="/rsc/img/renata-logo.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.colciencias.gov.co/" target="_blank"><img src="/rsc/img/COLCIENCIAS.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.cna.gov.co/" target="_blank"><img src="/rsc/img/cna.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.mineducacion.gov.co/sistemasdeinformacion/1735/propertyvalue-41698.html" target="_blank"><img src="/rsc/img/SACES.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.mineducacion.gov.co/sistemasdeinformacion/1735/w3-propertyname-2672.html" target="_blank"><img src="/rsc/img/SNIES.png" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.mineducacion.gov.co/sistemasdeinformacion/1735/w3-propertyname-2895.html" target="_blank"><img src="/rsc/img/SPADIES.png" class="hover-shadow" alt=""></a>
    </div>
  </div>
  <script type="text/javascript" src="/js/jquery.min.js"></script>
  <script type="text/javascript" src="/js/jquery-migrate.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/pgwslider.min.js"></script>
  <script type="text/javascript" src="/js/back-to-top.min.js"></script>
  <script type="text/javascript" src="/js/smoothScroll.min.js"></script>
  <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="/js/sequence.jquery-min.js"></script>
  <script type="text/javascript" src="/js/greensock.js"></script>
  <script type="text/javascript" src="/js/layerslider.transitions.js"></script>
  <script type="text/javascript" src="/js/layerslider.kreaturamedia.jquery.js"></script>
  <script type="text/javascript" src="/js/custom.min.js"></script>
  <script type="text/javascript" src="/js/app.min.js"></script>
  <script type="text/javascript" src="/js/owl-carousel.min.js"></script>
  <script type="text/javascript" src="/js/datepicker.min.js"></script>
  <script type="text/javascript" src="/js/validation.min.js"></script>
  <script type="text/javascript" src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script type="text/javascript" src="/js/owl-recent-works.min.js"></script>
  <script type="text/javascript" src="/js/wow.min.js"></script>
  <script type="text/javascript" src="/js/ufps.js"></script>
  <script type="text/javascript" src="/js/base.js"></script>


  <!-- Datepicker-->
  <script src="<?php echo e(URL::asset('plugins/datepicker/bootstrap-datepicker.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('plugins/colorpicker/bootstrap-colorpicker.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('plugins/timepicker/bootstrap-timepicker.min.js')); ?>"></script>

<!-- DataTables -->
<script src="<?php echo e(URL::asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script>

  <?php echo $__env->yieldContent("script"); ?>

<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
  <!--[if lt IE 9]>
    <script src="js/respond.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/placeholder-IE-fixes.js"></script>
  <![endif]-->
  <!-- For Background Image -->
    <!--<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>  -->
    <!--<script type="text/javascript">
          $.backstretch([
            "assets/rsc/img/bg/13.jpg"
          ])
        </script>  -->
  <!-- End For Background Image -->
  </body>

<!-- Mirrored from ingsistemas.ufps.edu.co/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Apr 2017 02:42:35 GMT -->
</html>
