<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NpiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>

<div class="npi-index">

      <div id="wrapper">
            <div id="content">Column 1 (fluid)
             <?= $this->render('name', [
                        'model' => $model,]);?></div>
            <div id="sidebar">Column 2 (fixed)</div>
            <div id="cleared"></div>
      </div>

</div>


