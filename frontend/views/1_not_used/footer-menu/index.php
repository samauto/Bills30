<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FooterMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Footer Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="footer-menu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Footer Menu', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model->footer_id), ['view', 'id' => $model->footer_id]);
        },
    ]) ?>

</div>
