<?php


use yii\helpers\Url;
use kartik\helpers\Html;
use kartik\icons\Icon;
use frontend\models\TaxonomySearch;

Icon::map($this);
Icon::map($this, Icon::FA);


//* Credentials *//
if ($model->Provider_Credential == "") {
	$name = $model->Provider_First_Name." ".$model->Provider_Last_Name;
} else {
	$name = $model->Provider_First_Name." ".$model->Provider_Last_Name.", ".$model->Provider_Credential;}


//$searchTax = new TaxSearch();
//	$dataProviderTax = $searchTax->search(['TaxSearch'=>['Provider_Taxonomy_Code'=>$model->Healthcare_Provider_Taxonomy_Code_1]]);            

//print ($dataProviderTax);    


//* Name of Business *//
$nameofbusiness = $model->Legal_Business_Name;

//* Address First Line & Second Line*//
$address = 
	$model->Provider_First_Line_Business_Practice_Location_Address
	.' '.$model->Provider_Second_Line_Business_Practice_Location_Address;


//* 5 Digit Code Zip Code + 4 Digit Delivery Code *//
$zip5 = substr($model->Provider_Business_Practice_Location_Address_Postal_Code, 0, 5);
$zip4delivery = substr($model->Provider_Business_Practice_Location_Address_Postal_Code, 5, 4);


//* City, State ZipCode *//
$citystatezip = 
	$model->Provider_Business_Practice_Location_Address_City_Name
	.', '.$model->Provider_Business_Practice_Location_Address_State_Name
	.' '.$zip5;


//* Phone Number *//
if ($model->Provider_Business_Practice_Location_Address_Telephone_Number == "") 
	{$phone = 'N/A';}
else {
	$areacode = substr($model->Provider_Business_Practice_Location_Address_Telephone_Number,0,3);
	$prefix = substr($model->Provider_Business_Practice_Location_Address_Telephone_Number,3,3);
	$linenum = substr($model->Provider_Business_Practice_Location_Address_Telephone_Number,5,4);
	$phone = '('.$areacode.') '.$prefix.'-'.$linenum;}


//* Fax Number *//
if ($model->Provider_Business_Practice_Location_Address_Fax_Number == "")
	{$fax = "N/A";}
else {
	$areacode = substr($model->Provider_Business_Practice_Location_Address_Fax_Number,0,3);
	$prefix = substr($model->Provider_Business_Practice_Location_Address_Fax_Number,3,3);
	$linenum = substr($model->Provider_Business_Practice_Location_Address_Fax_Number,5,4);
	$fax = '('.$areacode.') '.$prefix.'-'.$linenum;}	

//* Taxonomy to Specialization *//
if ($model->taxonomy->tax_spec == "") 
	{$special = $model->taxonomy->tax_class;}
else {
	$special = $model->taxonomy->tax_class." (".$model->taxonomy->tax_spec.")";
	}

//* GeoCoding *//
if ($model->geoloc['latitude'] == null) 
	{$latlng = "N/A";}
else {
	$latlng = $model->geoloc['latitude'].",".$model->geoloc['longitude'];
	}


?>

<div>
	<?php 

	//* Results of the Doctor Search *//
	echo
	
	'<div class="col-xs-12">

	<div class="spec_head col-xs-12">'
	.$special.'</div>

	<div class="docName col-xs-12">
		<span>'.Icon::show('user-md', ['class'=>'docIcon'], Icon::FA).'</span>
		<span>'.$name.'</span>
	</div>

	<div class="docAddress col-xs-6">'
	.Html::well(
		Html::address(
    	$nameofbusiness,
    	[$address, $citystatezip, $latlng],
    	['Ph#'=>$phone, 'Fax'=> $fax]) 	
    , Html::SIZE_TINY).


	'</div>

	<div class="docProfile col-xs-12">'
	.Html::a(Icon::show('eye', ['class'=>'docIconProfile'], Icon::FA).'<BR>PROFILE', ['/npi/view','id'=>$model->NPI, 'zipcode'=>$zipcode, 'maxc'=>$maxc, 'minc'=>$minc, 'spec'=>$spec, 'proc'=>$proc], ['class'=>'btn btn-danger btn-block']).
	'</div>	

	<div class="spec_head col-xs-12"><hr class="style-one"></div>

	</div>'

	?>
</div>


