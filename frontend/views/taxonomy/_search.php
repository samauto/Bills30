<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TaxonomySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taxonomy-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'tax_id') ?>

    <?= $form->field($model, 'tax_code') ?>

    <?= $form->field($model, 'tax_group') ?>

    <?= $form->field($model, 'tax_class') ?>

    <?= $form->field($model, 'tax_spec') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
