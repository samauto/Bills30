<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Taxonomy */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Taxonomy',
]) . ' ' . $model->tax_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Taxonomies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tax_id, 'url' => ['view', 'id' => $model->tax_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="taxonomy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
