<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Npi;
use frontend\models\NpiSearch;
use frontend\models\NpiNameSearch;


use frontend\models\TaxonomySearch;
use frontend\models\Geoloc;
use frontend\models\GeolocSearch;
use frontend\models\DoctorPrices;
use frontend\models\DoctorPricesSearch;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * NpiController implements the CRUD actions for Npi model.
 */
class NpiDataController extends Controller
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
     * Lists all Search models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = 'npi';

        $model = new NpiNameSearch();
        return $this->render('index', ['model'=> $model
        ]);
    }

    /**
     * Lists all Search models.
     * @return mixed
     */
    public function actionName()
    {
        $this->layout = 'npi';
 
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
        ]);
        }        
    }


    public function actionNameresults($firstname, $lastname, $city, $zipcode, $state) 
    {
        $this->layout = 'npi';

        $searchNpi = new NpiSearch();
        $dataProviderNpi = $searchNpi->search(['NpiSearch'=>['Provider_First_Name'=>$firstname]]);            
        $dataProviderNpi = $searchNpi->search(['NpiSearch'=>['Provider_First_Name'=>$lastname]]);            
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

}