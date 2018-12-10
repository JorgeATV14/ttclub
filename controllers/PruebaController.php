<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * ArchivoController implements the CRUD actions for Archivo model.
 */
class PruebaController extends Controller
{
    /**
     * @inheritdoc
     */
 public function behaviors()
    {
        return [
        'access' => [
                'class' => AccessControl::className(),
                //'only' => ['logout'],
                'rules' => [
                    [
                    'actions' => ['logout','create','index', 'bienvenida'],
                    'allow' => true,
                    'roles' => ['@'],
                    ],
                ],
            ],
            // Other stuff.
        ];
    }

    /**
     * Lists all Archivo models.
     * @return mixed
     */
    public function actionBienvenida()
    {
        return $this->render('inicio',['nombre'=>'Alex Flores','Edad'=>21]);
    }

  
}
