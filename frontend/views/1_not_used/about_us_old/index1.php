<?php

use yii\helpers\Html;
use kartik\grid\GridView;
//use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AboutUsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'About Us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
   
   
    <?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'subsection',
    ],
]) ?>
   
    <?php Pjax::end();?>
</div>

