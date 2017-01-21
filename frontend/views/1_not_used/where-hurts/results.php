<?php

use yii\grid\GridView;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use kartik\widgets\SideNav;
use kartik\helpers\Html;
use yii\helpers\Url;
use kartik\icons\Icon;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdminControlSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = Yii::t('app', 'Where Does It Hurts');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', $this->title.' Scan'), 'url' => ['scan']];
//$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($hurts) ?></h1>

<?php 
foreach ($dataProvider->models as $model_panel) {
?>
    <div class="col-xs-12, col-sm-4">
 
    <?php
    echo Html::panel(
    [

        'postBody' => Html::listGroup([
        [
            'content' => 
                $model_panel->special,
            'url' => Url::to(['search/docsearch','spec' =>$model_panel->special, 'zipcode'=>'Any', 'minc'=>'Any', 'maxc'=>'Any', 'proc'=>'Any']),  
        ],
        ], [], 'ul', 'li'),
    ]
    );
    ?>
    </div>
<?php
}
?>
