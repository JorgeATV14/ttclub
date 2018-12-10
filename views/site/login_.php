8<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
<div class="site-login">


    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        



    <?php ActiveForm::end(); ?>  
    <div class="row">
            <div class="col-md-12">

                    <div class="featured-boxes">
                            <div class="row">
                                    <div class="col-sm-6">
                                            <div class="featured-box featured-box-primary align-left mt-xlg">
                                                    <div class="box-content">
                                                            <h4 class="heading-primary text-uppercase mb-md"></h4>
                                                            <form action="/" id="frmSignIn" method="post">
                                                                    <div class="row">
                                                                            <div class="form-group">
                                                                                    <div class="col-md-12">
                                                                                            <label>E-mail Address</label>
                                                                                            <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
                                                                                            <input type="text" value="" class="form-control input-lg">
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="row">
                                                                            <div class="form-group">
                                                                                    <div class="col-md-12">
                                                                                            <a class="pull-right" href="#">(Olvide mi Clave?)</a>
                                                                                            <label>Password</label>
                                                                                            <?= $form->field($model, 'password')->passwordInput() ?>
                                                                                            <input type="password" value="" class="form-control input-lg">
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="row">
<!--                                                                            <div class="col-md-6">
                                                                                    <span class="remember-box checkbox">
                                                                                            <label for="rememberme">
                                                                                                    <input type="checkbox" id="rememberme" name="rememberme">Remember Me
                                                                                            </label>
                                                                                    </span>
                                                                            </div>-->
                                                                            <div class="col-md-6">
                                                                                    <!--<input type="submit" value="Login" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">-->

                                                                                <div class="form-group">
                                                                                    <div class="col-lg-offset-1 col-lg-11">
                                                                                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                            </form>
                                                    </div>
                                            </div>
                                    </div>

                            </div>

                    </div>
            </div>
    </div>
    

</div>
