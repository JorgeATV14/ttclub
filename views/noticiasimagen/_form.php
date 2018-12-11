<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Noticiasimagen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noticiasimagen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fknoticia')->textInput() ?>

    <?= $form->field($model, 'fkimagen')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
