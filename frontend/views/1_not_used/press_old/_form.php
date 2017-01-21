<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Press */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="press-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'press_sub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'press_pg')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
