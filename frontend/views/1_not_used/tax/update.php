<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tax */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tax',
]) . ' ' . $model->Tax_Id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Taxes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Tax_Id, 'url' => ['view', 'id' => $model->Tax_Id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tax-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
