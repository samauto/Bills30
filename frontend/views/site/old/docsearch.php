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


$(window).load(function() {
    // Construct the catalog query string
    url = 'http://data.ct.gov/resource/9k2y-kqxn.json?organization_type=Public%20School%20Districts&$$app_token=CGxaHQoQlgQSev4zyUh5aR5J3';
    
    // Intialize our map
    var center = new google.maps.LatLng(41.7656874,-72.680087);
    var mapOptions = {
      zoom: 8,
      center: center
    }
    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    
    // Retrieve our data and plot it
    $.getJSON(url, function(data, textstatus) {
          console.log(data);
          $.each(data, function(i, entry) {
              var marker = new google.maps.Marker({
                  position: new google.maps.LatLng(entry.location_1.latitude, 
                                                   entry.location_1.longitude),
                  map: map,
                  title: location.name
              });
          });
    });
});







