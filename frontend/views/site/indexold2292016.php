<?php

use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use kartik\icons\Icon;
use kartik\helpers\Html;
use yii\bootstrap\Button;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use yii\helpers\ArrayHelper;
use frontend\models\MedSpec;
use frontend\models\Procedures;
use frontend\models\CashPricing;


Icon::map($this);
Icon::map($this, Icon::FA);

$this->title = 'Bill$OfHealth';
?>

<div class="top_menu">

<!-- Search Container -->  
<div id="search" class="container-fluid">  

<!-- Search Feature -->
<div class="site-docsearch">

<?php Pjax::begin(); ?>
      
  <?php 
    $form = ActiveForm::begin([
   'id' =>'-search-form-inline',
   'formConfig'=>['showlabels' =>false],
   'type'=> ActiveForm::TYPE_VERTICAL
    ]); 
  ?>
      <div class="form-group">
      <?php 
        echo $form->field($model, 'spec')
        ->dropDownList(
            $specialities,    
            ['prompt'=>'Any Speciality']  
        )->label('Choose Speciality');
      ?>
      </div>

      <div class="form-group">      
      <?php 
        echo $form->field($model, 'zipcode') ->label('Enter ZipCode')
        ->textInput(['maxlength'=>10,'style'=>'width:200px', 'placeholder'=>'Zipcode']);
      ?>
      </div> 

      <?php
      $this->registerJs("
        $('#extended-search-lnk').on('click', function(e){e.preventDefault();
        $('#extended-search').toggle();
        if ($('#extended-search-lnk').text() == 'Open Advanced Search')
        {   $('#extended-search-lnk').text('Close Advanced Search'); } else 
        {   $('#extended-search-lnk').text('Open Advanced Search');}

        })
      ");
      ?>

      <a href="#" id="extended-search-lnk">Open Advanced Search</a>
      <div id="extended-search" style="display: none;">
      <?php 
        echo $form->field($model, 'proc')
        ->dropDownList(
            $procedures,   
            ['prompt'=>'Any Procedures / Tests']  
        )->label('Procedures/Tests');
      ?>

      <?php echo $form->field($model, 'minc')
        ->dropDownList(
            $mincash,      
            ['prompt'=>'Any Min']   
        )->label('Minimum')
      ?>
    
      <?php echo $form->field($model, 'maxc')
        ->dropDownList(
            $maxcash,       
            ['prompt'=>'Any Max']   
        )->label('Maximum')
      ?>

      </div>



      <div class="form-group"> 
      <BR><BR>
            <?= Html::submitButton(
              Icon::show('user-md', ['style' => 'font-size: 1.5em; color:#ff8c14;'], Icon::FA).
              ' Search Docs', ['name'=>'docbutton', 'id' => 'docbutton','class' => 'btn btn-primary btn-block']) ?>
      </div>   




<!--        
        <div class="center form-group col-sm-4 col-xs-6 col-land-4">
        <?= Html::submitButton(
              Html::img('@web/images/docbuttscreen.png', 
                  ['alt'=>'Find Doctor/Health Professional', 
                   'class'=>'img-responsive center-block img-rounded']
              ), 
            ['name'=>'docbutton', 
             'id' => 'docbutton', 
              'class'=>'sub-doc-con-em']) 
        ?>

        <?= Html::submitButton(
              'HEALTHCARE<BR>PROFESSIONAL',
              ['name'=>'docbutton', 
               'id' => 'docbutton',
               'class'=>'sub-doc-con-em']
            )
        ?>
        </div>


      <div class="col-sm-4 col-xs-6 col-land-4 ">
        <?= Html::submitButton(Html::img('@web/images/conbuttscreen.png', ['alt'=>'Find Conceirge Services', 'class'=>'img-responsive center-block img-rounded']),
           ['name'=>'conbutton', 'id' => 'conbutton', 'class'=>'sub-doc-con-em']) ?>
        <?= Html::submitButton('CONCEIRGE<BR>SERVICES',['name'=>'conbutton', 'id' => 'conbutton','class'=>'sub-doc-con-em'])?>
      </div>

      <div class="form-group col-sm-4 col-xs-6 col-land-4 ">
        <?= Html::submitButton(Html::img('@web/images/embuttscreen.png', ['alt'=>'Find Hospital/Clinics/ER', 'class'=>'img-responsive center-block img-rounded']), 
           ['name'=>'embutton', 'id' => 'embutton', 'class'=>'sub-doc-con-em']) ?>
        <?= Html::submitButton('HOSPITALS / CLINICS / ERs',['name'=>'embutton', 'id' => 'embutton','class'=>'sub-doc-con-em'])?>
        <BR>
      </div
-->


  <?php 
    ActiveForm::end(); 
  ?>

<?php Pjax::end(); ?>

</div><!-- End of Search Feature -->
</div><!-- End of Search Container -->





<!-- ADVERTISE CONTENT -->
<div id="backfoot" class="row container-fluid site-line"> 
<div><p class="text-center smfontsize"><BR><BR>scroll down for more info<BR><BR></p></div>







  

<!-- SubMenu -->
<div  class="row site-line container-fluid">

      <BR/><BR/><HR/>
<?php
     $cnt = 0;
    foreach ($dataProviderSubmenu->models as $model_submenu) 
    {
    echo 
    '<div class="submenu_pic">
     <div class="col-md-3 col-xs-6"><p class="text-center">'
    .Html::a(
      (Html::img(
        $dataProviderSubmenu->models[$cnt]->sub_pic, 
        ['alt'=>$dataProviderSubmenu->models[$cnt]->sub_name, 'class'=>'img-responsive center-block'])
      ),
      $url = $dataProviderSubmenu->models[$cnt]->sub_link, 
      ['target'=>'_blank'])
    .'<BR>'.Html::a($dataProviderSubmenu->models[$cnt]->sub_name, $url = $dataProviderSubmenu->models[$cnt]->sub_link, ['target'=>'_blank'] )
    .'</p></div></div>';
    $cnt++;
    }    
?>
</div>








<!-- ADVERTISEMENT -->
<div align="Center">
  <BR><BR><BR>

<script type="text/javascript">
amzn_assoc_placement = "adunit0";
amzn_assoc_enable_interest_ads = "true";
amzn_assoc_tracking_id = "bill007-20";
amzn_assoc_ad_mode = "auto";
amzn_assoc_ad_type = "smart";
amzn_assoc_marketplace = "amazon";
amzn_assoc_region = "US";
amzn_assoc_textlinks = "test";
amzn_assoc_linkid = "9aec621e3503806d9b50e92f8b1891e3";
amzn_assoc_emphasize_categories = "3760901,3375251";
amzn_assoc_fallback_mode = {"type":"search","value":"Health, Running, Weight Loss, Diet, Cardio, Strength"};
amzn_assoc_default_category = "All";
amzn_assoc_rows = "1";
</script>
<script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>

</div>








<!-- Footer Menu -->
<div class="row site-line container-fluid">
    <BR/><BR/><HR/>

<div class="col-sm-2"></div>

<div class="col-sm-3" style="text-align: center;">
<?php
    $cnt = 0;
    echo "<p>".$dataProviderFooter1->models[$cnt]->foot_head."</p>";
    foreach ($dataProviderFooter1->models as $model_head) 
    {
    echo "<p>". Html::a($dataProviderFooter1->models[$cnt]->foot_link, 
                    $url = Url::to([$dataProviderFooter1->models[$cnt]->foot_linkname])
                    )."</p>";
        $cnt++;
    }    
?>
</div>  


<div class="col-sm-3" style="text-align: center;">
<?php
    $cnt = 0;
    echo "<p>".$dataProviderFooter2->models[$cnt]->foot_head."</p>";
    foreach ($dataProviderFooter2->models as $model_head) 
    {
    echo "<p>". Html::a($dataProviderFooter2->models[$cnt]->foot_link, 
                    $url = Url::to([$dataProviderFooter2->models[$cnt]->foot_linkname])
                    )."</p>";
        $cnt++;
    }    
?>
</div>  

<div class="col-sm-3" style="text-align: center;">
<?php
    $cnt = 0;
    echo "<p>".$dataProviderFooter3->models[$cnt]->foot_head."</p>";
    foreach ($dataProviderFooter3->models as $model_head) 
    {
    echo "<p>". Html::a($dataProviderFooter3->models[$cnt]->foot_link, 
                    $url = Url::to([$dataProviderFooter3->models[$cnt]->foot_linkname])
                    )."</p>";
        $cnt++;
    }    
?>
</div> 
<div class="col-sm-2"></div> 

</div><!-- End of Footer Menu -->  

</div><!-- End of Wrapper -->
<!-- END OF ADVERTISE CONTENT -->


</div>


<!-- ADVERTISEMENT -->
<div align="center"> 
  <BR><BR><BR>
<script type='text/javascript'>
 amzn_assoc_ad_type = 'banner';
 amzn_assoc_tracking_id = 'bill007-20';
 amzn_assoc_marketplace = 'amazon';
 amzn_assoc_region = 'US';
 amzn_assoc_placement = 'assoc_banner_placement_default';
 amzn_assoc_linkid = '7CO3Y35MRS5NFUY4';
 amzn_assoc_campaigns = 'gift_certificates';
 amzn_assoc_banner_type = 'category';
 amzn_assoc_isresponsive = 'true';
</script>
<script src='//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1'></script>
</div>
<!-- END OF ADVERTISEMENT -->