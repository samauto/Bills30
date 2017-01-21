<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Faq;
use frontend\models\FaqSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\FaqForm;


/**
 * FaqSearchController implements the CRUD actions for Faq model.
 */
class FaqSearchController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Faq models.
     * @return mixed
     */
    public function actionIndex()
    {
    $searchModel = new FaqSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    
    $model = new FaqForm();
    if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('success', 'Thank you for submitting a quesiton. We will upddate the faq as soon as possible.');
        } else {
            Yii::$app->session->setFlash('error', 'There was an error sending email.');
        }
        return $this->refresh();
    } 

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,        
        ]);

    }

    
    /**
     * Finds the Faq model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Faq the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Faq::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
