<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FraudSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fraud Policy';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fraud-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'fraud_sub',
            'fraud_pg',

        ],
    ]); ?>

</div>
