<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TermsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Terms Of Use';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="terms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'terms_sub',
            'terms_pg',

        ],
    ]); ?>

</div>
