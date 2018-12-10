<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;//Inatanciamos la clase ArrayHelper para acceder a los métodos
use app\models\Etiquetas;//Instanciamos el modelo Categoria para acceder a sus datos
use app\models\Status;
use kartik\date\DatePicker;
use kartik\file\FileInput;
use dosamigos\tinymce\TinyMce;
/* @var $this yii\web\View */
/* @var $model app\models\Noticia */
/* @var $form yii\widgets\ActiveForm */
?>





      <?php if(Yii::$app->user->identity->type == 'superadmin'){?>
        <div class="noticia-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?> -->

    <?= $form->field($model, 'descripcion')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'es',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

   <!--  <?= $form->field($model, 'contenido')->textarea(['rows' => 6]) ?> -->

   <?= $form->field($model, 'contenido')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'es',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>
    
    <?= $form->field($model, 'fecha')->widget(DatePicker::classname(),[
        'options' => [
            'placeholder' => 'Ingrese fecha...'
        ],
        'pluginOptions' => [
            'languaje' => 'es',
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
            'todayHighlight' => true
        ]
    ]); ?>


    <?= $form->field($model, 'fkusuario')->textInput() ->hiddenInput(['value' => Yii::$app->user->identity->id])->label(false)?>

    <?= $form->field($model, 'fkstatus')->dropDownList(ArrayHelper::map(Status::find()->all(), 'id','nombre'),['prompt'=>'Estado de su nota']); ?>

    <?= $form->field($model, 'fketiqueta')->dropDownList(ArrayHelper::map(Etiquetas::find()->all(), 'id','nombre'),['prompt'=>'Seleccione una etiqueta']); ?>

    <?= $form->field($model, 'arc_archivo')->widget(FileInput::classname(), [
    'options' => ['accept' => 'file/*']]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
    <?php }?>



    <?php if(Yii::$app->user->identity->type == 'admin'){?>
        <div class="noticia-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?> -->

    <?= $form->field($model, 'descripcion')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'es',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

   <!--  <?= $form->field($model, 'contenido')->textarea(['rows' => 6]) ?> -->

   <?= $form->field($model, 'contenido')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'es',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>
    
    <?= $form->field($model, 'fecha')->widget(DatePicker::classname(),[
        'options' => [
            'placeholder' => 'Ingrese fecha...'
        ],
        'pluginOptions' => [
            'languaje' => 'es',
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
            'todayHighlight' => true
        ]
    ]); ?>


    <?= $form->field($model, 'fkusuario')->textInput() ->hiddenInput(['value' => Yii::$app->user->identity->id])->label(false)?>

    <?= $form->field($model, 'fkstatus')->dropDownList(ArrayHelper::map(Status::find()->all(), 'id','nombre'),['prompt'=>'Estado de su nota']); ?>

    <?= $form->field($model, 'fketiqueta')->dropDownList(ArrayHelper::map(Etiquetas::find()->all(), 'id','nombre'),['prompt'=>'Seleccione una etiqueta']); ?>

    <?= $form->field($model, 'arc_archivo')->widget(FileInput::classname(), [
    'options' => ['accept' => 'file/*']]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
    <?php }?>



    <?php if(Yii::$app->user->identity->type == 'direc'){?>
        <div class="noticia-form">
        <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'descripcion')->textarea(['rows' => 6]) ?> -->

    <?= $form->field($model, 'descripcion')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'es',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

   <!--  <?= $form->field($model, 'contenido')->textarea(['rows' => 6]) ?> -->

   <?= $form->field($model, 'contenido')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],
        'language' => 'es',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>
    
    <?= $form->field($model, 'fecha')->widget(DatePicker::classname(),[
        'options' => [
            'placeholder' => 'Ingrese fecha...'
        ],
        'pluginOptions' => [
            'languaje' => 'es',
            'format' => 'yyyy-mm-dd',
            'autoclose' => true,
            'todayHighlight' => true
        ]
    ]); ?>


    <?= $form->field($model, 'fkusuario')->textInput() ->hiddenInput(['value' => Yii::$app->user->identity->id])->label(false)?>


    <?= $form->field($model, 'fketiqueta')->dropDownList(ArrayHelper::map(Etiquetas::find()->all(), 'id','nombre'),['prompt'=>'Seleccione una etiqueta']); ?>

    <?= $form->field($model, 'arc_archivo')->widget(FileInput::classname(), [
    'options' => ['accept' => 'file/*']]); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
    <?php }?>

