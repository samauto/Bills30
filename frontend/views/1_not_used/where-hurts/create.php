<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\WhereHurts */

$this->title = Yii::t('app', 'Create Where Hurts');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Where Hurts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="where-hurts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
