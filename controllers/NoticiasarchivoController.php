<?php

namespace app\controllers;

use Yii;
use app\models\Noticiasarchivo;
use app\models\NoticiasarchivoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * NoticiasarchivoController implements the CRUD actions for Noticiasarchivo model.
 */
class NoticiasarchivoController extends Controller
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
                    'actions' => ['logout','create','index'],
                    'allow' => true,
                    'roles' => ['@'],
                    ],
                ],
            ],
            // Other stuff.
        ];
    }

    /**
     * Lists all Noticiasarchivo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NoticiasarchivoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Noticiasarchivo model.
     * @param integer $fknoticia
     * @param integer $fkarchivo
     * @return mixed
     */
    public function actionView($fknoticia, $fkarchivo)
    {
        return $this->render('view', [
            'model' => $this->findModel($fknoticia, $fkarchivo),
        ]);
    }

    /**
     * Creates a new Noticiasarchivo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Noticiasarchivo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'fknoticia' => $model->fknoticia, 'fkarchivo' => $model->fkarchivo]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Noticiasarchivo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $fknoticia
     * @param integer $fkarchivo
     * @return mixed
     */
    public function actionUpdate($fknoticia, $fkarchivo)
    {
        $model = $this->findModel($fknoticia, $fkarchivo);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'fknoticia' => $model->fknoticia, 'fkarchivo' => $model->fkarchivo]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Noticiasarchivo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $fknoticia
     * @param integer $fkarchivo
     * @return mixed
     */
    public function actionDelete($fknoticia, $fkarchivo)
    {
        $this->findModel($fknoticia, $fkarchivo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Noticiasarchivo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $fknoticia
     * @param integer $fkarchivo
     * @return Noticiasarchivo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($fknoticia, $fkarchivo)
    {
        if (($model = Noticiasarchivo::findOne(['fknoticia' => $fknoticia, 'fkarchivo' => $fkarchivo])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();
        /*var_dump('cerrar sesion');
        die;*/

        return $this->goHome();
    }
}
