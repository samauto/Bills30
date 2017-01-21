<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PrivacySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Privacy Policy';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="privacy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'privacy_sub',
            'privacy_pg',
            
        ],
    ]); ?>

</div>
