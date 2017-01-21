<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $model frontend\models\DoctorPrices */

#$this->title = $model->doc_prices_id;

$this->params['breadcrumbs'][] = ['label' => 'Doctor Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doctor-prices-view">

    <h1><?= Html::encode($this->title) ?></h1>
<?php
echo ListView::widget( [
    'dataProvider' => $dataProvider,
    'itemView' => '_prices',
] ); ?>

</div>
