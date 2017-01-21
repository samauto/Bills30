<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Typeofdoctor */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Typeofdoctor',
]) . ' ' . $model->type_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Typeofdoctors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->type_id, 'url' => ['view', 'id' => $model->type_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="typeofdoctor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
