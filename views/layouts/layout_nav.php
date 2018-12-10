<?php use yii\helpers\Html; ?>
<div class="header-container container header-nav header-nav-center">
						<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
							<i class="fa fa-bars"></i>
						</button>
						<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
							<nav>
								<ul class="nav nav-pills" id="mainNav">
									<li class="">
										 	
									</li>
									<li class="">
										<?= Html::a( 'Quienes Somos', $url = ['/prueba/bienvenida'] )?>		
									</li>

									<li class="">
										<?= Html::a( 'Archivo', $url = ['/archivo/index'] )?>		
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
                                    <?= Html::a( 'Registrarse', $url = ['user/registro'] )?>
                                    <?php }else{?>
                                    <?= Html::a( 'Cerrar Sesión ('.Yii::$app->user->identity->email .')', ['site/logout'], ['data-method'=>'post'] )?>
                                     <?php } ?>
									</li>
                                                                      
						
								</ul>
							</nav>
						</div>
</div>