<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
//use yii\bootstrap\ActiveForm;
use kartik\widgets\ActiveForm;
use yii\bootstrap\Button;
use yii\widgets\DetailView;
use yii\widgets\Pjax;

use yii\helpers\ArrayHelper;
use frontend\models\MedSpec;
use frontend\models\Procedures;
use frontend\models\CashPricing;
//use app\components\HelloWidget;

$this->title = 'Bill$OfHealth';
?>

<div class="site-index">

<div id="page" class="container-fluid">  
 <div class="row">
  <div class="col-xs-12">


<div class="site-docsearch">

<?php Pjax::begin(); ?>
  
  <?php 
    $form = ActiveForm::begin([
    'id' =>'-search-form-inline',
    'formConfig'=>['showlabels' =>false],
    'type'=> ActiveForm::TYPE_INLINE
    ]); 
  ?>

  <div class="row">
    <div class="col-xs-12 ">
      <?php echo $form->field($model, 'spec')

        ->dropDownList(
            $specialities,    
            ['prompt'=>'Any Speciality']  
        )->label('Speciality')
         ->textInput(['style'=>'width:10px']);

    ?>
    </div>
  
    <div class="col-xs-12 ">
    <?php echo $form->field($model, 'proc')
        ->dropDownList(
            $procedures,   
            ['prompt'=>'Any Procedures / Tests']  
        )->label('Procedures/Tests');
    ?>
    </div>
  
    <div class="col-xs-12 ">
    <?php echo $form->field($model, 'minc')
        ->dropDownList(
            $mincash,      
            ['prompt'=>'Any Range']   
        )->label('Minimum');
    ?>
    </div>

    <div class="col-xs-12 ">  
    <?php echo $form->field($model, 'maxc')
        ->dropDownList(
            $maxcash,       
            ['prompt'=>'Any Range']   
        )->label('Maximum');
    ?>
    </div>
  </div>  

  <div class="row" >
    <div class="col-xs-12 "><h3 class="text-center smfontsize">Step 1: Enter ZipCode</h3></div>
    <div><?= $form->field($model, 'zipcode'); ?></div>
  </div>

  <div class="row" >
    <div class="col-xs-12 "><h3 class="text-center smfontsize">Step 2: Click on the button to start your search</h3></div>
    
    <div class="form-group col-sm-4 col-xs-6 col-land-4">
      <?= Html::submitButton(Html::img('@web/images/docbuttscreen.png', ['alt'=>'Find Doctor/Health Professional', 'class'=>'img-responsive center-block img-rounded']), 
          ['name'=>'docbutton', 'id' => 'docbutton', 'class'=>'sub-doc-con-em'])
      ?>
      <?= Html::submitButton('HEALTHCARE<BR>PROFESSIONAL',['name'=>'docbutton', 'id' => 'docbutton','class'=>'sub-doc-con-em'])?>
    </div>   

    <div class="form-group col-sm-4 col-xs-6 col-land-4 ">
      <?= Html::submitButton(Html::img('@web/images/conbuttscreen.png', ['alt'=>'Find Conceirge Services', 'class'=>'img-responsive center-block img-rounded']),
          //Html::encode('<strong>CONCIERGE<br/>SERVICES</strong>'), 
          ['name'=>'conbutton', 'id' => 'conbutton', 'class'=>'sub-doc-con-em']) ?>
      <?= Html::submitButton('CONCEIRGE<BR>SERVICES',['name'=>'conbutton', 'id' => 'conbutton','class'=>'sub-doc-con-em'])?>
    </div>


    <div class="form-group col-sm-4 col-xs-6 col-land-4 ">
      <?= Html::submitButton(Html::img('@web/images/embuttscreen.png', ['alt'=>'Find Hospital/Clinics/ER', 'class'=>'img-responsive center-block img-rounded']), 
          ['name'=>'embutton', 'id' => 'embutton', 'class'=>'sub-doc-con-em']) ?>
      <?= Html::submitButton('HOSPITALS / CLINICS / ERs',['name'=>'embutton', 'id' => 'embutton','class'=>'sub-doc-con-em'])?>
      <BR>
    </div>
  </div>  
    <?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>



</div>


</div><!-- End of Wrapper -->
 </div>
 <!-- END OF BODY CONTENT -->


</div><!-- faq-search-faqform -->






<!-- ADVERTISE CONTENT -->
<div id="backfoot" class="container-fluid site-line"> 
<div><p class="text-center smfontsize">scroll down for more info</p></div>
 <div class="row">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <BR/><BR/><BR/>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">   
       <div class="item active">
        <div class="item col-md-3 col-xs-12">
           <img class="img-responsive center-block" src="images/Ad1sm.png" alt="advertisment" width="75%" />
        </div>
    <div class="item col-md-3 col-xs-12 hidden-xs">
           <img class="img-responsive center-block" src="images/Ad2sm.png" alt="advertisment" width="75%" />
        </div>
    <div class="item col-md-3 col-xs-12 hidden-xs">
           <img class="img-responsive center-block" src="images/Ad3sm.png" alt="advertisment" width="75%" />
        </div>
    <div class="item col-md-3 col-xs-12 hidden-xs">
           <img class="img-responsive center-block" src="images/Ad4sm.png" alt="advertisment" width="75%" />
        </div>
    </div>
    <div class="item">
        <div class="item col-md-3 col-xs-12 hidden-xs">
           <img class="img-responsive center-block" src="images/Ad5sm.png" alt="advertisment" width="75%" />
        </div>
    <div class="item col-md-3 col-xs-12 hidden-xs">
           <img class="img-responsive center-block" src="images/Ad6sm.png" alt="advertisment" width="75%" />
        </div>
    <div class="item col-md-3 col-xs-12 hidden-xs">
           <img class="img-responsive center-block" src="images/Ad7sm.png" alt="advertisment" width="75%" />
        </div>
    <div class="item col-md-3 col-xs-12">
           <img class="img-responsive center-block" src="images/Ad8sm.png" alt="advertisment" width="75%" />
        </div>
    </div>

  <div class="col-xs-12">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    </div>


  </div><!-- End of Carousel Wrapper -->
  </div><!-- End of myCarousel -->
  

<!-- SubMenu -->
<div  class="row site-line container-fluid">
      <BR/><BR/><HR/>
<?php
    $cnt = 0;
    foreach ($dataProviderSubmenu->models as $model_submenu) 
    {
    echo 
    '<div class="col-md-3 col-xs-6"><p class="text-center">'
    .Html::a(
      (Html::img(
        $dataProviderSubmenu->models[$cnt]->sub_pic, 
        ['alt'=>$dataProviderSubmenu->models[$cnt]->sub_name, 'class'=>'img-responsive center-block'])
      ),
      $url = "http://".$dataProviderSubmenu->models[$cnt]->sub_link, 
      ['target'=>'_blank'])
    .'<BR>'.Html::a($dataProviderSubmenu->models[$cnt]->sub_name, $url = $dataProviderSubmenu->models[$cnt]->sub_link)
    .'</p></div>';
    $cnt++;
    }    
?>
 

</div>


<div class = "row">
<div class = 

</div>

<!-- Footer Menu -->
<div class="row site-line container-fluid">
    <BR/><BR/><HR/>

<div class="col-sm-2"></div>

<div class="col-sm-3">
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


<div class="col-sm-3">
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

<div class="col-sm-3">
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
