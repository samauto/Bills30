<?php

//use yii\helpers\Html;
use kartik\form\ActiveForm;
//use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\widgets\FileInput;

use kartik\helpers\Html;
use kartik\icons\Icon;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php 

    $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_VERTICAL]); 

    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>3,
        //'options'=>'<i class="glyphicon glyphicon-phone"></i>',
        'attributes'=>[
            'first_name'=>['type'=>Form::INPUT_TEXT],
            'mid_name'=>['type'=>Form::INPUT_TEXT],
            'last_name'=>['type'=>Form::INPUT_TEXT]
        ]
    ]);
    
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>1,
        'attributes'=>[
            'address_1'=>['type'=>Form::INPUT_TEXT],
            'address_2'=>['type'=>Form::INPUT_TEXT]
        ]
    ]);

    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>3,
        'attributes'=>[
            'city'=>['type'=>Form::INPUT_TEXT],
            'state'=>['type'=>Form::INPUT_TEXT],
            'zipcode'=>['type'=>Form::INPUT_TEXT]
        ]
    ]);

    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>2,
        'attributes'=>[
            'home_phone'=>['type'=>Form::INPUT_TEXT,
            'prepend' => '<span class="input-group-addon glyphicon glyphicon-phone" 
             id="yourId1"></span>'],
            'cell_phone'=>['type'=>Form::INPUT_TEXT,
            'prepend' => '<span class="input-group-addon glyphicon glyphicon-phone" 
             id="yourId2"></span>']
        ]
    ]);

    ?>
    

    <div class="form-group">
        <BR>
        <?= Html::submitButton($model->isNewRecord ? 'Create' : Html::icon('cog', ['style' => 'font-size: 1em']).' Save', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-danger btn-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
