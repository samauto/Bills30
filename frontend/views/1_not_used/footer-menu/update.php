<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\FooterMenu */

$this->title = 'Update Footer Menu: ' . ' ' . $model->footer_id;
$this->params['breadcrumbs'][] = ['label' => 'Footer Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->footer_id, 'url' => ['view', 'id' => $model->footer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="footer-menu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
