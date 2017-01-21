


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
$this->title = Yii::t('app', 'Where Does It Hurts Scan');
$this->params['breadcrumbs'][] = $this->title;
?>

<?php 
foreach ($dataProvider->models as $model_panel) {
?>
    <div class="col-xs-12, col-sm-4">
 
    <?php
    echo Html::media(
    $model_panel->hurts_type, 
    'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.',
    '#',
    'where-hurts/results'
);


    echo Html::panel(
    [

        'postBody' => Html::listGroup([
        [
            'content' => 
                '<table align="center">
                <tr><td align="center">'.Html::img('@web/images/'.$model_panel->hurts_pic).'</td></tr>
                <tr><td align="center">'.'<h4>'.$model_panel->hurts_type.'</h4></td></tr>
                </table>',
            'url' => Url::to(['where-hurts/results','id' =>$model_panel->hurts_id, 'hurts'=>$model_panel->hurts_type]),  
        ],
        ], [], 'ul', 'li'),
    ]
    );
    ?>
    </div>
<?php
}
?>

<a href="http://www.freepik.com/free-photos-vectors/hand">Hand vector designed by Freepik</a>
