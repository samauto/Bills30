<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\FooterMenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="footer-menu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'footer_id') ?>

    <?= $form->field($model, 'foot_head') ?>

    <?= $form->field($model, 'foot_link') ?>

    <?= $form->field($model, 'foot_linkname') ?>

    <?= $form->field($model, 'foot_visible') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
