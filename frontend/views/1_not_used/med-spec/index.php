<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\MedSpecSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Med Specs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="med-spec-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Med Spec'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'medspec_id',
            'special',
            'description',
            'display',
            'scan1',
            // 'scan2',
            // 'scan3',
            // 'scan4',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
