<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\FaqForm;
use frontend\models\DocSearch;
use frontend\models\FooterMenuSearch;
use frontend\models\SubmenuSearch;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use yii\helpers\ArrayHelper;
use frontend\models\Typeofdoctor;
use frontend\models\Taxonomy;
use frontend\models\Procedures;
use frontend\models\CashPricing;


/**
 * Site controller
 */
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
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

    $modelspecial = new typeofdoctor();    

    //$specialities = ArrayHelper::map(Taxonomy::find()
    //    -> where(['tax_display'=>'0']) 
    //    -> orderBy('tax_class')
    //    -> all(), 'tax_code', 'tax_general');    

    $specialities = ArrayHelper::map(typeofdoctor::find()
        -> where(['displaydoc'=>'0']) 
        -> orderBy('doctor_type')
        -> all(), 'doctor_type', 'doctor_type'
        );    


    $modelspecial1 = new Taxonomy();    

    //$specialities = ArrayHelper::map(Taxonomy::find()
    //    -> where(['tax_display'=>'0']) 
    //    -> orderBy('tax_class')
    //    -> all(), 'tax_code', 'tax_general');    

    $specialities1 = ArrayHelper::map(Taxonomy::find()
        -> where(['tax_display'=>'0']) 
        -> orderBy('tax_class')
        -> all(), 'tax_code', 'tax_general'
        );    

    


    $modelprocedures = new Procedures();    
    $procedures = ArrayHelper::map(Procedures::find()->
        where(['display'=>'0']) ->
        all(), 'procedure_type', 'procedure_type');    


    $modelmincash = new CashPricing();    
    $mincash = ArrayHelper::map(CashPricing::find()->
        where(['display'=>'1']) ->
        all(), 'low_cash', 'low_cash');    

    $modelmaxcash = new CashPricing();    
    $maxcash = ArrayHelper::map(CashPricing::find()->
        where(['display'=>'1']) ->
        all(), 'high_cash', 'high_cash');    


    //return $this->render('your_view',['model'=>$model, 'items'=>$items]);


       $searchModelFooter = new FooterMenuSearch();
       $dataProviderFooter1 = $searchModelFooter->search(['FooterMenuSearch'=>['foot_visible'=>'1']]);
       $dataProviderFooter2 = $searchModelFooter->search(['FooterMenuSearch'=>['foot_visible'=>'2']]);
       $dataProviderFooter3 = $searchModelFooter->search(['FooterMenuSearch'=>['foot_visible'=>'3']]);
       
       $searchModelSubmenu = new SubmenuSearch();
       $dataProviderSubmenu = $searchModelSubmenu->search(Yii::$app->request->queryParams);       
        
       //$spec = 'Any';
       //$proc = 'Any';
       //$minc = 'Any';
       //$maxc = 'Any'; 

       $model = new DocSearch();

        if ($model->load(Yii::$app->request->post())) 
        {        

            if ($model->zipcode == NULL) 
            {
            $zipcode = "Any";
            }    
            else {$zipcode = $model->zipcode;}
            
            //$zipcode = $model->zipcode;

            
            if ($model->spec == NULL) 
            {
            $spec = "Any";
            }    
            else {$spec = $model->spec;}

            
            if ($model->proc == NULL)
            {
            $proc = "Any";
            } 
            else {$proc = $model->proc;}


            if ($model->minc == NULL) 
            {$minc = 1;}
            else 
            {$minc = $model->minc;}

            if ($model->maxc == NULL) 
            {$maxc = 1;}
            else 
            {$maxc = $model->maxc;}

            //print_r ($_POST);
            //print_r ($spec.'_'.$proc.'='.$minc.'-'.$maxc.'/'.$zipcode); 
            //exit();


            if (isset($_POST['docbutton'])) {  
                return $this->redirect(['npi/docsearch', 'spec' => $spec, 'zipcode' => $zipcode, 'proc' => $proc, 'minc' => $minc, 'maxc' => $maxc]);
            } 
        }
        else 
        {
            $errors = $model->errors;
            return $this->render('index', [
                'model' => $model,
                'dataProviderFooter1' => $dataProviderFooter1,
                'dataProviderFooter2' => $dataProviderFooter2,
                'dataProviderFooter3' => $dataProviderFooter3,
                'dataProviderSubmenu' => $dataProviderSubmenu,
                'dataProviderSpeciality' => $modelspecial,
                'specialities' => $specialities,
                'dataProviderProcedure' => $modelprocedures,
                'procedures' => $procedures,
                'dataProviderMinCash' => $modelmincash,
                'mincash' => $mincash,
                'dataProviderMaxCash' => $modelmaxcash,
                'maxcash' => $maxcash,]);
        }
    }


    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionEmsearch()
    {
        if ($model->load(Yii::$app->request->post()) && $model->validate()) 
        {
            return $this->goHome();
        }
        else 
        {
            return $this->render('emsearch', ['model' => $model]);
        }
    }


    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


        /**
     * Displays factual page.
     *
     * @return mixed
     */
    public function actionDocsearch()
    {
        return $this->render('docsearch');
    }


        /**
     * Displays factual page.
     *
     * @return mixed
     */
    public function actionTest()
    {
        return $this->render('test');
    }
         /**
     * Displays factual page.
     *
     * @return mixed
     */
    public function actionIndexs()
    {
        return $this->render('indexs');
    }

    /**
     * Displays factual page.
     *
     * @return mixed
     */
    public function actionFacsearch()
    {
        return $this->render('facsearch');
    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
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

}
