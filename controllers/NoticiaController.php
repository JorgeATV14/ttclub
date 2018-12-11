<?php

namespace app\controllers;

use Yii;
use app\models\Noticia;
use app\models\Comentario;
use app\models\NoticiaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;
use kartik\file\FileInput;
use dosamigos\tinymce\TinyMce;
/**
 * NoticiaController implements the CRUD actions for Noticia model.
 */
class NoticiaController extends Controller
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
                    'actions' => ['logout','create','index','noticia', 'view', 'update', 'delete'],
                    'allow' => true,
                    'roles' => ['@'],
                    ],
                ],
            ],
            // Other stuff.
        ];
    }

    /**
     * Lists all Noticia models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->identity->type == 'superadmin'){
        $searchModel = new NoticiaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        }
         if(Yii::$app->user->identity->type == 'admin'){
        $searchModel = new NoticiaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        }


         if(Yii::$app->user->identity->type == 'direc'){
            $searchModel = new NoticiaSearch();
            $query = Noticia::find()->where(['and',['fkstatus' => 1],['tipo' => 'espe']]);
            $dataProvider = new ActiveDataProvider([
                'query' => $query,
            ]);
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
    }

    /**
     * Displays a single Noticia model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    /**
     * Displays a single Noticia model.
     * @param integer $id
     * @return mixed
     */
    public function actionNoticia($id)
    {   
//        var_dump(Yii::$app->request->post());
        
        $variablita=Noticia::find()->where(['id'=>$id])->one();
        $coment=Comentario::find()->where(['fknoticia'=>$id,'fkstatus'=>1])->all();
        return $this->render('vernoticia',['variablita' => $variablita,'coment' => $coment]);
    }

    public function actionEtiqueta($id)
    {   
//        var_dump(Yii::$app->request->post());
        $variablita=Noticia::find()->where(['id'=>$id])->one();
        $coment=Comentario::find()->where(['fknoticia'=>$id,'fkstatus'=>1])->all();
        return $this->render('vernoticia',['variablita' => $variablita,'coment' => $coment]);
    }



    /**
     * Creates a new Noticia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Noticia();

        if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model, 'arc_archivo');
            if (!is_null($image)) {
                $ext = end((explode(".", $image->name)));
                $nombre='/uploads/documentos/' . Yii::$app->security->generateRandomString().".{$ext}";
                $path = Yii::$app->basePath . '/web' .$nombre;
                $image->saveAs($path);
                $model->portadaimg = $nombre;
            }
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Noticia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $image = UploadedFile::getInstance($model, 'arc_archivo');
            
        if ($model->load(Yii::$app->request->post())) {
            if (!is_null($image)) {
                    $ext = end((explode(".", $image->name)));
                    $nombre='/uploads/documentos/' . Yii::$app->security->generateRandomString().".{$ext}";
                    $path = Yii::$app->basePath . '/web' .$nombre;
                    $image->saveAs($path);
                    unlink(Yii::$app->basePath . '/web' .$model->portadaimg);
                    $model->portadaimg = $nombre;
                }
            if($model->save()){

            return $this->redirect(['view', 'id' => $model->id]);}
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    
    }
    /**
     * Deletes an existing Noticia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    public function getStatus($id){
        
    }
    /**
     * Finds the Noticia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Noticia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Noticia::findOne($id)) !== null) {
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
