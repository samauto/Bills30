<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;
//use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model frontend\models\Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="search-form">

 <?php 

    $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_VERTICAL]); 


    echo '<p><h3>Profile</h3></p>' ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mid_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'suffix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'credential')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'med_school')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grad_yr')->textInput() ?>


    <?= echo '<p><h3>Specialization</h3></p>' ?>

    <?= $form->field($model, 'pri_spec')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sec_spec1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sec_spec2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sec_spec3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sec_spec4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sec_spec_all')->textInput(['maxlength' => true]) ?>


    <?= echo '<p><h3>Organization</h3></p>' ?>

    <?= $form->field($model, 'org_legal_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'org_dba_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grp_prac_pac_id')->textInput() ?>

    <?= $form->field($model, 'num_grp_prac_mem')->textInput() ?>

    <?= $form->field($model, 'address_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marker_add_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zip')->textInput() ?>


    <?= echo '<p><h3>Affiliation</h3></p>' ?>

    <?= $form->field($model, 'hosp_aff_ccn_1')->textInput() ?>

    <?= $form->field($model, 'hosp_aff_lbn_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hosp_aff_ccn_2')->textInput() ?>

    <?= $form->field($model, 'hosp_aff_lbn_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hosp_aff_ccn_3')->textInput() ?>

    <?= $form->field($model, 'hosp_aff_lbn_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hosp_aff_ccn_4')->textInput() ?>

    <?= $form->field($model, 'hosp_aff_lbn_4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hosp_aff_ccn_5')->textInput() ?>

    <?= $form->field($model, 'hosp_aff_lbn_5')->textInput(['maxlength' => true]) ?>


    <?= echo '<p><h3>Misc</h3></p>' ?>

    <?= $form->field($model, 'npi')->textInput() ?>

    <?= $form->field($model, 'ind_pac_id')->textInput() ?>

    <?= $form->field($model, 'ind_enrl_id')->textInput() ?>

    <?= $form->field($model, 'medicare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'erx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pqrs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ehr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pqrs_cert')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mil_hearts')->textInput(['maxlength' => true]) ?>

    <?php ActiveForm::end(); ?>

</div>
