<?php

namespace frontend\controllers;

use Yii;
use frontend\models\User;
use frontend\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {

        $this->layout = 'dash';

        $mydash = $this->findModel(Yii::$app->user->id);
       // return $this->render('index', [
       //     'model' => $this->findModel(Yii::$app->user->id),
       // ]);

         if ($mydash->load(Yii::$app->request->post()) && $mydash->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('index', [
                'model' => $this->findModel(Yii::$app->user->id),
            ]);
        }
    }


    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionMap()
    {

        $this->layout = 'dash';

        return $this->render('map', [
            'model' => $this->findModel(Yii::$app->user->id),
        ]);
    }


    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionLoginupdate()
    {
        $this->layout = 'dash';

        $model = $this->findModel(Yii::$app->user->id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['loginupdate']);
        } else {
            return $this->render('loginupdate', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionProfileupdate()
    {
        $this->layout = 'dash';

        $model = $this->findModel(Yii::$app->user->id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['profileupdate']);
        } else {
            return $this->render('profileupdate', [
                'model' => $model,
            ]);
        }
    }



    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView()
    {
        return $this->render('view', [
            'model' => $this->findModel(Yii::$app->user->id),
        ]);
    }


    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate()
    {
        $model = $this->findModel(Yii::$app->user->id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['update']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    
    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
