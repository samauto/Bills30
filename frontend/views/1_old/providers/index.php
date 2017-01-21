<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProvidersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Providers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="providers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


<div class="site-prov">
<?php Pjax::begin(); ?>

  <?php $form = ActiveForm::begin()?>

  <div class="row" >
    
    <div class="form-group col-sm-6 col-xs-6 col-land-4">
      <?= Html::submitButton(Html::img('@web/images/joinbuttscreen.png', ['alt'=>'Join Now!', 'class'=>'img-responsive center-block img-rounded']), 
          ['name'=>'joinbutton', 'id' => 'joinbutton', 'class'=>'sub-doc-con-em'])
      ?>
      <?= Html::submitButton('JOIN NOW',['name'=>'joinbutton', 'id' => 'joinbutton','class'=>'sub-doc-con-em'])?>
    </div>   

    <div class="form-group col-sm-6 col-xs-6 col-land-4 ">
      <?= Html::submitButton(Html::img('@web/images/loginbuttscreen.png', ['alt'=>'Login', 'class'=>'img-responsive center-block img-rounded']),
          //Html::encode('<strong>CONCIERGE<br/>SERVICES</strong>'), 
          ['name'=>'loginbutton', 'id' => 'loginbutton', 'class'=>'sub-doc-con-em']) ?>
      <?= Html::submitButton('LOGIN',['name'=>'loginbutton', 'id' => 'loginbutton','class'=>'sub-doc-con-em'])?>
    </div>



  </div>  
<?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>


</div>


</div><!-- End of Wrapper -->
 </div>



</div>
