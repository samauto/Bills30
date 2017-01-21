<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Submenu */

$this->title = 'Update Submenu: ' . ' ' . $model->submenu_id;
$this->params['breadcrumbs'][] = ['label' => 'Submenus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->submenu_id, 'url' => ['view', 'id' => $model->submenu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="submenu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
