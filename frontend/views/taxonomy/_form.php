<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Taxonomy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taxonomy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tax_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_spec')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
