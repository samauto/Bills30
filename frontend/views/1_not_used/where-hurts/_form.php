<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\WhereHurts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="where-hurts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hurts_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hurts_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hurts_pic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'display')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
