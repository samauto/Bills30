<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProvidersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Providers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="providers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Providers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'doctor_id',
            'first_name',
            'last_name',
            'business_name',
            'address_1',
            // 'address_2',
            // 'city',
            // 'state',
            // 'zip',
            // 'phone',
            // 'fax',
            // 'special_1',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
