<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Typeofdoctor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="typeofdoctor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'doctor_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'displaydoc')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
