<?php


use yii\helpers\Url;
use kartik\helpers\Html;
use kartik\icons\Icon;
use frontend\models\TaxonomySearch;

Icon::map($this);
Icon::map($this, Icon::FA);


//* Credentials *//
	$taxclass = $model->tax_class;
	$taxcode = $model->tax_code;
	//echo Html::encode($taxcode);
?>

<div>
	<?php 

	//* Results of the Doctor Search *//
	echo 

	'<div class="col-xs-12">

	<div class="spec_head col-xs-12">'
	.$taxclass.'</div>

	<div class="docName col-xs-12">
		<span>'.Icon::show('user-md', ['class'=>'docIcon'], Icon::FA).'</span>
		<span>'.$taxcode.'</span>
	</div>

	</div>'
    ?>
</div>


