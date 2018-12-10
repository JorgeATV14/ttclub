<?php use yii\helpers\Html; ?>			
            <div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="nivo-slider">
								<div class="slider-wrapper theme-default">
									<div id="nivoSlider" class="nivoSlider">
                                        
                    <?= Html::img('@web/img/slides/banner1.jpg', ['alt' => '', 'data-thumb'=> '@web/img/slides/banner1.jpg' ]); ?>

                    <?= Html::a( Html::img('@web/img/slides/banner2.jpg', ['alt' => '', 'data-thumb'=> '@web/img/slides/banner2.jpg' ]), $url = ['site/index'], $options = ['target' => '_blank'] )?>

                    <?= Html::a( Html::img('@web/img/slides/banner3.jpg', ['alt' => '', 'data-thumb'=> '@web/img/slides/banner3.jpg' ]), $url = ['site/index'], $options = ['target' => '_blank'] )?>
									</div>
									<div id="htmlcaption" class="nivo-html-caption"></div>
								</div>
							</div>
						</div>
					</div>
                <!-- Carrusell -->
            <div class="owl-carousel owl-theme" data-plugin-options="{'items': 4, 'autoplay': true, 'autoplayTimeout': 3000}">
                    <div>
                            <?= Html::img('@web/img/logos/logo-1.png', ['alt' => '','class' => 'img-responsive']); ?>
                    </div>
                    <div>
                            <?= Html::img('@web/img/logos/logo-2.png', ['alt' => '','class' => 'img-responsive']); ?>
                    </div>
                    <div>
                            <?= Html::img('@web/img/logos/logo-3.png', ['alt' => '','class' => 'img-responsive']); ?>
                    </div>
                    <div>
                            <?= Html::img('@web/img/logos/logo-4.png', ['alt' => '','class' => 'img-responsive']); ?>
                    </div>
                    <div>
                            <?= Html::img('@web/img/logos/logo-5.png', ['alt' => '','class' => 'img-responsive']); ?>
                    </div>
                    <div>
                            <?= Html::img('@web/img/logos/logo-6.png', ['alt' => '','class' => 'img-responsive']); ?>
                    </div>
                    <div>
                            <?= Html::img('@web/img/logos/logo-5.png', ['alt' => '','class' => 'img-responsive']); ?>
                    </div>
                    <div>
                            <?= Html::img('@web/img/logos/logo-4.png', ['alt' => '','class' => 'img-responsive']); ?>
                    </div>
                    <div>
                            <?= Html::img('@web/img/logos/logo-3.png', ['alt' => '','class' => 'img-responsive']); ?>
                    </div>
                    <div>
                            <?= Html::img('@web/img/logos/logo-2.png', ['alt' => '','class' => 'img-responsive']); ?>
                    </div>
                    <div>
                            <?= Html::img('@web/img/logos/logo-1.png', ['alt' => '','class' => 'img-responsive']); ?>
                    </div>
                    <div>
                            <?= Html::img('@web/img/logos/logo-6.png', ['alt' => '','class' => 'img-responsive']); ?>
                    </div>
            </div>
                
                
            </div>