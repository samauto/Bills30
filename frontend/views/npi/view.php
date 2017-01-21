<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use frontend\models\TaxonomySearch;

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



/* @var $this yii\web\View */
/* @var $model frontend\models\Search */

$this->title = $model->Provider_First_Name." ".$model->Provider_Middle_Name." ".$model->Provider_Last_Name;

if ($zipcode == ""){
    $zipcode ="";
    $this->params['breadcrumbs'][] = ['label' => 'Search', 'url' => ['index', 'zipcode' => $zipcode] ];
    }
else {
    $url = '&zipcode=' . $zipcode;
    $this->params['breadcrumbs'][] = ['label' => 'Search Results for '.$zipcode, 'url' => ['docsearch', 'zipcode' => $zipcode] ];
    }

$this->params['breadcrumbs'][] = $this->title;

if ($zipcode == "") {
    ?>
    <p><?= Html::a('Back to Search', ['index', 'zipcode' => $zipcode], ['class' => 'btn btn-primary']) ?></p>    
    <?php
    }
else {
    ?>
    <p><?= Html::a('Back to Search Results', ['docsearch', 'zipcode' => $zipcode, 'maxc'=>$maxc, 'minc'=>$minc, 'spec'=>$spec, 'proc'=>$proc], ['class' => 'btn btn-primary']) ?></p>
    <?php
    }
?>

<?php

for ($i = 1; $i < 16; $i++) { 
$taxSearch = "Healthcare_Provider_Taxonomy_Code_".$i;
//echo $taxSearch;
//echo $model->$taxSearch;

$taxmodel[$i] = TaxonomySearch::find()
            ->where(['tax_code' => $model->$taxSearch])
            ->one();
//echo $taxmodel[$i]['tax_class']."<BR>";
}



?>

<div class="search-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'condensed'=>true,
        'hover'=>true,
        'mode'=>DetailView::MODE_VIEW,
        'bootstrap'=>'true',
        'hideIfEmpty'=>'true',
        'attributes' => 
        [
            [
             'group'=>true,
             'label'=>'SECTION 1: Identification Information',
             'rowOptions'=>['class'=>'info']
            ],
            [
                'attribute'=>'Provider_Name_Prefix',
                'value'=>
                    $model->Provider_Name_Prefix." ".
                    $model->Provider_First_Name." ".
                    $model->Provider_Middle_Name." ".
                    $model->Provider_Last_Name." ".
                    $model->Provider_Name_Suffix." (".
                    $model->Provider_Credential.")",
                'label'=>'NAME',
            ],
            

            [
             'group'=>true,
             'label'=>'SECTION 2: Specialization(s)',
             'rowOptions'=>['class'=>'info']
            ],
            [
                'attribute'=>'Healthcare_Provider_Taxonomy_Code_1',
                'value'=>$model->taxonomy->tax_class." (".$model->Healthcare_Provider_Taxonomy_Code_1.")",
                'label'=>'PRIMARY',
            ],
            [
                'attribute'=>'Healthcare_Provider_Taxonomy_Code_2',
                'value'=>
                    $taxmodel[2]['tax_class'].
                    $taxmodel[3]['tax_class'].
                    $taxmodel[4]['tax_class'].
                    $taxmodel[5]['tax_class'].
                    $taxmodel[6]['tax_class'].
                    $taxmodel[7]['tax_class'].
                    $taxmodel[8]['tax_class'].
                    $taxmodel[9]['tax_class'].
                    $taxmodel[10]['tax_class'].
                    $taxmodel[11]['tax_class'].
                    $taxmodel[12]['tax_class'].
                    $taxmodel[13]['tax_class'].
                    $taxmodel[14]['tax_class'].
                    $taxmodel[15]['tax_class'],
                'label'=>'OTHER',
                'hideIfEmpty'=>'true',
            ],


            [
             'group'=>true,
             'label'=>'SECTION 3: Mailing Address',
             'rowOptions'=>['class'=>'info']
            ],
            [
                'attribute'=>'Provider_First_Line_Business_Mailing_Address',
                'value'=>
                    $model->Provider_First_Line_Business_Mailing_Address." ".
                    $model->Provider_Business_Mailing_Address_City_Name.",".
                    $model->Provider_Business_Mailing_Address_State_Name." ".
                    preg_replace('/((?<=[0-9]{5})(?=[0-9]{4}))/','-', $model->Provider_Business_Mailing_Address_Postal_Code),
                    $model->Provider_Business_Mailing_Address_Country_Code,
                'label'=>'INFO',
            ],
            [
                'attribute'=>'Provider_Gender_Code',
                'value'=>
                    $model->Provider_Gender_Code,
                'label'=>'GENDER',
            ],


            [
             'group'=>true,
             'label'=>'SECTION 4: Contact Info',
             'rowOptions'=>['class'=>'info']
            ],
            [
                'attribute'=>'Provider_Business_Mailing_Address_Telephone_Number',
                'value'=>
                    preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $model->Provider_Business_Mailing_Address_Telephone_Number),
                'label'=>'Ph#',
            ],
            [
                'attribute'=>'Provider_Business_Mailing_Address_Fax_Number',
                'value'=>
                    preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $model->Provider_Business_Mailing_Address_Fax_Number),
                'label'=>'Fax#',
            ],
      


            [
             'group'=>true,
             'label'=>'SECTION 5: Physical Address',
             'rowOptions'=>['class'=>'info']
            ],
            
            [                       
                'attribute'=>'Legal_Business_Name',
                'value'=>
                    $model->Legal_Business_Name,
                'label'=>'BUSINESS',
            ],

            [
                'attribute'=>'Provider_First_Line_Business_Mailing_Address',
                'value'=>
                    $model->Provider_First_Line_Business_Practice_Location_Address." ".
                    $model->Provider_Business_Practice_Location_Address_City_Name.",".
                    $model->Provider_Business_Practice_Location_Address_State_Name." ".
                    preg_replace('/((?<=[0-9]{5})(?=[0-9]{4}))/','-', $model->Provider_Business_Practice_Location_Address_Postal_Code)." ".
                    $model->Provider_Business_Practice_Location_Address_Country_Code,
                'label'=>'INFO',
            ],


            [
             'group'=>true,
             'label'=>'SECTION 6: Physical Contact Info',
             'rowOptions'=>['class'=>'info']
            ],
            [
                'attribute'=>'Provider_Business_Mailing_Address_Telephone_Number',
                'value'=>
                    preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $model->Provider_Business_Mailing_Address_Telephone_Number),
                'label'=>'Ph#',
            ],
            [
                'attribute'=>'Provider_Business_Mailing_Address_Fax_Number',
                'value'=>
                    preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $model->Provider_Business_Mailing_Address_Fax_Number),
                'label'=>'Fax#',
            ],
        ]      
    ]) 


    

    ?>

