<!DOCTYPE html>
<html lang="es">
@php
  $base = "";

@endphp
<!--http://gidis.ufps.edu.co/segestudiante/public/-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Segimiento estudiantes</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon -->
    <link href="{{URL::asset('rsc/img/favicon.ico')}}" rel="Shortcut icon">
    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/ie8.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/blocks.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/plugins.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/style.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/app.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/shop.plugins.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/shop.blocks.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/style-switcher.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/shop.style.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/header-v6.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/header-v8.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/header.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/footer-v1.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/animate.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/line-icons.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/horizontal-parallax.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/layerslider.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/ured.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/jquery.mCustomScrollbar.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/sky-forms.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/custom-sky-forms.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/profile.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/brand-buttons.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/brand-buttons-inversed.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/hover.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/custom-hover-effects.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/custom.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pgwslider.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/ufps.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('plugins/datatables/dataTables.bootstrap.css')}}">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{URL::asset('plugins/bootstrap-select/bootstrap-select.min.css')}}">

    @yield("style")
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

                   </ul>
                </div>
                <div class="col-sm-5 col-xs-5 clearfix">
                  <ul class="topbar-list topbar-log_reg pull-right visible-sm-block visible-md-block visible-lg-block">

                    <li class="cd-log_reg home">
                      {{session('usuario')['tipo']}} : {{session('usuario')['nombre']}}
                    </li>
                    <li class="cd-log_reg home">
                      <a href="{{URL::asset('salir')}}">Salir</a>
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
                    <img id="logo-header" src="{{URL::asset('rsc/img/logo_vertical_ingsistemas_ht180.png')}}" alt="Logo Programa de Ingeniería de Sistemas" style="max-height:180px;">
                  </a>
                </div>
                <div class="col-md-2 col-ms-1 col-xs-2 pull-right">
                  <a href="http://www.ufps.edu.co/"><img class="header-banner" src="{{URL::asset('rsc/img/logo_ufps.png')}}" style="max-height:160px;" alt="Escudo de la Universidad Francisco de Paula Santander" ></a>
                </div>
              </div>
            </div>
          </div>
          <!--=== End Parallax Quote ===-->
        </div><!--/end header-v8-->
        <div class="menu-responsive">
          <!-- Logo -->
          <a class="logo logo-responsive" href="index-2.html" style="margin-left:5px;">
            <img src="{{URL::asset('rsc/img/horizontal_logo_ingsistemas_pequeno.png')}}" alt="Logo">
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
  @if(session('usuario')['tipo']=='administrador')
    <li class="dropdown">
      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Docentes</a>
      <ul class="dropdown-menu">
        <li><a href="{{URL::asset('agregar-docente')}}">Registrar </a></li>
        <li><a href="{{URL::asset('listar-docente')}}">Listar</a></li>
      </ul>
    </li>
  @endif

  <li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Estudiantes</a>
    <ul class="dropdown-menu">
      <li><a href="{{URL::asset('agregar-estudiante')}}">Registrar </a></li>
      <li><a href="{{URL::asset('listar-estudiante')}}">Listar</a></li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Tutor</a>
    <ul class="dropdown-menu">
      <li><a href="{{URL::asset('agregar-tutor')}}">Registrar </a></li>
      <li><a href="{{URL::asset('listar-tutor')}}">Listar</a></li>
    </ul>
  </li>

  @if(session('usuario')['tipo']=='administrador')
  <li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Empresas</a>
    <ul class="dropdown-menu">
      <li><a href="{{URL::asset('agregar-empresa')}}">Registrar </a></li>
      <li><a href="{{URL::asset('listar-empresa')}}">Listar</a></li>
    </ul>
  </li>

  <li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Convenios</a>
    <ul class="dropdown-menu">
      <li><a href="{{URL::asset('agregar-convenio')}}">Registrar </a></li>
      <li><a href="{{URL::asset('listar-convenio')}}">Listar</a></li>
    </ul>
  </li>
  @endif
  <li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Pasantias</a>
    <ul class="dropdown-menu">
      <li><a href="{{URL::asset('agregar-pasantia')}}">Registrar </a></li>
      <li><a href="{{URL::asset('listar-pasantia')}}">Listar</a></li>
    </ul>
  </li>
  <li class="dropdown">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Practica</a>
    <ul class="dropdown-menu">
      <li><a href="{{URL::asset('agregar-practica')}}">Registrar </a></li>
      <li><a href="{{URL::asset('listar-practica')}}">Listar</a></li>
    </ul>
  </li>
  <li class="nodropdown">
    <a href="{{URL::asset('estadisticas')}}" class="dropdown-toggle disabled" data-toggle="dropdown" >Estadisticas</a>
  </li>


  <li class="nodropdown">
    <a href="{{URL::asset('informe')}}" class="dropdown-toggle disabled" data-toggle="dropdown" >Informe</a>
  </li>


