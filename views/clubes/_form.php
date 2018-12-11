<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;//Inatanciamos la clase ArrayHelper para acceder a los métodos
use app\models\Distrito;//Instanciamos el modelo Categoria para acceder a sus datos
/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
   
    <?php if(Yii::$app->user->isGuest){ ?>
        <!-- Invitado -->
        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
        

    <?php }else{?>
    
        <!-- Usuario loggeado -->
        <?php if((Yii::$app->user->identity->type == 'admin')||(Yii::$app->user->identity->type == 'superadmin')){?>
        <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'fkdistrito')->dropDownList(ArrayHelper::map(Distrito::find()->orderBy('nombre')->all(), 'id','nombre'),['prompt'=>'Seleccione el distrito']); ?>
        <?php } ?>
    
    <?php } ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
