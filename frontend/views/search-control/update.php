<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\SearchControl */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Search Control',
]) . ' ' . $model->search_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Search Controls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->search_id, 'url' => ['view', 'id' => $model->search_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="search-control-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
