<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RefundSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Refund Policy';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refund-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'refund_sub',
            'refund_pg',
        ],
    ]); ?>

</div>
