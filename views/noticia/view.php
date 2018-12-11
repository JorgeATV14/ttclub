 <?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Noticia */

$this->title = $model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'Noticias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticia-view">


    <?php if(Yii::$app->user->identity->type == 'superadmin'){?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
        <?= Html::a('Crear Especialidad', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'titulo',
            'fecha',
            'fkusuario0.username',
            'fkstatus0.nombre',
            'fketiqueta0.nombre',
            'tipo',
            
        ],
    ]) ?>
    <?php 
        /*echo "<pre>";
        print_r($model->portadaimg);
        echo "</pre>";*/
     ?>
    <div class="panel panel-default">
        <div class="panel-heading">Descripcion</div>
        <div class="panel-body">
            <?=$model->descripcion?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Contenido</div>
        <div class="panel-body">
            <?=$model->contenido?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Imagen</div>
        <div class="panel-body">
            <?=Html::img($model->portadaimg, ['width'=>'300'])?>
        </div>
    </div>

</div>
<?php } ?>


<?php if(Yii::$app->user->identity->type == 'admin'){?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
        <?= Html::a('Crear Especialidad', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'titulo',
            'fecha',
            'fkusuario0.username',
            'fkstatus0.nombre',
            'fketiqueta0.nombre',
            
        ],
    ]) ?>
    <?php 
        /*echo "<pre>";
        print_r($model->portadaimg);
        echo "</pre>";*/
     ?>
    <div class="panel panel-default">
        <div class="panel-heading">Descripcion</div>
        <div class="panel-body">
            <?=$model->descripcion?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Contenido</div>
        <div class="panel-body">
            <?=$model->contenido?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Imagen</div>
        <div class="panel-body">
            <?=Html::img($model->portadaimg, ['width'=>'300'])?>
        </div>
    </div>

</div>
<?php } ?>

<?php if(Yii::$app->user->identity->type == 'direc'){?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fecha',
            'fketiqueta0.nombre',
            
        ],
    ]) ?>
    <?php 
        /*echo "<pre>";
        print_r($model->portadaimg);
        echo "</pre>";*/
     ?>
    <div class="panel panel-default">
        <div class="panel-heading">Descripcion</div>
        <div class="panel-body">
            <?=$model->descripcion?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Contenido</div>
        <div class="panel-body">
            <?=$model->contenido?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Imagen</div>
        <div class="panel-body">
            <?=Html::img($model->portadaimg, ['width'=>'300'])?>
        </div>
    </div>

</div>
<?php } ?>


