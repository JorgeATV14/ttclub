<?php use yii\helpers\Html; ?>



											<nav>
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
                                    
                                    <?php }else{?>
                                    <?= Html::a( 'Cerrar Sesión ('.Yii::$app->user->identity->username .')', ['site/logout'], ['data-method'=>'post'] )?>
                                     <?php } ?>
									</li>
                                                                      
						
								</ul>
                           </nav>
                    