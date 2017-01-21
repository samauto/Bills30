<?php

namespace frontend\controllers;

use Yii;
use frontend\models\SearchControl;
use frontend\models\SearchControlSearch;
use frontend\models\NpiNameSearch;
use frontend\models\NpiSearch;
use frontend\models\State;
use frontend\models\Npi;


use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SearchControlController implements the CRUD actions for SearchControl model.
 */
class SearchControlController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }



    /**
     * Lists all AdminControl models.
     * @return mixed
     */
    public function actionDashboard()
    {
        $this->layout="npi";

        $searchModel = new SearchControlSearch();
        $dataProvider = $searchModel->search(['SearchnControlSearch'=>['search_visible'=>'1']]);
        #$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('dashboard', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


     /**
     * Lists all Search models.
     * @return mixed
     */
    public function actionName()
    {
        $this->layout = 'npi';

        $model_state = new State();    
        $state_list = ArrayHelper::map(State::find()
        -> where(['state_display'=>'1']) 
        -> orderBy('state_name')
        -> all(), 'state_int', 'state_int'); 

        $model_city = new Npi();
        $city_list = ArrayHelper::map(Npi::find()
        //-> where([''])
        -> orderBy('Provider_Business_Practice_Location_Address_City_Name')
        -> all(), 'Provider_Business_Practice_Location_Address_City_Name', 'Provider_Business_Practice_Location_Address_City_Name');
 
        $model = new NpiNameSearch();
        
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {

                $firstname = $model->firstname;
                $lastname = $model->lastname;
                $city = $model->city;
                $state = $model->state;
                $zipcode = $model->zipcode;

            } else {
                $errors = $model->errors;
            }

            return $this->redirect(['nameresults',

                'firstname'=> $firstname,
                'lastname'=> $lastname,
                'city'=> $city,
                'state'=> $state,
                'zipcode'=> $zipcode]);
        } else {
    
            return $this->render('name', [
            'model' => $model,
            'dataProviderState'=>$model_state,
            'selectedState'=>$state_list,
            'dataProviderCity'=>$model_city,
            'selectedCity'=>$city_list
        ]);
        }        
    }


    public function actionNameresults($firstname, $lastname, $city, $zipcode, $state) 
    {
        $this->layout = 'npi';

        $searchNpi = new NpiSearch();
        $dataProviderNpi = $searchNpi->search(['NpiSearch'=>['Provider_First_Name'=>$firstname]]);            
        $dataProviderNpi = $searchNpi->search(['NpiSearch'=>['Provider_Last_Name'=>$lastname]]);            
        $dataProviderNpi = $searchNpi->search(['NpiSearch'=>['Provider_Business_Practice_Location_Address_City_Name'=>$city]]);            
        $dataProviderNpi = $searchNpi->search(['NpiSearch'=>['Provider_Business_Practice_Location_Address_State_Name'=>$state]]);            
        $dataProviderNpi = $searchNpi->search(['NpiSearch'=>['Provider_Business_Practice_Location_Address_Postal_Code'=>$zipcode]]);            


        //if ($firstname == "Any" && $lastname == "Any" && $city == "Any" && $state == "Any" && $zipcode == "Any") {
        //    $dataProviderNpi = "";           
        //}

        return $this->render('nameresults', [
            'dataProvider'=> $dataProviderNpi,
            'firstname'=> $firstname,
            'lastname'=> $lastname,
            'city'=> $city,
            'state'=> $state,
            'zipcode'=> $zipcode,]);
    }


    /**
     * Lists all SearchControl models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchControlSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SearchControl model.
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
     * Creates a new SearchControl model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SearchControl();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->search_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SearchControl model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->search_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SearchControl model.
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
     * Finds the SearchControl model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SearchControl the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SearchControl::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
