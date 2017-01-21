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
		<div class="docTR"><div class="docTD"><h4>'.$model->pri_spec.'</h4></div></div>
			<div class="docTR"><div class="docTD">
			<div class="docTable">
				<div class="docTR">
					<div class="docTD">' 
						.Icon::show('user-md', ['style' => 'font-size: 3em; color:#ff8c14;'], Icon::FA).
					'</div>
				
					<div class="docTD">'
						.$model->first_name." ".$model->last_name.
					'</div>
			
			
					<div class="docTD">'
    					.Html::address('ADDRESS', [$model->address_1, $model->city.','.$model->state.' '.$model->zip]).
    				'</div>
    		
    				<div class="docTD">'
						.Html::a(Icon::show('eye', ['style' => 'font-size: 1.1em; color:#FFFFFF;'], Icon::FA).'View Profile', ['/search/view','id'=>$model->med_id, 'zipcode'=>$zipcode, 'maxc'=>$maxc, 'minc'=>$minc, 'spec'=>$spec, 'proc'=>$proc], ['class'=>'btn btn-warning']).
					'</div>
			
    				<div class="docTD">'
    					.Html::a(Icon::show('calculator', ['style' => 'font-size: 1.1em; color:#FFFFFF;'], Icon::FA).'<BR>Prices', ['/search/view','id'=>$model->med_id, 'zipcode'=>$zipcode, 'maxc'=>$maxc, 'minc'=>$minc, 'spec'=>$spec, 'proc'=>$proc], ['class'=>'btn btn-success']).
    				'</div>
				</div>
			</div
			</div></div>		
		</div>
	</div>'
	?>
</div>


<BR><BR><BR>
<BR><BR><BR>
<BR><BR><BR>
<BR><BR><BR>
<BR><BR><BR>
<BR><BR><BR>
<BR><BR><BR>

<div class="col-md-12">   
    <?php 
    echo Html::panel(
	    [
	    'heading' =>
	    	'<TABLE WIDTH="100%"><TR>
	    	<TD COLSPAN="20"><h4>'.$model->pri_spec.'</h4></TD></TR>
	    	<TR>
	    	<TD ALIGN="LEFT">
	    	<TABLE><TR><TD>'. 
			Icon::show('user-md', ['style' => 'font-size: 3em; color:#ff8c14;'], Icon::FA).
			'</TD>
			<TD WIDTH="10" NOWRAP></TD>
			<TD>'.
			$model->first_name." ".$model->last_name.
			'</TD>
			</TR></TABLE>
			</TD>
			<TD  ALIGN="RIGHT">'.
			Html::a(Icon::show('eye', ['style' => 'font-size: 1.1em; color:#FFFFFF;'], Icon::FA).'View Profile', ['/search/view','id'=>$model->med_id, 'zipcode'=>$zipcode, 'maxc'=>$maxc, 'minc'=>$minc, 'spec'=>$spec, 'proc'=>$proc], ['class'=>'btn btn-warning']).
			'</TD>
			</TR></TABLE>',

		'body'=>	 
    			
    			'<TABLE WIDTH="100%"><TR>
    			<TD ALIGN="LEFT">'.
    			Html::address(
		        	'ADDRESS',
     				[$model->address_1, $model->city.','.$model->state.' '.$model->zip])
    			.'</TD>
    			<TD ALIGN="RIGHT">'

				.Html::a(Icon::show('calculator', ['style' => 'font-size: 1.1em; color:#FFFFFF;'], Icon::FA).'<BR>Prices', ['/search/view','id'=>$model->med_id, 'zipcode'=>$zipcode, 'maxc'=>$maxc, 'minc'=>$minc, 'spec'=>$spec, 'proc'=>$proc], ['class'=>'btn btn-success']).
		'</TD>
    			</TR></TABLE>'
    			,
    	],		
	    Html::TYPE_PRIMARY
    );
    ?>
</div>
