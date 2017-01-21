<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\GeoLoc */

$this->title = 'Create Geo Loc';
$this->params['breadcrumbs'][] = ['label' => 'Geo Locs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="geo-loc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
