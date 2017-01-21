<?php
/* @var $this SiteController */


$this->title = 'Factual';
$this->params['breadcrumbs'][] = $this->title;


// setup
/** load factual dr(iver. Make sure the path below matches what you have! */
//$fact=dirname(__FILE__).'\protected\factual\factual.php';
$fact= dirname(dirname(dirname(dirname(__FILE__)))).'\vendor\factual\factual.php';
//print_r($fact);
require_once($fact);

/** credentials for Factual and Mapbox */
$factual_api_key     = "vgmNSWzqIICYufJIBLWA0s9Rz0ku82VxrLnmtP0P";
$factual_api_sec     = "SeiC2xcUPNUOHwQ1iE4eiYplcjlDK95M1metAiYM";

set_include_path(get_include_path().PATH_SEPARATOR.'factual');
spl_autoload_extensions('.php, .inc');
spl_autoload_register();

/** instantiate Factual driver **/
$factual = new Factual($factual_api_key, $factual_api_sec);

// Find 3 random records
//$query = new FactualQuery;
//$query->limit(1);
//$res = $factual->fetch("places", $query);
//print_r($res->getData());
//?>
<BR>
	<BR>
		<BR>
<?php
// Find entities that match a full text search for Sushi in Santa Monica:
$query = new FactualQuery;
$query->field("postcode")->equal("77584");
$query->includeRowCount();
//$query->search("77584");
$res = $factual->fetch("places-us", $query);
$data = $res->getData();
//print_r($res->getData()->address);
print_r($res->getTotalRowCount()); 
//print_r($data["address"]);

/** instantiate Factual driver **/

$factual = new Factual($factual_api_key, $factual_api_sec);


?>
<h1>Search</h1>

<p>This is a "static" page. You may change the content of this page
by updating the file <code><?php echo __FILE__; ?></code>.</p>

<?=
$socrata = new Socrata("https://data.medicare.gov");
$response = $socrata->get("/resource/abcd-2345.json");

print_r $reponse;
?>


