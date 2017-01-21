<?php
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use kartik\widgets\SideNav;
use kartik\helpers\Html;
use kartik\icons\Icon;


use dosamigos\leaflet\layers\LayerGroup;
use dosamigos\leaflet\layers\Marker;

use dosamigos\leaflet\layers\TileLayer;
use dosamigos\leaflet\LeafLet;
use dosamigos\leaflet\types\LatLng;
use dosamigos\leaflet\plugins\geocoder\ServiceNominatim;
use dosamigos\leaflet\plugins\geocoder\GeoCoder;

use rodzadra\geolocation\Geolocation;

?>

<div class="user-map">

<?php
// lets use nominating service
$nominatim = new ServiceNominatim();

// create geocoder plugin and attach the service
$geoCoderPlugin = new GeoCoder([
    'service' => $nominatim,
    'clientOptions' => [
        // we could leave it to allocate a marker automatically
        // but I want to have some fun
        'showMarker' => true,
        'showResultIcons' => true,
        'collapsed' => true,
        'position' => 'topleft',
        'placeholder' => "Find...",
    ]
]);

// create geocoder plugin and attach the service
$geocoderS = new GeoCoder([
    'service' => $nominatim,
    'clientOptions' => [
        // we could leave it to allocate a marker automatically
        // but I want to have some fun
        'showMarker' => true,
]
]);



$center = new LatLng(['lat' => 39.61, 'lng' => -119.02]);
//$center = '77584';

// add a marker to center
$marker = new Marker([
    'name' => 'geoMarker',
    'latLng' => $center ,
    'clientOptions' => ['draggable' => false], // draggable marker
    'clientEvents' => [
        'dragend' => 'function(e){
            console.log(e.target._latlng.lat, e.target._latlng.lng);
        }'
    ]
]);

// configure the tile layer
$tileLayer = new TileLayer([
    'urlTemplate' => 'http://otile{s}.mqcdn.com/tiles/1.0.0/map/{z}/{x}/{y}.jpeg',
    'clientOptions' => [
        'attribution' => 'Tiles Courtesy of <a href="http://www.mapquest.com/" target="_blank">MapQuest</a> ' .
            '<img src="http://developer.mapquest.com/content/osm/mq_logo.png">, ' .
            'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' .
            '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
        'subdomains' => '1234'
    ]
]);

// initialize our leafLet component
$leafLet = new LeafLet([
    'name' => 'geoMap',
    //'tileLayer' => $tileLayer,
    'center' => $center,
    'zoom' => 10,
    'clientEvents' => [
        // I added an event to ease the collection of new position
        'geocoder_showresult' => 'function(e){
            // set markers position
            geoMarker.setLatLng(e.Result.center);
        }'
    ]
]);

// add the marker
$leafLet->addLayer($marker)
        ->addLayer($tileLayer);


// install the plugin
$leafLet->installPlugin($geoCoderPlugin);

// run the widget (you can also use dosamigos\leaflet\widgets\Map::widget([...]))
echo $leafLet->widget();
?>
</div>