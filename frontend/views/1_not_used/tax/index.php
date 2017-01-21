<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TaxSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Taxes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tax-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Tax'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Tax_Id',
            'Medicare_Specialty_Code',
            'Medicare_Provider_Supplier_Type',
            'Provider_Taxonomy_Code',
            'Provider_Taxonomy_Type',
            // 'Provider_Taxonomy_Class',
            // 'Provider_Taxonomy_Special',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
