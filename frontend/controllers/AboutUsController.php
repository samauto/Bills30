<?php

namespace frontend\controllers;

use Yii;
use frontend\models\AboutUs;
use frontend\models\AboutUsSearch;
use frontend\models\AboutUsTypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AboutUsController implements the CRUD actions for AboutUs model.
 */
class AboutUsController extends Controller
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
     * Lists all AboutUs models.
     * @return mixed
     */
    public function actionIndex()
    {
    $searchModelType = new AboutUsTypeSearch();
    $dataProviderType = $searchModelType->search(['AboutUsTypeSearch'=>['typedisplay'=>'1']]);
    $dataProviderType->sort->defaultOrder = ['orderoftype'=>SORT_ASC];

    $searchModel = new AboutUsSearch();
    //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    $dataProvider = $searchModel->search(['AboutUsTypeSearch'=>['aboutdisplay'=>'1']]);
    $dataProvider->sort->defaultOrder = ['suborder'=>SORT_ASC];
  

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'dataProviderT' => $dataProviderType,
        ]);

    }



    /**
     * Finds the AboutUs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AboutUs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AboutUs::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
