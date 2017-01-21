<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SearchControl */

$this->title = Yii::t('app', 'Create Search Control');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Search Controls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="search-control-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
