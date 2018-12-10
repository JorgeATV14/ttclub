<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\jui\DatePicker; //Agregamos la clase DatePicker de la extension JUI


/* @var $this yii\web\View */
/* @var $searchModel app\models\NoticiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Noticias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Noticia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo',
            'descripcion:ntext',
            [
                'attribute' => 'Contenido',
                'format' => 'raw',
                'value' => function ($data) {
                    return strlen($data->contenido) > 25 ?
                    html_entity_decode(substr($data->contenido, 0, 25) . '...'):
                    html_entity_decode($data->contenido);
                } 
            ],
            [
                'attribute' => 'Imagen',
                'format' => 'html',
                
                'value'=>function($data) { return Html::img($data->portadaimg, ['width'=>'150']); },

            ],
            'fecha',
            'fkusuario0.username',
            'fkstatus0.nombre',
            'fketiqueta0.nombre',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
    
    ?>
    

<?php Pjax::end(); ?></div>
