<?php use yii\helpers\Html; 
use app\components\widgets\krnpanel\Krnpanel;

?>
    <?php require_once('layout_slider.php'); ?>
    
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="blog-posts">
                <?php 
                foreach ($variablita as $var) {
                     # code...
                   /* echo "<pre>";
                    print_r($var);
                    echo "</pre>";
                    die;
*/                 ?>
    <article class="post post-medium">
        <div class="row">
            <div class="col-md-5">
                <div class="post-image">
                    <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                        <div>
                            <div class="img-thumbnail">
                                <img class="img-responsive" src="web/img/blog/blog-image-1.jpg" alt="">

                                    <?= Html::img($var->portadaimg, ['alt' => '', 'data-thumb'=> '@web/img/blog/blog-image-1.jpg' ]); ?>
                            </div>
                        </div>
                        <div>
                            <div class="img-thumbnail">
                                <img class="img-responsive" src="@web/img/blog/blog-image-2.jpg" alt="">
                                <?= Html::img(['alt' => '', 'data-thumb'=> '@web/img/blog/blog-image-2.jpg' ]); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">

                <div class="post-content">

                    <h2><a href="blog-post.html"><?= $var->titulo ?></a></h2>
                        <p><?=$var->descripcion?> [...]</p>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="post-meta">
                    <span><i class="fa fa-calendar"></i>
                        <?php $date = new DateTime($var->fecha);
                            echo $date->format('d-M-Y');
                        ?>

                    </span>
                    <span><i class="fa fa-user"></i> By <a href="#"><?= $var->fkusuario0->username ?></a> </span>
                    <span><i class="fa fa-tag"></i> <a href="#"><?= $var->fketiqueta0->nombre ?></a> </span>
                    <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                    <!--<a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>-->
                    <?= Html::a( 'Leer Mas...', ['/noticia/noticia','id'=>$var->id],['class'=>'btn btn-xs btn-primary pull-right'] )?>
                </div>
            </div>
        </div>

    </article>
    <?php } ?>
    <ul class="pagination pagination-lg pull-right">
        <li><a href="#">«</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">»</a></li>
    </ul>
                    
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
                    
            <h4 class="heading-primary">About Us</h4>
            <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
                
        </aside>
    </div>
    </div>
    
    
</div>