<?php
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

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>


<div id="map" /> 





<?php 
 
	/*
	 * sample example code for BingSearch.php class
	 * @author Daniel Boorn info@rapiddigitalllc.com
	 * @license apache 2.0
	 * @bingapiurl https://datamarket.azure.com/dataset/bing/search#schema
	 */
 
 
	ini_set('display_errors','1');
	require('BingSearch.php');
	
	//register for key on windows azure
	$apiKey = 'FKznkmJdkVj0vpskMvoisxx3J4zhyhTLjhPLnlgVFyo';
	
	$bing = new BingSearch($apiKey);
	
	# Example 1: simple image search
	echo '<pre>';
	$r = $bing->querySpellingSuggestions('test');
	var_dump($r);
 
	
	# Example 2: advanced image search
	//https://datamarket.azure.com/dataset/bing/search#schema
	//be sure to respect the data types in the values
	/*
	$r = $bing->queryImage(array(
		'Query'=>"'xbox'",//string
		'Adult'=>"'Moderate'",//string
		'ImageFilters'=>"'Size:Small+Aspect:Square'",//string
		'Latitude'=>47.603450,//double
		'Longitude'=>-122.329696,//double
		'Market'=>"'en-US'",//string
		'Options'=>"'EnableHighlighting'",//string
	));
	var_dump($r);
	*/

	?>





