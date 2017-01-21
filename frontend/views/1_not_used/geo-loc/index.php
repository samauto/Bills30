<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\GeolocSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Geo Locs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="geo-loc-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Geo Loc', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'geoloc_id',
            'address',
            'latitude',
            'longitude',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
