<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Geoloc */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Geoloc',
]) . ' ' . $model->NPI;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Geolocs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NPI, 'url' => ['view', 'id' => $model->NPI]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="geoloc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
