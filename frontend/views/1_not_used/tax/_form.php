<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tax */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tax-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Tax_Id')->textInput() ?>

    <?= $form->field($model, 'Medicare_Specialty_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Medicare_Provider_Supplier_Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Taxonomy_Code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Taxonomy_Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Taxonomy_Class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provider_Taxonomy_Special')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
