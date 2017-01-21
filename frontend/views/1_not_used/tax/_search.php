<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TaxSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tax-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Tax_Id') ?>

    <?= $form->field($model, 'Medicare_Specialty_Code') ?>

    <?= $form->field($model, 'Medicare_Provider_Supplier_Type') ?>

    <?= $form->field($model, 'Provider_Taxonomy_Code') ?>

    <?= $form->field($model, 'Provider_Taxonomy_Type') ?>

    <?php // echo $form->field($model, 'Provider_Taxonomy_Class') ?>

    <?php // echo $form->field($model, 'Provider_Taxonomy_Special') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
