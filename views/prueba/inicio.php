<?php use yii\helpers\Html; ?>

<!DOCTYPE html>
<html class="side-header photography-demo-3">
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <title>Demo Photography | Porto - Responsive HTML5 Template 5.7.2</title>   

        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Porto - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendor/animate/animate.min.css">
        <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/theme-elements.css">
        <link rel="stylesheet" href="css/theme-blog.css">
        <link rel="stylesheet" href="css/theme-shop.css">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
        <link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="css/skins/skin-photography.css"> 

        <!-- Demo CSS -->
        <link rel="stylesheet" href="css/demos/demo-photography-3.css">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">

        <!-- Head Libs -->
        <script src="vendor/modernizr/modernizr.min.js"></script>

    </head>
    <body class="loading-overlay-showing" data-loading-overlay>
        <div class="loading-overlay">
            <div class="bounce-loader">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>

        <div class="body">
            <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0, 'stickySetTop': '0'}">
                <div class="header-body">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-logo">
                                
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-nav">
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <div class="header-nav-main collapse">
                                             <div align="center"><img alt="Porto" width="90" height="80" src="/img/todotuclub.png"></div>
                                             <br>
                                                    <div align="center"><img alt="Porto" width="180" height="80" src="/img/clubes.png"></div>
                                                    <br>
                                            <nav>
                                                <ul class="nav nav-pills" id="mainNav">
                                    <li class="">
                                            
                                    </li>
                                    <li class="">
                                        <a href="http://ttclub.test/">
                                                            Inicio
                                                        </a>
                                    </li>

                                    <!--<li class="">
                                        <?= Html::a( 'Archivo', $url = ['/archivo/index'] )?>       
                                    </li>-->

                                    <?php if(Yii::$app->user->isGuest){ ?>
                                    
                                    
                                    <?php }else{?>
                                        <li class="">
                                        <?= Html::a( 'Dashboard', $url = ['site/dashboard'] )?> 
                                        </li>
                                     <?php } ?>
                                    

                                    <!-- 
                                    <li class="">
                                        <?= Html::a( 'Registrarse', $url = ['user/registro'] )?>
                                    </li> -->

                                    <li class="">
                                    <?= Html::a( 'Contacto', $url = ['site/contact'] )?>
                                    </li>
                                     
                                                                      
                                    <li class="">
                                    <?php if(Yii::$app->user->isGuest){ ?>
                                    <?= Html::a( 'Iniciar Sesión', $url = ['site/login'] )?>
                                    </li>
                                    <li class="">
                                    <?= Html::a( 'Registrarse', $url = ['user/registro'] )?>
                                    <?php }else{?>
                                    <?= Html::a( 'Cerrar Sesión ('.Yii::$app->user->identity->username .')', ['site/logout'], ['data-method'=>'post'] )?>
                                     <?php } ?>
                                    </li>
                                                                      
                        
                                </ul>
                           </nav>
                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper-header-social-icons">
                        <ul class="header-social-icons social-icons hidden-xs">
                            <li class="social-icons-facebook"><a href="https://www.facebook.com/TodoTuClub/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-icons-instagram"><a href="https://www.instagram.com/explore/locations/330787797313786/iglesia-adventista-del-septimo-dia" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <br>

                  <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="nivo-slider">
                                <div  class="slider-wrapper theme-default">
                                    <div id="nivoSlider"  class="rounded" class="nivoSlider">

                    
                    <?= Html::img('@web/img/slides/banner6.jpg', ['alt' => '', 'data-thumb'=> '@web/img/slides/banner6.jpg' ]); ?>

                   
                    <?= Html::a( Html::img('@web/img/slides/banner7.jpg', ['alt' => '', 'data-thumb'=> '@web/img/slides/banner7.jpg' ]), $url = ['site/index'], $options = ['target' => '_blank'] )?>

                                    </div>
                                    <div id="htmlcaption" class="nivo-html-caption"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Carrusell -->
           <br>
           <br>
                
                
            </div>
                
                <section>
                    <div class="container">
                        <div class="row center pt-xlg mt-xlg pb-lg">
                            <div class="col-md-12">
                                <h1 class="font-weight-normal custom-font-size-1 mb-lg">LOS CONQUISTADORES</h1>
                                <h6><p>Son niños y niñas que oscilan entre los 10 y 15 años, y no hace acepción de personas por su condición social, color o religión. Se reúnen una vez por semana con el fin de desarrollar talentos, habilidades, percepciones y el gusto por la naturaleza.</p>

