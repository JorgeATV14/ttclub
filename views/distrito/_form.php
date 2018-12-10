<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;//Inatanciamos la clase ArrayHelper para acceder a los métodos
use app\models\Etiquetas;//Instanciamos el modelo Categoria para acceder a sus datos
/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<?php if(Yii::$app->user->identity->type == 'superadmin'){?>
<div class="user-form">
    <?php $form = ActiveForm::begin(); ?>
   
   
    
        <!-- Usuario loggeado -->

        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php } ?>

<?php if(Yii::$app->user->identity->type == 'admin'){?>
<div class="user-form">
    <?php $form = ActiveForm::begin(); ?>
   
   
    
        <!-- Usuario loggeado -->

        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php } ?>