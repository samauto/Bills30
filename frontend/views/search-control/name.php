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

<div class="search-name" width="340">

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

    <?php
        echo $form->field($model, 'firstname') 
        ->label('')
        ->textInput(['maxlength'=>10,'style'=>'width:150px', 'placeholder'=>'Enter First Name']);
    ?><BR>

    <?php
        echo $form->field($model, 'lastname')
        ->label('')
        ->textInput(['maxlength'=>10,'style'=>'width:150px', 'placeholder'=>'Enter Last Name']);
    ?><BR>

    <?php 
        echo $form->field($model, 'city')
        ->dropDownList(
            $selectedCity,    
            ['prompt'=>'Any City', 'style' => 'width:150px'])
        ->label('');
    ?><BR>
    
    <?php 
        echo $form->field($model, 'state')
        ->dropDownList(
            $selectedState,    
            ['prompt'=>'Any State', 'style' => 'width:150px'])
        ->label('');
    ?><BR>

    <?= $form->field($model, 'zipcode') 
        ->label('')
        ->textInput(['maxlength'=>10,'style'=>'width:150px', 'placeholder'=>'Enter ZipCode']);

    ?><BR>

    <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    <?= Html::resetButton('Clear', ['class' => 'btn btn-default']) ?>    
    
    <?php ActiveForm::end(); 
    Pjax::end();?>
    
</div>



