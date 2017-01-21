<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Npi */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Npi',
]) . ' ' . $model->NPI;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Npis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NPI, 'url' => ['view', 'id' => $model->NPI]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="npi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
