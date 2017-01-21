<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MedSpecSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="med-spec-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'medspec_id') ?>

    <?= $form->field($model, 'special') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'display') ?>

    <?= $form->field($model, 'scan1') ?>

    <?php // echo $form->field($model, 'scan2') ?>

    <?php // echo $form->field($model, 'scan3') ?>

    <?php // echo $form->field($model, 'scan4') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
