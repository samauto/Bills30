<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tax */

$this->title = $model->Tax_Id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Taxes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tax-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->Tax_Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->Tax_Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Tax_Id',
            'Medicare_Specialty_Code',
            'Medicare_Provider_Supplier_Type',
            'Provider_Taxonomy_Code',
            'Provider_Taxonomy_Type',
            'Provider_Taxonomy_Class',
            'Provider_Taxonomy_Special',
        ],
    ]) ?>

</div>
