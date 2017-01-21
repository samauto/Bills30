<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Taxonomy */

$this->title = Yii::t('app', 'Create Taxonomy');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Taxonomies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taxonomy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
