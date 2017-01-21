<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SearchControlSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="search-control-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'search_id') ?>

    <?= $form->field($model, 'search_panel') ?>

    <?= $form->field($model, 'search_link') ?>

    <?= $form->field($model, 'search_pic') ?>

    <?= $form->field($model, 'search_visible') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
