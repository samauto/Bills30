<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\models\Patiensignup */
/* @var $form ActiveForm */
?>
<div class="container">
    <div class="row">
        <div class="patientsignup-view">
            <h2 class="text-center">User Information</h2>
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
            <?= $form->field($model, 'firstname', [
                'options'=>
                    [
                        'tag'=>'div',
                        'class'=>' col-lg-3'
                    ],

                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('firstname'),
                    'class' =>'form-control '
                ],
            ]) ?>
            <?= $form->field($model, 'mi',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-1'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('M.I'),
                    'class' =>'form-control'
                ],
            ]); ?>
            <?= $form->field($model, 'lastname',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-3'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('Last Name'),
                    'class' =>'form-control'
                ],
            ]) ?>
            <?= $form->field($model, 'dob',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-2'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('dob'),
                    'class' =>'form-control col-lg-2'

                ],
            ])->textInput(['type'=>'date'])?>
            <?= $form->field($model, 'drivers_or_stade_id',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-3'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('Drivers # or State'),
                    'class' =>'form-control'
                ],
            ]) ?>
            </div>
            <div class="col-lg-12">
            <?= $form->field($model, 'address',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-4'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('Address'),
                    'class' =>'form-control'
                ],
            ])?>
            <?= $form->field($model, 'city',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-3'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('City'),
                    'class' =>'form-control'
                ],
            ]) ?>
            <?= $form->field($model, 'state',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-3'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('State'),
                    'class' =>'form-control'
                ],
            ]) ?>
            <?= $form->field($model, 'zip_code',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-2'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('Zip Code'),
                    'class' =>'form-control'
                ],
            ]) ?>
            </div>
            <div class="col-lg-12">
            <?= $form->field($model, 'user_allergies',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-7'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('User allergies'),
                    'class' =>'form-control'
                ],
            ]);?>
                <?= $form->field($model, 'user_blood_type',['options'=>
                [   'tag'=>'div',
                    'class'=>' col-lg-3'
                ],])->dropDownList([
                'I Don\'t Know'=>"I Don't Know",
                'AB' => 'AB',
                'A' => 'A',
                'B'=>'B',
                'O'=>'O'
                ]);
            ?>
            <?=
            $form->field($model, 'user_blood_status',['options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-2'
                    ]])->radioList( [
                'Positive'=>'Positive',
                'Negative'=>'Negative'
            ]);
            ?>
                            </div>



            <div class="col-lg-12">
            <?= $form->field($model, 'emergency_contact_name',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-5'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('Emergency Contact Name'),
                    'class' =>'form-control'
                ],
            ]); ?>
            <?= $form->field($model, 'contact_number',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-4'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('Contact Number'),
                    'class' =>'form-control'
                ],
            ]) ?>
            </div>
            <div class="d"></div>
            <!-- Second Tab for patients signup -->
            <div class="col-lg-12 top-buffer">
            <?= $form->field($model, 'username',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-4'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('User Name'),
                    'class' =>'form-control'
                ],
            ]) ?>
            <?= $form->field($model, 'user_password',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-4'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('User Password'),
                    'class' =>'form-control .user_password',
                ],
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
            <?= $form->field($model, 'user_pohone',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-4'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('User Phone#1'),
                    'class' =>'form-control'
                ],
            ]) ?>
            <?= $form->field($model, 'user_pohone2',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-4'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('User Phone #2'),
                    'class' =>'form-control'
                ],
            ]) ?>
            <?= $form->field($model, 'email',[
                'options'=>
                    [   'tag'=>'div',
                        'class'=>' col-lg-4'
                    ],
                'inputOptions' => [
                    'placeholder' => $model->getAttributeLabel('User Email'),
                    'class' =>'form-control'
                ],
            ]) ?>
            </div>

            <div class="form-group col-lg-12  text-center">
                <?= Html::submitButton('Save', ['class' => 'btn btn-primary'] ) ?>
            </div>
            <?php ActiveForm::end(); ?>

        </div><!-- patiensignup-view -->
    </div>
</div>