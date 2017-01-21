<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Search;
use frontend\models\HealthSearch;
use frontend\models\Geoloc;
use frontend\models\GeolocSearch;
use frontend\models\DoctorPrices;
use frontend\models\DoctorPricesSearch;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SearchController implements the CRUD actions for Search model.
 */
class SearchController extends Controller
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
        $searchModel = new HealthSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->PageSize=10;
        
        $zipcode = "";

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'zipcode' => $zipcode,
        ]);
    }


    /**
     * Lists all Search models.
     * @return mixed
     */
    public function actionDocsearch($zipcode, $maxc, $minc, $spec, $proc)
    {

            if ($spec == "Any")
                {$sspec = "";}
            else
                {$sspec = $spec;}


        $searchModel = new HealthSearch();
            $dataProvider = $searchModel->search(['HealthSearch'=>['zip'=>$zipcode]]);            
            $dataProvider = $searchModel->search(['HealthSearch'=>['pri_spec'=>$sspec]]); 

            $dataProvider->pagination->PageSize=10;

        $GeoLocModel = new Geoloc();
        
        return $this->render('docsearch', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'GeoLocModel' => $GeoLocModel,
            'zipcode' => $zipcode,
            'spec' => $spec,
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
    public function actionView($id, $zipcode, $maxc, $minc, $spec, $proc)
    {
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
        if (($model = Search::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
