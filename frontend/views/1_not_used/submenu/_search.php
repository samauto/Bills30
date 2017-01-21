<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SubmenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="submenu-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'submenu_id') ?>

    <?= $form->field($model, 'sub_name') ?>

    <?= $form->field($model, 'sub_link') ?>

    <?= $form->field($model, 'sub_pic') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
