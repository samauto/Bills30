<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\FooterMenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="footer-menu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'foot_head')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foot_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foot_linkname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foot_visible')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