<p>Este grupo se caracteriza por vibrar con las actividades al aire libre como campamentos, caminatas, escalar montañas, exploración de bosques y cuevas. Entre sus habilidades vale mencionar su conocimiento de sobrevivencia al aire libre en lugares que no son de fácil acceso, saben cómo cocinar al aire libre, encender fuego sin fósforos, entre otros.

Sus capaciades se demuestran con una disciplina a través de un orden cerrado, desarrollan una amplia creatividad para las artes manuales, y combaten el uso de tabaco, alcohol y drogas.</p>

<p>Su estilo de trabajo es siempre en equipo con el único fin de ser personas útiles en la comunidad. Ayudan en momentos de calamidad y participan activamente en campañas comunitarias para ayudar a las personas necesitadas, y en todo lo que realizan promueven el amor a Dios y al país haciendo muchos amigos.

El Club de Conquistadores está presente en más de 160 países, con 90.000 sedes y más de dos millones de participantes. Existen legalmente desde 1950, como un programa oficial de la Iglesia Adventista del Séptimo Día.</p>

<p>Los niños y niñas de cualquier fe religiosa pueden unirse a este movimiento que tiene diversidad, colorido y energía juvenil.</p></h6>
                            </div>
                        </div>
                    </div>
                </section>
                
            
                <section class="section section-quaternary why-choose-us">
                    <div class="container">
                        <div class="row center">
                            <div class="col-md-12">
                                <h2 class="font-weight-normal custom-font-size-1 text-color-light m-none">En esta pagina encontraras...</h2>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <img src="img/demos/photography/about/why-choose-us-1.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-normal text-color-light text-lg">Especilidades</h4>
                                        <p>Podras ver las especiliades que puedes adquirir en las diferentes clases</p>
                                    </div>
                                </div>
                            </div>
                       <div class="col-md-4">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <img src="img/demos/photography/about/why-choose-us-2.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-normal text-color-light text-lg">Estudio</h4>
                                        <p>Podras encontrar todo lo necesario para que puedas estudiar y ayudarte en los examenes que se imparten por tu instructor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-box feature-box-style-2">
                                    <div class="feature-box-icon">
                                        <img src="img/demos/photography/about/why-choose-us-3.png" alt="" class="img-responsive">
                                    </div>
                                    <div class="feature-box-info">
                                        <h4 class="font-weight-normal text-color-light text-lg">Noticias</h4>
                                        <p>Articulos y noticias sobre las actividades que se realizaran.</p>
                                    </div>
                                </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="row center pt-xlg mt-xlg pb-lg">
                            <div class="col-md-12">
                                <h1 class="font-weight-normal custom-font-size-1 mb-lg">UNETE AL CLUB DE CONQUISTADORES</h1>
                                <h5><p>Una experiencia que NUNCA OLVIDARAS, acercate y se un exelente conquistador!!!</p></h5>
                            </div>
                        </div>
                    </div>
                </section>
                

            </div>

            
        </div>

        <!-- Vendor -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
        <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/common/common.min.js"></script>
        <script src="vendor/jquery.validation/jquery.validation.min.js"></script>
        <script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
        <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
        <script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
        <script src="vendor/isotope/jquery.isotope.min.js"></script>
        <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendor/vide/vide.min.js"></script>
        <script src="vendor/jquery-mousewheel/jquery.mousewheel.min.js"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="js/theme.js"></script>
        
        <!-- Current Page Vendor and Views -->
        <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Current Page Vendor and Views -->
        <script src="js/views/view.contact.js"></script>

        <!-- Demo -->
        <script src="js/demos/demo-photography.js"></script>
        
        <!-- Theme Custom -->
        <script src="js/custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="js/theme.init.js"></script>




        <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
            ga('create', 'UA-12345678-1', 'auto');
            ga('send', 'pageview');
        </script>
         -->


    </body>
</html>
