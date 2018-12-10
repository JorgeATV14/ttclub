<?php

namespace app\controllers;

use Yii;
use app\models\Noticiasimagen;
use app\models\NoticiasimagenSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * NoticiasimagenController implements the CRUD actions for Noticiasimagen model.
 */
class NoticiasimagenController extends Controller
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
     * Lists all Noticiasimagen models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NoticiasimagenSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Noticiasimagen model.
     * @param integer $fknoticia
     * @param integer $fkimagen
     * @return mixed
     */
    public function actionView($fknoticia, $fkimagen)
    {
        return $this->render('view', [
            'model' => $this->findModel($fknoticia, $fkimagen),
        ]);
    }

    /**
     * Creates a new Noticiasimagen model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Noticiasimagen();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'fknoticia' => $model->fknoticia, 'fkimagen' => $model->fkimagen]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Noticiasimagen model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $fknoticia
     * @param integer $fkimagen
     * @return mixed
     */
    public function actionUpdate($fknoticia, $fkimagen)
    {
        $model = $this->findModel($fknoticia, $fkimagen);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'fknoticia' => $model->fknoticia, 'fkimagen' => $model->fkimagen]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Noticiasimagen model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $fknoticia
     * @param integer $fkimagen
     * @return mixed
     */
    public function actionDelete($fknoticia, $fkimagen)
    {
        $this->findModel($fknoticia, $fkimagen)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Noticiasimagen model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $fknoticia
     * @param integer $fkimagen
     * @return Noticiasimagen the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($fknoticia, $fkimagen)
    {
        if (($model = Noticiasimagen::findOne(['fknoticia' => $fknoticia, 'fkimagen' => $fkimagen])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
