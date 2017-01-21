<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
/* @var $this yii\web\View */
/* @var $model frontend\models\Search */

$this->title = $model->first_name." ".$model->mid_name." ".$model->last_name;
echo $zipcode.'1'.$minc.'1';

if ($zipcode == ""){
    $zipcode ="";
    $this->params['breadcrumbs'][] = ['label' => 'Search', 'url' => ['index', 'zipcode' => $zipcode] ];
    }
else {
    $url = '&zipcode=' . $zipcode;
    $this->params['breadcrumbs'][] = ['label' => 'Search Results for '.$zipcode, 'url' => ['docsearch', 'zipcode' => $zipcode] ];
    }

$this->params['breadcrumbs'][] = $this->title;

if ($zipcode == "") {
    ?>
    <p><?= Html::a('Back to Search', ['index', 'zipcode' => $zipcode], ['class' => 'btn btn-primary']) ?></p>    
    <?php
    }
else {
    ?>
    <p><?= Html::a('Back to Search Results', ['docsearch', 'zipcode' => $zipcode, 'maxc'=>$maxc, 'minc'=>$minc, 'spec'=>$spec, 'proc'=>$proc], ['class' => 'btn btn-primary']) ?></p>
    <?php
    }
?>

<div class="search-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'condensed'=>true,
        'hover'=>true,
        'mode'=>DetailView::MODE_VIEW,
    
        'attributes' => [
            [
             'group'=>true,
             'label'=>'SECTION 1: Identification Information',
             'rowOptions'=>['class'=>'info']
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'first_name',
                    'label'=>'First Name',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'mid_name',
                    'label'=>'Middle Name',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'last_name',
                    'label'=>'Last Name',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'suffix',
                    'label'=>'Suffix',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'gender',
                    'label'=>'Gender',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'credential',
                    'label'=>'Credentials',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'med_school',
                    'label'=>'Medical School',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'grad_yr',
                    'label'=>'Year of Graduation',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
             'group'=>true,
             'label'=>'SECTION 2: Specialization',
             'rowOptions'=>['class'=>'info']
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'pri_spec',
                    'label'=>'Primary Specialization:',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'sec_spec1',
                    'label'=>'Second Specialization #1:',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'sec_spec2',
                    'label'=>'Second Specialization #2:',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'sec_spec3',
                    'label'=>'Second Specialization #3:',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'sec_spec1',
                    'label'=>'Second Specialization #4:',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'sec_spec_all',
                    'label'=>'Second Specialization All:',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
             'group'=>true,
             'label'=>'SECTION 3: Organization',
             'rowOptions'=>['class'=>'info']
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'org_legal_name',
                    'label'=>'Legal Name:',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'org_dba_name',
                    'label'=>'DBA Name',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'grp_prac_pac_id',
                    'label'=>'Group Practice Pac ID:',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'num_grp_prac_mem',
                    'label'=>'Group :',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'address_1',
                    'label'=>'Address Line 1',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'address_2',
                    'label'=>'Address Line 2:',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'marker_add_2',
                    'label'=>'Address Line 2:',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'city',
                    'label'=>'City:',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'state',
                    'label'=>'State',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'zip',
                    'label'=>'ZipCode',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
             'group'=>true,
             'label'=>'SECTION 4: Hospital Affliation',
             'rowOptions'=>['class'=>'info']
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'hosp_aff_ccn_1',
                    'label'=>'City:',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'hosp_aff_lbn_1',
                    'label'=>'State',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'hosp_aff_ccn_2',
                    'label'=>'City:',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'hosp_aff_lbn_2',
                    'label'=>'State',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'hosp_aff_ccn_3',
                    'label'=>'City:',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'hosp_aff_lbn_3',
                    'label'=>'State',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'hosp_aff_ccn_4',
                    'label'=>'City:',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'hosp_aff_lbn_4',
                    'label'=>'State',
                    'displayOnly'=>true,
                    ],
                ],
            ],
            [
                'columns'=> [
                    [
                    'attribute'=>'hosp_aff_ccn_5',
                    'label'=>'City:',
                    'displayOnly'=>true,
                    ],
                    [
                    'attribute'=>'hosp_aff_lbn_5',
                    'label'=>'State',
                    'displayOnly'=>true,
                    ],
                ],
            ],

        ],    
    ]) ?>

</div>
