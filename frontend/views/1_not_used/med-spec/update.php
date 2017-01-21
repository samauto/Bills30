<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MedSpec */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Med Spec',
]) . ' ' . $model->medspec_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Med Specs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->medspec_id, 'url' => ['view', 'id' => $model->medspec_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="med-spec-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
