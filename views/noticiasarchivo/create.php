<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Noticiasarchivo */

$this->title = 'Create Noticiasarchivo';
$this->params['breadcrumbs'][] = ['label' => 'Noticiasarchivos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noticiasarchivo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
