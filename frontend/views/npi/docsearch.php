<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\ListView;
use frontend\models\GeoLoc;
use frontend\models\GeolocSearch;
use dosamigos\leaflet\layers\LayerGroup;
use dosamigos\leaflet\layers\Marker;
use dosamigos\leaflet\layers\TileLayer;
use dosamigos\leaflet\LeafLet;
use dosamigos\leaflet\types\LatLng;
use dosamigos\leaflet\types\Icon;
use dosamigos\leaflet\plugins\geocoder\ServiceNominatim;
use dosamigos\leaflet\plugins\geocoder\GeoCoder;
use dosamigos\leaflet\plugins\makimarker\MakiMarker;
use Ivory\HttpAdapter\CurlHttpAdapter;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HealthSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


if ($zipcode <> '') {
    $this->title = Html::encode($zipcode);
    $title_zip = " near ";

} else {$title_zip = "";}

if ($spec <> '') {
        {$title_spec = " and specializing in |".Html::encode($spec)."|";}
} else {$title_spec = "";}


if ($proc <> 'Any') {
    if ($title_zip == " near ")
        {$title_proc = " and ".Html::encode($proc);
    
    } else {$title_proc = " performing the following procedure/test ".Html::encode($proc);}

    if ($proc == 'Any') {
        if ($title_zip == " near ")
        {
            $title_minc = "";
            $title_maxc = "";
        } else {
            if ($maxc < $minc) {
                $title_minc = " and Min Cost of ".Html::encode($minc);
                $title_maxc = "";
            } else {
                if ($minc <> '1') {
                    $title_minc = " and Min Cost of ".Html::encode($minc);
                } else {$title_minc = "";}
                if ($maxc <> '1') {
                    $title_maxc = " and Max Cost of ".Html::encode($maxc);
                } else {$title_maxc = "";}
            }       
        }
    }
} else {
    $title_proc = "";
    $title_minc = "";
    $title_maxc = "";
}    

$this->params['breadcrumbs'][] = 'Physicans'.
$title_zip.
$this->title.
$title_spec.
$title_proc.
$title_minc.
$title_maxc;
?>


<div class="search-index">

    <div class="bread">
        <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])?>
    </div>  

    <div><h1><?= Html::encode('') ?></h1></div>

    <div>
        <div class="col-xs-10 docSearchSec1">


        <?= 
        ListView::widget([
        'dataProvider' => $dataProviderT, 
        'itemView' =>'_searchresultsT',
        'layout' => '{items}{pager}',
        'viewParams' => ["zipcode" => $zipcode, "maxc" =>$maxc, "minc"=>$minc, "spec"=>$spec, "proc"=>$proc],
        ]);
        ?>
        

        <?= ListView::widget([
        'dataProvider' => $dataProvider, 
        'itemView' =>'_searchresults',
        'layout' => '{items}{pager}',
        'viewParams' => ["zipcode" => $zipcode, "maxc" =>$maxc, "minc"=>$minc, "spec"=>$spec, "proc"=>$proc],
        ]);
        ?>
        </div>
        <div class="col-xs-2 docSearchSec2">Amazon Ad<BR>
    </div>

   
    <BR>
</div><!--End of Search --->




