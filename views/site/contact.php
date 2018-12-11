<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contáctanos';
$this->params['breadcrumbs'][] = $this->title;
// var_dump(Yii::$app->session->hasFlash('contactFormSubmitted'));
?>

<head>
    <title>Contact V12</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="/image/png" href="/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate2.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/select2/select22.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util2.css">
    <link rel="stylesheet" type="text/css" href="/css/main2.css">

    <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="/vendor/bootstrap/js/popper.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="/vendor/select2/select22.min.js"></script>
<!--===============================================================================================-->
    <script src="/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="/js/main2.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<!--===============================================================================================-->
</head>
<body style="background-image: url('/img/fondo1.jpg');">


    <div class="bg-contact100" style="background-image: url('/img/fondocontacto.jpg');">
        <div class="container-contact100" >
            <div class="wrap-contact100">
                <div class="contact100-pic js-tilt" data-tilt>
                    <img src="/img/conquistadores1.png" alt="IMG">
                </div>

                <form class="contact100-form validate-form">
                    <span class="contact100-form-title">
                    <h1><?= Html::encode($this->title) ?></h1><br>

                    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                    Gracias por contactárnos. Le responderemos lo antes posible
                    </span>
                    <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>

                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                    <!--<div class="wrap-input100 validate-input" data-validate = "Name is required">
                        <input class="input100" type="text" name="name" placeholder="Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true">
</i>
                        </span>
                    </div>-->
                    <?= $form->field($model, 'name')->textInput(['value' => Yii::$app->user->identity->username]) ?>
                    

                    <!--<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true">
                        </span>
                    </div>-->
                    <?= $form->field($model, 'email')->textInput(['value' => Yii::$app->user->identity->email]) ?></i>
                    <!--<div class="wrap-input100 validate-input" data-validate = "Name is required">
                        <input class="input100" type="text" name="name" placeholder="Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true">
                        </span>
                    </div>-->
                    <?= $form->field($model, 'subject') ?></i>

                    <!--<div class="wrap-input100 validate-input" data-validate = "Message is required">
                        <textarea class="input100" name="message" placeholder="Message">
                        <span class="focus-input100"></span></textarea>-->
                        <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>


                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>
                    <div class="container-contact100-form-btn">
                    <div class="wrap-contact100-form-btn">
                        <div class="contact100-form-bgbtn"></div>
                        <?= Html::submitButton('Enviar', ['class' => 'contact100-form-btn', 'name' => 'contact-button']) ?>

                    </div>
                </div>
                    </div>
                
                    
                </form>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
        <?php endif; ?>

    </div>
    </body>

