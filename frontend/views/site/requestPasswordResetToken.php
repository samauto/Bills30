<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Password Reset';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
        <p>Please fill out your email. A link to reset password will be sent there.</p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email') ?>

                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-danger btn-block']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
