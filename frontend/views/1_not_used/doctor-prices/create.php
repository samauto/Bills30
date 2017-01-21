<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\DoctorPrices */

$this->title = 'Create Doctor Prices';
$this->params['breadcrumbs'][] = ['label' => 'Doctor Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doctor-prices-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
