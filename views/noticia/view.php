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

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
