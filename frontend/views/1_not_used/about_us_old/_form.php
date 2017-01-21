<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
//use yii\widgets\ActiveForm;
use backend\models\AboutUsType;
/* @var $this yii\web\View */
/* @var $model frontend\models\AboutUs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-us-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'aboutustype_id')->textInput() ?>
    
     <?= $form->field($model, 'aboutustype_id')->dropDownList(
    		ArrayHelper::map(FaqType::find()->all(),'aboutustype_id','type'),
    		['prompt'=>'Select Type'] )?>

    <?= $form->field($model, 'subsection')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suborder')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
