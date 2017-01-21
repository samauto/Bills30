<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NpiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

    echo "lastname=", $lastname, "end";
    echo "firstname=", $firstname, "end";
      
?>


     <div>
        <div class="col-xs-10 docSearchSec1">
        <?= ListView::widget([
        'dataProvider' => $dataProvider, 
        'itemView' =>'_namelist',
        'layout' => '{items}{pager}',
        'viewParams' => ["firstname" => $firstname, "lastname" =>$lastname, "city"=>$city, "zipcode"=>$zipcode, "state"=>$state],
        ]);
        ?>
        </div>
    </div>



