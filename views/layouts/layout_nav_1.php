<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/prueba/bienvenida']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'archivo', 'url' => ['/archivo/index']],
            ['label' => 'Comentario', 'url' => ['/comentario/index']],
            ['label' => 'etiqueta', 'url' => ['/etiquetas/index']],
            ['label' => 'noticia', 'url' => ['/noticia/index']],
            ['label' => 'user', 'url' => ['/user/index']],
            ['label' => 'status', 'url' => ['/status/index']],
            ['label' => 'noticiaarchivo', 'url' => ['/noticiasarchivo/index']],
            ['label' => 'noticiaimagen', 'url' => ['/noticiasimagen/index']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>