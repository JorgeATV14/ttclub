<?php use yii\helpers\Html; ?>

<body >

											<nav >
                                                <ul class="nav nav-pills" id="mainNav">
									<li class="">
										 	
									</li>
									<li class="">
										<?= Html::a( 'Quienes Somos', $url = ['/prueba/bienvenida'] )?>		
									</li>

									<li class="">
										<?= Html::a( 'Especialidades', $url = ['/site/especialidades'] )?>		
									</li>

                                    <?php if(Yii::$app->user->isGuest){ ?>
                                    
                                    
                                    <?php }else if ((Yii::$app->user->identity->type == 'superadmin')||(Yii::$app->user->identity->type == 'admin')||(Yii::$app->user->identity->type == 'direc')){?>
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
                                    
                                    <?php }else{?>
                                    <?= Html::a( 'Cerrar Sesión ('.Yii::$app->user->identity->username .')', ['site/logout'], ['data-method'=>'post'] )?>
                                     <?php } ?>
									</li>
									<br>

						<a href="tel:+123456789" class="text-color-dark text-decoration-none hidden-xs" target="_blank">
											<span class="custom-toll-free pull-right font-weight-bold mt-xs">
												<i class="fa fa-mobile"></i>
												<span class="toll-free-title text-uppercase font-weight-normal">Contactanos</span>
												<span class="toll-free-number font-weight-bold">937-129-49-83</span>
											</span>
										</a><hr>
								</ul>

                           </nav>
                    </body>