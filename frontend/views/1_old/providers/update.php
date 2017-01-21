<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Providers */

$this->title = 'Update Providers: ' . ' ' . $model->doctor_id;
$this->params['breadcrumbs'][] = ['label' => 'Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->doctor_id, 'url' => ['view', 'id' => $model->doctor_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="providers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
