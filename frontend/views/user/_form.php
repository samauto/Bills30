<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
//use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\widgets\FileInput;

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
        'columns'=>2,
        'attributes'=>[
            'username'=>['type'=>Form::INPUT_TEXT],
            //'username'=>['append'=>['content'=>'@']],
            'email'=>['type'=>Form::INPUT_TEXT]
         ],
    ]);
    echo MaskedInput::widget([
    'name' => 'input-1',
    'mask' => '(999) 999-9999'
    ]);
    
    echo '<p><h3>Additional Info</h3></p>';

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

    echo '<label class="control-label">Upload File</label>';
    echo FileInput::widget([
        'name' => 'attachments', 
        'options' => ['multiple' => false], 
        'pluginOptions' => ['previewFileType' => 'any']
    ]); 


    
    //$form->field($model, 'auth_key')->textInput(['maxlength' => true])

    //$form->field($model, 'password_hash')->textInput(['maxlength' => true])

    //$form->field($model, 'password_reset_token')->textInput(['maxlength' => true])
    //$form->field($model, 'status')->textInput() 
    //$form->field($model, 'created_at')->textInput()
    //$form->field($model, 'updated_at')->textInput()

    ?>


    
    

    <div class="form-group">
        <BR>
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Save', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        <?= Html::a('My Dashboard', ['index'], ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
