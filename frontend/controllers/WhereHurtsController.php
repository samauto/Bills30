<?php

namespace frontend\controllers;

use Yii;
use frontend\models\WhereHurts;
use frontend\models\WhereHurtsSearch;
use frontend\models\MedSpec;
use frontend\models\MedSpecSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WhereHurtsController implements the CRUD actions for WhereHurts model.
 */
class WhereHurtsController extends Controller
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
    public function actionScan()
    {
        $searchModel = new WhereHurtsSearch();
        $dataProvider = $searchModel->search(['WhereHurtsSearch'=>['visible'=>'1']]);
        #$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('scan', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single WhereHurts model.
     * @param integer $id
     * @return mixed
     */
    public function actionResults($id, $hurts)
    {
        $searchMedSpec = new MedSpecSearch();
        $dataMedSpec = $searchMedSpec->search(['MedSpecSearch'=> ['scan1'=>$id]]);
        return $this->render('results', [
            'searchModel' => $searchMedSpec,
            'dataProvider' => $dataMedSpec,
            'hurts' => $hurts,
        ]);
    }


    /**
     * Lists all WhereHurts models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new WhereHurtsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,'scan3'
        ]);
    }

    /**
     * Displays a single WhereHurts model.
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
     * Creates a new WhereHurts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WhereHurts();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->hurts_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WhereHurts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->hurts_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WhereHurts model.
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
     * Finds the WhereHurts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WhereHurts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WhereHurts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
