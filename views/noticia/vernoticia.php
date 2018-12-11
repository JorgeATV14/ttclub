<?php use yii\helpers\Html; ?>

<div role="main" class="main">

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
 				
				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="http://ttclub.test/">INICIO</a></li>
									<li class="active">CONTENIDO</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1><?= $variablita->titulo ?></h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-md-9">
							<div class="blog-posts single-post">

								<article class="post post-large blog-single-post">
									<div class="post-image">
										<div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
											<div>
												<div class="img-thumbnail">
													<img class="img-responsive" src="" alt="">
                                                    <?= Html::img($variablita->portadaimg, ['alt' => '', 'data-thumb'=> '' ]); ?>                                       
												</div>
											</div>
											<div>
												<div class="img-thumbnail">
													<img class="img-responsive" src="" alt="">
													<?= Html::img($variablita->portadaimg, ['alt' => '', 'data-thumb'=> '' ]); ?>
												</div>
											</div>
										</div>
									</div>

									<div class="post-date">
										
										<span class="day"><?php
										$date = new DateTime($variablita->fecha);
                                        echo $date->format('d');
                                        /*echo $date;*/
                                        ?></span>
										<span class="month"><?php
                                        $date = new DateTime($variablita->fecha);
                                        echo $date->format('M');
                                        ?></span>
									</div>

									<div class="post-content">

										<h2><a href="blog-post.html"><?= $variablita->titulo ?></a></h2>

										<div class="post-meta">
											<span><i class="fa fa-user"></i> Por <a href="#"><?= $variablita->fkusuario0->username ?></a> </span>
											<span><i class="fa fa-tag"></i> <a href="#"><?= $variablita->fketiqueta0->nombre ?></a> </span>
											
										</div>

										<p><?=
                                                    $variablita->contenido
                                                    ?> </p>


										<div class="post-block post-share">
											<h3 class="heading-primary"><i class="fa fa-share"></i>Compartir post</h3>

											<!-- AddThis Button BEGIN -->
											<div class="addthis_toolbox addthis_default_style ">
												<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
												<a class="addthis_button_tweet"></a>
												<a class="addthis_button_pinterest_pinit"></a>
												<a class="addthis_counter addthis_pill_style"></a>
											</div>
											<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
											<!-- AddThis Button END -->

										</div>

										

	
							<!-- POST PARA LOS COMENTARIOS -->
										

									</div>
								</article>

							</div>
						</div>

						<div class="col-md-3">
							<aside class="sidebar">
							
								<form>
									<div class="input-group input-group-lg">
										<input class="form-control" placeholder="Search..." name="s" id="s" type="text">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button>
										</span>
									</div>
								</form>
							
							
								<hr>
							
								<h4 class="heading-primary">¿Qué es una especialidad?</h4>
								<p>Una especialidad, son un conjunto de actividades teorícas y prácticas que sirven para aumentar los conocimientos sobre diferentes temas tanto del Conquistador como del Guía Mayor. Éstas conocimientos los puede demostrar y darles uso en las actividades del club así como en la vida cotidiana. </p>
							
							</aside>
						</div>

					</div>

				</div>

			</div>

