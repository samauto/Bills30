<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\InvestorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Investor News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="investor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'invest_sub',
            'invest_pg',

        ],
    ]); ?>

</div>
