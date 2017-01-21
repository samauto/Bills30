<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

use sibilino\yii2\openlayers\OpenLayers;
use sibilino\yii2\openlayers\OL;
use yii\web\JsExpression;


/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FaqSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $form ActiveForm */
//https://data.medicare.gov/resource/s63f-csi6.json
//https://data.medicare.gov/resource/aeay-dfax.json?where=starts_with(zip, zipcode)

$this->title = 'Doctor/Healthcare Search Results';
$this->params['breadcrumbs'][] = $this->title;
$app_token = "i2T950xvnFx6nhfJqgUqokaIf";
?> 

<?= Html::encode($model->zipcode) ?>




<div id="map" /> 








<?php
require_once("socrata.php");
//$response = NULL;

$socrata = new Socrata("https://data.medicare.gov", $app_token);
//$params = array("\$where" => "starts_with(zip, $model->zipcode)");
$params = array("\$where" => "starts_with(zip, \"$model->zipcode\")");
//$params = array("\$where" => "starts_with(zip, '77584')");

$response = $socrata->get("/resource/aeay-dfax.json",$params);

?>


<h2>Results</h2>

  <?# Create a table for our actual data ?>
  <table border="1">
    <tr>
      <th>Last Name</th>
      <th>First Name</th>
    </tr>
    <?# Print rows ?>
    <?php foreach($response as $row) { ?>
      <tr>
        <td><?= $row["lst_nm"] ?></td>
        <td><?= $row["fst_nm"] ?></td>
      </tr>
    <?php } ?>
  </table>

  <h3>Raw Response</h3>
  <pre><?= var_dump($response) ?></pre>






<?php

echo OpenLayers::widget([
    'id' => 'test',
    'mapOptions' => [
        'layers' => [
            // Easily generate JavaScript "new ol.layer.Tile()" using the OL class
            new OL('layer.Tile', [
                'source' => new OL('source.MapQuest', [
                    'layer' => 'sat',
                ]),
            ]),
        ],
        // Using a shortcut, we can skip the OL('View' ...)
        'view' => [
            // Of course, the generated JS can be customized with JsExpression, as usual
            'center' => new JsExpression('ol.proj.transform([37.41, 8.82], "EPSG:4326", "EPSG:3857")'),
            'zoom' => 4,
        ],
    ],
]);?>