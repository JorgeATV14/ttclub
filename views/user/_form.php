<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;//Inatanciamos la clase ArrayHelper para acceder a los métodos
use app\models\Etiquetas;//Instanciamos el modelo Categoria para acceder a sus datos
/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
   
    <?php if(Yii::$app->user->isGuest){ ?>
        <!-- Invitado -->
        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php }else{?>
    
        <!-- Usuario loggeado -->

        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'confirmation_token')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'status')->dropDownList([ '1' => 'Activo', '2' => 'Inactivo', '3' => 'Borrado', ], ['prompt' => '']) ?>

        <?= $form->field($model, 'superadmin')->textInput() ?>

        <?= $form->field($model, 'created_at')->textInput() ?>

        <?= $form->field($model, 'updated_at')->textInput() ?>

        <?= $form->field($model, 'registration_ip')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'bind_to_ip')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email_confirmed')->textInput() ?>

        <?= $form->field($model, 'type')->dropDownList([ 'admin' => 'Admin', 'autor' => 'Autor', 'public' => 'Public', ], ['prompt' => '']) ?>
    
    <?php } ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
