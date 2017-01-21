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
