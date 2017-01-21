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
        'columns'=>2,
        'attributes'=>[
            'username'=>['type'=>Form::INPUT_TEXT, Html::icon('cog', ['style' => 'font-size: 1em'])],
            //'username'=>['append'=>['content'=>'@']],
            'email'=>['type'=>Form::INPUT_TEXT]
         ],
    ]);
    ?>
    

    <div class="form-group">
        <BR>
          <?= Html::submitButton($model->isNewRecord ? 'Create' : Html::icon('cog', ['style' => 'font-size: 1em']).' Save', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary btn-block']) ?>
  </div>

    <?php ActiveForm::end(); ?>

</div>
