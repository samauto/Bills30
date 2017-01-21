<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CareersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Careers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="careers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'careers_sub',
            'careers_pg',

        ],
    ]); ?>

</div>
