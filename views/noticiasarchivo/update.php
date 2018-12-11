<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Noticiasarchivo */

$this->title = 'Update Noticiasarchivo: ' . $model->fknoticia;
$this->params['breadcrumbs'][] = ['label' => 'Noticiasarchivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fknoticia, 'url' => ['view', 'fknoticia' => $model->fknoticia, 'fkarchivo' => $model->fkarchivo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="noticiasarchivo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
