<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Fraud */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fraud-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fraud_sub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fraud_pg')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
