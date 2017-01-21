<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DoctorPrices */

$this->title = 'Update Doctor Prices: ' . ' ' . $model->doc_prices_id;
$this->params['breadcrumbs'][] = ['label' => 'Doctor Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->doc_prices_id, 'url' => ['view', 'id' => $model->doc_prices_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="doctor-prices-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
