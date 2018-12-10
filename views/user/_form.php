<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;//Inatanciamos la clase ArrayHelper para acceder a los métodos
use app\models\Etiquetas;//Instanciamos el modelo Categoria para acceder a sus datos
use app\models\Clubes;
use app\models\Distrito;
use app\models\Clases;
/* @var $this yii\web\View */
/* @var $model app\models\User */
// print_r(Yii::$app->user->identity);
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
        <?php if(Yii::$app->user->identity->type == 'superadmin'){?>
            <?= $form->field($model, 'type')->dropDownList([ 'admin' => 'Admin', 'autor' => 'Autor', 'public' => 'Public', 'direc' => 'Director', 'miembro' => 'Miembro', ], ['prompt' => '']) ?>            

            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'apaterno')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'amaterno')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'fkclub')->dropDownList(ArrayHelper::map(Clubes::find()->orderBy('nombre')->all(), 'id','nombre'),['prompt'=>'Seleccione su Club']); ?>

            <?= $form->field($model, 'fkdistrito')->dropDownList(ArrayHelper::map(Distrito::find()->orderBy('nombre')->all(), 'id','nombre'),['prompt'=>'Seleccione su Distrito']); ?>

            <?= $form->field($model, 'fkclase')->dropDownList(ArrayHelper::map(Clases::find()->all(), 'id','nombre'),['prompt'=>'Seleccione la Clase']); ?>

            <?= $form->field($model, 'status')->dropDownList([ '1' => 'Activo', '2' => 'Inactivo', '3' => 'Borrado', ], ['prompt' => '']) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'confirmation_token')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'superadmin')->textInput() ?>

            <?= $form->field($model, 'created_at')->textInput() ?>

            <?= $form->field($model, 'updated_at')->textInput() ?>

            <?= $form->field($model, 'registration_ip')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'bind_to_ip')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'email_confirmed')->textInput() ?>

        
        <?php }?>



        <?php if(Yii::$app->user->identity->type == 'admin'){?>
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'apaterno')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'amaterno')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'fkclub')->dropDownList(ArrayHelper::map(Clubes::find()->orderBy('nombre')->all(), 'id','nombre'),['prompt'=>'Seleccione su Club']); ?>

            <?= $form->field($model, 'fkdistrito')->dropDownList(ArrayHelper::map(Distrito::find()->orderBy('nombre')->all(), 'id','nombre'),['prompt'=>'Seleccione su Distrito']); ?>

            <?= $form->field($model, 'fkclase')->dropDownList(ArrayHelper::map(Clases::find()->all(), 'id','nombre'),['prompt'=>'Seleccione la Clase']); ?>

            <?= $form->field($model, 'status')->dropDownList([ '1' => 'Activo', '2' => 'Inactivo', '3' => 'Borrado', ], ['prompt' => '']) ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>


        <?php }?>


        <?php if(Yii::$app->user->identity->type == 'direc'){?>
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'apaterno')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'amaterno')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'fkclub')->textInput() ->hiddenInput(['value' => Yii::$app->user->identity->fkclub])->label(false)?>

            <?= $form->field($model, 'fkdistrito')->textInput() ->hiddenInput(['value' => Yii::$app->user->identity->fkdistrito])->label(false)?>

            <?= $form->field($model, 'fkclase')->dropDownList(ArrayHelper::map(Clases::find()->all(), 'id','nombre'),['prompt'=>'Seleccione la Clase']); ?>

            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        <?php }?>


        
    
    <?php } ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
