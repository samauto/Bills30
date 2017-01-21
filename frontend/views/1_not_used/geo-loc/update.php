<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\GeoLoc */

$this->title = 'Update Geo Loc: ' . ' ' . $model->geoloc_id;
$this->params['breadcrumbs'][] = ['label' => 'Geo Locs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->geoloc_id, 'url' => ['view', 'id' => $model->geoloc_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="geo-loc-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
