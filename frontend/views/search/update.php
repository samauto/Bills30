<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Search */

$this->title = 'Update Search: ' . ' ' . $model->med_id;
$this->params['breadcrumbs'][] = ['label' => 'Searches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->med_id, 'url' => ['view', 'id' => $model->med_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="search-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
