<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Terms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="terms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'terms_sub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'terms_pg')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
