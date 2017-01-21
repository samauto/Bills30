<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\WhereHurts */

$this->title = $model->hurts_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Where Hurts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="where-hurts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->hurts_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->hurts_id], [
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
            'hurts_id',
            'hurts_type',
            'hurts_link',
            'hurts_pic',
            'display',
        ],
    ]) ?>

</div>
