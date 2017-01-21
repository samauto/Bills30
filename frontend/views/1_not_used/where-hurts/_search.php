<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\WhereHurtsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="where-hurts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'hurts_id') ?>

    <?= $form->field($model, 'hurts_type') ?>

    <?= $form->field($model, 'hurts_link') ?>

    <?= $form->field($model, 'hurts_pic') ?>

    <?= $form->field($model, 'display') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
