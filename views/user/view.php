<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Clubes;
use app\models\Distrito;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->nombre;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

<?php if(Yii::$app->user->identity->type == 'superadmin'){?>
        <?= Html::a('Crear usuario', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro de borrar éste usuario?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'nombre',
            'apaterno',
            'amaterno',
            'auth_key',
            'password_hash',
            'fkclub0.nombre',
            'fkdistrito0.nombre',
            'fkclase0.nombre',
            'confirmation_token',
            'status',
            'superadmin',
            'created_at',
            'updated_at',
            'registration_ip',
            'bind_to_ip',
            'email:email',
            'email_confirmed:email',
            'type',
        ],
    ]) ?>
    <?php }?>



<?php if(Yii::$app->user->identity->type == 'admin'){?>
        <?= Html::a('Crear usuario', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro de borrar éste usuario?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'username',
            'nombre',
            'apaterno',
            'amaterno',
            //'auth_key',
            'password_hash',
            'fkclub0.nombre',
            'fkdistrito0.nombre',
            'fkclase0.nombre',
            //'confirmation_token',
            'status',
            //'superadmin',
            //'created_at',
            //'updated_at',
            //'registration_ip',
            //'bind_to_ip',
            'email:email',
            //'email_confirmed:email',
            'type',
        ],
    ]) ?>
    <?php }?>
    <?php if(Yii::$app->user->identity->type == 'direc'){?>
        <?= Html::a('Crear usuario', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'username',
                'nombre',
                'apaterno',
                'amaterno',
                'fkclub0.nombre',
                'fkdistrito0.nombre',
                'fkclase0.nombre',
                'email:email',
            ],
        ]) ?>
    <?php }?>


</div>
