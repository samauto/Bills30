<?php

#use yii\helpers\Html;
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
use dosamigos\leaflet\types\IconLeaf;
use dosamigos\leaflet\plugins\geocoder\ServiceNominatim;
use dosamigos\leaflet\plugins\geocoder\GeoCoder;
use dosamigos\leaflet\plugins\makimarker\MakiMarker;
use Ivory\HttpAdapter\CurlHttpAdapter;


Icon::map($this);
Icon::map($this, Icon::FA);

//echo (Yii::$app->user->isGuest);
//if (!\Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//echo (Yii::$app->user->identity->username);

$this->title = 'My Dashboard ('. Yii::$app->user->identity->username.')' ;
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="row">    


    <div class="col-lg-4 col-md-6">    
    <?php 
    echo Html::panel(
	    [
	    'heading' => 
		    '<table><tr>
		    	<td>'.Html::icon('user', ['style' => 'font-size: 5em']).'</td>
		     	<td width="10"></td>
		     	<td>'.'<h3>Your Login Information'.'</td>
		     </tr></table>',
    
    	'body' => 
                $this->render('_loginu', [
                'model' => $model,
                ]),
    	],

	    Html::TYPE_PRIMARY
    );


    ?>
    </div>


    <div class="col-lg-4 col-md-6">    
    <?php 
    echo Html::panel(
    	[
        'heading' => 
		    '<table><tr>
		    	<td>'.Icon::show('key', ['style' => 'font-size: 5em'], Icon::FA).'</td>
		     	<td width="10"></td>
		     	<td>'.'<h3>Current Password'.'</td>
		     </tr></table>',

	 	'body' => 'Password: ********',

		'postBody' => 
      	 	'<div align="left">'.Html::a(Html::icon('cog', ['style' => 'font-size: 1em']).' Update Password', ['passupdate', 'id' => $model->id], ['class' => 'btn btn-warning btn-block']).'</div>',
		],

	    Html::TYPE_WARNING
    );
    ?>
    </div>


    <div class="col-lg-4 col-md-12">    
    <?php 
    echo Html::panel(
        [
        'heading' => 
            '<table><tr>
                <td>'.Icon::show('globe', ['style' => 'font-size: 5em'], Icon::FA).'</td>
                <td width="10"></td>
                </tr></table>',
        ],

        Html::TYPE_SUCCESS
    );



        //   'service' => $nominatim,
        //        'clientOptions' => [
        // we could leave it to allocate a marker automatically
        // but I want to have some fun
        //'showMarker' => true,
        //'showResultIcons' => true,
        //'collapsed' => true,
        //'position' => 'topleft',
        //'placeholder' => "Find...",    <td>'.'<h3> Map'.'</td>
             
    ?>


    <div>
    <?php

    $curl     = new \Ivory\HttpAdapter\CurlHttpAdapter();
    $geocoder = new \Geocoder\Provider\GoogleMaps($curl);


    $docloc = $model->address_1
                    .','.$model->city
                    .','.$model->state
                    .' '.$model->zipcode;

    if ($docloc == "")   {
        $docloc == "77584";
    }            

    //Have Long & Lat or Not?
    if ($model->latitude!= "")
        {
            $doclat = $model->latitude;
            $doclong = $model->longitude;
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
        echo $longlat[0].' ';
        echo $longlat[1].'<BR>';
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
</div>


<div class="row">
    <div class="col-lg-12 col-md-12">    
    <?php 
    echo Html::panel(
    	['heading' => 
		    '<table><tr>
		    	<td>'.Html::icon('list-alt', ['style' => 'font-size: 5em']).'</td>
		     	<td width="10"></td>
		     	<td>'.'<h3>Current<BR> Profile'.'</td>
		     </tr></table>',
   	    
   	    'body' =>  
    	        $this->render('_profileu', [
                'model' => $model,
                ]),
        ],
    
	    Html::TYPE_DANGER
    );
    ?>
    </div>    
</div>


<div class="row">    
    <div class="col-lg-4 col-md-6">    
    <?php 
    echo Html::panel(
    [
        'heading' =>
	        '<table><tr>
		    	<td>'.Icon::show('male', ['style' => 'font-size: 5em'], Icon::FA).'</td><td>'.Icon::show('female', ['style' => 'font-size: 5em'], Icon::FA).'</td>
		     	<td width="10"></td>
		     	<td>'.'<h3>Personal<BR> Information'.'</td>
		     </tr></table>',
        'body' => 'Birthdate','Gender', 'zipcode',
        'postBody' => Html::listGroup([
        [
            'content' => 'Cras justo odio',
            'url' => '#',
            'badge' => '14'
        ],
        [
            'content' => 'Dapibus ac facilisis in',
            'url' => '#',
            'badge' => '2'
        ],
        [
            'content' => 'Morbi leo risus',
            'url' => '#',
            'badge' => '1'
        ],
    ], [], 'ul', 'li'),
    'footer'=> 'Panel Footer',
    'headingTitle' => true,
    'footerTitle' => true,
]
);
    ?>

    </div>

     <div class="col-lg-4 col-md-6">    
    <?php 
    echo Html::panel(
    [
        'heading' => 
           '<table><tr>
		    	<td>'.Icon::show('heartbeat', ['style' => 'font-size: 5em'], Icon::FA).'</td>
		     	<td width="10"></td>
		     	<td>'.'<h3>My<BR> Doctors'.'</td>
		     </tr></table>',
        'body' => 'Birthdate','Gender', 'zipcode',
        'postBody' => Html::listGroup([
        [
            'content' => 'Cras justo odio',
            'url' => '#',
            'badge' => '14'
        ],
        [
            'content' => 'Dapibus ac facilisis in',
            'url' => '#',
            'badge' => '2'
        ],
        [
            'content' => 'Morbi leo risus',
            'url' => '#',
            'badge' => '1'
        ],
    ], [], 'ul', 'li'),
    'footer'=> 'Panel Footer',
    'headingTitle' => true,
    'footerTitle' => true,
]
);
    ?>

    </div>

    <div class="col-lg-4 col-md-6">    
    
    <?php 
    echo Html::panel(
    [
        'heading' => 
        	 '<table><tr>
		    	<td>'.Icon::show('calendar', ['style' => 'font-size: 5em'], Icon::FA).'</td>
		     	<td width="10"></td>
		     	<td>'.'<h3>My<BR> Calendar'.'</td>
		     </tr></table>',
        'body' => 'Birthdate','Gender', 'zipcode',
        'postBody' => Html::listGroup([
        [
            'content' => 'Cras justo odio',
            'url' => '#',
            'badge' => '14'
        ],
        [
            'content' => 'Dapibus ac facilisis in',
            'url' => '#',
            'badge' => '2'
        ],
        [
            'content' => 'Morbi leo risus',
            'url' => '#',
            'badge' => '1'
        ],
    ], [], 'ul', 'li'),
    'footer'=> 'Panel Footer',
    'headingTitle' => true,
    'footerTitle' => true,
    ]
    );
    ?>

    </div>

</div>




<div class="row">
    <div class="col-lg-12 col-md-6">    
    <?php 
    /* FontAwesome */

    echo Html::panel(
        [
        'heading' => 
            '<table><tr>
                <td>'.Icon::show('user-md', ['style' => 'font-size: 5em'], Icon::FA).'</td>
                <td width="10"></td>
                <td>'.'<h3>Doctor<BR> Search'.'</td>
             </tr></table>',
  
        'postBody' => 
            '<div align="left">'.Html::a(Html::icon('search', ['style' => 'font-size: 1em']).' Search', ['docsearch', 'id' => $model->id], ['class' => 'btn btn-warning btn-block']).'</div>',

        ],
        
        Html::TYPE_DANGER
        );
    ?>
    </div>



    </div>



   


