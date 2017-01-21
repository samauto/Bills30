<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


$this->title = 'Get In Touch';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div id="contact_title"><?= Html::encode($this->title) ?></div>

    <div id="contact_body">
     <div class="row">
        <div class="col-lg-12">
         <p>
           We're here to help you. If you have any questions regarding technical issues or pricing questions, fill out the box below. We will try to get in touch as soon as possible.
         </p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'contact-form', 'options'=>['style'=>'width:500px;margin:0px auto;']]); ?>

                <div class="col-lg-12"><?= $form->field($model, 'name')->textInput([]); ?></div>

                <div class="col-lg-12"><?= $form->field($model, 'email')->textInput([]); ?></div>

                <div class="col-lg-12"><?= $form->field($model, 'subject'); ?></div>

                <div class="col-lg-12"><?= $form->field($model, 'body')->textArea(['rows' => 6]); ?></div>

                <div class="col-lg-12"><?= $form->field($model, 'verifyCode')->widget(Captcha::className(), 
                [
                    //'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?></div>

                <div class="form-group contact-but">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-danger btn-block', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
    </div>

</div>
