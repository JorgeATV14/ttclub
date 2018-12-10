<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Noticiasarchivo */

$this->title = $model->fknoticia;
$this->params['breadcrumbs'][] = ['label' => 'Noticiasarchivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticiasarchivo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'fknoticia' => $model->fknoticia, 'fkarchivo' => $model->fkarchivo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'fknoticia' => $model->fknoticia, 'fkarchivo' => $model->fkarchivo], [
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
            'fknoticia',
            'fkarchivo',
        ],
    ]) ?>

</div>
