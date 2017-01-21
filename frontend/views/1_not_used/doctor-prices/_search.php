<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DoctorPricesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="doctor-prices-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'doc_prices_id') ?>

    <?= $form->field($model, 'doc_id') ?>

    <?= $form->field($model, 'Family') ?>

    <?= $form->field($model, 'Cardiac') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
