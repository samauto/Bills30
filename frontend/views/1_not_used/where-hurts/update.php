<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\WhereHurts */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Where Hurts',
]) . ' ' . $model->hurts_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Where Hurts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hurts_id, 'url' => ['view', 'id' => $model->hurts_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="where-hurts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
