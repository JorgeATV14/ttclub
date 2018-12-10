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

<div align="center"><h1><strong>ULTIMAS NOTICIAS</strong></h1></div>

<div class="container">

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
                                <a href="/noticia/noticia?id=<?=$var->id?>" class="text-decoration-none">
                                    <span  class="image-wrapper">
                                        <div align="center"> <?= Html::img($var->portadaimg, ['width'=>'300','alt' => '', 'data-thumb'=> '@web/img/blog/blog-image-1.jpg' ]); ?></div>
                                    </span>
                                        <span class="image-wrapper">
                                         <div  align="center"><?= Html::img(['alt' => '', 'data-thumb'=> '@web/img/blog/blog-image-2.jpg' ]); ?></div>
                                    </span>
                
                            
                                   <div align="center"> <span class="category text-uppercase background-color-quaternary">
                                         <h2><a href="/noticia/noticia?id=<?=$var->id?>" ><?= $var->titulo ?></a></h2>
                                            <p><?=$var->descripcion?> [...]</p>
                                    </span></div>
                                </a>
                                <div class="post-infos">
                                    <div class="share">
                                        <div class="share-icons background-color-quaternary">
                                            <a href="#" class="text-decoration-none" title="Share on Facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" class="text-decoration-none" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="text-decoration-none" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a>
                                            <i class="fa fa-share-alt"></i>
                                        </div>
                                    </div>
                                    <span class="post-date">
                                      <?php $date = new DateTime($var->fecha);
                                      echo $date->format('d-M-Y'); ?>
                                    </span>
                                    <span><i class="fa fa-user"></i> By <a href="#"><?= $var->fkusuario0->username ?></a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#"><?= $var->fketiqueta0->nombre ?></a> </span>
                                    <!-- <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span> -->
                                     <!--<a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>-->
                                     <?= Html::a( 'Leer Mas...', ['/noticia/noticia','id'=>$var->id],['class'=>'btn btn-xs btn-primary pull-right'] )?>
                                </div>
                            </article>
                       <?php } ?>
                        </li>

                            
</li>
    
    <ul class="pagination pagination-lg pull-right">
        <li><a  href="#" class="fas fa-arrow-circle-left"></a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a  href="#" class="fas fa-arrow-circle-right"></a></li>    
    </ul>

</div>

