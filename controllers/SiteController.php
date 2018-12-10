<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Dashboard;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {    
         return [
            'ghost-access' => [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
        /*return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => false,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],*/
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
		/******************************************************************
		*      Agregado para generar los botones del Dashboard
		******************************************************************/
        $user      = Yii::$app->user->identity->id;
        $roles     = Yii::$app->db->createCommand('select item_name from auth_assignment where user_id="'.$user.'"')->queryAll();
        $dashboard = Dashboard::find()->where(['status'=>'1'])->orderBy(['orden'=>SORT_ASC,'id'=>SORT_ASC])->all();
        $botones = [];
        foreach($dashboard as $d):
            $encontrado = false;
            foreach($roles as $r):
               $pos = strpos($d->rol,$r['item_name']);
               if($pos !== false) {
                  $encontrado = true;
               }
            endforeach; 
            if($encontrado || strpos($d->rol,'Todos') !== false){
                $botones[]= ['texto' => $d->nombre, 'ruta' => [$d->url], 'clase' => 'boton_prototype_3 plantilla plantilla_hover btn-'.$d->clase];
            }  
        endforeach; 
		/******************************************************************/
       
        if(!Yii::$app->user->isGuest) {
             return $this->render('index',[
               'botones' => $botones
             ]);
        }
        return $this->redirect('site/login');
    }
    
    public function actionDash()
    {
        return $this->render('dashboardPrincipal');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
		if (!Yii::$app->user->isGuest) {
           //return $this->goHome();
           return $this->redirect('site/login');
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
}
