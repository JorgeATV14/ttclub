<?php use yii\helpers\Html; ?>

<div role="main" class="main">
<?php echo $variablita->id; ?>
 				
				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Blog</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Blog Post</h1>
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
													<img class="img-responsive" src="img/blog/blog-image-1.jpg" alt="">
                                                    <?= Html::img($variablita->portadaimg, ['alt' => '', 'data-thumb'=> '@web/img/blog/blog-image-1.jpg' ]); ?>                                       
												</div>
											</div>
											<div>
												<div class="img-thumbnail">
													<img class="img-responsive" src="@web/img/blog/blog-image-2.jpg" alt="">
													<?= Html::img($variablita->portadaimg, ['alt' => '', 'data-thumb'=> '@web/img/blog/blog-image-1.jpg' ]); ?>
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
											<span><i class="fa fa-comments"></i> <a href="#">AQUÍ VA EL CONTADOR DE COMENTARIOS</a></span>
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

										<div class="post-block post-author clearfix">
											<h3 class="heading-primary"><i class="fa fa-user"></i>Sobre el autor:</h3>
											<div class="img-thumbnail">
												<a href="blog-post.html">
													<img src="img/avatars/avatar.jpg" alt="">
												</a>
											</div>
											<p><strong class="name"><a href="#">AQUÍ VA EL NOMBRE DEL AUTOR</a></strong></p>
											<p>FICHA TÉCNICA DEL AUTOR </p>
										</div>

		<div class="post-block post-comments clearfix">
			<h3 class="heading-primary"><i class="fa fa-comments"></i>Comentarios (AQUÍ VA EL CONTADOR DE COMENTARIOS)</h3>
			<!-- CONTENIDO DEL PRIMER COMENTARIO -->
			  <?php 
                foreach ($coment as $com) {
                     # code...
                   /* echo "<pre>";
                    print_r($var);
                    echo "</pre>";
                    die;
*/                 ?>
			<ul class="comments">
			<li>

			<div class="comment">
				<div class="img-thumbnail">
					<!-- AQUÍ VA LA FOTO DEL USUARIO QUE COMENTA -->
					<img class="avatar" alt="" src="img/avatars/avatar-2.jpg">
				</div>
				<div class="comment-block">
					<div class="comment-arrow"></div>
						<span class="comment-by">
						<strong><?= $com->fkusuario0->username ?></strong>
						<span class="pull-right">
						<span> <a href="#"><i class="fa fa-reply"></i> Responder</a></span>
						</span>
						</span>
						<p><?= $com->contenido ?></p>
						<span class="date pull-right"><?php $date = new DateTime($com->fecha);
                            echo $date->format('d-M-Y H:i');?></span>
				</div>
			</div>

			<ul class="comments reply">
				<li>
					<div class="comment">
						<div class="img-thumbnail">
							<img class="avatar" alt="" src="img/avatars/avatar-3.jpg">
						</div>
						<div class="comment-block">
							<div class="comment-arrow"></div>
								<span class="comment-by">
								<strong>OTRO USUARIO RESPONDIENDO EL COMENTARIO</strong>
								<span class="pull-right">
									<span> <a href="#"><i class="fa fa-reply"></i> Responder</a></span>
								</span>
								</span>
								<p>CONTENIDO DEL COMENTARIO</p>
								<span class="date pull-right">November 12, 2017 at 1:38 pm</span>
						</div>
					</div>
				</li>
				<li>
				<div class="comment">
					<div class="img-thumbnail">
						<img class="avatar" alt="" src="img/avatars/avatar-4.jpg">
					</div>
				<div class="comment-block">
					<div class="comment-arrow"></div>
					<span class="comment-by">
					<strong>John Doe</strong>
					<span class="pull-right">
					<span> <a href="#"><i class="fa fa-reply"></i> Reply</a></span>
					</span>
					</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
					<span class="date pull-right">November 12, 2017 at 1:38 pm</span>
				</div>
			</div>
			</li>
			</ul>
			</li>
			<li>
			
			</li>
			<li>
												
												</li>
			</ul>
			<?php } ?>

										</div>
							<!-- POST PARA LOS COMENTARIOS -->
										<div class="post-block post-leave-comment">
											<h3 class="heading-primary">Deja tu comentario (Debes estar logeado para comentar)</h3>

											<form action="" method="post">
												<div class="row">
													<div class="form-group">
														<div class="col-md-6">
		<label>Tu nombre *</label>
		<input type="text" value="<?= Yii::$app->user->identity->username ?>" maxlength="100" class="form-control" name="name" id="name">
														</div>
														<div class="col-md-6">
															<label>Tu correo *</label>
		<input type="email" value="<?= Yii::$app->user->identity->email ?>" maxlength="100" class="form-control" name="email" id="email">
														</div>
													</div>
												</div>
			<div class="row">
				<div class="form-group">
					<div class="col-md-12">
						<label>Comentario *</label>
						<textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment"></textarea>
					</div>
				</div>
			</div>
			<!-- AQUÍ ESTÁ EL BOTÓN PARA POSTEAR EL COMENTARIO -->
			<div class="row">
				<div class="col-md-12">
					<!-- <input type="submit" value="Postear comentario" class="btn btn-primary btn-lg" data-loading-text="Loading..."> -->

					<?= Html::a('Postear comentario',['noticia','id'=>$variablita->id], ['class'=>'btn btn-primary btn-lg']) ?>

					 <!-- <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Crear Comentario', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?> -->
				</div>
			</div>
											</form>
										</div>

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
							
								<h4 class="heading-primary">Categories</h4>
								<ul class="nav nav-list mb-xlg">
									<li><a href="#">Design (2)</a></li>
									<li class="active">
										<a href="#">Photos (4)</a>
										<ul>
											<li><a href="#">Animals</a></li>
											<li class="active"><a href="#">Business</a></li>
											<li><a href="#">Sports</a></li>
											<li><a href="#">People</a></li>
										</ul>
									</li>
									<li><a href="#">Videos (3)</a></li>
									<li><a href="#">Lifestyle (2)</a></li>
									<li><a href="#">Technology (1)</a></li>
								</ul>
							
								<div class="tabs mb-xlg">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#popularPosts" data-toggle="tab"><i class="fa fa-star"></i> Popular</a></li>
										<li><a href="#recentPosts" data-toggle="tab">Recent</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-1.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2017
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-2.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2017
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-3.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Odiosters Nullam Vitae</a>
														<div class="post-meta">
															 Jan 10, 2017
														</div>
													</div>
												</li>
											</ul>
										</div>
										<div class="tab-pane" id="recentPosts">
											<ul class="simple-post-list">
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-2.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2017
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-3.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Odiosters Nullam Vitae</a>
														<div class="post-meta">
															 Jan 10, 2017
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="blog-post.html">
																<img src="img/blog/blog-thumb-1.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2017
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							
								<hr>
							
								<h4 class="heading-primary">About Us</h4>
								<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
							
							</aside>
						</div>

					</div>

				</div>

			</div>

