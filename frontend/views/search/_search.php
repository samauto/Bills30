<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\HealthSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="search-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= //$form->field($model, 'med_id') ?>

    <?= //$form->field($model, 'npi') ?>

    <?= //$form->field($model, 'ind_pac_id') ?>

    <?= //$form->field($model, 'ind_enrl_id') ?>

    <?= $form->field($model, 'last_name') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'mid_name') ?>

    <?php // echo $form->field($model, 'suffix') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'credential') ?>

    <?php // echo $form->field($model, 'med_school') ?>

    <?php // echo $form->field($model, 'grad_yr') ?>

    <?php // echo $form->field($model, 'pri_spec') ?>

    <?php // echo $form->field($model, 'sec_spec1') ?>

    <?php // echo $form->field($model, 'sec_spec2') ?>

    <?php // echo $form->field($model, 'sec_spec3') ?>

    <?php // echo $form->field($model, 'sec_spec4') ?>

    <?php // echo $form->field($model, 'sec_spec_all') ?>

    <?php // echo $form->field($model, 'org_legal_name') ?>

    <?php // echo $form->field($model, 'org_dba_name') ?>

    <?php // echo $form->field($model, 'grp_prac_pac_id') ?>

    <?php // echo $form->field($model, 'num_grp_prac_mem') ?>

    <?= $form->field($model, 'address_1') ?>

    <?= $form->field($model, 'address_2') ?>

    <?php // echo $form->field($model, 'marker_add_2') ?>

    <?= $form->field($model, 'city') ?>

    <?= $form->field($model, 'state') ?>

    <?= $form->field($model, 'zip') ?>

    <?php // echo $form->field($model, 'hosp_aff_ccn_1') ?>

    <?php // echo $form->field($model, 'hosp_aff_lbn_1') ?>

    <?php // echo $form->field($model, 'hosp_aff_ccn_2') ?>

    <?php // echo $form->field($model, 'hosp_aff_lbn_2') ?>

    <?php // echo $form->field($model, 'hosp_aff_ccn_3') ?>

    <?php // echo $form->field($model, 'hosp_aff_lbn_3') ?>

    <?php // echo $form->field($model, 'hosp_aff_ccn_4') ?>

    <?php // echo $form->field($model, 'hosp_aff_lbn_4') ?>

    <?php // echo $form->field($model, 'hosp_aff_ccn_5') ?>

    <?php // echo $form->field($model, 'hosp_aff_lbn_5') ?>

    <?php // echo $form->field($model, 'medicare') ?>

    <?php // echo $form->field($model, 'erx') ?>

    <?php // echo $form->field($model, 'pqrs') ?>

    <?php // echo $form->field($model, 'ehr') ?>

    <?php // echo $form->field($model, 'pqrs_cert') ?>

    <?php // echo $form->field($model, 'mil_hearts') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
