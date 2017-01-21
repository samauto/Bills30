<?php

//use yii\grid\GridView;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FaqSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $form ActiveForm */

//$this->title = 'Hospital/Clinic/Emergency Search Results';
//$this->params['breadcrumbs'][] = $this->title;

?>


<?php
  require_once("socrata.php");
  $view_uid = "ykw4-j3aj";
  $root_url = "https://data.austintexas.gov";
  $app_token = 'i2T950xvnFx6nhfJqgUqokaIf';
  $response = NULL;
  $latitude = array_get("latitude", $_POST);
  $longitude = array_get("longitude", $_POST);
  $range = array_get("range", $_POST);
  if($latitude != NULL && $longitude != NULL && $range != NULL) {
    // Create a new unauthenticated client
    $socrata = new Socrata($root_url, $app_token);
    $params = array("\$where" => "within_circle(location, $latitude, $longitude, $range)");
    $response = $socrata->get("/resource/$view_uid.json", $params);
  }
?>

<html>
  <head>
    <title>Austin Dangerous Dogs</title>
  </head>
  <body>
    <h1>Austin Dangerous Dogs</h1>

<p>Try 30.27898, -97.68351 with a range of 1000 meters</p>

<?php 
if($response == NULL) { 
 	$form = ActiveForm::begin(['id' => 'soc-form']);
 		$form->field($model, 'latitude');
		$form->field($model, 'longitude');
 		$form->field($model, 'range');
 		?>
 		<div class="form-group">
        	<?= Html::submitButton('Submit', ['class' => 'btn btn-danger btn-block', 'name' => 'contact-button']) ?>
        </div>
     <?php 
     ActiveForm::end(); 
} 

else { ?>
	
	<h2>Results</h2>
    <?# Create a table for our actual data ?>
    <table border="1">
	    <tr>
        	<th>Description</th>
        	<th>Address</th>
        </tr>
        
        <?# Print rows ?>
        <?php foreach($response as $row) { ?>
        	<tr>
            	<td><?= $row["description_of_dog"] ?></td>
            	<td><?= $row["address"] ?></td>
          	</tr>
        <?php } ?>
    </table>

    <h3>Raw Response</h3>
    <pre><?= var_dump($response) ?></pre>
<?php } ?>
  
  </body>
</html>




