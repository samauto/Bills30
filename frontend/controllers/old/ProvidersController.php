<?php

namespace frontend\controllers;

use Yii;
use common\models\ProLoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\ProSignupForm;

use frontend\models\Providers;
use frontend\models\ProvidersSearch;
use yii\web\Controller;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * ProvidersController implements the CRUD actions for Providers model.
 */
class ProvidersController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
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
                //'level' => 1, // avaliable level are 1,2,3 :D
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'offset' => 2, // space between characters 
                'testLimit' => 1, // how many times should the same CAPTCHA be displayed 
                //'padding' => 10 // padding around the text  
            ],

            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'oAuthSuccess'],
            ],
        ];
    }

    /**
    * This function will be triggered when user is successfuly authenticated using some oAuth client.
    *
    * @param yii\authclient\ClientInterface $client
    * @return boolean|yii\web\Response
    */
    public function oAuthSuccess($client) {
    // get user data from client
    $userAttributes = $client->getUserAttributes();

    // do some thing with user data. for example cubrid_connect_with_url(conn_url) $userAttributes['email']
    }


    /**
     * Lists all Providers models.
     * @return mixed
     */
    public function actionIndex()
    {
               
        if (isset($_POST['joinbutton'])) 
        {  
            return $this->redirect(['prosignup',]);
        } 
        elseif (isset($_POST['loginbutton'])) 
        {  
            return $this->redirect(['prologin',]);
        } 
        else 
        {
            return $this->render('index', []);
        }
    }


    public function actionIndexold()
    {
        $searchModel = new ProvidersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('prodash', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionPrologin()
    {
        if (!\Yii::$app->user->isGuest) {
            //return $this->goHome();
            return $this->redirect(['prodash']);
        }

        $model = new ProLoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            //    return $this->goBack();
            return $this->render(['prodash',]);
        } else {
            return $this->render('prologin', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionPrologout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionProsignup()
    {
        $model = new ProSignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->prosignup()) {
                if (Yii::$app->getUser()->login($user)) {
                    //return $this->goHome();
                    return $this->redirect(['prodash',]);
                }
            }
        }

        return $this->render('prosignup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }


    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionProdash()
    {

        //$this->layout = 'dash';

        return $this->render('prodash', [
            'model' => $this->findModel(Yii::$app->provider->id),
        ]);
    }


    /**
     * Displays a single Providers model.
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
     * Creates a new Providers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Providers();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->doctor_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Providers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->doctor_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Providers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Providers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Providers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Providers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
