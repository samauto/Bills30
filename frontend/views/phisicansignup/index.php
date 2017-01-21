<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\phisicansignup */
/* @var $form ActiveForm */
?>

    <div class="container">
        <div class="row">
            <div class="phisicansignup-view">
                <h2 class="text-center">User Physician sign up</h2>
                <div class="col-lg-12">
                    <?php if(Yii::$app->session->hasFlash('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= Yii::$app->session->getFlash('error') ?>
                        </div>
                    <?php endif; ?>
                    <?php if(Yii::$app->session->hasFlash('success')): ?>

                    <?php endif; ?>
                </div>
                <?php $form = ActiveForm::begin(['options' => [
                    'class'=>'col-lg-12'
                ]
                ]); ?>


                <div class="col-lg-12">
    <?= $form->field($model, 'provider_name',[
        'options'=>
            [   'tag'=>'div',
                'class'=>' col-lg-4'
            ],
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('Provider Name'),
            'class' =>'form-control col-lg-4'
]
        ]) ?>
    <?= $form->field($model, 'provider_specialities',[
        'options'=>
            [   'tag'=>'div',
                'class'=>' col-lg-4'
            ],
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('Provider Specialities'),
            'class' =>'form-control col-lg-4'
        ]
    ]) ?>
    <?= $form->field($model, 'national_provider_identifier',[
                    'options'=>
                    [   'tag'=>'div',
                    'class'=>' col-lg-4'
                    ],
                    'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('National Provider Identifier'),
                    'class' =>'form-control col-lg-4'
                    ]
                    ]) ?>
                   </div>
                <div class="col-lg-12">
    <?= $form->field($model, 'provider_phone',[
                    'options'=>
                    [   'tag'=>'div',
                    'class'=>' col-lg-6'
                    ],
                    'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('Provider Phone'),
                    'class' =>'form-control col-lg-6'
                    ]
                    ]) ?>
                    <?= $form->field($model, 'provider_address',[
                        'options'=>
                            [   'tag'=>'div',
                                'class'=>' col-lg-6'
                            ],
                        'inputOptions' => [
                            'placeholder' => $model->getAttributeLabel('Provider Address'),
                            'class' =>'form-control col-lg-6'
                        ]
                    ]) ?>
                   </div>
                <div class="col-lg-12">
                    <?= $form->field($model, 'email',[
                        'options'=>
                            [   'tag'=>'div',
                                'class'=>' col-lg-4'
                            ],
                        'inputOptions' => [
                            'placeholder' => $model->getAttributeLabel('E-mail'),
                            'class' =>'form-control col-lg-4'
                        ]
                    ]) ?>
                    <?= $form->field($model, 'password',[
                        'options'=>
                            [   'tag'=>'div',
                                'class'=>' col-lg-4'
                            ],
                        'inputOptions' => [
                            'placeholder' => $model->getAttributeLabel('Provider Password'),
                            'class' =>'form-control col-lg-4'
                        ]
                    ])->passwordInput() ?>

                    <?= $form->field($model, 'confirm_password',[
                        'options'=>
                            [   'tag'=>'div',
                                'class'=>' col-lg-4'
                            ],
                        'inputOptions' => [
                            'placeholder' => $model->getAttributeLabel('Confirm Password'),
                            'class' =>'form-control confirm_password',
                        ],
                    ])->passwordInput() ?>
                    </div>
                <div class="col-lg-12">
                <h3 class="text-center">Other users for this account</h3>

    <?= $form->field($model, 'other_name',[
                    'options'=>
                    [   'tag'=>'div',
                    'class'=>' col-lg-6'
                    ],
                    'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('Other Name'),
                    'class' =>'form-control col-lg-6'
                    ]
                    ]) ?>
    <?= $form->field($model, 'other_password',[
                    'options'=>
                    [   'tag'=>'div',
                    'class'=>' col-lg-6'
                    ],
                    'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('Other Password'),
                    'class' =>'form-control col-lg-6'
                    ]
                    ])->passwordInput() ?>

</div>
                <div class="form-group col-lg-12 top-buffer  text-center">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- phisicansignup-view -->