</div>


<div>

    <?php
    // Map
    $curl     = new \Ivory\HttpAdapter\CurlHttpAdapter();
    $geocoder = new \Geocoder\Provider\GoogleMaps($curl);


    $docloc = $model->Provider_First_Line_Business_Practice_Location_Address
                    .','.$model->Provider_Business_Practice_Location_Address_City_Name
                    .','.$model->Provider_Business_Practice_Location_Address_State_Name
                    .' '.preg_replace('/((?<=[0-9]{5})(?=[0-9]{4}))/','-', $model->Provider_Business_Practice_Location_Address_Postal_Code);

    //Have Long & Lat or Not?
    if ($model->geoloc['latitude'] != "")
        {

            $doclat = $model->geoloc['latitude'];
            $doclong = $model->geoloc['longitude'];

            $markers[0] = new LatLng(['lat' => $doclat, 'lng' => $doclong]);
        }
    else {    
        $doclatlon = $geocoder->geocode($docloc)->first();   
        $dumper = new \Geocoder\Dumper\GeoJson();
        $jsondata = $dumper->dump($doclatlon);
        $decoded = json_decode($jsondata);
        $longlat = $decoded->{'geometry'}->{'coordinates'};
        $doclat = $longlat[1];
        $doclong = $longlat[0];
        //echo $longlat[0].' ';
        //echo $longlat[1].'<BR>';
            $markers[0] = new LatLng(['lat' => $doclat, 'lng' => $doclong]);
      }
   

    // lets use nominating service
    $nominatim = new ServiceNominatim();

    // create geocoder plugin and attach the service
    $geoCoderPlugin = new GeoCoder([
        'service' => $nominatim,
        'clientOptions' => [
            'showMarker' => true,
            'showResultIcons' => true,
            'collapsed' => true,
            'position' => 'topright',
            'placeholder' => "Find...",
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

    $center = $markers[0];

    // initialize our leafLet component
    $leafLet = new LeafLet([
        'name' => 'geoMap',
        //'tileLayer' => $tileLayer,
        'center' => $center,
        'zoom' => 10,
        'clientEvents' => [
            // I added an event to ease the collection of new position
            'geocoder_showresult' => 'function(e){
                geoMarker.setLatLng(e.Result.center);
            }'
        ]
    ]);

    // Initialize plugin
    $makimarkers = new MakiMarker(['name' => 'makimarker']);

    // install
    $leafLet->installPlugin($makimarkers);

    // generate icon through its icon
    $marker = new Marker([
        'latLng' => $center,
        'icon' => $leafLet->plugins->makimarker->make("building",['color' => "#b0b", 'size' => "l"]),
        'popupContent' => $docloc." ".$doclat.$doclong
        ]);
   
    // add the marker
    $leafLet->addLayer($marker);

    for($m = 1; $m < count($markers); $m++)
    {
        $color = dechex(rand(0x000000, 0xFFFFFF));
    
        // add a marker to center
        $docmarker = new Marker([
            'name' => 'geoMarker',
            'latLng' => $markers[$m],
            'icon' => $leafLet->plugins->makimarker->make("hospital",['color' => $color, 'size' => "2"]),
            'popupContent' => $docloc." ".$doclat.$doclong
        ]);

        //print $docloc[$m]."<BR>";
        //print $m;

        $leafLet->addLayer($docmarker);
    }

    $leafLet->addLayer($tileLayer);

    // run the widget (you can also use dosamigos\leaflet\widgets\Map::widget([...]))
    
    
    echo '<div>'.$leafLet->widget().'</div>';


    ?>
</div>