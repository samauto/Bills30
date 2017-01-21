<?php


use yii\helpers\Url;
use kartik\helpers\Html;
use kartik\icons\Icon;

Icon::map($this);
Icon::map($this, Icon::FA);
?>
<div class="col-xs-12">
	<?php echo
	'<div class="docTable">
		<div class="docTR"><div class="docTD"><span class="spec_head">'.$model->pri_spec.'</span></div></div>
			<div class="docTR"><div class="docTD">
			<div class="docTable">
				<div class="docTR">
					<div class="docTD">
						<div class="docTable">
							<div class="docTR">
								<div class="docTD docText">' 
									.Icon::show('user-md', ['class'=>'docIcon'], Icon::FA).
								'</div>
							</div>	
							<div class="docTR">
								<div class="docTD docName">'
									.$model->first_name." ".$model->last_name.
								'</div>
							</div>	
							<div class="docTR">
								<div class="docTD docText">'
									.Html::a(Icon::show('eye', ['style' => 'font-size: 1.1em; color:#FFFFFF;'], Icon::FA).'VIEW PROFILE', ['/search/view','id'=>$model->med_id, 'zipcode'=>$zipcode, 'maxc'=>$maxc, 'minc'=>$minc, 'spec'=>$spec, 'proc'=>$proc], ['class'=>'btn btn-warning']).
								'</div>
							</div>	
						</div>
					</div>
					<div class="docTD docText">'
    					.Html::address('ADDRESS', [$model->address_1, $model->city.','.$model->state.' '.$model->zip]).
    				'</div>
    			
    				<div class="docTD docText">'
    					.Html::a(Icon::show('calculator', ['style' => 'font-size: 1.1em; color:#FFFFFF;'], Icon::FA).'<BR>PRICES', ['/search/view','id'=>$model->med_id, 'zipcode'=>$zipcode, 'maxc'=>$maxc, 'minc'=>$minc, 'spec'=>$spec, 'proc'=>$proc], ['class'=>'btn btn-success']).
    				'</div>
				</div>
			</div
			</div></div>		
		</div>
	<hr class="style-one">
	</div>'

	?>
</div>


