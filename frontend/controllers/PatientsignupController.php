<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Patientsignup;

class PatientsignupController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $model = new Patientsignup();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                Yii::$app->getSession()->setFlash('success', 'Your prompt was created successfully!');
                $model->user_password = $model->confirm_password = Yii::$app->getSecurity()->generatePasswordHash($model->user_password);
                $model->save();
                // form inputs are valid, do something here

            }
            else {
                Yii::$app->getSession()->setFlash('error', 'Error while submitting your prompt.');
            }
            return $this->redirect('');
        }

        return $this->render('index', [
            'model' => $model,
        ]);
    }

}
