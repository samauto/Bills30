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
?>



<?php 
foreach ($dataProvider->models as $model_panel) {
?>
    <div class="col-xs-12, col-sm-4">
 
    <?php 
    
    echo Html::panel(
    [

        'postBody' => Html::listGroup([
        [
        //Html::icon($model_panel->admin_pic, ['style' => 'font-size: 2em'])'

            'content' => 
                '<table align="center">
                <tr><td align="center">'.Html::img('@web/images/'.$model_panel->search_pic).'</td></tr>
                <tr><td align="center">'.'<h4>'.$model_panel->search_panel.'</h4></td></tr>
                </table>',
            'url' => Url::to([$model_panel->search_link]),
        ],
        ], [], 'ul', 'li'),
    //'footer'=> 'Panel Footer',
    //'headingTitle' => false,
    //'footerTitle' => false,
    ]
    );
    
    ?>
    </div>
<?php
}
?>

