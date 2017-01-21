<?php

use yii\helpers\Url;
use kartik\widgets\ActiveForm;
use kartik\icons\Icon;
use kartik\helpers\Html;
//use yii\helpers\Html;
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

<div id = "top_menu">
  <div id = "top_back">
    <div id="top_back_tint">

  <!-- Search Feature -->
  <div id = "doc_search">
  <div id = "doc_welcome"><span id="doc_welcome_back">A REVOLUTIONAY APPROACH<BR> TO HEALTH CARE</span></diV>
  <div id = "doc_back">
  
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
    <?php Pjax::begin(); ?>
    
    <?php 
      $form = ActiveForm::begin([
      'id' =>'search-form-inline',
      'formConfig'=>['showlabels' =>false],
      'type'=> ActiveForm::TYPE_VERTICAL
      ]); 
    ?>
      <div class="form-group search-form">
        <?php 
        echo $form->field($model, 'spec')
        ->dropDownList(
            $specialities,    
            ['prompt'=>'Anyone Speciality']
        )->label('');
        ?>
      </div><!--end of form-group-->

      <div class="form-group search-button">      
        <?php 
        echo $form->field($model, 'zipcode') ->label('')
        ->textInput(['maxlength'=>10,'style'=>'width:130px', 'placeholder'=>'Enter Zipcode']);
        ?>
      </div><!--end of form-group--> 

      <div class="form-group search-button"> 
            <?= Html::submitButton(
              Icon::show('user-md', ['style' => 'font-size: 1.5em; color:#ff8c14;'], Icon::FA).
              ' SEARCH', ['name'=>'docbutton', 'id' => 'docbutton','class' => 'btn btn-primary btn-block']) ?>
      </div><!-- end of form-group -->   

      <?php
        $this->registerJs("
        $('#extended-search-lnk').on('click', function(e){e.preventDefault();
        $('#extended-search').toggle();
        if ($('#extended-search-lnk').text() == '  Open Advanced Search')
        {   $('#extended-search-lnk').text('  Close Advanced Search'); } else 
        {   $('#extended-search-lnk').text('  Open Advanced Search');}
        })
        ");
        ?>

      <div class="form-group"><a href="#" id="extended-search-lnk">  Open Advanced Search</a></div>
      
      <div id="extended-search" style="display: none;">

        <div class="form-group search-form"> 
        <?php 
        echo $form->field($model, 'proc')
        ->dropDownList(
            $procedures,   
            ['prompt'=>'Any Procedures / Tests',
             'options'=>['style'=>'font-size:30px']]
        )->label('')
        
        ?>
        </diV>
      
        <div class="form-group search-form"> 
        <?php echo $form->field($model, 'minc')
        ->dropDownList(
            $mincash,      
            ['prompt'=>'Any Min $']   
        )->label('');
        ?>
        </diV>
      
        <div class="form-group search-form"> 
        <?php echo $form->field($model, 'maxc')
        ->dropDownList(
            $maxcash,       
            ['prompt'=>'Any Max $$']   
        )->label('');
        ?>
        </div>
      
      </div><!--end of extended search -->

  <?php ActiveForm::end(); ?>
  <?php Pjax::end(); ?>

</div>
<div class="col-sm-2"></div>
</div>
</div>
</div>
</div><!-- End of DocSearch -->
</div><!-- End of Top Menu -->


<div id="spacer_row"></div>


<div id="mid_menu" class="row"> 

  <!-- SubMenu -->
  <div class="submenu_table">
    <div class="submenu_table_row">
    <?php
    $cnt = 0;
    foreach ($dataProviderSubmenu->models as $model_submenu) 
    {

      echo '<div class="submenu_table_cell col-xs-12 col-sm-3" 
      style="background-image: url('.$dataProviderSubmenu->models[$cnt]->sub_pic_link.');     
             background-repeat:no-repeat;
             background-size:100%;
             background-position:center;">

            <div id="submenu_text" class="menu_text">'
            .Html::a($dataProviderSubmenu->models[$cnt]->sub_name, 
                    $url = $dataProviderSubmenu->models[$cnt]->sub_link, 
                    ['target'=>'_blank','class'=>'menu_text']).'
            
            </div>

            <div id="submenu_icon">'
            .Html::a((Html::img($dataProviderSubmenu->models[$cnt]->sub_pic, 
                               ['alt'=>$dataProviderSubmenu->models[$cnt]->sub_name, 
                               'class'=>'img-responsive center-block'])),
                    $url = $dataProviderSubmenu->models[$cnt]->sub_link, 
                    ['target'=>'_blank']).
            '</div>

            </div>';      
      $cnt++; 
    }    
    ?>
    </div> <!-- End of SubMenu Table Row -->      
  </div> <!-- End of SubMenu Table -->


  <!-- ADVERTISEMENT -->
  <div id = "mid_advert" class="row">
  <div align="Center">

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
  </div>

</div> <!-- End of Mid Menu -->





<!-- Footer Menu -->
<div id="foot_menu" class="row">

<div id="foot_submenu" class="row">
<div id="foot_back" class="row">

<div class="col-sm-1 foot_format"></div>
<div class="col-sm-3 foot_format">
<?php
    $cnt = 0;
    echo '<p>'.$dataProviderFooter1->models[$cnt]->foot_head.'</p>';
    foreach ($dataProviderFooter1->models as $model_head) 
    {
    echo '<p>'. Html::a($dataProviderFooter1->models[$cnt]->foot_link, 
                    $url = Url::to([$dataProviderFooter1->models[$cnt]->foot_linkname])
                    , ['class'=>'foot_link']).'</p>';
        $cnt++;
    }    
?>
</div>  

<div class="col-sm-4 foot_format">
<?php
    $cnt = 0;
    echo '<p>'.$dataProviderFooter2->models[$cnt]->foot_head."</p>";
    foreach ($dataProviderFooter2->models as $model_head) 
    {
    echo '<p>'. Html::a($dataProviderFooter2->models[$cnt]->foot_link, 
                    $url = Url::to([$dataProviderFooter2->models[$cnt]->foot_linkname])
                    , ['class'=>'foot_link'])."</p>";
        $cnt++;
    }    
?>
</div>  

<div class="col-sm-3 foot_format">
<?php
    $cnt = 0;

    echo '<p>'.$dataProviderFooter3->models[$cnt]->foot_head.'</p>';
    foreach ($dataProviderFooter3->models as $model_head) 
    {
    echo '<p>'. Html::a($dataProviderFooter3->models[$cnt]->foot_link, 
                    $url = Url::to([$dataProviderFooter3->models[$cnt]->foot_linkname])
                    , ['class'=>'foot_link']).'</p>';
        $cnt++;
    }    
?>
</div> 

<div class="col-sm-1 foot_format"></div> 
</div>
</div>


<!-- ADVERTISEMENT -->
<div id = "foot_advert" class="row">
<div align="center"> 

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
</div>
<!-- END OF ADVERTISEMENT -->

</div><!-- End of Footer Menu -->  

<div id="footer">
        <p class="pull-left text-center" style="display:inline;">&copy; Bill$OfHealth <?= date('Y') ?> All Rights Reserved</p>
        <p class="pull-right text-center" style="display:inline;">Saving your wealth with Bill$OfHealth</p>
</div>