</ul>
          </div>
        </div><!--/navbar-collapse-->
      </div><!--header-v6-->

<!-- FORMULARIO -->
@yield("content")

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
      <a href="http://www.mineducacion.gov.co/" target="_blank"><img src="{{URL::asset('rsc/img/mineducacion.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.gobiernoenlinea.gov.co/" target="_blank"><img src="{{URL::asset('rsc/img/gobiernoenlinea.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.contraloriagen.gov.co/" target="_blank"><img src="{{URL::asset('rsc/img/contraloria.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.procuraduria.gov.co/" target="_blank"><img src="{{URL::asset('rsc/img/procuraduriageneraldelanacion.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.urnadecristal.gov.co/" target="_blank"><img src="{{URL::asset('rsc/img/urnadecristal.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.icfes.gov.co/" target="_blank"><img src="{{URL::asset('rsc/img/icfes.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.icetex.gov.co/" target="_blank"><img src="{{URL::asset('rsc/img/icetex.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.universia.net.co/" target="_blank"><img src="{{URL::asset('rsc/img/universia.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.colombiaaprende.edu.co/" target="_blank"><img src="{{URL::asset('rsc/img/colombiaaprende.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.renata.edu.co/" target="_blank"><img src="{{URL::asset('rsc/img/renata-logo.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.colciencias.gov.co/" target="_blank"><img src="{{URL::asset('rsc/img/COLCIENCIAS.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.cna.gov.co/" target="_blank"><img src="{{URL::asset('rsc/img/cna.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.mineducacion.gov.co/sistemasdeinformacion/1735/propertyvalue-41698.html" target="_blank"><img src="{{URL::asset('rsc/img/SACES.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.mineducacion.gov.co/sistemasdeinformacion/1735/w3-propertyname-2672.html" target="_blank"><img src="{{URL::asset('rsc/img/SNIES.png')}}" class="hover-shadow" alt=""></a>
    </div>
    <div class="item">
      <a href="http://www.mineducacion.gov.co/sistemasdeinformacion/1735/w3-propertyname-2895.html" target="_blank"><img src="{{URL::asset('rsc/img/SPADIES.png')}}" class="hover-shadow" alt=""></a>
    </div>
  </div>
  <script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery-migrate.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/pgwslider.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/back-to-top.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/smoothScroll.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/sequence.jquery-min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/greensock.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/layerslider.transitions.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/layerslider.kreaturamedia.jquery.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/custom.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/app.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/owl-carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/datepicker.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/validation.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/owl-recent-works.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/wow.min.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/ufps.js')}}"></script>
  <script type="text/javascript" src="{{URL::asset('js/base.js')}}"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="{{URL::asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src="{{URL::asset('plugins/bootstrap-select/i18n/defaults-es_ES.min.js')}}"></script>


  <!-- Datepicker-->
  <script src="{{URL::asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
  <script src="{{URL::asset('plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
  <script src="{{URL::asset('plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>

<!-- DataTables -->
<script src="{{URL::asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

  @yield("script")

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
