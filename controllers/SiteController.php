<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Noticia;
use app\models\Dashboard;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout','especialidades'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {           
        //El SORT_DESC es para ordenarlos de menor a mayor, ejemplo: orderBy('fecha'=>SORT_DESC)
        $variablita=Noticia::find()->where(['fkstatus'=>1])->orderBy(['fecha'=>SORT_DESC])->all();

        return $this->render('index',['variablita' => $variablita]);
    }

    public function actionEspecialidades()
    {           
        //El SORT_DESC es para ordenarlos de menor a mayor, ejemplo: orderBy('fecha'=>SORT_DESC)
        $variablita=Noticia::find()->where(['and',['fkstatus'=>1],['tipo' => 'espe']])->orderBy(['fecha'=>SORT_DESC])->all();

        return $this->render('index',['variablita' => $variablita]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        /*var_dump('cerrar sesion');
        die;*/

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
        // Yii::$app->mailer->compose()
        //         ->setTo('thealphalex@gmail.com')
        //         ->setFrom('thealphalex@gmail.com')
        //         ->setSubject('jfjfnj')
        //         ->setTextBody(' si llego')
        //         ->send();
        // die;
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionDashboard()
    {
         /******************************************************************
        *      Agregado para generar los botones del Dashboard
        ******************************************************************/
        $user      = Yii::$app->user->identity->id;
        $roles     = Yii::$app->db->createCommand('select type from user where id="'.$user.'"')->queryAll();
        $dashboard = Dashboard::find()->where(['status'=>'1'])->orderBy(['orden'=>SORT_ASC,'id'=>SORT_ASC])->all();
        $botones = [];
        foreach($dashboard as $d):
            $encontrado = false;
            foreach($roles as $r):
               $pos = strpos($d->rol,$r['type']);
               if($pos !== false) {
                  $encontrado = true;
               }
            endforeach; 
            if($encontrado || strpos($d->rol,'Todos') !== false){
                $botones[]= ['texto' => $d->nombre, 'ruta' => [$d->url], 'clase' => 'boton_prototype_3 plantilla plantilla_hover btn-'.$d->clase];
            }  
        endforeach; 
    
    





        //El SORT_DESC es para ordenarlos de menor a mayor, ejemplo: orderBy('fecha'=>SORT_DESC)

        return $this->render('dashboard',['button' => $botones]);


     
    }

}
