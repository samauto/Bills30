<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Html;
use frontend\models\Npi;
use frontend\models\NpiSearch;
use frontend\models\Taxonomy;
use frontend\models\TaxonomySearch;
use frontend\models\Geoloc;
use frontend\models\GeolocSearch;
use frontend\models\DoctorPrices;
use frontend\models\DoctorPricesSearch;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;


/**
 * NpiController implements the CRUD actions for Npi model.
 */
class NpiController extends Controller
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
     * Lists all Npi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NpiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->PageSize=10;
        
        $zipcode = "";
        $this->layout = 'npi';

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'zipcode' => $zipcode,
        ]);
    }


   /**
     * Displays a single Search model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
     
        $this->layout = 'profile';

        $zipcode = "";
        $spec = "";
        $proc = "";
        $minc = "";
        $maxc = "";

        return $this->render('view', [
            'model' => $this->findModel($id),
            'zipcode' => $zipcode,
            'spec' => $spec,
            'proc' => $proc,
            'minc' => $minc,
            'maxc' => $maxc,
        ]);
    }


     /**
     * Updates an existing Search model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->med_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Finds the Search model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Search the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Npi::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    /**
     * Lists all Search models.
     * @return mixed
     */
    public function actionDocsearch($zipcode, $maxc, $minc, $spec, $proc)
    {

        //echo Html::encode($spec);

        $searchTax = new TaxonomySearch();
        $dataProviderTax = $searchTax->search(['TaxonomySearch'=>['tax_general'=>$spec]]);            


            if ($spec == "Any")
                {$sspec = "";}
            else
                {$sspec = $spec;}

            if ($zipcode == "Any")
                {$zzipcode = "";}
            else
                {$zzipcode = $zipcode;}

        $modelsTax = $dataProviderTax->getModels();
        
        $searchModel = new NpiSearch();
        $dataProvider = $searchModel->search(['NpiSearch'=>['Provider_Business_Practice_Location_Address_Postal_Code'=>$zzipcode]]);            
            
        foreach ($dataProviderTax->models as $modelTax) {    
            $dataProvider = $searchModel->search(['NpiSearch'=>['Healthcare_Provider_Taxonomy_Code_1'=>$modelTax->tax_code]]); 
        echo $dataProvider->getCount();
        }

        //$data = array_merge($dataProviderTemp->getModels(), $dataProviderCurrent->getModels());
        //$dataProvider = new ArrayDataProvider([
        //'allModels' => $data
        //]);

//        $dataProvider = $dataProvider+$dataProviderTemp;

        $dataProvider->pagination->PageSize=10;


        //$searchModel = new NpiSearch();
        //    $dataProvider = $searchModel->search(['NpiSearch'=>['Provider_Business_Practice_Location_Address_Postal_Code'=>$zzipcode]]);            
        //    $dataProvider = $searchModel->search(['NpiSearch'=>['Healthcare_Provider_Taxonomy_Code_1'=>$sspec]]); 
        //    $dataProvider->pagination->PageSize=10;


        echo '<BR>'.$dataProvider->getCount();

        $GeoLocModel = new Geoloc();

        
        return $this->render('docsearch', 
            [
            'dataProviderT' => $dataProviderTax,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'GeoLocModel' => $GeoLocModel,
            'zipcode' => $zipcode,
            'spec' => $sspec,
            'proc' => $proc,
            'minc' => $minc,
            'maxc' => $maxc,
        ]);
    }




     /**
     * Displays a single Search model.
     * @param integer $id
     * @return mixed
     */
    public function actionPrices1($id, $zipcode)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'zipcode' => $zipcode,
        ]);
    }

    /**
     * Displays a single Search model.
     * @param integer $id
     * @return mixed
     */
    public function actionPrices($id)
    {
        $searchModel = new DoctorPricesSearch();
        $dataProvider = $searchModel->search(['DoctorPricesSearch'=>['doc_id'=>$id]]);

        return $this->render('prices', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    
   

}

