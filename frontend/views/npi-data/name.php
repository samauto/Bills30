<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\widgets\ActiveForm;
use yii\web\Controller;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NpiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>

<div width="340">

    <?php 
    Pjax::begin([
    // Pjax options
    ]);
    $form = ActiveForm::begin([
        'id' => 'name-form-inline', 
        'type' => ActiveForm::TYPE_INLINE,
        'formConfig' => ['showErrors' => true],
    ]); 
    ?>

    <?= $form->field($model, 'firstname') ?>
    <?= $form->field($model, 'lastname') ?>
    <?= $form->field($model, 'city') ?>
    <?= $form->field($model, 'state') ?>
    <?= $form->field($model, 'zipcode') ?>

    <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    <?= Html::resetButton('Clear', ['class' => 'btn btn-default']) ?>    
    
    <?php ActiveForm::end(); 
    Pjax::end();?>
    
</div>



