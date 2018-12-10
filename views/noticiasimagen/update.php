<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Noticiasimagen */

$this->title = 'Update Noticiasimagen: ' . $model->fknoticia;
$this->params['breadcrumbs'][] = ['label' => 'Noticiasimagens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fknoticia, 'url' => ['view', 'fknoticia' => $model->fknoticia, 'fkimagen' => $model->fkimagen]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="noticiasimagen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
