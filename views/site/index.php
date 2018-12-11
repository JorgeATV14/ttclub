<?php use yii\helpers\Html; 
use app\components\widgets\krnpanel\Krnpanel;

?>
    <?php require_once('layout_slider.php'); ?>

    <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Porto - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CRoboto+Slab:300,400,700" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendor/animate/animate.min.css">
        <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
        <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/regular.css" integrity="sha384-z3ccjLyn+akM2DtvRQCXJwvT5bGZsspS4uptQKNXNg778nyzvdMqiGcqHVGiAUyY" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/brands.css" integrity="sha384-QT2Z8ljl3UupqMtQNmPyhSPO/d5qbrzWmFxJqmY7tqoTuT2YrQLEqzvVOP2cT5XW" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css" integrity="sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT" crossorigin="anonymous">

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
        <link rel="stylesheet" href="css/demos/demo-photography.css">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">

        <!-- Head Libs -->
        <script src="vendor/modernizr/modernizr.min.js"></script>


<div>
<div id="home-intro" class="home-intro custom-home-intro background-color-secondary m-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-11">
                            <div align="center"><h2 class="text-color-light mb-xs mt-xs">
                                ULTIMAS NOTICIAS
                               
                            </h2></div>
                        </div>
                </div>
            </div>
</div>
<div class="container-fluid" style="background:url('/img/imagenfondo.jpg') ; background-size:1754px 872px;
">

                    <ul id="ourBlog" class="p-none">
                        <li class="col-sm-4 col-md-4 isotope-item p-md">
                          <li>

                              <?php 
                foreach ($variablita as $var) {
                     # code...
                   /* echo "<pre>";
                    print_r($var);
                    echo "</pre>";
                    die;
*/                 ?>
                                
                                
                                
                            <hr>
                            
                                <h4 class="heading-primary">.</h4>
                                <p></p>
                            <article  class="our-blog-item">
                              
                <div class="row">
                   <!-- <div class="col-md-6 p-none">
                        <section class="parallax section section-parallax match-height custom-parallax-bg-pos-left custom-sec-left m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" style="min-height: 300px;">

                                    
                         <a href="/noticia/noticia?id=<?=$var->id?>" class="text-decoration-none">
                                    <span  class="image-wrapper">
                                        <div align="center"> <?= Html::img($var->portadaimg, ['width'=>'300','alt' => '', 'data-thumb'=> '@web/img/blog/blog-image-1.jpg' ]); ?></div>
                                    </span>
                                        <span class="image-wrapper">
                                         <div  align="center"><?= Html::img(['alt' => '', 'data-thumb'=> '@web/img/blog/blog-image-2.jpg' ]); ?></div>
                                    </span>
                                    </a>
                            
                                
                                 </section>
                    </div>
                    <div class="col-md-6 p-none">
                        <section class="section section-no-border match-height m-none">
                            <div class="row m-none">
                                <div class="col-half-section col-half-section-left">
                                    <a href="/noticia/noticia?id=<?=$var->id?>" class="text-decoration-none">
                                        <span class="category text-uppercase background-color-quaternary">
                                         <h2><a href="/noticia/noticia?id=<?=$var->id?>" ><?= $var->titulo ?></a></h2>
                                            <p><?=$var->descripcion?></p>
                                    </span></a>
                                   <span class="post-date">
                                      <?php $date = new DateTime($var->fecha);
                                      echo $date->format('d-M-Y'); ?>
                                    </span>
                                    <span><i class="fa fa-user"></i> By <a href="#"><?= $var->fkusuario0->username ?></a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#"><?= $var->fketiqueta0->nombre ?></a> </span>

                                     <?= Html::a( 'Leer Mas...', ['/noticia/noticia','id'=>$var->id],['class'=>'btn btn-borders btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-sm'] )?>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>-->
                <div class="capa"></div>
                <div class="col-md-6 p-none" >
                        <section class="parallax section section-parallax match-height m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" style="min-height: 315px;">
                        <a href="/noticia/noticia?id=<?=$var->id?>" class="text-decoration-none">
                                    <span  class="image-wrapper">
                                        <div align="center"> <?= Html::img($var->portadaimg, ['width'=>'300','alt' => '', 'data-thumb'=> '@web/img/blog/blog-image-1.jpg' ]); ?></div>
                                    </span>
                                        <span class="image-wrapper">
                                         <div  align="center"><?= Html::img(['alt' => '', 'data-thumb'=> '@web/img/blog/blog-image-2.jpg' ]); ?></div>
                                    </span>
                                    </a>
                            
                        </section>
                    </div>
                <div class="row custom-sm-flex-order col-md-6">
                    <div class="col-md-12 p-none">
                        <section class="section section-no-border match-height m-none">
                            <div class="row m-none">
                                <div class="col-half-section col-half-section-cemter custom-text-align-center">
                                    <h2><a href="/noticia/noticia?id=<?=$var->id?>"class="text-uppercase font-weight-bold" ><?= $var->titulo ?></a></h2>
                                            <strong><p><?=$var->descripcion?></p></strong>
                                    </span></a>
                                   <span class="post-date">
                                      <?php $date = new DateTime($var->fecha);
                                      echo $date->format('d-M-Y'); ?>
                                    </span>
                                    <span><i class="fa fa-user"></i> Por <a href="#"><?= $var->fkusuario0->username ?></a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#"><?= $var->fketiqueta0->nombre ?></a> </span>
                                    <br>
                                     <?= Html::a( 'Leer Mas...', ['/noticia/noticia','id'=>$var->id],['class'=>'btn btn-borders btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-sm'] )?>
                                </div>
                            </div>
                        </section>
                    </div>
                    
                </div>
                            </article>
                       <?php } ?>
                        </li>

                  <hr>          
</li>
    
    <ul class="pagination pagination-lg pull-right">
        <li><a  href="#" class="fas fa-arrow-circle-left"></a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a  href="#" class="fas fa-arrow-circle-right"></a></li>    
    </ul>

</div>

</div>
