<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Typeofdoctor */

$this->title = Yii::t('app', 'Create Typeofdoctor');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Typeofdoctors'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="typeofdoctor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
