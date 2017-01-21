<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;
//use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model backend\models\AboutUs */



$this->title = "About Us";
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-index">

<div id="about_title"><?= Html::encode($this->title) ?></div>

<div id="about_body">
<?php
    $cnt = 0;
    foreach ($dataProviderT->models as $model_subTitle) {
        
        echo "<div><p class='subtitle-about'>".$dataProviderT->models[$cnt]->type."</p>";
        $subcnt = 1;

        foreach ($dataProvider->models as $model_subSection) {

            if ($model_subTitle->aboutustype_id == $model_subSection->aboutustype_id)
            { 
                echo "<p class='sub-about'>".$model_subSection->subsection."</p>";
            }
        $subcnt++;
        }
        $cnt++;
    }
    
?>
</div>

</div>
