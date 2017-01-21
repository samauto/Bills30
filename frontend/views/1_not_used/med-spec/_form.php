<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MedSpec */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="med-spec-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'special')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display')->textInput() ?>

    <?= $form->field($model, 'scan1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scan2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scan3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scan4')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
