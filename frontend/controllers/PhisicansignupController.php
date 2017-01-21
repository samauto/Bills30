<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Phisicansignup;
class PhisicansignupController extends \yii\web\Controller
{
    public function actionIndex()
    {
        
        $model = new Phisicansignup();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                Yii::$app->getSession()->setFlash('success', 'Your prompt was created successfully!');
                $model->password = $model->confirm_password = Yii::$app->getSecurity()->generatePasswordHash($model->password);
                $model->other_password= Yii::$app->getSecurity()->generatePasswordHash($model->other_password);
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
