<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Geoloc */

$this->title = $model->NPI;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Geolocs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="geoloc-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->NPI], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->NPI], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'NPI',
            'address',
            'latitude',
            'longitude',
            'streetid',
            'left_right',
        ],
    ]) ?>

</div>
