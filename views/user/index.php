<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\models\Clubes;


/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios Club';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">
   


        
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
        <?php Pjax::begin(); ?>

        <?php if(Yii::$app->user->identity->type == 'superadmin'){?>
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
            'class' => 'table-responsive',
        ],
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'nombre',
            'apaterno',
            'amaterno',
            'auth_key',
            //'password_hash',
            [
                'attribute' => 'Contraseña',
                'format' => 'raw',
                'value' => function ($data) {
                    return strlen($data->password_hash) > 5 ?
                    html_entity_decode(substr($data->password_hash, 0, 5) . '...'):
                    html_entity_decode($data->password_hash);
                } 
            ],
            'confirmation_token',
            'fkclub0.nombre',
            'fkdistrito0.nombre',
            'fkclase0.nombre',
            
             'status',
             'superadmin',
             'created_at',
             'updated_at',
             'registration_ip',
             'bind_to_ip',
             'email:email',
             'email_confirmed:email',
            'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
    <?php }?>

        <?php if(Yii::$app->user->identity->type == 'admin'){?>
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
            'class' => 'table-responsive',
        ],
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'nombre',
            'apaterno',
            'amaterno',
            //'auth_key',
            //'password_hash',
            [
                'attribute' => 'Contraseña',
                'format' => 'raw',
                'value' => function ($data) {
                    return strlen($data->password_hash) > 5 ?
                    html_entity_decode(substr($data->password_hash, 0, 5) . '...'):
                    html_entity_decode($data->password_hash);
                } 
            ],
            //'confirmation_token',
            'fkclub0.nombre',
            'fkdistrito0.nombre',
            'fkclase0.nombre',
            
            // 'status',
            // 'superadmin',
            // 'created_at',
            // 'updated_at',
            // 'registration_ip',
            // 'bind_to_ip',
            // 'email:email',
            // 'email_confirmed:email',
            'type',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
    <?php }?>

        <?php if(Yii::$app->user->identity->type == 'direc'){?>
        <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
            'class' => 'table-responsive',
        ],
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nombre',
            'apaterno',
            'amaterno',
            'fkclub0.nombre',
            'fkdistrito0.nombre',
            'fkclase0.nombre',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?></div>
    <?php }?>

